<?php

namespace app\components;
use common\models\Auth;
use common\models\User;
use Yii;
use yii\authclient\ClientInterface;
use yii\helpers\ArrayHelper;

/**
 * AuthHandler handles successful authentification via Yii auth component
 */
class AuthHandler
{
    /**
     * @var ClientInterface
     */
    private $client;

    public function __construct(ClientInterface $client)
    {
        $this->client = $client;
    }

    public function handle()
    {
        $attributes = $this->client->getUserAttributes();
        switch($this->client->name){
            case 'google':
            $emailAttr = 'emails.0.value';
            $nameAttr = 'displayName';
            break;

            default:
            $emailAttr = 'email';
            $nameAttr = 'name';
        }
        $email = ArrayHelper::getValue($attributes, 'emailAttr');
        $id = ArrayHelper::getValue($attributes, 'idAttr');
        $username = ArrayHelper::getValue($attributes, 'nameAttr');

        /** @var Auth $auth */
        $auth = Auth::find()->where([
            'source' => $this->client->getId(),
            'source_id' => $id,
        ])->one();

        if (empty($email)) {
            Yii::$app->getSession()->setFlash(
                'error',
                Yii::t('app', 'Unable to log in the user. No email address')
            );
            return false;
        }

        if (Yii::$app->user->isGuest) {
            if ($auth) { // login
                /** @var User $user */
                $user = $auth->user;
                if ($this->updateUserInfo($user)) {
                    Yii::$app->user->login($user, Yii::$app->params['user.rememberMeDuration']);
                } else {
                    Yii::$app->getSession()->setFlash(
                        'error',
                        Yii::t('app', 'Unable to log in the user')
                    );
                }
            } else { // signup
                $exsitingUser = User::findOne(['email' => $email]);

                if ($exsitingUser) {
                    $auth = new Auth([
                        'user_id' => $exsitingUser->id,
                        'source' => $this->client->getId(),
                        'source_id' => (string) $id,
                    ]);
                    if ($this->updateUserInfo($exsitingUser) && $auth->save()) {
                        Yii::$app->user->login($user, Yii::$app->params['user.rememberMeDuration']);
                    } else {
                        Yii::$app->getSession()->setFlash(
                            'error',
                            Yii::t('app', 'Unable to save {client} account: {errors}', [
                                'client' => $this->client->getTitle(),
                                'errors' => json_encode($auth->getErrors()),
                            ])
                        );
                    }
                } else {
                    $password = Yii::$app->security->generateRandomString(12);
                    $user = new User([
                        'username' => $username,
                        'status' => User::STATUS_ACTIVE,
                        'email' => $email,
                        'password' => $password,
                    ]);

                    $transaction = User::getDb()->beginTransaction();

                    if ($user->save()) {
                        $auth = new Auth([
                            'user_id' => $user->id,
                            'source' => $this->client->getId(),
                            'source_id' => (string) $id,
                        ]);
                        if ($auth->save()) {
                            $transaction->commit();
                            Yii::$app->user->login($user, Yii::$app->params['user.rememberMeDuration']);
                        } else {
                            $transaction->rollBack();
                            Yii::$app->getSession()->setFlash(
                                'error',
                                Yii::t('app', 'Unable to save {client} account: {errors}', [
                                    'client' => $this->client->getTitle(),
                                    'errors' => json_encode($auth->getErrors()),
                                ])
                            );
                        }
                    } else {
                        $transaction->rollBack();
                        Yii::$app->getSession()->setFlash(
                            'error',
                            Yii::t('app', 'Unable to save user: {errors}', [
                                'client' => $this->client->getTitle(),
                                'errors' => json_encode($user->getErrors()),
                            ])
                        );
                    }
                }
            }
        } else { // user already logged in
            if (!$auth) { // add auth provider
                $auth = new Auth([
                    'user_id' => Yii::$app->user->id,
                    'source' => $this->client->getId(),
                    'source_id' => (string) $attributes['id'],
                ]);
                if ($auth->save()) {
                    /** @var User $user */
                    $user = $auth->user;
                    $this->updateUserInfo($user);
                    Yii::$app->getSession()->setFlash('success', [
                        Yii::t('app', 'Linked {client} account.', [
                            'client' => $this->client->getTitle()
                        ]),
                    ]);
                } else {
                    Yii::$app->getSession()->setFlash('error', [
                        Yii::t('app', 'Unable to link {client} account: {errors}', [
                            'client' => $this->client->getTitle(),
                            'errors' => json_encode($auth->getErrors()),
                        ]),
                    ]);
                }
            } else { // there's existing auth
                Yii::$app->getSession()->setFlash('error', [
                    Yii::t(
                        'app',
                        'Unable to link {client} account. There is another user using it.',
                        ['client' => $this->client->getTitle()]
                    ),
                ]);
            }
        }
    }

    /**
     * @param User $user
     */
    private function updateUserInfo(User $user)
    {
        if ($user->status === User::STATUS_INSERTED) {
            $password = Yii::$app->security->generateRandomString(60);
            $user->status = User::STATUS_ACTIVE;
            $user->password = $password;
            return $user->save();
        }
        return $user->status !== User::STATUS_BLOCKED;
    }
}

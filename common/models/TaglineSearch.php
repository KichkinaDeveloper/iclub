<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Tagline;

/**
 * TaglineSearch represents the model behind the search form of `common\models\Tagline`.
 */
class TaglineSearch extends Tagline
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['learn_online_title', 'learn_online_value', 'expert_teachers_title', 'expert_teachers_value', 'best_classrooms_title', 'best_classrooms_value'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Tagline::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'learn_online_title', $this->learn_online_title])
            ->andFilterWhere(['like', 'learn_online_value', $this->learn_online_value])
            ->andFilterWhere(['like', 'expert_teachers_title', $this->expert_teachers_title])
            ->andFilterWhere(['like', 'expert_teachers_value', $this->expert_teachers_value])
            ->andFilterWhere(['like', 'best_classrooms_title', $this->best_classrooms_title])
            ->andFilterWhere(['like', 'best_classrooms_value', $this->best_classrooms_value]);

        return $dataProvider;
    }
}

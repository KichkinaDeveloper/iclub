<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Teachers;

/**
 * TeachersSearch represents the model behind the search form of `common\models\Teachers`.
 */
class TeachersSearch extends Teachers
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['ismi', 'fannomi', 'short_desc', 'description', 'telegrammanzili', 'facebookmanzili', 'okmanzili', 'gmailmanzili', 'image'], 'safe'],
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
        $query = Teachers::find();

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

        $query->andFilterWhere(['like', 'ismi', $this->ismi])
            ->andFilterWhere(['like', 'fannomi', $this->fannomi])
            ->andFilterWhere(['like', 'short_desc', $this->short_desc])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'telegrammanzili', $this->telegrammanzili])
            ->andFilterWhere(['like', 'facebookmanzili', $this->facebookmanzili])
            ->andFilterWhere(['like', 'okmanzili', $this->okmanzili])
            ->andFilterWhere(['like', 'gmailmanzili', $this->gmailmanzili])
            ->andFilterWhere(['like', 'image', $this->image]);

        return $dataProvider;
    }
}

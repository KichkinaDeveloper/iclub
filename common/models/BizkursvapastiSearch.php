<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Bizkursvapasti;

/**
 * BizkursvapastiSearch represents the model behind the search form of `common\models\Bizkursvapasti`.
 */
class BizkursvapastiSearch extends Bizkursvapasti
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['bizningkurs', 'bizkurs_description', 'yangikurs', 'yangikurs_description', 'oqituvchi', 'oqituvchi_description', 'aloqa', 'manzil', 'telefon', 'website', 'footeroxiri'], 'safe'],
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
        $query = Bizkursvapasti::find();

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

        $query->andFilterWhere(['like', 'bizningkurs', $this->bizningkurs])
            ->andFilterWhere(['like', 'bizkurs_description', $this->bizkurs_description])
            ->andFilterWhere(['like', 'yangikurs', $this->yangikurs])
            ->andFilterWhere(['like', 'yangikurs_description', $this->yangikurs_description])
            ->andFilterWhere(['like', 'oqituvchi', $this->oqituvchi])
            ->andFilterWhere(['like', 'oqituvchi_description', $this->oqituvchi_description])
            ->andFilterWhere(['like', 'aloqa', $this->aloqa])
            ->andFilterWhere(['like', 'manzil', $this->manzil])
            ->andFilterWhere(['like', 'telefon', $this->telefon])
            ->andFilterWhere(['like', 'website', $this->website])
            ->andFilterWhere(['like', 'footeroxiri', $this->footeroxiri]);

        return $dataProvider;
    }
}

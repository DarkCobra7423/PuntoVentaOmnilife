<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Shopping;

/**
 * ShoppingSearch represents the model behind the search form of `app\models\Shopping`.
 */
class ShoppingSearch extends Shopping
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idshopping', 'fkprofileseller'], 'integer'],
            [['datetime', 'ticket'], 'safe'],
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
        $query = Shopping::find();

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
            'idshopping' => $this->idshopping,
            'datetime' => $this->datetime,
            'fkprofileseller' => $this->fkprofileseller,
        ]);

        $query->andFilterWhere(['like', 'ticket', $this->ticket]);

        return $dataProvider;
    }
}

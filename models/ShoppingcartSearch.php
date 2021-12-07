<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Shoppingcart;

/**
 * ShoppingcartSearch represents the model behind the search form of `app\models\Shoppingcart`.
 */
class ShoppingcartSearch extends Shoppingcart
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idshoppingcart', 'fkshopping', 'fkprofile', 'fkproduct', 'quantity'], 'integer'],
            [['price'], 'number'],
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
        $query = Shoppingcart::find();

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
            'idshoppingcart' => $this->idshoppingcart,
            'fkshopping' => $this->fkshopping,
            'fkprofile' => $this->fkprofile,
            'fkproduct' => $this->fkproduct,
            'quantity' => $this->quantity,
            'price' => $this->price,
        ]);

        return $dataProvider;
    }
}

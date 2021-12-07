<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Shippingaddress;

/**
 * ShippingaddressSearch represents the model behind the search form of `app\models\Shippingaddress`.
 */
class ShippingaddressSearch extends Shippingaddress
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idshippingaddress', 'idprofile', 'outdoornumber', 'interiornumber'], 'integer'],
            [['namelastname', 'postalcode', 'state', 'municipalitymayoralty', 'suburb', 'street', 'typeaddress', 'telephonecontact', 'indications'], 'safe'],
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
        $query = Shippingaddress::find();

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
            'idshippingaddress' => $this->idshippingaddress,
            'idprofile' => $this->idprofile,
            'outdoornumber' => $this->outdoornumber,
            'interiornumber' => $this->interiornumber,
        ]);

        $query->andFilterWhere(['like', 'namelastname', $this->namelastname])
            ->andFilterWhere(['like', 'postalcode', $this->postalcode])
            ->andFilterWhere(['like', 'state', $this->state])
            ->andFilterWhere(['like', 'municipalitymayoralty', $this->municipalitymayoralty])
            ->andFilterWhere(['like', 'suburb', $this->suburb])
            ->andFilterWhere(['like', 'street', $this->street])
            ->andFilterWhere(['like', 'typeaddress', $this->typeaddress])
            ->andFilterWhere(['like', 'telephonecontact', $this->telephonecontact])
            ->andFilterWhere(['like', 'indications', $this->indications]);

        return $dataProvider;
    }
}

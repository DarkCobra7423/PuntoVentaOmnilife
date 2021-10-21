<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Card;

/**
 * CardSearch represents the model behind the search form of `app\models\Card`.
 */
class CardSearch extends Card
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idcard', 'fkbank'], 'integer'],
            [['cardnumber', 'expirationdate', 'securitycode', 'namelastname', 'type'], 'safe'],
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
        $query = Card::find();

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
            'idcard' => $this->idcard,
            'fkbank' => $this->fkbank,
        ]);

        $query->andFilterWhere(['like', 'cardnumber', $this->cardnumber])
            ->andFilterWhere(['like', 'expirationdate', $this->expirationdate])
            ->andFilterWhere(['like', 'securitycode', $this->securitycode])
            ->andFilterWhere(['like', 'namelastname', $this->namelastname])
            ->andFilterWhere(['like', 'type', $this->type]);

        return $dataProvider;
    }
}

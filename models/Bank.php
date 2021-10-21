<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bank".
 *
 * @property int $idbank
 * @property string $bank
 *
 * @property Card[] $cards
 */
class Bank extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bank';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['bank'], 'required'],
            [['bank'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idbank' => 'Idbank',
            'bank' => 'Bank',
        ];
    }

    /**
     * Gets query for [[Cards]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCards()
    {
        return $this->hasMany(Card::className(), ['fkbank' => 'idbank']);
    }
}

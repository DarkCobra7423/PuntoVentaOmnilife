<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "shopping".
 *
 * @property int $idshopping
 * @property string $datetime
 * @property int $fkshoppingaddress
 * @property string $ticket
 * @property string $shipping
 *
 * @property Shippingaddress $fkshoppingaddress0
 * @property Shoppingcart[] $shoppingcarts
 */
class Shopping extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'shopping';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['datetime', 'fkshoppingaddress', 'ticket', 'shipping'], 'required'],
            [['datetime'], 'safe'],
            [['fkshoppingaddress'], 'integer'],
            [['shipping'], 'string'],
            [['ticket'], 'string', 'max' => 200],
            [['fkshoppingaddress'], 'exist', 'skipOnError' => true, 'targetClass' => Shippingaddress::className(), 'targetAttribute' => ['fkshoppingaddress' => 'idshippingaddress']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idshopping' => 'Idshopping',
            'datetime' => 'Datetime',
            'fkshoppingaddress' => 'Fkshoppingaddress',
            'ticket' => 'Ticket',
            'shipping' => 'Shipping',
        ];
    }

    /**
     * Gets query for [[Fkshoppingaddress0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFkshoppingaddress0()
    {
        return $this->hasOne(Shippingaddress::className(), ['idshippingaddress' => 'fkshoppingaddress']);
    }

    /**
     * Gets query for [[Shoppingcarts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getShoppingcarts()
    {
        return $this->hasMany(Shoppingcart::className(), ['fkshopping' => 'idshopping']);
    }
}

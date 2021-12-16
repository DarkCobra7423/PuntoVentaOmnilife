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
    
    public function getAddress(){
        return $this->getFkshoppingaddress0();
    }


    public function formatDatetime() {
        //$date = '2021-11-19 11:09:38';
        $value = strtotime($this->datetime);
        
       //print_r($value); die();
        $difference = time() - $value;
        
        if ($difference < 1) {
            return 'Justo ahora';
        }
        
        $condition = array(
            12 * 30 * 24 * 60 * 60 => 'año',
            30 * 24 * 60 * 60 => 'mes',
            24 * 60 * 60 => 'dia',
            60 * 60 => 'hora',
            60 => 'minuto',
            1 => 'segundo'
        );
        
        foreach ($condition as $secs => $str) {
            $d = $difference / $secs;
            if($d >= 1){
                $t = round($d);
                return 'Hace '.$t.' '.$str.($t > 1 ? 's' : '');
            }
        }
    }
   
}

<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "profile".
 *
 * @property int $idprofile
 * @property string $name
 * @property string $lastname
 * @property string $phonenumber
 * @property string $email
 * @property string $account
 * @property int $fkuser
 *
 * @property Shippingaddress[] $shippingaddresses
 * @property Shoppingcart[] $shoppingcarts
 * @property Shopping[] $shoppings
 */
class Profile extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'profile';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'lastname', 'phonenumber', 'email', 'account', 'fkuser'], 'required'],
            [['account'], 'string'],
            [['fkuser'], 'integer'],
            [['name', 'lastname', 'email'], 'string', 'max' => 50],
            [['phonenumber'], 'string', 'max' => 15],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idprofile' => 'Idprofile',
            'name' => 'Name',
            'lastname' => 'Lastname',
            'phonenumber' => 'Phonenumber',
            'email' => 'Email',
            'account' => 'Account',
            'fkuser' => 'Fkuser',
        ];
    }

    /**
     * Gets query for [[Shippingaddresses]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getShippingaddresses()
    {
        return $this->hasMany(Shippingaddress::className(), ['idprofile' => 'idprofile']);
    }

    /**
     * Gets query for [[Shoppingcarts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getShoppingcarts()
    {
        return $this->hasMany(Shoppingcart::className(), ['fkprofile' => 'idprofile']);
    }

    /**
     * Gets query for [[Shoppings]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getShoppings()
    {
        return $this->hasMany(Shopping::className(), ['fkprofileseller' => 'idprofile']);
    }
    
     public function getName() {
        return $this->carFkprofile->name;
    }
    
}

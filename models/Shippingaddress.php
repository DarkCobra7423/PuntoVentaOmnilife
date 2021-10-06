<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "shippingaddress".
 *
 * @property int $idshippingaddress
 * @property int $idprofile
 * @property string $namelastname
 * @property string $postalcode
 * @property string $state
 * @property string $municipalitymayoralty
 * @property string $suburb
 * @property string $street
 * @property int|null $outdoornumber
 * @property int|null $interiornumber
 * @property string $typeaddress
 * @property string $telephonecontact
 * @property string|null $indications
 *
 * @property Profile $idprofile0
 */
class Shippingaddress extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'shippingaddress';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idprofile', 'namelastname', 'postalcode', 'state', 'municipalitymayoralty', 'suburb', 'street', 'typeaddress', 'telephonecontact'], 'required'],
            [['idprofile', 'outdoornumber', 'interiornumber'], 'integer'],
            [['typeaddress', 'indications'], 'string'],
            [['namelastname'], 'string', 'max' => 100],
            [['postalcode'], 'string', 'max' => 5],
            [['state', 'municipalitymayoralty', 'suburb', 'street'], 'string', 'max' => 45],
            [['telephonecontact'], 'string', 'max' => 15],
            [['idprofile'], 'exist', 'skipOnError' => true, 'targetClass' => Profile::className(), 'targetAttribute' => ['idprofile' => 'idprofile']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idshippingaddress' => 'Idshippingaddress',
            'idprofile' => 'Idprofile',
            'namelastname' => 'Namelastname',
            'postalcode' => 'Postalcode',
            'state' => 'State',
            'municipalitymayoralty' => 'Municipalitymayoralty',
            'suburb' => 'Suburb',
            'street' => 'Street',
            'outdoornumber' => 'Outdoornumber',
            'interiornumber' => 'Interiornumber',
            'typeaddress' => 'Typeaddress',
            'telephonecontact' => 'Telephonecontact',
            'indications' => 'Indications',
        ];
    }

    /**
     * Gets query for [[Idprofile0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdprofile0()
    {
        return $this->hasOne(Profile::className(), ['idprofile' => 'idprofile']);
    }
}

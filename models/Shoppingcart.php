<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "shoppingcart".
 *
 * @property int $idshoppingcart
 * @property int|null $fkshopping
 * @property int $fkprofile
 * @property int $fkproduct
 * @property int $quantity
 * @property float $price
 *
 * @property Product $fkproduct0
 * @property Profile $fkprofile0
 * @property Shopping $fkshopping0
 */
class Shoppingcart extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'shoppingcart';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fkshopping', 'fkprofile', 'fkproduct', 'quantity'], 'integer'],
            [['fkprofile', 'fkproduct', 'quantity', 'price'], 'required'],
            [['price'], 'number'],
            [['fkproduct'], 'exist', 'skipOnError' => true, 'targetClass' => Product::className(), 'targetAttribute' => ['fkproduct' => 'idproduct']],
            [['fkprofile'], 'exist', 'skipOnError' => true, 'targetClass' => Profile::className(), 'targetAttribute' => ['fkprofile' => 'idprofile']],
            [['fkshopping'], 'exist', 'skipOnError' => true, 'targetClass' => Shopping::className(), 'targetAttribute' => ['fkshopping' => 'idshopping']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idshoppingcart' => 'Idshoppingcart',
            'fkshopping' => 'Fkshopping',
            'fkprofile' => 'Fkprofile',
            'fkproduct' => 'Fkproduct',
            'quantity' => 'Quantity',
            'price' => 'Price',
        ];
    }

    /**
     * Gets query for [[Fkproduct0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFkproduct0()
    {
        return $this->hasOne(Product::className(), ['idproduct' => 'fkproduct']);
    }

    /**
     * Gets query for [[Fkprofile0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFkprofile0()
    {
        return $this->hasOne(Profile::className(), ['idprofile' => 'fkprofile']);
    }

    /**
     * Gets query for [[Fkshopping0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFkshopping0()
    {
        return $this->hasOne(Shopping::className(), ['idshopping' => 'fkshopping']);
    }
    
    public function getImage() {
        return Yii::$app->homeUrl . "resources/images/" . $this->fkproduct0->image;
    }
    
    public function getProduct(){
        return $this->getFkproduct0();
    }
    
    public function getProfile(){
        return $this->getFkprofile0();
    }
}

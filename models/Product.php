<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property int $idproduct
 * @property string $product
 * @property string $image
 * @property string $description
 * @property int $fkflavor
 * @property int|null $content
 * @property int $fkunittype
 * @property int $stock
 * @property float $price
 *
 * @property Flavor $fkflavor0
 * @property Unittype $fkunittype0
 * @property Shoppingcart[] $shoppingcarts
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['product', 'image', 'description', 'fkflavor', 'fkunittype', 'stock', 'price'], 'required'],
            [['description'], 'string'],
            [['fkflavor', 'content', 'fkunittype', 'stock'], 'integer'],
            [['price'], 'number'],
            [['product'], 'string', 'max' => 50],
            [['image'], 'string', 'max' => 200],
            [['fkflavor'], 'exist', 'skipOnError' => true, 'targetClass' => Flavor::className(), 'targetAttribute' => ['fkflavor' => 'idflavor']],
            [['fkunittype'], 'exist', 'skipOnError' => true, 'targetClass' => Unittype::className(), 'targetAttribute' => ['fkunittype' => 'idunittype']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idproduct' => 'Idproduct',
            'product' => 'Product',
            'image' => 'Image',
            'description' => 'Description',
            'fkflavor' => 'Fkflavor',
            'content' => 'Content',
            'fkunittype' => 'Fkunittype',
            'stock' => 'Stock',
            'price' => 'Price',
        ];
    }

    /**
     * Gets query for [[Fkflavor0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFkflavor0()
    {
        return $this->hasOne(Flavor::className(), ['idflavor' => 'fkflavor']);
    }

    /**
     * Gets query for [[Fkunittype0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFkunittype0()
    {
        return $this->hasOne(Unittype::className(), ['idunittype' => 'fkunittype']);
    }

    /**
     * Gets query for [[Shoppingcarts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getShoppingcarts()
    {
        return $this->hasMany(Shoppingcart::className(), ['fkproduct' => 'idproduct']);
    }
    
    public function getUnittype(){
        return $this->fkunittype0->unittype;
    }
    /*
    public function getImage(){
        return Yii::$app->homeUrl."resources/images/products/".$this->image; 
    }*/
}

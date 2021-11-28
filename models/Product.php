<?php

namespace app\models;

use Yii;
use yii\helpers\Html;

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
class Product extends \yii\db\ActiveRecord {

    public $images;

    /**
     * {@inheritdoc}
     */
    public static function tableName() {
        return 'product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules() {
        return [
                [['product', 'image', 'description', 'fkflavor', 'fkunittype', 'stock', 'price'], 'required'],
                [['description', 'content'], 'string'],
                [['fkflavor', 'fkunittype', 'stock'], 'integer'],
                [['price'], 'number'],
                [['product'], 'string', 'max' => 50],
                [['image'], 'string', 'max' => 200],
                [['images'], 'safe'],
                [['images'], 'file', 'extensions' => 'jpg, gif, png, webp'],
                [['images'], 'file', 'maxSize' => '900000'],
                [['fkflavor'], 'exist', 'skipOnError' => true, 'targetClass' => Flavor::className(), 'targetAttribute' => ['fkflavor' => 'idflavor']],
                [['fkunittype'], 'exist', 'skipOnError' => true, 'targetClass' => Unittype::className(), 'targetAttribute' => ['fkunittype' => 'idunittype']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels() {
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
            'images' => 'Imagen',
        ];
    }

    /**
     * Gets query for [[Fkflavor0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFkflavor0() {
        return $this->hasOne(Flavor::className(), ['idflavor' => 'fkflavor']);
    }

    /**
     * Gets query for [[Fkunittype0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFkunittype0() {
        return $this->hasOne(Unittype::className(), ['idunittype' => 'fkunittype']);
    }

    /**
     * Gets query for [[Shoppingcarts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getShoppingcarts() {
        return $this->hasMany(Shoppingcart::className(), ['fkproduct' => 'idproduct']);
    }
     //unidad de medida
    public function getUnittype() {
        return $this->fkunittype0->unittype;
    }

    public function getImagen() {
   //   return Html::img('../resources/images/products/'. $this->image);
         return Yii::$app->homeUrl."resources/images/products/".$this->image;
          
    }
    
   public function getFlavor() {
       //echo $this->getFkflavor0()->flavor; die();
        return $this->fkflavor0->flavor;
    }
   
}

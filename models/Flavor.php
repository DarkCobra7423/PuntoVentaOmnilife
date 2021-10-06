<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "flavor".
 *
 * @property int $idflavor
 * @property string $flavor
 *
 * @property Product[] $products
 */
class Flavor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'flavor';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['flavor'], 'required'],
            [['flavor'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idflavor' => 'Idflavor',
            'flavor' => 'Flavor',
        ];
    }

    /**
     * Gets query for [[Products]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProducts()
    {
        return $this->hasMany(Product::className(), ['fkflavor' => 'idflavor']);
    }
}

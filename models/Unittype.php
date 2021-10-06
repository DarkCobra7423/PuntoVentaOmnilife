<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "unittype".
 *
 * @property int $idunittype
 * @property string $unittype
 *
 * @property Product[] $products
 */
class Unittype extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'unittype';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['unittype'], 'required'],
            [['unittype'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idunittype' => 'Idunittype',
            'unittype' => 'Unittype',
        ];
    }

    /**
     * Gets query for [[Products]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProducts()
    {
        return $this->hasMany(Product::className(), ['fkunittype' => 'idunittype']);
    }
}

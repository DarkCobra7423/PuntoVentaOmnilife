<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "shopping".
 *
 * @property int $idshopping
 * @property string $datetime
 * @property int $fkprofileseller
 * @property string $ticket
 *
 * @property Profile $fkprofileseller0
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
            [['datetime', 'fkprofileseller', 'ticket'], 'required'],
            [['datetime'], 'safe'],
            [['fkprofileseller'], 'integer'],
            [['ticket'], 'string', 'max' => 200],
            [['fkprofileseller'], 'exist', 'skipOnError' => true, 'targetClass' => Profile::className(), 'targetAttribute' => ['fkprofileseller' => 'idprofile']],
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
            'fkprofileseller' => 'Fkprofileseller',
            'ticket' => 'Ticket',
        ];
    }

    /**
     * Gets query for [[Fkprofileseller0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFkprofileseller0()
    {
        return $this->hasOne(Profile::className(), ['idprofile' => 'fkprofileseller']);
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

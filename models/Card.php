<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "card".
 *
 * @property int $idcard
 * @property int $fkbank
 * @property string $cardnumber
 * @property string $expirationdate
 * @property string $securitycode
 * @property string $namelastname
 * @property string $type
 *
 * @property Bank $fkbank0
 */
class Card extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'card';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fkbank', 'fkprofile', 'cardnumber', 'expirationdate', 'securitycode', 'namelastname', 'type'], 'required'],
            [['fkbank', 'fkprofile'], 'integer'],
            [['type'], 'string'],
            [['cardnumber'], 'string', 'max' => 19],
            [['expirationdate'], 'string', 'max' => 8],
            [['securitycode'], 'string', 'max' => 4],
            [['namelastname'], 'string', 'max' => 100],
            [['fkbank'], 'exist', 'skipOnError' => true, 'targetClass' => Bank::className(), 'targetAttribute' => ['fkbank' => 'idbank']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idcard' => 'Idcard',
            'fkprofile' => 'Fkprofile',
            'fkbank' => 'Fkbank',
            'cardnumber' => 'Cardnumber',
            'expirationdate' => 'Expirationdate',
            'securitycode' => 'Securitycode',
            'namelastname' => 'Namelastname',
            'type' => 'Type',
        ];
    }

    /**
     * Gets query for [[Fkbank0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFkbank0()
    {
        return $this->hasOne(Bank::className(), ['idbank' => 'fkbank']);
    }
    
    public function getFkprofile0()
    {
        return $this->hasOne(Bank::className(), ['idprofile' => 'fkprofile']);
    }
    
    public function getBank() {
        return $this->fkbank0->bank;
    }
}

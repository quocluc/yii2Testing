<?php

namespace backend\models\database;

use Yii;

/**
 * This is the model class for table "despatch".
 *
 * @property string $DES_NUM
 * @property string|null $DES_DATE
 * @property float|null $DES_AMOUNT
 * @property float|null $ORD_NUM
 * @property string|null $ORD_DATE
 * @property float|null $ORD_AMOUNT
 * @property string|null $AGENT_CODE
 */
class Despatch extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'despatch';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['DES_NUM'], 'required'],
            [['DES_DATE', 'ORD_DATE'], 'safe'],
            [['DES_AMOUNT', 'ORD_NUM', 'ORD_AMOUNT'], 'number'],
            [['DES_NUM', 'AGENT_CODE'], 'string', 'max' => 6],
            [['DES_NUM'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'DES_NUM' => 'Des Num',
            'DES_DATE' => 'Des Date',
            'DES_AMOUNT' => 'Des Amount',
            'ORD_NUM' => 'Ord Num',
            'ORD_DATE' => 'Ord Date',
            'ORD_AMOUNT' => 'Ord Amount',
            'AGENT_CODE' => 'Agent Code',
        ];
    }
}

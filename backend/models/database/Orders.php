<?php

namespace backend\models\database;

use Yii;

/**
 * This is the model class for table "orders".
 *
 * @property float $ORD_NUM
 * @property float $ORD_AMOUNT
 * @property float $ADVANCE_AMOUNT
 * @property string $ORD_DATE
 * @property string $CUST_CODE
 * @property string $AGENT_CODE
 * @property string $ORD_DESCRIPTION
 */
class Orders extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'orders';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ORD_NUM', 'ORD_AMOUNT', 'ADVANCE_AMOUNT', 'ORD_DATE', 'CUST_CODE', 'AGENT_CODE', 'ORD_DESCRIPTION'], 'required'],
            [['ORD_NUM', 'ORD_AMOUNT', 'ADVANCE_AMOUNT'], 'number'],
            [['ORD_DATE'], 'safe'],
            [['CUST_CODE', 'AGENT_CODE'], 'string', 'max' => 6],
            [['ORD_DESCRIPTION'], 'string', 'max' => 60],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ORD_NUM' => 'Ord Num',
            'ORD_AMOUNT' => 'Ord Amount',
            'ADVANCE_AMOUNT' => 'Advance Amount',
            'ORD_DATE' => 'Ord Date',
            'CUST_CODE' => 'Cust Code',
            'AGENT_CODE' => 'Agent Code',
            'ORD_DESCRIPTION' => 'Ord Description',
        ];
    }
}

<?php

namespace backend\models\database;

use Yii;

/**
 * This is the model class for table "customer".
 *
 * @property string $CUST_CODE
 * @property string $CUST_NAME
 * @property string|null $CUST_CITY
 * @property string $WORKING_AREA
 * @property string $CUST_COUNTRY
 * @property float|null $GRADE
 * @property float $OPENING_AMT
 * @property float $RECEIVE_AMT
 * @property float $PAYMENT_AMT
 * @property float $OUTSTANDING_AMT
 * @property string $PHONE_NO
 * @property string|null $AGENT_CODE
 */
class Customer extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'customer';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['CUST_CODE', 'CUST_NAME', 'WORKING_AREA', 'CUST_COUNTRY', 'OPENING_AMT', 'RECEIVE_AMT', 'PAYMENT_AMT', 'OUTSTANDING_AMT', 'PHONE_NO'], 'required'],
            [['GRADE', 'OPENING_AMT', 'RECEIVE_AMT', 'PAYMENT_AMT', 'OUTSTANDING_AMT'], 'number'],
            [['CUST_CODE', 'AGENT_CODE'], 'string', 'max' => 6],
            [['CUST_NAME'], 'string', 'max' => 40],
            [['CUST_CITY', 'WORKING_AREA'], 'string', 'max' => 35],
            [['CUST_COUNTRY'], 'string', 'max' => 20],
            [['PHONE_NO'], 'string', 'max' => 17],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'CUST_CODE' => 'Cust Code',
            'CUST_NAME' => 'Cust Name',
            'CUST_CITY' => 'Cust City',
            'WORKING_AREA' => 'Working Area',
            'CUST_COUNTRY' => 'Cust Country',
            'GRADE' => 'Grade',
            'OPENING_AMT' => 'Opening Amt',
            'RECEIVE_AMT' => 'Receive Amt',
            'PAYMENT_AMT' => 'Payment Amt',
            'OUTSTANDING_AMT' => 'Outstanding Amt',
            'PHONE_NO' => 'Phone No',
            'AGENT_CODE' => 'Agent Code',
        ];
    }
}

<?php

namespace backend\models\database;

use Yii;

/**
 * This is the model class for table "company".
 *
 * @property string $COMPANY_ID
 * @property string|null $COMPANY_NAME
 * @property string|null $COMPANY_CITY
 */
class Company extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'company';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['COMPANY_ID'], 'required'],
            [['COMPANY_ID'], 'string', 'max' => 6],
            [['COMPANY_NAME', 'COMPANY_CITY'], 'string', 'max' => 25],
            [['COMPANY_ID'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'COMPANY_ID' => 'Company ID',
            'COMPANY_NAME' => 'Company Name',
            'COMPANY_CITY' => 'Company City',
        ];
    }
}

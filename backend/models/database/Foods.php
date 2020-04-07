<?php

namespace backend\models\database;

use Yii;

/**
 * This is the model class for table "foods".
 *
 * @property string $ITEM_ID
 * @property string|null $ITEM_NAME
 * @property string|null $ITEM_UNIT
 * @property string|null $COMPANY_ID
 */
class Foods extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'foods';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ITEM_ID'], 'required'],
            [['ITEM_ID', 'COMPANY_ID'], 'string', 'max' => 6],
            [['ITEM_NAME'], 'string', 'max' => 25],
            [['ITEM_UNIT'], 'string', 'max' => 5],
            [['ITEM_ID'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ITEM_ID' => 'Item ID',
            'ITEM_NAME' => 'Item Name',
            'ITEM_UNIT' => 'Item Unit',
            'COMPANY_ID' => 'Company ID',
        ];
    }
}

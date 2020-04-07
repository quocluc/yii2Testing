<?php

namespace backend\models\database;

use Yii;

/**
 * This is the model class for table "agents".
 *
 * @property string $AGENT_CODE
 * @property string|null $AGENT_NAME
 * @property string|null $WORKING_AREA
 * @property float|null $COMMISSION
 * @property string|null $PHONE_NO
 * @property string|null $COUNTRY
 */
class Agents extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'agents';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['AGENT_CODE'], 'required'],
            [['COMMISSION'], 'number'],
            [['AGENT_CODE'], 'string', 'max' => 6],
            [['AGENT_NAME'], 'string', 'max' => 40],
            [['WORKING_AREA'], 'string', 'max' => 35],
            [['PHONE_NO'], 'string', 'max' => 15],
            [['COUNTRY'], 'string', 'max' => 25],
            [['AGENT_CODE'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'AGENT_CODE' => 'Agent Code',
            'AGENT_NAME' => 'Agent Name',
            'WORKING_AREA' => 'Working Area',
            'COMMISSION' => 'Commission',
            'PHONE_NO' => 'Phone No',
            'COUNTRY' => 'Country',
        ];
    }
}

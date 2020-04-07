<?php

namespace backend\models\database;

use Yii;

/**
 * This is the model class for table "listofitem".
 *
 * @property string $ITEMCODE
 * @property string $ITEMNAME
 * @property string $BATCHCODE
 * @property string|null $CONAME
 */
class Listofitem extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'listofitem';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ITEMCODE', 'ITEMNAME', 'BATCHCODE'], 'required'],
            [['ITEMCODE'], 'string', 'max' => 6],
            [['ITEMNAME'], 'string', 'max' => 25],
            [['BATCHCODE', 'CONAME'], 'string', 'max' => 35],
            [['ITEMCODE'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ITEMCODE' => 'Itemcode',
            'ITEMNAME' => 'Itemname',
            'BATCHCODE' => 'Batchcode',
            'CONAME' => 'Coname',
        ];
    }
}

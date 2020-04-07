<?php

namespace backend\models\database;

use Yii;

/**
 * This is the model class for table "student".
 *
 * @property string $NAME
 * @property string $TITLE
 * @property string $CLASS
 * @property string $SECTION
 * @property float $ROLLID
 */
class Student extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'student';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['NAME', 'TITLE', 'CLASS', 'SECTION', 'ROLLID'], 'required'],
            [['ROLLID'], 'number'],
            [['NAME'], 'string', 'max' => 30],
            [['TITLE'], 'string', 'max' => 25],
            [['CLASS'], 'string', 'max' => 5],
            [['SECTION'], 'string', 'max' => 1],
            [['CLASS', 'SECTION', 'ROLLID'], 'unique', 'targetAttribute' => ['CLASS', 'SECTION', 'ROLLID']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'NAME' => 'Name',
            'TITLE' => 'Title',
            'CLASS' => 'Class',
            'SECTION' => 'Section',
            'ROLLID' => 'Rollid',
        ];
    }
}

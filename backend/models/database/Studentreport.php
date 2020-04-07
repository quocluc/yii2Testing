<?php

namespace backend\models\database;

use Yii;

/**
 * This is the model class for table "studentreport".
 *
 * @property string $CLASS
 * @property string $SECTION
 * @property float $ROLLID
 * @property string $GRADE
 * @property string|null $SEMISTER
 * @property float|null $CLASS_ATTENDED
 */
class Studentreport extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'studentreport';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['CLASS', 'SECTION', 'ROLLID', 'GRADE'], 'required'],
            [['ROLLID', 'CLASS_ATTENDED'], 'number'],
            [['CLASS', 'GRADE', 'SEMISTER'], 'string', 'max' => 5],
            [['SECTION'], 'string', 'max' => 1],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'CLASS' => 'Class',
            'SECTION' => 'Section',
            'ROLLID' => 'Rollid',
            'GRADE' => 'Grade',
            'SEMISTER' => 'Semister',
            'CLASS_ATTENDED' => 'Class Attended',
        ];
    }
}

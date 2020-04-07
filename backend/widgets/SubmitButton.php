<?php

namespace backend\widgets;

use yii\base\Widget;
use yii\bootstrap\Html;

class SubmitButton extends Widget
{
    public $message;

    public function init()
    {
        parent::init();
        if ($this->message === null) {
            $this->message = 'Hello World';
        }
    }

    public function run()
    {
        return Html::submitButton('Submit', [
            'class' => 'btn btn-success btn-submit'
        ]);
    }
}
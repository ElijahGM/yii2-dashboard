<?php

namespace esoftslimited\dashboard;

class Module extends \yii\base\Module
{
    public $controllerNamespace = 'esoftslimited\dashboard\controllers';
    public $defaultRoute="dashboard";
    public function init()
    {
        parent::init();

        // custom initialization code goes here
    }
}

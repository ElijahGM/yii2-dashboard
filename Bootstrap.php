<?php

namespace app\modules\dashboard;

use yii\authclient\Collection;
use yii\base\BootstrapInterface;
use yii\base\InvalidConfigException;
use yii\i18n\PhpMessageSource;
use yii\web\GroupUrlRule;
use yii\console\Application as ConsoleApplication;
use yii\web\User;

/**
 * Bootstrap class registers module and user application component. It also creates some url rules which will be applied
 * when UrlManager.enablePrettyUrl is enabled.
 *
 * @author Elijah Mwangi <emwangi.g@gmail.com>
 */
class Bootstrap implements BootstrapInterface
{
    /** @var array Model's map */
    private $layout;
    private $sections=[];

    /** @inheritdoc */
    public function bootstrap($app)
    {
        if ($app instanceof \yii\web\Application){
          exit('Module Started');
        }
        ss
    }
}
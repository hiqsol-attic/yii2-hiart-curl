<?php

error_reporting(-1);

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../vendor/yiisoft/yii2/Yii.php';

use hiqdev\composer\config\Builder;
use yii\console\Application;

Yii::$app = new Application(require Builder::path('tests'));

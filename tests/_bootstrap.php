<?php
/**
 * DEPRECATED - functionality moved to yii2-hiart
 *
 * @link      https://github.com/hiqdev/yii2-hiart-curl
 * @package   yii2-hiart-curl
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2017, HiQDev (http://hiqdev.com/)
 */

error_reporting(-1);

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../vendor/yiisoft/yii2/Yii.php';

use hiqdev\composer\config\Builder;
use yii\console\Application;

Yii::$app = new Application(require Builder::path('tests'));

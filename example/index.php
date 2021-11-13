<?php

use Sparkle\Application;
use Sparkle\Context;

require_once dirname(__DIR__).'/vendor/autoload.php';

$app = new Application();

$app->use(fn (Context $context) => $context->response()->body("hello, friend!"));

$app->run();
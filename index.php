<?php

declare(strict_types=1);

namespace App;

$loader = require __DIR__ . '/vendor/autoload.php';

use App\Src\Exceptions\CustomException;
use App\Src\Exceptions\ExcpetionHandler;
use App\Src\Helpers\CustomFunctions;

header('Content-Type: application/json; charset=utf-8');

set_exception_handler([new ExcpetionHandler(), 'handleException']);

throw new CustomException('testowa message', [
    'randomKey' => 'random value'
]);

CustomFunctions::outputJson('test');
<?php

namespace App\Src\Exceptions;

use App\Src\Helpers\CustomFunctions;
use Throwable;

class ExcpetionHandler
{
    
    public function handleException(Throwable $ex) {
        CustomFunctions::displayError('error message', [
            'message' => $ex->getMessage(),
            'errorData' => $ex->getData()
        ]);
    }
}

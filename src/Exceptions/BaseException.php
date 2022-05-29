<?php

namespace App\Src\Exceptions;

use Exception;
use Throwable;

abstract class BaseException extends Exception
{
    protected $_data;

    public function __construct($message = '', array $data = [], $code = 0, Throwable $previous = null)
    {
        $this->_data = $data;
        parent::__construct($message, $code, $previous);
    }

    public function getData()
    {
        return $this->_data;
    }
}

<?php

namespace App\Exceptions;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Exception;
/**
 * 404时抛出此异常
 */
class MissException extends Exception
{
    public $code = 404;
    public $msg = 'global:your required resource are not found';
    public $errorCode = 10001;


}
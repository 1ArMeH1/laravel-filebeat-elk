<?php

namespace App\Exceptions\CustomExceptions;

use RuntimeException;
use Throwable;

class CodedException extends RuntimeException
{
    private static int $unknownErrorCode = -1;
    public static function UnknownErrorCode(): int
    {
        return static::$unknownErrorCode;
    }
    public function __construct(int $code, String $message = "", Throwable $cause = null,)
    {
        $msg = $message == "" ? "error code: " . $code : $message;
        parent::__construct($msg, $code, $cause);
    }
}

<?php

namespace App\Exception;

use Symfony\Component\HttpKernel\Exception\UnprocessableEntityHttpException;

class DelegationCountryUnprocessableEntityHttpException extends UnprocessableEntityHttpException
{
    const MESSAGE = "Wrong country code provided!";

    public static function throw(): self
    {
        return new self(
            self::MESSAGE
        );
    }
}

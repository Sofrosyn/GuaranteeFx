<?php

namespace App\Exceptions\Auth;

use Flugg\Responder\Exceptions\Http\HttpException;

class InvalidLoginCredentialsException extends HttpException
{
    protected $status = 400;

    protected $errorCode = 'invalid_credentials';

    protected $message = 'The submitted email and password combination is invalid';
}

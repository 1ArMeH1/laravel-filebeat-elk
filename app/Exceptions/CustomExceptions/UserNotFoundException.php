<?php

namespace App\Exceptions\CustomExceptions;

use App\Enumerations\ErrorCodes;

class UserNotFoundException extends CodedException
{

    public function __construct($userId)
    {
        parent::__construct(ErrorCodes::UserNotFound->value, "User with id: $userId not found!");
    }

    public static function Builder($userId): UserNotFoundException
    {
        return new UserNotFoundException($userId);
    }
}

<?php
// src/Enum/UserRoleEnum.php

namespace App\Enum;

class UserRoleEnum
{
    public const ADMIN = 'admin';
    public const VOYAGEUR = 'voyageur';

    public static function getAllRoles(): array
    {
        return [
            self::ADMIN,
            self::VOYAGEUR,
        ];
    }
}

<?php

namespace App\Enums;


enum UserRole: int
{
    case SUPER = 1;
    case ADMIN = 2;
    case USER = 3;

    public function isSuperAdmin(): bool
    {
        return $this === self::SUPER;
    }

    public function isAdmin(): bool
    {
        return $this === self::ADMIN;
    }

    public function isUser(): bool
    {
        return $this === self::USER;
    }

    public function roleLabel(): string
    {
        return match ($this) {
            self::SUPER => 'super admin',
            self::ADMIN => 'admin',
            self::USER => 'user',
        };
    }
}

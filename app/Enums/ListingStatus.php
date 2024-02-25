<?php

namespace App\Enums;

enum ListingStatus: string
{
    case ACTIVE = 'active';
    case INACTIVE = 'inactive';
    case EXPIRED = 'expired';
    case PENDING = 'pending';

    public function label()
    {
        return match ($this) {
            self::ACTIVE => "Active",
            self::INACTIVE => "Inactive",
            self::EXPIRED => "Expired",
            self::PENDING => "Pending",
        };
    }

    public function badgeClass()
    {
        $commonClass = 'p-1 rounded-full text-white text-sm';

        return match ($this) {
            self::ACTIVE => "$commonClass bg-green-500",
            self::INACTIVE => "$commonClass bg-gray-200",
            self::EXPIRED => "$commonClass bg-red-300",
            self::PENDING => "$commonClass bg-orange-500",
        };
    }
}

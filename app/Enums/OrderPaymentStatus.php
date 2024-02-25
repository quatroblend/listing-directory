<?php

namespace App\Enums;

enum OrderPaymentStatus: string
{
    case COMPLETED = 'completed';
    case CANCELLED = 'cancelled';
    case PENDING = 'pending';

    public function label()
    {
        return match ($this) {
        };
    }

    public function badgeClass()
    {
        $commonClass = 'p-1 rounded-full text-white text-sm';

        return match ($this) {
        };
    }
}

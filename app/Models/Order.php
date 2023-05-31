<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public const STATUS_PENDING = 'PENDING';
    public const STATUS_PAIN = 'PAID';
    public const STATUS_DELIVERED = 'DELIVERED';

    public static array $statuses = [
        self::STATUS_PENDING => 'в корзине',
        self::STATUS_PAIN => 'оплачено',
        self::STATUS_DELIVERED => 'доставлено',
    ];
}

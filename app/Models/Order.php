<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'status',
        'user_id',
        'product_id',
    ];

    public const STATUS_PENDING = 'PENDING';
    public const STATUS_PAIN = 'PAID';
    public const STATUS_DELIVERED = 'DELIVERED';

    public static array $statuses = [
        self::STATUS_PENDING => 'в корзине',
        self::STATUS_PAIN => 'оплачено',
        self::STATUS_DELIVERED => 'доставлено',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}

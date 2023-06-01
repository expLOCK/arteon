<?php

namespace App\Versions\V1\DTO;

use Spatie\LaravelData\Data;

class OrderDto extends Data
{
    public function __construct(
        public ?string $status,
        public int $user_id,
        public int $product_id,
    ) {
    }
}

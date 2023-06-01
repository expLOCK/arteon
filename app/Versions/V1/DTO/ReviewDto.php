<?php

namespace App\Versions\V1\DTO;

use Spatie\LaravelData\Data;

class ReviewDto extends Data
{
    public function __construct(
        public string $username,
        public string $text,
        public int $rate,
        public int $product_id,
    ) {
    }
}

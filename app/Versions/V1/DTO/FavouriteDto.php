<?php

namespace App\Versions\V1\DTO;

use Spatie\LaravelData\Data;

class FavouriteDto extends Data
{
    public function __construct(
        public int $user_id,
        public int $product_id,
    ) {
    }
}

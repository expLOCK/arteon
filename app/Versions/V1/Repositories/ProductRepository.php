<?php

namespace App\Versions\V1\Repositories;

use App\Contracts\RepositoryContract;
use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

class ProductRepository implements RepositoryContract
{
    public function __construct(
        private Product $product
    ) {
    }

    public function paginate(?int $perPage = null): LengthAwarePaginator
    {
        return $this->product->paginate($perPage);
    }

    public function reviews(): Collection
    {
        return $this->product->reviews;
    }
}

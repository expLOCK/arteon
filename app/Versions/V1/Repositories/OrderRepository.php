<?php

namespace App\Versions\V1\Repositories;

use App\Contracts\RepositoryContract;
use App\Models\Order;

class OrderRepository implements RepositoryContract
{
    public function __construct(
        private Order $order
    ) {
    }

    public function fill(array $data): static
    {
        $this->order->fill($data);

        return $this;
    }

    public function save(): static
    {
        $this->order->save();

        return $this;
    }
}

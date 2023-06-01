<?php

namespace App\Versions\V1\Services;

use App\Models\Order;
use App\Versions\V1\DTO\OrderDto;
use App\Versions\V1\Repositories\OrderRepository;

class OrderService
{
    private OrderRepository $repository;

    public function __construct(
        private Order $order
    ) {
        $this->repository = app(OrderRepository::class, compact('order'));
    }

    public function store(OrderDto $dto): static
    {
        $data = $dto->toArray();
        $data['status'] = $data['status'] ?? Order::STATUS_PENDING;

        $this->repository
            ->fill($data)
            ->save();

        return $this;
    }
}

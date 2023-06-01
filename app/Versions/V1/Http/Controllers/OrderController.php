<?php

namespace App\Versions\V1\Http\Controllers;

use App\Versions\V1\DTO\OrderDto;
use App\Versions\V1\Services\OrderService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class OrderController extends Controller
{
    public function __construct(
        public OrderService $service,
    ) {
    }

    public function store(Request $request): Response
    {
        $this->service->store(OrderDto::from($request->all()));

        return response(['message' => 'order created'], Response::HTTP_CREATED);
    }
}

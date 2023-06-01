<?php

namespace App\Versions\V1\Http\Controllers;

use App\Versions\V1\DTO\ReviewDto;
use App\Versions\V1\Http\Requests\ReviewStoreRequest;
use App\Versions\V1\Services\ReviewService;
use Illuminate\Http\Response;

class ReviewController extends Controller
{
    public function __construct(
        public ReviewService $service
    ) {
    }

    public function store(ReviewStoreRequest $request): Response
    {
        $this->service->store(ReviewDto::from($request->all()));

        return response(['message' => 'review created'], Response::HTTP_CREATED);
    }
}

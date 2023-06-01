<?php

namespace App\Versions\V1\Http\Controllers;

use App\Versions\V1\DTO\FavouriteDto;
use App\Versions\V1\Http\Requests\FavouriteStoreRequest;
use App\Versions\V1\Services\FavouriteService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class FavouriteController extends Controller
{
    public function __construct(
        public FavouriteService $service,
    ) {
    }

    public function store(FavouriteStoreRequest $request): Response
    {
        $this->service->store(FavouriteDto::from($request->all()));

        return response(['message' => 'favourite added'], Response::HTTP_CREATED);
    }
}

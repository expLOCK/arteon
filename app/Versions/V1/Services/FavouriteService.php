<?php

namespace App\Versions\V1\Services;

use App\Models\Favourite;
use App\Versions\V1\DTO\FavouriteDto;
use App\Versions\V1\Repositories\FavouriteRepository;

class FavouriteService
{
    private FavouriteRepository $repository;

    public function __construct(
        private Favourite $favourite
    ) {
        $this->repository = app(FavouriteRepository::class, compact('favourite'));
    }

    public function store(FavouriteDto $dto): static
    {
        $this->repository
            ->fill($dto->toArray())
            ->save();

        return $this;
    }
}

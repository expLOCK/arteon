<?php

namespace App\Versions\V1\Repositories;

use App\Contracts\RepositoryContract;
use App\Models\Favourite;

class FavouriteRepository implements RepositoryContract
{
    public function __construct(
        private Favourite $favourite
    ) {
    }

    public function fill(array $data): static
    {
        $this->favourite->fill($data);

        return $this;
    }

    public function save(): static
    {
        $this->favourite->save();

        return $this;
    }
}

<?php

namespace App\Versions\V1\Repositories;

use App\Contracts\RepositoryContract;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;

class UserRepository implements RepositoryContract
{
    public function __construct(
        private User $user
    ) {
    }

    public function favourites(): Collection
    {
        return $this->user->favourites;
    }

    public function orders(): Collection
    {
        return $this->user->orders;
    }
}

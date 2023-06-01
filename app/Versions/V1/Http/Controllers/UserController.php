<?php

namespace App\Versions\V1\Http\Controllers;

use App\Models\User;
use App\Versions\V1\Http\Resources\Collections\FavouriteCollection;
use App\Versions\V1\Http\Resources\Collections\OrderCollection;
use App\Versions\V1\Repositories\UserRepository;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct(
        public UserRepository $repository,
    ) {
    }

    public function favourites(Request $request, User $user): FavouriteCollection
    {
        $this->repository = app(UserRepository::class, compact('user'));

        return new FavouriteCollection($this->repository->favourites());
    }

    public function orders(Request $request, User $user): OrderCollection
    {
        $this->repository = app(UserRepository::class, compact('user'));

        return new OrderCollection($this->repository->orders());
    }
}

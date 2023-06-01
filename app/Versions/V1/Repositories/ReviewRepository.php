<?php

namespace App\Versions\V1\Repositories;

use App\Contracts\RepositoryContract;
use App\Models\Review;

class ReviewRepository implements RepositoryContract
{
    public function __construct(
        private Review $review
    ) {
    }

    public function fill(array $data): static
    {
        $this->review->fill($data);

        return $this;
    }

    public function save(): static
    {
        $this->review->save();

        return $this;
    }
}

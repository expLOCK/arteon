<?php

namespace App\Versions\V1\Http\Resources;

use App\Versions\V1\Http\Resources\Collections\ProductImageCollection;
use App\Versions\V1\Http\Resources\Collections\ReviewCollection;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            ...parent::toArray($request),
            'images'  => new ProductImageCollection($this->images),
            'reviews' => new ReviewCollection($this->reviews),
        ];
    }
}

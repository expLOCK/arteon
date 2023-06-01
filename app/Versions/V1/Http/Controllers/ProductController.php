<?php

namespace App\Versions\V1\Http\Controllers;

use App\Models\Product;
use App\Versions\V1\Http\Resources\Collections\ProductCollection;
use App\Versions\V1\Http\Resources\ProductResource;
use App\Versions\V1\Repositories\ProductRepository;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct(
        public ProductRepository $repository,
    ) {
    }

    public function index(Request $request): ProductCollection
    {
        return new ProductCollection($this->repository->paginate());
    }

    public function show(Request $request, Product $product)
    {
        return new ProductResource($product);
    }
}

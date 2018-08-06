<?php

namespace App\Repositories\Eloquent;

use App\Repositories\Eloquent\EloquentRepositoryAbstract;
use App\Repositories\Contracts\ProductRepository;
use App\Models\Product;

class EloquentProductRepository extends EloquentRepositoryAbstract implements ProductRepository
{
    public function entity()
    {
        return Product::class;
    }
}
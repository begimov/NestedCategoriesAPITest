<?php

namespace App\Controllers;

use App\Repositories\Contracts\ProductRepository;

class ProductController
{
    protected $products;

    public function __construct(ProductRepository $products)
    {
        $this->products = $products;
        var_dump($products);
    }

    public function show($request, $response, array $args)
    {
        $data = \Spatie\Fractalistic\Fractal::create()
            ->collection(\App\Models\Product::all())
            ->transformWith(new \App\Transformers\ProductTransformer)
            ->toArray();

        return $response->withPayload($data);
    }
}
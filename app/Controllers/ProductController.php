<?php

namespace App\Controllers;

class ProductController
{
    public function show($request, $response, array $args)
    {
        $data = \Spatie\Fractalistic\Fractal::create()
            ->collection(\App\Models\Product::all())
            ->transformWith(new \App\Transformers\ProductTransformer)
            ->toArray();

        return $response->withPayload($data);
    }
}
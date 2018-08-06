<?php

namespace App\Controllers;

class ProductController
{
    public function show($request, $response, array $args)
    {
        return $response->withPayload([
            'data' => [
                'data' => $args
            ]
        ]);
    }
}
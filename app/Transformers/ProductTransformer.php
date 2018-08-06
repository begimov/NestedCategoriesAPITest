<?php

namespace App\Transformers;

use App\Models\Product;

class ProductTransformer extends \League\Fractal\TransformerAbstract
{
    public function transform(Product $product)
    {
        return [
            'id' => $product->id,
            'name' => $product->name,
        ];
    }
}

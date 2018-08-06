<?php

namespace App\Providers;

use App\Repositories\Contracts\{
    ProductRepository
};

use App\Repositories\Eloquent\{
    EloquentProductRepository
};
use League\Container\ServiceProvider\AbstractServiceProvider;

class RepositoryServiceProvider extends AbstractServiceProvider
{
    protected $provides = [
        ProductRepository::class
    ];

    public function register()
    {
        $container = $this->getContainer();
        
        $container->share(ProductRepository::class, function() {
            return new EloquentProductRepository();
        });
    }
}

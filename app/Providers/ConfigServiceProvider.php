<?php

namespace App\Providers;

use App\Config\Config;
use App\Config\Loaders\ArrayLoader;
use League\Container\ServiceProvider\AbstractServiceProvider;

class ConfigServiceProvider extends AbstractServiceProvider
{
    protected $provides = [
        'config'
    ];

    public function register()
    {
        $container = $this->getContainer();

        $container->share('config', function () {

            $config = new Config();

            $config->load([
                new ArrayLoader([
                    'app' => __DIR__ . '../../../config/app.php',
                    'db' => __DIR__ . '../../../config/db.php',
                ])
            ]);

            return $config;
        });
    }
}
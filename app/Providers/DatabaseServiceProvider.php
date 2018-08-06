<?php

namespace App\Providers;

use Illuminate\Database\Capsule\Manager as Capsule;
use League\Container\ServiceProvider\AbstractServiceProvider;
use League\Container\ServiceProvider\BootableServiceProviderInterface;

class DatabaseServiceProvider extends AbstractServiceProvider implements BootableServiceProviderInterface
{
    public function register()
    {
        //
    }

    public function boot()
    {
        $config = $this->getContainer()->get('config');

        $capsule = new Capsule;

        $capsule->addConnection($config->get('db.mysql'));

        $capsule->setAsGlobal();
        $capsule->bootEloquent();
    }
}
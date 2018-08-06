<?php

require __DIR__ . '/../bootstrap.php';

$capsule->schema()->create('products', function ($table) {

    $table->increments('id');

    $table->string('name');

});
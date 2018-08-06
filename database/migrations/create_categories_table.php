<?php

require __DIR__ . '/../bootstrap.php';

$capsule->schema()->create('categories', function ($table) {

    $table->increments('id');

});
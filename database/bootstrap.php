<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;

$config = require __DIR__ . '/../config/db.php';

$capsule->addConnection($config['mysql']);

$capsule->setAsGlobal();
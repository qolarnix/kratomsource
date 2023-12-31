<?php declare(strict_types=1);

if(php_sapi_name() !== 'cli') $env->load();

use Illuminate\Database\Capsule\Manager;

$capsule = new Manager;

$capsule->addConnection([
    'driver' => 'sqlite',
    'database' => __DIR__ . '/default.db'
]);

$capsule->setAsGlobal();
$capsule->bootEloquent();

require_once __DIR__ . '/actions/users.php';
require_once __DIR__ . '/actions/topics.php';
require_once __DIR__ . '/actions/vendors.php';
require_once __DIR__ . '/actions/posts.php';
require_once __DIR__ . '/actions/strains.php';
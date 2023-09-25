<?php declare(strict_types=1);

require __DIR__ . '/../../vendor/autoload.php';
require __DIR__ . '/../bootstrap.php';

use Illuminate\Database\Capsule\Manager;

// drop
// Manager::schema()->drop('users');

// create
Manager::schema()->create('users', function($t) {
    $t->increments('id');
    $t->string('email')->unique();
    $t->string('username')->unique();
    $t->boolean('is_admin')->default(false);
    $t->timestamp('created_at')->useCurrent();
    $t->timestamp('updated_at')->useCurrent();
});

$faker = Faker\Factory::create();

$users = [];
for($i = 0; $i < 10; $i++) {
    $user = [
        'email' => $faker->email(),
        'username' => $faker->userName()
    ];
    $users[] = $user;
}

Manager::table('users')->insert($users);
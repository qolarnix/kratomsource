<?php declare(strict_types=1);

require __DIR__ . '/../../vendor/autoload.php';
require __DIR__ . '/../bootstrap.php';

use Illuminate\Database\Capsule\Manager;

// drop
// Manager::schema()->drop('vendors');

// create
Manager::schema()->create('vendors', function($t) {
    $t->increments('id');
    $t->string('name')->unique();
    $t->string('slug')->unique();
    $t->text('bio')->unique();
    $t->integer('rating');
    $t->string('public_email')->unique();
    $t->string('public_phone')->unique();
    $t->string('address')->unique();
    $t->string('city');
    $t->string('state');
    $t->string('url')->unique();
    $t->boolean('is_online');
    $t->boolean('is_brick');
    $t->boolean('delivery');
    $t->boolean('claimed');
    $t->timestamp('created_at')->useCurrent();
    $t->timestamp('updated_at')->useCurrent();
});

$faker = Faker\Factory::create();

$vendors = [];
for($i = 0; $i < 10; $i++) {
    $vendor = [
        'name' => $faker_name = $faker->words(3, true),
        'slug' => str_replace(' ', '-', $faker_name),
        'bio' => $faker->sentence(),
        'rating' => $faker->numberBetween(1, 5),
        'public_email' => $faker->email(),
        'public_phone' => $faker->phoneNumber(),
        'address' => $faker->address(),
        'city' => $faker->city(),
        'state' => $faker->stateAbbr(),
        'url' => $faker->url(),
        'is_online' => $faker->boolean(),
        'is_brick' => $faker->boolean(),
        'delivery' => $faker->boolean(),
        'claimed' => $faker->boolean()
    ];
    $vendors[] = $vendor;
}

Manager::table('vendors')->insert($vendors);
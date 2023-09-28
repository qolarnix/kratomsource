<?php declare(strict_types=1);

require __DIR__ . '/../../vendor/autoload.php';
require __DIR__ . '/../bootstrap.php';

use Illuminate\Database\Capsule\Manager;

// drop
Manager::schema()->drop('strains');

// create
Manager::schema()->create('strains', function($t) {
    $t->increments('id');
    $t->string('name')->unique();
    $t->string('slug')->unique();
    $t->string('type');
    $t->text('description')->unique();
    $t->timestamp('created_at')->useCurrent();
    $t->timestamp('updated_at')->useCurrent();
});

$faker = Faker\Factory::create();

$strains = [];
for($i = 0; $i < 10; $i++) {
    $types = ['green', 'red', 'yellow', 'white'];
    $type = array_rand($types, 1);
    
    $strain = [
        'name' => $faker_title = $faker->words(3, true),
        'slug' => str_replace(' ', '-', $faker_title),
        'type' => $types[$type],
        'description' => $faker->text(200)
    ];
    $strains[] = $strain;
}

Manager::table('strains')->insert($strains);
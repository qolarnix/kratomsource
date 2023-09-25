<?php declare(strict_types=1);

require __DIR__ . '/../../vendor/autoload.php';
require __DIR__ . '/../bootstrap.php';

use Illuminate\Database\Capsule\Manager;

// drop
// Manager::schema()->drop('topics');

// create
Manager::schema()->create('topics', function($t) {
    $t->increments('id');
    $t->string('title')->unique();
    $t->string('slug')->unique();
    $t->text('content')->unique();
    $t->timestamp('created_at')->useCurrent();
    $t->timestamp('updated_at')->useCurrent();
});

$faker = Faker\Factory::create();

$topics = [];
for($i = 0; $i < 10; $i++) {
    $topic = [
        'title' => $faker_title = $faker->words(3, true),
        'slug' => str_replace(' ', '-', $faker_title),
        'content' => $faker->text(200)
    ];
    $topics[] = $topic;
}

Manager::table('topics')->insert($topics);
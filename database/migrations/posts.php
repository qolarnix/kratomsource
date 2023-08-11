<?php declare(strict_types=1);

require __DIR__ . '/../../vendor/autoload.php';
require __DIR__ . '/../bootstrap.php';

use Illuminate\Database\Capsule\Manager;

// drop
// Manager::schema()->drop('posts');

// create
Manager::schema()->create('posts', function($t) {
    $t->increments('id');
    $t->string('title')->unique();
    $t->string('slug')->unique();
    $t->text('content')->unique();
    $t->timestamp('created_at')->useCurrent();
    $t->timestamp('updated_at')->useCurrent();
});

$faker = Faker\Factory::create();

$posts = [];
for($i = 0; $i < 10; $i++) {
    $post = [
        'title' => $faker_title = $faker->words(3, true),
        'slug' => str_replace(' ', '-', $faker_title),
        'content' => $faker->text(200)
    ];
    $posts[] = $post;
}

Manager::table('posts')->insert($posts);
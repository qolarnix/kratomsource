<?php declare(strict_types=1);

use Illuminate\Database\Capsule\Manager;

/**
 * Transform Post Data
 */
function post_transformer(object $args): array {
    $post_data = [
        'id' => $args->id,
        'title' => $args->title,
        'slug' => $args->slug,
        'content' => $args->content,
        'excerpt' => get_excerpt($args->content, 80),
    ];
    return $post_data;
}

/**
 * Create/Update Post
 */
function post_create(array $post_data) {
    $post_id = $post_data['id'];

    Manager::table('posts')->updateOrInsert(
        ['id' => $post_id],
        $post_data
    );
}

/**
 * Post by slug
 */
function post_by_slug(string $slug) {
    $post = Manager::table('posts')->where('slug', $slug)->first();
    return post_transformer($post);
}

/**
 * Get Posts
 */
function get_posts(int $amount = -1): array {
    $posts = Manager::table('posts')->take($amount)->get();

    $requested = [];
    foreach($posts as $post) {
        $request = post_transformer($post);
        $requested[] = $request;
    }

    return $requested;
}
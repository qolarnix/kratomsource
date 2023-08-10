<?php declare(strict_types=1);

use Illuminate\Database\Capsule\Manager;

/**
 * Transform Topic Data
 */
function topic_transformer(object $args): array {
    $topic_data = [
        'id' => $args->id,
        'title' => $args->title,
        'slug' => $args->slug,
        'content' => $args->content,
        'excerpt' => get_excerpt($args->content, 40),
    ];
    return $topic_data;
}

/**
 * Create/Update Topic
 */
function topic_create(array $topic_data) {
    $topic_id = $topic_data['id'];

    Manager::table('topics')->updateOrInsert(
        ['id' => $topic_id],
        $topic_data
    );
}

/**
 * Topic by slug
 */
function topic_by_slug(string $slug) {
    $topic = Manager::table('topics')->where('slug', $slug)->first();
    return topic_transformer($topic);
}

/**
 * Get Topics
 */
function get_topics(int $amount = -1): array {
    $topics = Manager::table('topics')->take($amount)->get();

    $requested = [];
    foreach($topics as $topic) {
        $request = topic_transformer($topic);
        $requested[] = $request;
    }

    return $requested;
}
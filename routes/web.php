<?php declare(strict_types=1);

$router->get('/', function() {
    get_template('landing');
});

$router->get('/strains', function() {
    get_template('strains');
});

$router->get('/wiki', function() {
    get_template('wiki');
});

$router->get('/wiki/{topic_slug}', function($topic_slug) {
    $topic = topic_by_slug($topic_slug);

    echo '<pre>';
    print_r($topic);
    echo '</pre>';
});

$router->get('/vendors', function() {
    get_template('archive-vendor');
});

$router->get('/vendors/{vendor_slug}', function($vendor_slug) {
    $vendor = vendor_by_slug($vendor_slug);

    get_template('vendor', [
        'vendor' => $vendor
    ]);
});

$router->get('/blog', function() {
    get_template('blog');
});

$router->get('/blog/{post_slug}', function($post_slug) {
    $post = post_by_slug($post_slug);

    echo '<pre>';
    print_r($post);
    echo '</pre>';
});
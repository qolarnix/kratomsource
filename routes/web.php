<?php declare(strict_types=1);

$env->load();

define('ROUTE_URL_INDEX', rtrim($_ENV['AUTH0_BASE_URL'], '/'));
define('ROUTE_URL_LOGIN', ROUTE_URL_INDEX . '/login');
define('ROUTE_URL_CALLBACK', ROUTE_URL_INDEX . '/callback');
define('ROUTE_URL_LOGOUT', ROUTE_URL_INDEX . '/logout');

$router->get('/', function() use($template) {
    echo $template->render('landing.php');
});

$router->mount('/strains', function() use($router, $template) {

    $router->get('/', function() use($template) {
        echo $template->render('strains.php');
    });

    $router->get('/{vein}', function($vein) {
        echo $vein;
    });

});

$router->get('/wiki', function() use($template) {
    echo $template->render('wiki.php');
});

$router->get('/wiki/{topic_slug}', function($topic_slug) {
    $topic = topic_by_slug($topic_slug);

    echo '<pre>';
    print_r($topic);
    echo '</pre>';
});

$router->get('/vendors', function() use($template) {
    echo $template->render('archive-vendor.php');
});

$router->get('/vendors/{vendor_slug}', function($vendor_slug) use($template) {
    $vendor = vendor_by_slug($vendor_slug);

    echo $template->render('vendor.php', [
        'vendor' => $vendor
    ]);
});

$router->get('/blog', function() use($template) {
    echo $template->render('blog.php');
});

$router->get('/blog/{post_slug}', function($post_slug) {
    $post = post_by_slug($post_slug);

    echo '<pre>';
    print_r($post);
    echo '</pre>';
});
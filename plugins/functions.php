<?php declare(strict_types=1);

/**
 * JSON Response
 */
function res_json(array $input): string {
    header('Content-Type: application/json');

    $response = json_encode($input);
    return $response;
}

/**
 * Excerpt
 */
function get_excerpt(string $input, int $length, string $decor = '...'): string {
    $short = substr($input, 0, $length);
    $short = trim($short);

    $excerpt = $short . $decor;
    return $excerpt;
}

/**
 * Escape
 */
function escape(string $input): string {
    $clean = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
    return $clean;
}

/**
 * Location
 */
function client_loc() {
    $query = @unserialize(file_get_contents('http://ip-api.com/php/'));
    if($query && $query['status'] == 'success') {
        return [
            'region' => $query['region'],
            'regionName' => $query['regionName'],
            'city' => $query['city']
        ];
    }
}
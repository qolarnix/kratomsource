<?php declare(strict_types=1);

use Illuminate\Database\Capsule\Manager;

/**
 * Transform Strain Data
 */
function strain_transformer(object $args): array {
    $strain_data = [
        'id' => $args->id,
        'name' => $args->name,
        'slug' => $args->slug,
        'type' => $args->type,
        'description' => $args->description,
    ];
    return $strain_data;
}

/**
 * Strain by slug
 */
function strain_by_slug(string $slug) {
    $strain = Manager::table('strains')->where('slug', $slug)->first();
    return strain_transformer($strain);
}

/**
 * Get Strans
 */
function get_strains(int $amount = -1): array {
    $strains = Manager::table('strains')->take($amount)->get();

    $requested = [];
    foreach($strains as $strain) {
        $request = strain_transformer($strain);
        $requested[] = $request;
    }

    return $requested;
}
<?php declare(strict_types=1);

use Illuminate\Database\Capsule\Manager;

/**
 * Transform Vendor Data
 */
function vendor_transformer(object $args): array {
    $vendor_data = [
        'id' => $args->id,
        'name' => $args->name,
        'slug' => $args->slug,
        'bio' => $args->bio,
        'public_email' => $args->public_email,
        'public_phone' => $args->public_phone,
        'address' => $args->address,
        'url' => $args->url,
        'is_online' => $args->is_online,
        'is_brick' => $args->is_brick,
        'claimed' => $args->claimed
    ];
    return $vendor_data;
}

/**
 * Vendor by slug
 */
function vendor_by_slug(string $slug) {
    $vendor = Manager::table('vendors')->where('slug', $slug)->first();
    return vendor_transformer($vendor);
}

/**
 * Get Vendors
 */
function get_vendors(int $amount = -1): array {
    $vendors = Manager::table('vendors')->take($amount)->get();

    $requested = [];
    foreach($vendors as $vendor) {
        $request = vendor_transformer($vendor);
        $requested[] = $request;
    }

    return $requested;
}
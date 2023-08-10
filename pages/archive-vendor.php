<?php declare(strict_types=1);

get_template('header', [
    'title' => 'KratomSource - The Worlds Kratom Information Resource - Vendors'
]);

$vendors = get_vendors();
?>

<section class="py-6 px-6">
    <div class="container mx-auto">
        <div class="flex flex-wrap gap-6 items-center justify-between">
            <div class="flex items-center gap-3 text-stone-600 capitalize">
                <a href="/">Home</a>
                <span>/</span>
                <p>Vendors</p>
            </div>
            <div></div>
        </div>
    </div>
</section>

<section class="py-16 px-6 border-b border-stone-200">
    <div class="container mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-x-6 gap-y-12">
            <?php
                get_template('vendor-preview', [
                    'count' => -1
                ]);
            ?>
        </div>
    </div>
</section>

<?php
get_template('footer');
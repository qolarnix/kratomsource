<?php declare(strict_types=1);

get_template('header', [
    'title' => 'kratomlist.org - Kratom Strain & Vein Color - Explore Kratom Strains'
]);

?>

<section class="py-6 px-6">
    <div class="container mx-auto">
        <div class="flex flex-wrap gap-6 items-center justify-between">
            <div class="flex items-center gap-3 text-stone-600 capitalize">
                <a href="/">Home</a>
                <span>/</span>
                <p>Strains</p>
            </div>
            <div></div>
        </div>
    </div>
</section>

<section class="pt-6 px-6">
    <div class="container mx-auto">
        <h1 class="text-4xl font-display text-left">Explore Kratom Strains</h1>
    </div>
</section>

<section class="py-16 px-6">
    <div class="container mx-auto">
        <h2 class="text-left font-bold text-xl mb-12 capitalize">
            Kratom strains by vein color
        </h2>

        <div class="grid grid-cols-2 lg:grid-cols-4 gap-12">
            <a href="/" class="inline-block">
                <div class="flex flex-col gap-2">
                    <div class="banner-green aspect-w-16 aspect-h-6 rounded mb-2"></div>
                    <p class="text-lg font-bold text-stone-800 capitalize">Green Vein</p>
                    <p class="text-base text-stone-700">Kratom Strains</p>
                </div>
            </a>

            <a href="/" class="inline-block">
                <div class="flex flex-col gap-2">
                    <div class="banner-red aspect-w-16 aspect-h-6 rounded mb-2"></div>
                    <p class="text-lg font-bold text-stone-800 capitalize">Red Vein</p>
                    <p class="text-base text-stone-700">Kratom Strains</p>
                </div>
            </a>

            <a href="/" class="inline-block">
                <div class="flex flex-col gap-2">
                    <div class="banner-yellow aspect-w-16 aspect-h-6 rounded mb-2"></div>
                    <p class="text-lg font-bold text-stone-800 capitalize">Yellow Vein</p>
                    <p class="text-base text-stone-700">Kratom Strains</p>
                </div>
            </a>

            <a href="/" class="inline-block">
                <div class="flex flex-col gap-2">
                    <div class="banner-white aspect-w-16 aspect-h-6 rounded mb-2"></div>
                    <p class="text-lg font-bold text-stone-800 capitalize">White Vein</p>
                    <p class="text-base text-stone-700">Kratom Strains</p>
                </div>
            </a>
        </div>
    </div>
</section>

<section class="py-6 px-6">
    <div class="container mx-auto">
        <h2 class="text-left font-bold text-xl mb-12 capitalize">
            Popular Kratom Strains
        </h2>
    </div>
</section>


<?php
get_template('footer');
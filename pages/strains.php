<?php declare(strict_types=1);

echo $view->render('header.php', [
    'title' => 'Kratomlist - Kratom Strain and Vein Color - Explore Kratom Strains'
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

<section class="pt-6 pb-12 px-6">
    <div class="container mx-auto">
        <h1 class="text-4xl font-display text-left">Explore Kratom Strains</h1>
    </div>
</section>

<section class="py-12 px-6 bg-stone-100">
    <div class="container mx-auto">
        <h3 class="text-left font-bold text-xl mb-12 capitalize">
            Kratom strains by vein color
        </h3>

        <div class="grid grid-cols-2 lg:grid-cols-4 gap-12">
            <a href="/strains/green/" class="inline-block bg-white rounded shadow-sm">
                <div class="flex flex-col">
                    <div class="banner-green aspect-w-16 aspect-h-6"></div>
                    <div class="p-4">
                        <p class="text-lg font-bold text-stone-800 capitalize mb-1">Green Vein</p>
                        <p class="text-base text-stone-700">Kratom Strains</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>

<?php
echo $view->render('footer.php');
<?php declare(strict_types=1);

echo $view->render('header.php', [
    'title' => 'Kratomlist - Kratom Strain and Vein Color - Explore Kratom Strains'
]);

$strains = get_strains(10);
?>

<section class="py-6 px-6">
    <div class="container mx-auto">
        <div class="flex flex-wrap gap-6 items-center justify-between">
            <div class="flex items-center gap-3 text-slate-600 capitalize">
                <a href="/">Home</a>
                <span>/</span>
                <p>Strains</p>
            </div>
        </div>
    </div>
</section>

<section class="pt-6 pb-12 px-6">
    <div class="container mx-auto">
        <h1 class="text-4xl font-display text-left">Explore Kratom Strains</h1>
    </div>
</section>

<section class="py-12 px-6 bg-slate-100">
    <div class="container mx-auto">

        <h3 class="text-left font-bold text-xl mb-12">
            Kratom strains by vein color
        </h3>
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-12 mb-16">
            <a href="/strains/green/" class="inline-block bg-white rounded shadow">
                <div class="flex flex-col">
                    <div class="banner-green aspect-w-16 aspect-h-9 md:aspect-h-6"></div>
                    <div class="p-4">
                        <p class="text-lg font-bold text-slate-800 capitalize mb-1">Green Vein</p>
                        <p class="text-base text-slate-700">Kratom Strains</p>
                    </div>
                </div>
            </a>
        </div>

        <h3 class="text-left font-bold text-xl mb-12">
            Popular kratom strains
        </h3>
        <div class="grid grid-cols-2 grid-cols-5 gap-12 mb-12">
            <?php foreach($strains as $strain): ?>
                <a href="/strains/<?php echo $strain['type']; ?>/<?php echo $strain['slug']; ?>" class="rounded bg-white shadow">
                    <div class="banner-<?php echo $strain['type']; ?> aspect-w-16 aspect-h-6"></div>
                    <div class="p-3">
                        <p class="font-bold"><?php echo $strain['name']; ?></p>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>

    </div>
</section>

<?php
echo $view->render('footer.php');
<?php declare(strict_types=1);

get_template('header', [
    'title' => 'KratomSource - The Worlds Kratom Information Resource - Kratom Wiki'
]);

?>

<section class="py-6 px-6">
    <div class="container mx-auto">
        <div class="flex flex-wrap gap-6 items-center justify-between">
            <div class="flex items-center gap-3 text-stone-600 capitalize">
                <a href="/">Home</a>
                <span>/</span>
                <a href="/wiki/">Wiki</a>
            </div>
            <div></div>
        </div>
    </div>
</section>

<section class="pt-6 pb-12 px-6 border-b border-stone-200">
    <div class="container mx-auto">
        <h1 class="text-4xl font-medium text-center">Kratom Wiki</h1>
    </div>
</section>

<section class="py-16 px-6">
    <div class="container mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div>
                <h4 class="text-lg font-bold mb-3">Table of Contents</h4>
                <div class="text-lg">
                    <a href="/wiki/" class="inline-block flex items-center gap-2 py-3 px-3 rounded hover:bg-stone-200 transition-all">
                        <ion-icon name="document-text-outline" class="text-emerald-600 text-2xl"></ion-icon>
                        <span>Introduction</span>
                    </a>
                </div>
            </div>
            <div class="col-span-2">
                <div class="prose text-lg leading-relaxed">
                    <h3 class="font-bold">Introduction</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis, dolores, adipisci qui culpa facere non nisi ratione, esse ea aliquid magnam neque deleniti tempora quo doloribus asperiores impedit eaque in.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_template('footer');
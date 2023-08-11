<?php declare(strict_types=1);

get_template('header', [
    'title' => 'KratomSource - The Worlds Kratom Information Resource - Kratom Wiki'
]);

$topics = get_topics();
?>

<section class="py-6 px-6">
    <div class="container mx-auto">
        <div class="flex flex-wrap gap-6 items-center justify-between">
            <div class="flex items-center gap-3 text-stone-600 capitalize">
                <a href="/">Home</a>
                <span>/</span>
                <p>Wiki</p>
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
        <div class="grid grid-cols-1 md:grid-cols-4 gap-12">
            <div class="col-span-1">
                <h4 class="text-lg font-bold mb-6">Table of Contents</h4>
                <div class="text-lg flex flex-col gap-3">
                    <a href="/wiki/" class="inline-block flex items-center gap-2">
                        <ion-icon name="document-text-outline" class="text-emerald-600 text-2xl"></ion-icon>
                        <span>Introduction</span>
                    </a>

                    <?php foreach($topics as $topic): ?>
                        <a href="/wiki/<?php echo $topic['slug']; ?>/" class="inline-block flex items-center gap-2">
                            <ion-icon name="document-text-outline" class="text-emerald-600 text-2xl"></ion-icon>
                            <span><?php echo $topic['title']; ?></span>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="col-span-2">
                <div class="prose text-lg leading-relaxed">
                    <h3 class="font-bold text-2xl">Introduction</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis, dolores, adipisci qui culpa facere non nisi ratione, esse ea aliquid magnam neque deleniti tempora quo doloribus asperiores impedit eaque in.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, possimus nisi praesentium voluptatibus numquam minus maxime culpa blanditiis quae, fuga eaque facere labore incidunt voluptatem laborum iure voluptates pariatur! Inventore.</p>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Beatae nobis commodi earum ducimus dolorem iure, quibusdam nihil facilis aliquid architecto in, enim incidunt magnam ad. Incidunt quidem molestias a commodi.</p>
                </div>
            </div>
            <div class="col-span-1">
                <div class="bg-stone-200 aspect-w-16 aspect-h-9 rounded mb-6"></div>
                <p class="text-lg font-bold mb-6">
                    Share this article
                </p>
            </div>
        </div>
    </div>
</section>

<?php
get_template('footer');
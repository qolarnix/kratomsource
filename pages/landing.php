<?php declare(strict_types=1);

get_template('header');

// emerald-600
// stone-800

$topics = get_topics(4);
?>

<section class="py-12 px-6 border-b border-stone-300">
    <div class="container mx-auto flex items-center justify-center">
        <div class="max-w-[700px] mx-auto text-center">
            <h1 class="text-stone-800 font-medium text-3xl sm:text-4xl md:text-5xl !leading-normal mb-8">
                The World&rsquo;s Kratom Information Resource
            </h1>
            <a href="/wiki/" class="inline-block bg-emerald-600 rounded text-white font-medium py-3 px-6 text-base md:text-lg hover:scale-105 hover:shadow-md transition-all">
                Learn About Kratom
            </a>
        </div>
    </div>
</section>

<section class="py-12 px-6">
    <div class="container mx-auto">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-12 md:gap-16">
            <?php foreach($topics as $topic): ?>
                <a href="/wiki/<?php echo $topic['slug']; ?>/" class="inline-block">
                    <div class="flex flex-col gap-3">
                        <ion-icon name="document-text" class="text-emerald-600 text-3xl md:text-5xl"></ion-icon>
                        <p class="text-xl md:text-2xl font-medium capitalize"><?php echo $topic['title']; ?></p>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php
get_template('footer');
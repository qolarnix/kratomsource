<?php declare(strict_types=1);

get_template('header', [
    'title' => 'KratomList - The Worlds Kratom Information Resource'
]);

$topics = get_topics(4);
$posts = get_posts(4);
?>

<section class="py-16 md:py-24 px-6 bg-stone-100 border-b border-stone-100">
    <div class="container mx-auto flex items-center justify-center">
        <div class="max-w-[700px] mx-auto text-center">
            <h1 class="font-display text-3xl sm:text-4xl md:text-5xl !leading-normal mb-8">
                The World&rsquo;s Kratom Information Resource
            </h1>
            <a href="/wiki/" class="inline-block bg-emerald-600 rounded text-white font-medium py-3 px-6 text-base md:text-lg hover:scale-105 hover:shadow-md transition-all">
                Learn About Kratom
            </a>
        </div>
    </div>
</section>

<section class="py-16 px-6 border-b border-stone-100">
    <div class="container mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-9">
            <?php foreach($topics as $topic): ?>
                <a href="/wiki/<?php echo $topic['slug']; ?>/" class="inline-block">
                    <div class="flex flex-col gap-4">
                        <ion-icon name="document-text-outline" class="text-emerald-600 text-3xl md:text-5xl"></ion-icon>
                        <p class="text-xl md:text-2xl font-display capitalize"><?php echo $topic['title']; ?></p>
                        <p class="text-lg text-stone-600 leading-relaxed font-display"><?php echo $topic['excerpt']; ?></p>
                        <p class="text-sky-600 font-medium">Read Topic</p>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="py-16 px-6 border-b border-stone-100">
    <div class="container mx-auto">
        <h2 class="text-center font-display text-3xl mb-16">
            Kratom Vendors
        </h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-9">
            <?php 
                get_template('vendor-preview', [
                    'count' => 4
                ]);
            ?>
        </div>
    </div>
</section>

<section class="py-16 px-6">
    <div class="container mx-auto">
        <h2 class="text-center font-display text-3xl mb-16">
            News & Research Articles
        </h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-9 lg:gap-6">

            <?php foreach($posts as $post): ?>
                <div class="grid grid-cols-2 gap-6">
                    <div class="aspect-w-16 aspect-h-16 bg-stone-100 rounded"></div>
                    <div>
                        <h3 class="text-xl md:text-xl font-bold leading-normal mb-4 capitalize">
                            <?php echo $post['title']; ?>
                        </h3>
                        <p class="mb-6 text-lg text-stone-600"><?php echo $post['excerpt']; ?></p>
                        <p class="text-emerald-600 text-sm font-medium">Author Name</p>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</section>

<?php
get_template('footer');
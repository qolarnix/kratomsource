<?php declare(strict_types=1);

echo $view->render('header.php', [
    'title' => 'Kratomlist - The Worlds Kratom Information Resource'
]);

$topics = get_topics(4);
$posts = get_posts(4);
?>

<section class="py-8 md:py-16 px-6">
    <div class="container mx-auto flex items-center justify-center">
        <div class="max-w-[700px] mx-auto text-center">
            <h1 class="font-display text-emerald-950 text-3xl sm:text-4xl md:text-5xl lg:text-6xl !leading-normal mb-4">
                The World&rsquo;s Kratom Information Resource
            </h1>
            <p class="text-slate-600 text-lg md:text-xl mb-9 leading-relaxed">
                The latest kratom news and research all in one place. Find online and local kratom vendors selling your favorite strains.
            </p>

            <div class="flex flex-wrap items-center justify-center gap-4 md:gap-8">
                <a href="/wiki/" class="inline-block w-full sm:w-auto bg-emerald-600 rounded text-white font-bold py-3 px-6 border border-emerald-600 shadow hover:scale-105 transition-all">
                    Learn About Kratom
                </a>

                <a href="/vendors/" class="inline-block w-full sm:w-auto bg-white rounded text-emerald-600 font-bold py-3 px-6 border border-slate-100 shadow hover:scale-105 transition-all">
                    Find Kratom Vendors
                </a>
            </div>
        </div>
    </div>
</section>

<section class="py-8 md:py-16 px-6">
    <div class="container mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-9">
            <?php foreach($topics as $topic): ?>
                <a href="/wiki/<?php echo $topic['slug']; ?>/" class="inline-block">
                    <div class="flex flex-col gap-4">
                        <ion-icon name="document-text-outline" class="text-emerald-600 text-3xl md:text-5xl"></ion-icon>
                        <p class="text-xl md:text-2xl font-display capitalize"><?php echo $topic['title']; ?></p>
                        <p class="text-base text-slate-600 leading-relaxed"><?php echo $topic['excerpt']; ?></p>
                        <p class="text-emerald-600 font-medium">Read Topic</p>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="py-8 md:py-16 px-6">
    <div class="container mx-auto">
        <h2 class="text-center font-display text-2xl md:text-3xl mb-6 md:mb-12">
            Featured Kratom Vendors
        </h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 items-stretch justify-stretch gap-6">
            <?php
                echo $view->render('vendor-preview.php', [
                    'count' => 4
                ]);
            ?>
        </div>
    </div>
</section>

<section class="py-8 md:py-16 px-6">
    <div class="container mx-auto">
        <h2 class="text-center font-display text-2xl md:text-3xl mb-8 md:mb-16">
            News & Research Articles
        </h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-9 lg:gap-6">

            <?php foreach($posts as $post): ?>
                <a href="/blog/<?php echo $post['slug']; ?>/" class="inline-block grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="aspect-w-16 aspect-h-16 bg-slate-100 rounded"></div>
                    <div>
                        <h3 class="text-xl md:text-2xl font-display capitalize mb-3 !leading-relaxed">
                            <?php echo $post['title']; ?>
                        </h3>
                        <p class="text-base text-slate-600 leading-relaxed mb-6"><?php echo $post['excerpt']; ?></p>
                        <p class="text-emerald-600 text-base font-medium">
                            <?php 
                                $created_date = $post['created_at'];
                                $date_object = new DateTime($created_date);
                                $format_created = $date_object->format('F j, Y');
                                echo $format_created;
                            ?>
                        </p>
                    </div>
                </a>
            <?php endforeach; ?>

        </div>
    </div>
</section>

<?php
echo $view->render('footer.php');
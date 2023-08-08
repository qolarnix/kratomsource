<?php declare(strict_types=1);

get_template('header', [
    'title' => 'KratomSource - The Worlds Kratom Information Resource'
]);

// emerald-600
// stone-800

$topics = get_topics(4);
$vendors = get_vendors(4);
?>

<section class="py-16 px-6 border-b border-stone-200">
    <div class="container mx-auto flex items-center justify-center">
        <div class="max-w-[700px] mx-auto text-center">
            <h1 class="font-medium text-3xl sm:text-4xl md:text-5xl !leading-normal mb-8">
                The World&rsquo;s Kratom Information Resource
            </h1>
            <a href="/wiki/" class="inline-block bg-emerald-600 rounded text-white font-medium py-3 px-6 text-base md:text-lg hover:scale-105 hover:shadow-md transition-all">
                Learn About Kratom
            </a>
        </div>
    </div>
</section>

<section class="py-16 px-6 border-b border-stone-200">
    <div class="container mx-auto">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-9 lg:gap-6">
            <?php foreach($topics as $topic): ?>
                <a href="/wiki/<?php echo $topic['slug']; ?>/" class="inline-block">
                    <div class="flex flex-col gap-3">
                        <ion-icon name="document-text-outline" class="text-emerald-600 text-3xl md:text-5xl"></ion-icon>
                        <p class="text-xl md:text-2xl font-medium capitalize"><?php echo $topic['title']; ?></p>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="py-16 px-6 border-b border-stone-200">
    <div class="container mx-auto">
        <h2 class="text-center font-medium text-3xl mb-12">
            Kratom Vendors
        </h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-x-6 gap-y-12">
            <?php foreach($vendors as $vendor): ?>
                <div>
                    <div class="aspect-w-16 aspect-h-9 bg-stone-200 rounded mb-3"></div>
                    <h3 class="text-xl font-medium capitalize mb-2 min-h-[60px]">
                        <span class="flex items-center gap-2">
                            <?php echo $vendor['name']; ?>
                            <?php if($vendor['claimed']): ?>
                                <ion-icon name="checkmark-circle-outline" class="text-xl text-emerald-600"></ion-icon>
                            <?php endif; ?>
                        </span>
                    </h3>
                    <ul class="flex items-center text-indigo-500 text-sm mb-3">
                        <li><ion-icon name="leaf"></ion-icon></li>
                        <li><ion-icon name="leaf"></ion-icon></li>
                        <li><ion-icon name="leaf"></ion-icon></li>
                        <li><ion-icon name="leaf"></ion-icon></li>
                        <li><ion-icon name="leaf-outline"></ion-icon></li>
                    </ul>
                    <a href="<?php echo $vendor['url']; ?>" target="_block" class="inline-block flex items-center gap-1 font-bold text-stone-600 text-sm mb-6">
                        <span>Visit Website</span>
                        <ion-icon name="exit-outline" class="text-lg"></ion-icon>
                    </a>

                    <a href="/vendors/<?php echo $vendor['slug']; ?>/" class="inline-block text-white font-medium bg-emerald-600 py-2 rounded w-full text-center">
                        Orders & Pickup
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="py-16 px-6">
    <div class="container mx-auto">
        <h2 class="text-center font-medium text-3xl mb-12">
            News & Research Articles
        </h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-9 lg:gap-6">

            <div class="grid grid-cols-2 gap-6">
                <div class="aspect-w-16 aspect-h-16 bg-stone-200 rounded"></div>
                <div>
                    <h3 class="text-xl md:text-2xl font-medium leading-normal mb-4">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit
                    </h3>
                    <p class="text-emerald-600 text-sm font-medium">Author Name</p>
                </div>
            </div>

            <div class="grid grid-cols-2 gap-6">
                <div class="aspect-w-16 aspect-h-16 bg-stone-200 rounded"></div>
                <div>
                    <h3 class="text-xl md:text-2xl font-medium leading-normal mb-4">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit
                    </h3>
                    <p class="text-emerald-600 text-sm font-medium">Author Name</p>
                </div>
            </div>

        </div>
    </div>
</section>

<?php
get_template('footer');
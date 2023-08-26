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

<section class="pt-6 pb-12 px-6 border-b border-stone-100">
    <div class="container mx-auto">
        <h1 class="text-4xl font-display text-left">Kratom Wiki</h1>
    </div>
</section>

<section class="py-16 px-6 bg-stone-100">
    <div class="container mx-auto">

        <div class="flex flex-wrap lg:flex-nowrap items-start justify-start gap-12">
            <div class="min-w-[200px]">
                <h4 class="text-lg font-bold mb-6">Table of Contents</h4>

                <div class="text-base flex flex-col gap-2">
                    <a href="/wiki/" class="inline-block flex items-center gap-2 py-2">
                        <ion-icon name="document-text-outline" class="text-emerald-600 text-xl"></ion-icon>
                        <span class="font-medium">Introduction</span>
                    </a>
                    <?php foreach($topics as $topic): ?>
                        <a href="/wiki/<?php echo $topic['slug']; ?>/" class="inline-block flex items-center gap-2 py-2">
                            <ion-icon name="document-text-outline" class="text-emerald-600 text-xl"></ion-icon>
                            <span class="capitalize"><?php echo $topic['title']; ?></span>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="max-w-[768px] lg:min-w-[768px] bg-white rounded p-12 shadow-sm">
                <div class="flex items-center justify-between mb-9 not-prose">
                    <h3 class="font-bold font-sans text-3xl">What is Kratom?</h3>
                    <a href="#sources" class="kl-link">Sources</a>
                </div>

                <div class="bg-amber-50 border-l-4 border-amber-400 p-6 font-sans flex flex-col gap-2 mb-9 not-prose">
                    <p class="font-bold">Lorem ipsum dolor sit amet consectetur</p>
                    <p class="text-base leading-relaxed">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Expedita, ratione inventore repellat aperiam possimus rerum quisquam optio iure corrupti.
                    </p>
                </div>

                <div class="prose font-display text-lg leading-loose">
                    <p>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Totam vel alias libero sapiente, optio molestiae, asperiores ipsa quia officia, dolores inventore. Saepe quibusdam, amet autem deserunt velit porro obcaecati <a href="/" class="kl-link-inline">consectetur</a>?
                    </p>

                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Id ducimus dolorem optio reiciendis minima facere incidunt illo, hic eius est adipisci quia iste fuga ad vitae quos. Consequuntur, nisi eum.
                    </p>
                </div>
            </div>

            <div>
                
            </div>

        </div>

    </div>
</section>

<?php
get_template('footer');
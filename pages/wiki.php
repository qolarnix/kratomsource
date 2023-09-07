<?php declare(strict_types=1);

echo $view->render('header.php', [
    'title' => 'Kratomlist - Learn About Kratom - Kratom Wiki'
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

        <div class="flex flex-wrap items-start justify-start gap-12">
            <div class="lg:min-w-[250px]">
                <h4 class="text-lg font-bold mb-6">Kratom Topics</h4>

                <div class="text-base font-medium flex flex-col gap-0">
                    <a href="/wiki/" class="inline-block flex items-center gap-2 py-3 border-r-4 border-emerald-600">
                        <ion-icon name="document-text-outline" class="text-emerald-600 text-xl"></ion-icon>
                        <span>Introduction</span>
                    </a>
                    <?php foreach($topics as $topic): ?>
                        <a href="/wiki/<?php echo $topic['slug']; ?>/" class="inline-block flex items-center gap-2 py-3 border-r-2 border-stone-200">
                            <ion-icon name="document-text-outline" class="text-emerald-600 text-xl"></ion-icon>
                            <span class="capitalize"><?php echo $topic['title']; ?></span>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="max-w-[768px] lg:min-w-[768px]">
                <div class="bg-white rounded p-12 shadow-sm mb-9">
                    <div class="flex items-center justify-between mb-4 not-prose">
                        <h3 class="font-bold font-sans text-3xl">What is Kratom?</h3>
                        <a href="#sources" class="kl-link">Sources</a>
                    </div>

                    <div class="mb-9 text-stone-700 font-medium flex items-center gap-1">
                        <p>Reading time:</p>
                        <p id="readingTime"></p>
                    </div>

                    <div class="bg-amber-50 border-l-4 border-amber-400 p-6 font-sans flex flex-col gap-2 mb-9 not-prose">
                        <p class="font-bold">Lorem ipsum dolor sit amet consectetur</p>
                        <p class="text-base leading-relaxed">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Expedita, ratione inventore repellat aperiam possimus rerum quisquam optio iure corrupti.
                        </p>
                    </div>

                    <div id="topicContent" class="prose font-display text-lg leading-loose">
                        <p>
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Totam vel alias libero sapiente, optio molestiae, asperiores ipsa quia officia, dolores inventore. Saepe quibusdam, amet autem deserunt velit porro obcaecati <a href="/" class="kl-link-inline">consectetur</a>?
                        </p>
                    </div>
                </div>

                <h4 class="font-medium text-xl mb-6">Sources</h4>
                <div class="bg-white rounded shadow-sm py-6 px-9 mb-9"></div>
            </div>

            <div>
                sidebar content
            </div>

        </div>

    </div>
</section>

<script>
    /**
     * Calculate Reading Time
     */
    var topicContent = document.querySelector('#topicContent');
    if(topicContent) {
        Countable.on(topicContent, readTime);

        function readTime(counter) {
            let wpm = 200;
            let estimatedRaw = counter.words / wpm;
            let minutes = Math.round(estimatedRaw);

            let effectiveTime = (minutes < 1) ? "less than a minute" : minutes + " minutes";

            document.querySelector('#readingTime').append(effectiveTime);
        }
    }
</script>

<?php
echo $view->render('footer.php');
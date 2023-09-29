<?php declare(strict_types=1);

echo $view->render('header.php', [
    'title' => 'Kratomlist - Learn About Kratom - Kratom Wiki'
]);

$topics = get_topics();
?>

<section class="py-6 px-6">
    <div class="container mx-auto">
        <div class="flex flex-wrap gap-6 items-center justify-between">
            <div class="flex items-center gap-3 text-slate-600 capitalize">
                <a href="/">Home</a>
                <span>/</span>
                <p>Wiki</p>
            </div>
            <div></div>
        </div>
    </div>
</section>

<section class="pt-6 pb-12 px-6">
    <div class="container mx-auto">
        <h1 class="text-4xl font-display text-left">Kratom Wiki</h1>
    </div>
</section>

<section class="py-8 md:py-16 px-6 bg-slate-100">
    <div class="container mx-auto">

        <div class="flex gap-9">

            <!-- Side Nav -->
            <div class="basis-[350px] hidden lg:block">
                <h4 class="text-lg font-bold mb-6">Kratom Topics</h4>

                <div class="text-base font-medium flex flex-col gap-0">
                    <a href="/wiki/" class="inline-block flex items-center gap-2 py-3 border-r-2 border-emerald-600">
                        <ion-icon name="document-text-outline" class="text-emerald-600 text-xl"></ion-icon>
                        <span>Introduction</span>
                    </a>
                    <?php foreach($topics as $topic): ?>
                        <a href="/wiki/<?php echo $topic['slug']; ?>/" class="inline-block flex items-center gap-2 py-3 border-r-2 border-slate-200">
                            <ion-icon name="document-text-outline" class="text-emerald-600 text-xl"></ion-icon>
                            <span class="capitalize"><?php echo $topic['title']; ?></span>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- Main Content -->
            <div class="basis-full">
                <div class="flex flex-wrap xl:flex-nowrap lg:gap-9">

                    <div>
                        <div class="bg-white rounded p-6 md:p-12 negm shadow-sm mb-9">
                            <div class="mb-4 not-prose">
                                <h3 class="font-bold font-sans text-3xl">Introduction to Kratom</h3>
                            </div>

                            <div class="mb-9 text-slate-700 font-medium flex items-center gap-1">
                                <p>Reading time:</p>
                                <p id="readingTime"></p>
                            </div>

                            <?php echo $view->render('wiki-alert.php'); ?>
                            <div id="topicContent" class="prose font-display text-lg leading-loose">
                                <h3>What is Kratom?</h3>
                                <p>Mitragyna speciosa, commonly known as kratom, is a tropical evergreen tree in the coffee family native to Southeast asia. Kratom has been used recreationally and as herbal medicine for hundreds of years.</p>
                            </div>
                        </div>
                    </div>

                    <div class="basis-[350px]">
                        <div class="flex flex-col">
                            <div>
                                <p>Advertise your business with Kratomlist</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div><!-- Main Content -->

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
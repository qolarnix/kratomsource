<?php declare(strict_types=1);

echo $view->render('header.php', [
    'title' => 'Kratomlist - Find Online and Local Kratom Vendors'
]);

$cloc = client_loc();
$state = $cloc['region'];
$city = $cloc['city'];
?>

<section class="py-6 px-6">
    <div class="container mx-auto">
        <div class="flex flex-wrap gap-6 items-center justify-between">
            <div class="flex items-center gap-3 text-stone-600 capitalize">
                <a href="/">Home</a>
                <span>/</span>
                <p>Vendors</p>
            </div>
        </div>
    </div>
</section>

<section class="pt-6 pb-12 px-6 border-b border-stone-100">
    <div class="container mx-auto">
        <h1 class="text-4xl font-display text-left">Find Kratom Vendors</h1>
    </div>
</section>

<section class="py-16 px-6 border-b border-stone-100">
    <div class="container mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-6 gap-y-12">
            <?php
                echo $view->render('vendor-preview.php', [
                    'count' => -1
                ]);
            ?>
        </div>
    </div>
</section>

<?php
echo $view->render('footer.php');
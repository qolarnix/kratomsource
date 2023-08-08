<?php declare(strict_types=1);

get_template('header', [
    'title' => 'KratomSource - The Worlds Kratom Information Resource - Vendor Directory'
]);
?>

<section class="py-6 px-6">
    <div class="container mx-auto">
        <di class="flex items-center gap-3 text-stone-600 capitalize">
            <a href="/">Home</a>
            <span>/</span>
            <a href="/vendors/">Vendors</a>
            <span>/</span>
            <p><?php echo $vendor['name']; ?></p>
        </div>
    </div>
</section>

<section class="pt-6 pb-16 px-6 border-b border-stone-200">
    <div class="container mx-auto">
        <div class="flex flex-wrap items-start justify-between">

            <div>
                <h1 class="capitalize text-3xl md:text-5xl font-medium mb-6"><?php echo $vendor['name']; ?></h1>
                <?php if($vendor['claimed'] === 1): ?>
                    <p class="text-xl text-emerald-600 flex items-center gap-2">
                        <ion-icon name="checkmark-circle-outline" class="text-3xl"></ion-icon>
                        <span>Verified Vendor</span>
                    </p>
                <?php else: ?>
                    <p class="font-medium text-lg">
                        Own this business?
                        <a href="/claim/" class="text-emerald-600">Get Verified</a>
                    </p>
                <?php endif; ?>
            </div>

            <div class="font-medium">
                <p class="font-bold mb-2">Questions & Orders</p>
                <p class="mb-1"><?php echo $vendor['public_email']; ?></p>
                <p><?php echo $vendor['public_phone']; ?></p>

                <a href="<?php echo $vendor['url']; ?>" target="_block" class="inline-block text-white bg-emerald-600 py-3 px-6 rounded font-medium mt-6">
                    Visit Website
                </a>
            </div>

        </div>
    </div>
</section>

<section class="py-16 px-6">
    <div class="container mx-auto">
        <h3 class="text-3xl font-medium">Products</h3>
    </div>
</section>

<?php 
get_template('footer');
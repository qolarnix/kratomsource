<?php declare(strict_types=1);

$vendor_seo_title = 'KratomSource - Order or Pickup Kratom - '. ucwords($vendor['name']);

echo $view->render('header.php', [
    'title' => $vendor_seo_title
]);
?>

<section class="py-3 px-6">
    <div class="container mx-auto">
        <div class="flex flex-wrap gap-6 items-center justify-between">
            <div class="flex items-center gap-3 text-stone-600 text-sm md:text-base capitalize">
                <a href="/">Home</a>
                <span>/</span>
                <a href="/vendors/">Vendors</a>
                <span>/</span>
                <p><?php echo $vendor['name']; ?></p>
            </div>

            <div class="flex items-center gap-2">
                <ion-icon name="location-outline" class="text-2xl text-emerald-600 hidden md:inline"></ion-icon>
                <p class="text-stone-600 hidden md:inline"><?php echo $vendor['address']; ?></p>
                <a href="/" target="_block" class="inline-block md:ml-2 bg-stone-100 text-stone-600 font-medium py-1 px-4 rounded">
                    Open in Maps
                </a>
            </div>
        </div>
    </div>
</section>

<section class="pt-6 pb-16 px-6 border-b border-stone-100">
    <div class="container mx-auto">
        <div class="flex flex-wrap items-start justify-between">

            <div>
                <h1 class="capitalize text-3xl md:text-5xl font-medium mb-6"><?php echo $vendor['name']; ?></h1>
                <div class="mb-8">
                    <?php if($vendor['claimed'] === 1): ?>
                        <p class="text-xl text-emerald-600 flex items-center gap-2">
                            <ion-icon name="checkmark-circle-outline" class="text-3xl"></ion-icon>
                            <span class="font-bold">Verified Vendor</span>
                        </p>
                    <?php else: ?>
                        <p class="font-medium text-lg">
                            Own this business?
                            <a href="/claim/" class="text-emerald-600">Get Verified</a>
                        </p>
                    <?php endif; ?>
                </div>
                <div class="flex flex-wrap items-center gap-2 md:gap-4 text-xs md:text-sm">
                    <?php if($vendor['is_online'] === 1): ?>
                        <div class="border border-indigo-200 bg-indigo-100 text-indigo-600 font-bold rounded py-2 px-3 flex items-center gap-2">
                            <ion-icon name="card-outline" class="text-base md:text-xl"></ion-icon>
                            <p>Online Ordering</p>
                        </div>
                    <?php endif; ?>
                    <?php if($vendor['is_brick'] === 1): ?>
                        <div class="border border-indigo-200 bg-indigo-100 text-indigo-600 font-bold rounded py-2 px-3 flex items-center gap-2">
                            <ion-icon name="storefront-outline" class="text-base md:text-xl"></ion-icon>
                            <p>Brick & Mortar</p>
                        </div>
                    <?php endif; ?>
                    <?php if($vendor['delivery'] === 1): ?>
                        <div class="border border-indigo-200 bg-indigo-100 text-indigo-600 font-bold rounded py-2 px-3 flex items-center gap-2">
                            <ion-icon name="car-outline" class="text-base md:text-xl"></ion-icon>
                            <p>Local Delivery</p>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

            <div class="font-medium mt-6 md:mt-0">
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
echo $view->render('footer.php');
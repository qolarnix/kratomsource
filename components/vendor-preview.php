<?php declare(strict_types=1);

/**
 * Get all vendors
 */
$vendors = get_vendors($count);

// echo '<pre>';
// print_r($vendors);
// echo '</pre>';
?>

<?php foreach($vendors as $vendor): ?>
    <div class="bg-white rounded p-3 shadow border border-slate-100">
        <a href="/vendors/<?php echo $vendor['slug']; ?>" class="block">
            <div class="aspect-w-16 aspect-h-9 bg-slate-100 rounded mb-4 w-full"></div>
            <h3 class="text-xl font-medium capitalize mb-6">
                <p class="text-slate-500 text-sm mb-2"><?php echo $vendor['city']; ?>, <?php echo $vendor['state']; ?></p>
                <span class="flex items-center gap-1">
                    <?php if($vendor['claimed']): ?>
                        <ion-icon name="leaf" class="text-xl text-emerald-600"></ion-icon>
                    <?php endif; ?>
                    <?php echo $vendor['name']; ?>
                </span>
            </h3>

            <div class="flex items-center gap-2">
                <?php if($vendor['is_online'] === 1): ?>
                    <div class="text-emerald-600 bg-emerald-50 border border-emerald-100 rounded-full font-bold text-xs py-1 px-3">
                        <p>Order Online</p>
                    </div>
                <?php endif; ?>

                <?php if($vendor['is_brick'] === 1): ?>
                    <div class="text-emerald-600 bg-emerald-50 border border-emerald-100 rounded-full font-bold text-xs py-1 px-3">
                        <p>Local</p>
                    </div>
                <?php endif; ?>

                <?php if($vendor['claimed'] === 1): ?>
                    <div class="text-emerald-600 bg-emerald-50 border border-emerald-100 rounded-full font-bold text-xs py-1 px-3">
                        <p>Verified</p>
                    </div>
                <?php endif; ?>
            </div>
        </a>
    </div>
<?php endforeach; ?>
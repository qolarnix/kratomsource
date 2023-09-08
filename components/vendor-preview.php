<?php declare(strict_types=1);

/**
 * Get all vendors
 */
$vendors = get_vendors($count);
?>

<?php foreach($vendors as $vendor): ?>
    <div>
        <a href="/vendors/<?php echo $vendor['slug']; ?>" class="block bg-white rounded p-3 shadow-sm">
            <div class="aspect-w-16 aspect-h-9 bg-stone-100 rounded mb-4 w-full"></div>
            <h3 class="text-xl font-medium capitalize mb-6">
                <p class="text-stone-500 text-sm mb-2"><?php echo $vendor['city']; ?>, <?php echo $vendor['state']; ?></p>
                <span class="flex items-center gap-1">
                    <?php if($vendor['claimed']): ?>
                        <ion-icon name="leaf" class="text-xl text-emerald-600"></ion-icon>
                    <?php endif; ?>
                    <?php echo $vendor['name']; ?>
                </span>
            </h3>
            <p class="font-bold text-emerald-600">
                Vendor Shop
            </p>
        </a>
    </div>
<?php endforeach; ?>
<?php declare(strict_types=1);

/**
 * Get all vendors
 */
$vendors = get_vendors($count);
?>

<?php foreach($vendors as $vendor): ?>
    <div>
        <a href="/vendors/<?php echo $vendor['slug']; ?>">
            <div class="aspect-w-16 aspect-h-9 bg-stone-100 rounded mb-3 w-full"></div>
            <h3 class="text-xl font-medium capitalize mb-4">
                <p class="text-stone-600 text-sm mb-2"><?php echo $vendor['city']; ?>, <?php echo $vendor['state']; ?></p>
                <span class="flex items-center gap-2">
                    <?php echo $vendor['name']; ?>
                    <?php if($vendor['claimed']): ?>
                        <ion-icon name="checkmark-circle" class="text-xl text-emerald-600"></ion-icon>
                    <?php endif; ?>
                </span>
            </h3>
        </a>
        <a href="<?php echo $vendor['url']; ?>" target="_block" class="inline-block flex items-center gap-1 font-medium text-sky-600 text-sm mb-6">
            <span>Visit Website</span>
            <ion-icon name="exit-outline" class="text-lg"></ion-icon>
        </a>

        <a href="/vendors/<?php echo $vendor['slug']; ?>/" class="bg-emerald-600 py-2 px-4 rounded font-medium text-white shadow-sm hover:shadow-md transition-all">
            Orders & Pickup
        </a>
    </div>
<?php 
endforeach;
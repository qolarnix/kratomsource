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
            <h3 class="text-xl font-medium capitalize mb-2 min-h-[60px]">
                <span class="flex items-center gap-2">
                    <?php echo $vendor['name']; ?>
                    <?php if($vendor['claimed']): ?>
                        <ion-icon name="checkmark-circle-outline" class="text-xl text-emerald-600"></ion-icon>
                    <?php endif; ?>
                </span>
            </h3>
        </a>
        <ul class="flex items-center text-stone-800 text-sm mb-3">
            <li class="font-bold"><p>Reviews</p></li>
        </ul>
        <a href="<?php echo $vendor['url']; ?>" target="_block" class="inline-block flex items-center gap-1 font-bold text-stone-600 text-sm mb-6">
            <span>Visit Website</span>
            <ion-icon name="exit-outline" class="text-lg"></ion-icon>
        </a>

        <a href="/vendors/<?php echo $vendor['slug']; ?>/" class="inline-block text-white font-medium bg-emerald-600 py-2 rounded w-full text-center">
            Orders & Pickup
        </a>
    </div>
<?php 
endforeach;
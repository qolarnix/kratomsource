<?php declare(strict_types=1);

$vendors = get_vendors($count);
?>
<?php 
    foreach($vendors as $vendor):

    $rating = $vendor['rating'];
    $rating_ext = 5 - $vendor['rating'];
?>
    <div>
        <div class="aspect-w-16 aspect-h-9 bg-stone-200 rounded mb-3"></div>
        <h3 class="text-xl font-medium capitalize mb-2 min-h-[60px]">
            <span class="flex items-center gap-2">
                <?php echo $vendor['name']; ?>
                <?php if($vendor['claimed']): ?>
                    <ion-icon name="checkmark-circle-outline" class="text-xl text-emerald-600"></ion-icon>
                <?php endif; ?>
            </span>
        </h3>
        <ul class="flex items-center text-stone-900 text-sm mb-3">
            <?php foreach(range(1, $rating) as $star): ?>
                <li><ion-icon name="star"></ion-icon></li>
            <?php endforeach; ?>
            <?php 
                if($rating !== 5):
                foreach(range(1, $rating_ext) as $empty_star):
            ?>
                <li><ion-icon name="star-outline"></ion-icon></li>
            <?php 
                endforeach;
                endif; 
            ?>
            <li class="ml-2 font-bold"><p>Reviews</p></li>
        </ul>
        <a href="<?php echo $vendor['url']; ?>" target="_block" class="inline-block flex items-center gap-1 font-bold text-stone-600 text-sm mb-6">
            <span>Visit Website</span>
            <ion-icon name="exit-outline" class="text-lg"></ion-icon>
        </a>

        <a href="/vendors/<?php echo $vendor['slug']; ?>/" class="inline-block text-white font-medium bg-emerald-600 py-2 rounded w-full text-center">
            Orders & Pickup
        </a>
    </div>
<?php endforeach; ?>
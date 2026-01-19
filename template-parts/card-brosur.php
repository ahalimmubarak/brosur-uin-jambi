<div class="bg-white rounded-xl shadow hover:shadow-lg transition">
    <?php if (has_post_thumbnail()): ?>
        <?php the_post_thumbnail('medium', ['class' => 'rounded-t-xl']); ?>
    <?php endif; ?>

    <div class="p-4">
        <h3 class="font-semibold text-lg">
            <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
            </a>
        </h3>
    </div>
</div>

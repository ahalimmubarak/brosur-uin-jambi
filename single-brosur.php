<?php get_header(); ?>

<main class="max-w-6xl mx-auto px-6 py-10">
    <h1 class="text-3xl font-bold mb-6"><?php the_title(); ?></h1>

    <div class="bg-white rounded-xl shadow p-6">
        <?php
        $pdf = get_field('file_brosur');
        if ($pdf):
        ?>
        <iframe src="<?php echo esc_url($pdf['url']); ?>"
                class="w-full h-[85vh] rounded-lg"></iframe>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>

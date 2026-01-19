<?php get_header(); ?>

<main class="max-w-7xl mx-auto px-6 py-10">
    <h1 class="text-2xl font-bold mb-8">Daftar Brosur</h1>

    <div class="grid md:grid-cols-4 gap-6">
        <?php while (have_posts()) : the_post(); ?>
            <?php get_template_part('template-parts/card', 'brosur'); ?>
        <?php endwhile; ?>
    </div>
</main>

<?php get_footer(); ?>

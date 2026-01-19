<?php get_header(); ?>

<main class="max-w-7xl mx-auto px-6 py-10">
    <h1 class="text-2xl font-bold mb-6">Portal Brosur UIN Jambi</h1>

    <div class="grid md:grid-cols-3 gap-6">
        <?php while (have_posts()) : the_post(); ?>
            <div class="bg-white rounded-xl shadow p-4">
                <h2 class="font-semibold text-lg">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>
                </h2>
            </div>
        <?php endwhile; ?>
    </div>
</main>

<?php get_footer(); ?>

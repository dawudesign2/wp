<?php get_header(); ?>
<?php if (have_posts()) :  ?>
    <?php while (have_posts()) :
        the_post(); ?>
        <main role="main">
            <?php get_template_part('layouts/pages/_page'); ?>
        </main>
    <?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>
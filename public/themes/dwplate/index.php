<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <?php get_header(); ?>
    <?php if (have_posts()) :  ?>
        <?php while (have_posts()) :
            the_post(); ?>
            <main role="main">
                <?php get_template_part('layouts/posts/_index'); ?>
            </main>
        <?php endwhile; ?>
    <?php endif; ?>
    <?php get_footer(); ?>
</body>

</html>
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
    <main role="main" class="dwplate">
        <h1>Template by Dawudesign</h1>
    </main>
    <?php get_footer(); ?>
</body>

</html>
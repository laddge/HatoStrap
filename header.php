<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand d-flex align-items-center" href="<?php echo home_url(); ?>">
                <img src="<?php echo get_site_icon_url(); ?>" alt="" height="30">
                <span class="pl-2"><?php bloginfo('name'); ?></span>
            </a>
        </nav>
    </header>

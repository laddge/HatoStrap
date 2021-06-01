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
            <button class="navbar-toggler btn" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <?php
                    $menu_name = 'header-menu';

                    if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) {
                        $menu = wp_get_nav_menu_object($locations[$menu_name]);

                        $menu_items = wp_get_nav_menu_items($menu->term_id);

                        $menu_list = '';

                        foreach ((array) $menu_items as $key => $menu_item) {
                            $title = $menu_item->title;
                            $url = $menu_item->url;
                            $serverUrl = (empty($_SERVER['HTTPS']) ? 'http://' : 'https://').$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
                            if ($url == $serverUrl || $url . '/' == $serverUrl) {
                                $active = ' active';
                            } else {
                                $active = '';
                            }
                            $menu_list .= '<li class="nav-item' . $active . '"><a class="nav-link" href="' . $url . '">' . $title . '</a></li>';
                        }
                    } else {
                        $menu_list = '<ul><li>Menu "' . $menu_name . '" not defined.</li></ul>';
                    }
                    echo $menu_list;
                    ?>
                </ul>
            </div>
        </nav>
    </header>
    <div class="main-contents">

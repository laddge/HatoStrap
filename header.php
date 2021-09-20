<!DOCTYPE html>
<html <?php language_attributes(); ?> class="h-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class('h-100');?>>
    <div class="d-flex flex-column h-100">
        <div class="flex-row mb-2">
            <header>
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
						<a class="navbar-brand" href="<?php echo home_url(); ?>">
							<img src="<?php echo get_site_icon_url(); ?>" alt="" height="30">
							<span><?php bloginfo('name'); ?></span>
						</a>
						<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav me-auto mb-2 mb-lg-0">
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
					</div>
                </nav>
            </header>
            <div>

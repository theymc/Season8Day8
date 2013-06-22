<!doctype html>
<html>
    <head>
        <title><?php bloginfo('name'); ?></title>
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
    </head>

    <body>

        <div class="interface headerbg">
            <header>

                <h1>
                    <a href="<?php bloginfo('url'); ?>">
                        <?php bloginfo('name'); ?>
                    </a>
                </h1>

            </header>

        </div>

        <div class="interface site_nav_bg">

            <nav class="site">
                <?php
                    // our old navigation functions 
                    // wp_list_pages(); 
                    // wp_list_categories(); 
                ?>

                <?php wp_nav_menu(); ?>

            </nav>

        </div>
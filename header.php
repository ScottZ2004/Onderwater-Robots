<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head() ?>
</head>

<body <?php body_class(); ?>>
    <header class="site-header">
        <div class="header-foto">
            <?php wp_nav_menu(array('theme_location' => 'header-menu')); ?>
        </div>


    </header>
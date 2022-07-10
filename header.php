<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head() ?>
</head>

<body <?php body_class(); ?>>
<!--      TODO absolulte positie plaatje-->
<section id="mysection"> </section>
    <img class="achtergrond header-achtergrond" src="/wp-content/themes/Onderwater-Robots/Images/bovenkant.jpg">
    <img class="achtergrond footer-achtergrond" src="/wp-content/themes/Onderwater-Robots/Images/onderkant.jpg">
    <header class="site-header">
        <div class="header-foto">
            <?php wp_nav_menu(array('theme_location' => 'header-menu')); ?>
        </div>


    </header>
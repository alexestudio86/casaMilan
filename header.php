<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://www.w3schools.com/w3css/4/w3.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" rel="stylesheet" />
    <link href="https://unpkg.com/swiper/swiper-bundle.min.css" rel="stylesheet" />
    <?php wp_head(); ?>
</head>
<body class="w3-light-gray">

<!-- Nav -->
<nav class="w3-row w3-bar w3-to w3-white">
    <div class="w3-bar w3-content w3-white">
        <?php get_template_part('template-parts/logo'); ?>
        <?php get_template_part('template-parts/navbar'); ?>
    </div>
</nav>
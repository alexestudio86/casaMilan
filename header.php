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
        <?php if ( has_custom_logo() ) : ?>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="w3-bar-item py-1 pr-3">
                <?php
                    $custom_logo_id = get_theme_mod( 'custom_logo' );
                    $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );                    
                    if ( has_custom_logo() ) {
                        echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '" class="w3-image w-100">';
                    }
                ?>
            </a>
		<?php endif; ?>
        <?php if ( has_nav_menu( 'primary' ) ) : ?>
            <?php wp_nav_menu(
                array(
                'theme_location'    =>  'primary',
                'depth'             =>  2,
                'menu_class'        =>  'w3-rest',
                )
            ); ?>
        <?php endif; ?>
    </div>
</nav>
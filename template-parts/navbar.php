<?php if ( has_nav_menu( 'primary' ) ) : ?>
    <?php if(): ?>
    <?php else: ?>
    <?php endif; ?>
    <?php wp_nav_menu(
        array(
            'theme_location'    =>  'primary',
            'depth'             =>  2,
            'menu_class'        =>  'w3-rest',
        )
    ); ?>
<?php endif; ?>
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
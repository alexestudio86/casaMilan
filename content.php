<div class="w3-row">
    <?php
    if( has_post_thumbnail() ){
        ?>
        <div id='<?php the_ID(); ?>' <?php post_class('w3-row'); ?> >
            <div class="w3-half">
                <a href='<?php the_permalink(); ?>'><?php the_title_attribute(); ?></a>
            </div>
            <div class="w3-half">
                <?php the_post_thumbnail(); ?>
            </div>
        </div>
    <?php

        if( comments_open() ){
            comments_popup_link();
        }

        if( current_user_can( 'edit_posts' ) ){
            edit_post_link('editar este post');
        }else{
            echo 'No eres admin';
        }

    }else {
        echo 'No hay imagen';
    }
    ?>
</div>
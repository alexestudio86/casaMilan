<main class='w3-row'>
    <article id='<?php the_ID(); ?> <?php post_class('w3-row'); ?>'>
        <h1 class='text-uppercase w3-xlarge py-2'><?php the_title_attribute(); ?></h1>
        <?php the_content(); ?>
    </article>
</main>
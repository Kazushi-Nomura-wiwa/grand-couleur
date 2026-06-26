<?php get_header(); ?>

<main class="site-main">
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();
    ?>
            <article id="post-<?php the_ID(); ?>" class="post">
                <h1 class="post__title"><?php the_title(); ?></h1>
                <div class="post__content"><?php the_content(); ?></div>
            </article>
    <?php
        endwhile;
    endif;
    ?>
</main>

<?php get_footer(); ?>

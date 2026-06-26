<?php get_header(); ?>

<main class="site-main">
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();
    ?>
            <article id="post-<?php the_ID(); ?>" class="post">
                <h1 class="post__title"><a href="<?php the_permalink(); ?>" class="post__title-link"><?php the_title(); ?></a></h1>
                <div class="post__excerpt"><?php the_excerpt(); ?></div>
            </article>
    <?php
        endwhile;
    endif;
    ?>
</main>

<?php get_footer(); ?>

<?php get_header(); ?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>

<div class="blog">
    <div class="vignette">
        <a href="<?php the_permalink(); ?>" class="preview"><?php the_post_thumbnail(); ?></a>
    </div>
        <div class="blog-content">
                <div class="blog-title">
                    <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1><?php comments_popup_link('0','1','%','nbrcom'); ?>
                </div>
                <?php the_content('Lire la suite'); ?>
                <p class="date">Posté le <?php the_time('l d F'); ?>  dans <?php echo get_the_category_list(', '); ?></p>
                <div class="cb"></div>
                <div class="spacer"></div>
        </div>
</div>

<?php endwhile; endif; ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>


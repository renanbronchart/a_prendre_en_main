<?php get_header(); ?>

<!-- fullpage test -->
<div id="fullpage">
    <div class="section active">Some section</div>
    <div class="section">Some section</div>
    <div class="section">Some section</div>
    <div class="section">Some section</div>
</div>

<!-- Partie texte explicatif -->


<!-- Partie Equipe -->

<section>
<div class='teams'>
    <h2>TEAM</h2>
    <?php
    $loopTeam = new WP_Query( array( 'post_type' => 'team', 'posts_per_page' => 10 ) );
    while ( $loopTeam->have_posts() ) : $loopTeam->the_post();
        ?>

        <div class='team'>
            <div class="photo">
                <?php the_post_thumbnail(); ?>
            </div>
            <h2>
                <?php the_title(); ?>
            </h2>
            <div class='description'>
                <?php the_content(); ?>
            </div>
        </div>

        <?php
    endwhile;
    ?>

</div>
</section>

<!-- Partie actualités Actualités -->

<section>
    <h2>Actualité</h2>
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
</section>

<?php endwhile; endif; ?>


<!-- Partie partenaires test -->

<section>
    <h2>Partenaires</h2>
    <div class='partners'>
        <?php
        $loopPartner = new WP_Query( array( 'post_type' => 'partenaires', 'posts_per_page' => 10 ) );
        while ( $loopPartner->have_posts() ) : $loopPartner->the_post();
            ?>

            <div class='partner'>
                <div class="partner_photo">
                    <?php the_post_thumbnail('partenaires_profil'); ?>
                </div>
            </div>

            <?php
        endwhile;
        ?>

    </div>

</section>

<?php get_sidebar(); ?>

<?php get_footer(); ?>



<div id="home">
    <img src="" alt="">
</div>

<div id="participation_don">
    <div class="block_don">

        <?php
        $loopContexte = new WP_Query( array( 'post_type' => 'contexte', 'posts_per_page' => 10 ) );
        while ( $loopContexte->have_posts() ) : $loopContexte->the_post();
            ?>
            <div class="content_don">
                <div class="categorie_name_don"><?php the_field('contexte'); ?></div>
                <div class="title_content">
                    <?php the_title() ?>
                </div>

                <div class="description_content">
                    <?php the_content() ?>
                </div>

                <div class="block_button">
                    <a href="#" class="don_button">Faire un don</a>
                </div>
            </div>
            <?php
        endwhile;
        ?>

    </div>
</div>

<div id="projet">
    <div class="block_projet">

        <?php
        $loopProjet = new WP_Query( array( 'post_type' => 'projet') );
        $index = -1;
        while ( $loopProjet->have_posts() ) : $loopProjet->the_post(); $index++;
        ?>
        <div class="content_projet">
            <h2 class="categorie_name_projet"><?php the_field('projet'); ?></h2>
            <h1 class='title_projet'>
                <?php the_title(); ?>
            </h1>
            <div class='description_projet'>
                <?php the_content(); ?>
            </div>
        </div>
    </div>
    <?php
    endwhile;
    ?>

</div>


<div id="objectifs">
    <div class="block_objectif">

        <?php
        $loopObjectif = new WP_Query( array( 'post_type' => 'objectif') );
        $index = -1;
        while ( $loopObjectif->have_posts() ) : $loopObjectif->the_post(); $index++;
            ?>
            <div class="content_objectif">
                <h2 class="categorie_name_objectif"><?php the_field('objectif'); ?></h2>
                <h1 class='title_objectif'>
                    <?php the_title(); ?>
                </h1>
                <div class='description_objectif'>
                    <?php the_content(); ?>
                </div>
            </div>
            <?php
        endwhile;
        ?>

    </div>

    <div class="block_chiffre">


        <?php
        $loopChiffre = new WP_Query( array( 'post_type' => 'chiffre') );
        $index = -1;
        while ( $loopChiffre->have_posts() ) : $loopChiffre->the_post(); $index++;
            ?>
            <div class="content_chiffre">
                <h1 class='title_chiffre'>
                    <?php the_title(); ?>
                </h1>
                <div class='description_chiffre'>
                    <?php the_content(); ?>
                </div>
            </div>
            <?php
        endwhile;
        ?>

    </div>
</div>



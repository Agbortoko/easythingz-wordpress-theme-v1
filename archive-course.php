<?php get_header(); ?>


 <?php get_search_form() ?>



<section class="course p-1 mt-1">

<div class="course__content container">

    <h2>📺 <?= the_archive_title() ?></h2>
    <p class="taxonomy-description"> <?= the_archive_description() ?></p>

   
    <div class="course__grid grid">

    

    <?php if (have_posts()): ?>

        <?php while( have_posts()): the_post(); ?>
    
            <?= get_template_part('content', 'archive-course') ?>
    
        <?php endwhile ?>

    </div>

    <section class="pagination mt-2">
        <div class="pagination__content container">

            <div class="pagination__numbers">
                 <?php the_posts_navigation() ?>
            </div>
           
        </div>
     </section>

    <?php else: ?>

        <h2> <?= __('No archive results') ?></h2>

    <?php endif ?>



    </div>

</section>





<?php get_footer(); ?>
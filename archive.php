<?php get_header(); ?>


 <?php get_search_form() ?>



<section class="post p-1 mt-2">

<div class="post__content container">
    
    <h3>📰 <?= the_archive_title() ?></h3>

    <div class="post__grid grid">

    

    <?php if (have_posts()): ?>

        <?php while( have_posts()): the_post(); ?>
    
            <?= get_template_part('content', 'archive') ?>
    
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
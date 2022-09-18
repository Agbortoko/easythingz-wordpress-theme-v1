<?php get_header(); ?>


 <?php get_search_form() ?>



<section class="post p-1 mt-2">

<div class="post__content container">
    
    <h3>📰 All Blog Posts</h3>

    <div class="post__grid grid">

    <?php 

        $current_page = (get_query_var('paged')) ? get_query_var('paged') : 1;

        $args = ['posts_per_page' => 6, 'paged' => $current_page];
        query_posts($args);

    ?>

    <?php if (have_posts()): ?>

    <?php while( have_posts()): the_post(); ?>
    
        <?= get_template_part('template-parts/content') ?>
    
        <?php endwhile ?>

    </div>
    </div>

</section>



<section class="pagination p-1 mt-2">
        <div class="pagination__content container">
    

            <div class="pagination__numbers">

                <?php next_posts_link( 'Older Posts'); ?>

                <?php //posts_nav_link(); ?>

                <!-- <a class="active" href="#">1</a>
                <a href="#">2</a>
                <a href="#">3</a> -->
                <?php previous_posts_link( 'Newer Posts'); ?>

            </div>
           
          

        </div>
     </section>


 <?php endif ?>
 <?php wp_reset_query(); ?>


<?php get_footer(); ?>
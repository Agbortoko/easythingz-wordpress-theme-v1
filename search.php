<?php get_header(); ?>


 <?php get_search_form() ?>



<section class="post p-1 mt-2">

<div class="post__content container">
    
    <h3>📰 All Search results</h3>

    <div class="post__grid grid">

    <?php if (have_posts()): ?>

    <?php while( have_posts()): the_post(); ?>
    
        <?= get_template_part('content', 'search') ?>
    
        <?php endwhile ?>

    <?php else: ?>

        <h2> <?= __('No search results') ?></h2>

    <?php endif ?>

    </div>
    </div>

</section>





<?php get_footer(); ?>
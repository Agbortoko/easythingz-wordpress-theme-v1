<?php

    /*
        Template Name: Page with no hero section
    */

?>


<?php get_header(); ?>


<section class="search p-1 mt-2">
        <div class="search__content container">

            <form action="" class="search__form">
                <input type="search" placeholder="Looking for Something?" name="" id="" />
                <button type="submit">Search</button>
            </form>

        </div>
</section>



<section class="post p-1 mt-2">
    <div class="post__content container">
    
    <h3>📰 Our recent post</h3>

    <div class="post__grid grid">

    
        <?php if (have_posts()): ?>

        <?php while( have_posts()): the_post(); ?>

         <a href="blog-detail.html">
                <div class="post__grid-item">

                    <div class="post__image" style="background-image: url('images/post/flex-vs-grid.jpg');"></div>

                    <div class="post__text p-1">
                        <h3><?= the_title() ?></h3>
                        
                         <?= the_excerpt() ?>

                        <div class="post__cta">
                            <p><strong>Read More ✅ </strong> </p>
                        </div>

                    </div>

                </div>
            </a>

        <?php endwhile ?>

        <?php endif ?>

    </div>
    </div>

</section>





<?php get_footer(); ?>
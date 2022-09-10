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

    
        <?= get_template_part('template-parts/content') ?>

    </div>
    </div>

</section>





<?php get_footer(); ?>
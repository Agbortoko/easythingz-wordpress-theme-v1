<?php get_header(); ?>



<section class="blog p-1 mt-2">

<div class="blog__content container">

    <div class="blog__grid">

        <main class="blog__main">

            <h1>
                <?= the_title() ?>
            </h1>

            <div class="blog__meta">
                <div class="blog__meta-published"><span>Published:</span>  <?= the_time('F j, Y') ?> </div>    
            </div>

             <div class="blog__info">

                <?= the_content() ?>

             </div>

        </main>


        <?= get_sidebar() ?>


    </div>

   


</div>





</section>




<?php get_footer(); ?>
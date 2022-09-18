
<?php

/*
    Template Name: Page with no sidebar
*/

?>

<?php get_header(); ?>


<section class="post p-1 mt-2">
    <div class="post__content container">
    
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


    </div>

</section>





<?php get_footer(); ?>
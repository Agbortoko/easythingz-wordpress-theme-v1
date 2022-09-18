<?php get_header(); ?>



<section class="blog p-1 mt-2">

<div class="blog__content container">

    <div class="blog__grid">

        <main id="post-<?= the_ID(); ?>" class="blog__main">

        
            <p><small> <?= the_category(" ") ?></small></p>

            <h1>
                <?= the_title() ?>
            </h1>

            <p><?= the_tags(); ?></p>

            <div class="blog__meta">
                <div class="blog__meta-published"><span>Published:</span>  <?= the_time('F j, Y') ?> </div>    
            </div>

             <div class="blog__info">

                <?= the_content() ?>

             </div>
            
             <!-- 
             <div class="blog__comment">

                <?php //if(comments_open() ) { comments_template(); } else { echo "<h3>No comments allowed </h3>"; }  ?>

             </div> -->

        </main>


        <?= get_sidebar() ?>


    </div>

   


</div>



    </section>

            <section class="pagination p-1 mt-2">
                    <div class="pagination__content container">
                

                        <div class="pagination__grid">

                            <div class="pagination__grid--start"><?php previous_post_link(); ?> </div>

                            <div class="pagination__grid--end"> <?php next_post_link(); ?></div>

                        </div>
                

                    </div>
        </section>
            







<?php get_footer(); ?>
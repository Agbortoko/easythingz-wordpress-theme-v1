<?php

    /*
        Template Name: Page with Sidebar
    */

?>


<?php get_header(); ?>



<section class="about p-1 mt-2">

<div class="about__content container">

    <div class="about__grid">

        <main class="about__main">

            <h1><?= the_title() ?></h1>

             <div class="about__info">

                <div class="about__image">

                    <figure>
                        <a href="images/about/agbortoko-arreychuck.jpg">

                        <!-- <img loading="lazy" src="images/about/agbortoko-arreychuck.jpg" alt="Agbortoko Arreychuck"  class="" srcset="images/about/agbortoko-arreychuck.jpg" sizes="(max-width: 251px) 100vw, 251px" width="251"></a> -->
                         <?= the_post_thumbnail('medium', ['sizes' => '(max-width: 251px) 100vw, 251px ','width' => '251']); ?>

                        </a>

                        <figcaption><?= the_post_thumbnail_caption() ?></figcaption>

                    </figure> 

                </div>

                <?= the_content() ?>

             </div>

        </main>



        <?= get_sidebar() ?>



    </div>


</div>


</section>




<?php get_footer(); ?>
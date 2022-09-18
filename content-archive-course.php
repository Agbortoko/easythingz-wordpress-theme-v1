        
        <a target="_blank" href="<?= get_post_meta(get_the_ID(), 'youtube_url', TRUE); ?>">
            <div class="course__grid-item">

                <div class="course__image" style="background-image: url('<?= the_post_thumbnail_url() ?>');"></div>

                <div class="course__text p-1">
                    <h3><?= the_title() ?></h3>

                     <div class="course__cta">
                       <p><strong>Watch Now 📺</strong></p> 
                     </div>

                </div>

            </div>
        </a>




<a href="<?= the_permalink() ?>">
        <div class="post__grid-item">

            <div class="post__image" style="background-image: url('<?= the_post_thumbnail_url() ?>');"></div>

            <div class="post__text p-1">

                <h3><?= the_title() ?></h3>

                 <?= the_excerpt() ?>

                <div class="post__cta">
                    <p><strong>Read More ✅ </strong> </p>
                </div>

            </div>

        </div>
</a>


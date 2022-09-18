<header class="header">

    <div class="header__content container">

         <?= the_custom_logo() ?>
        
        <!-- <a href="index.html" class="header__logo">
            <img src="<?= get_template_directory_uri().'/assets/images/logo-dark.svg' ?>" alt="Easythingz logo" />
        </a> -->

        <nav class="header__navigation">
            <?php 
                wp_nav_menu([
                    'theme_location' => 'primary',
                    'menu_class' => 'header__menu',
                ]);
            ?>
   
        </nav>

    </div>


</header>
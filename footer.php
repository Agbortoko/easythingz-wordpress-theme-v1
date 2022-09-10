
    <footer class="footer p-1 mt-2">

        <div class="footer__content container">

            <div class="footer__grid">

                <div class="footer__grid-item">
                <nav class="footer__navigation">
                       <?php
                          wp_nav_menu([
                            'theme_location' => 'secondary',
                            'menu_class' => 'footer__menu'
                          ]);
                       ?>
                </nav>
                </div>
                <div class="footer__grid-item mt-sm-1">
                    
                    <div class="footer__copyright">
                        © 2022 Easythingz
                    </div>
                
                </div>

            </div>

        </div>

    </footer>

    <?php wp_footer(); ?>

</body>
</html>
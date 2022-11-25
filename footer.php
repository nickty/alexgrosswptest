<footer>
    <section class="footer">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div>
                        <?php
                            wp_nav_menu( array(
                                'theme_location'    => 'footer_menu',
                                'menu_class'        => 'myfootermenuclass',
                            ) );
                        ?>
                    </div>
                    <div></div>
                </div>
                <div class="col">
                    <p>
                    Copyright © ABB AG
                    </p>
                </div>
            </div>
        </div>
    </section>
</footer>

<?php wp_footer(); ?>
</body>
</html>
<footer>
    <section class="footer">
        <div class="container">
            <div class="row foot-flex">
                <div class="col inner-f">
                    <div>
                        <?php
                            wp_nav_menu( array(
                                'theme_location'    => 'footer_menu',
                                'menu_class'        => 'myfootermenuclass',
                            ) );
                        ?>
                    </div>
                    <div>
                    <i class="fa-brands fa-square-facebook"></i>
                    <img src="http://localhost/alexgross/wp-content/uploads/2022/11/Icon-awesome-facebook-square.png" alt="" />
                    <img src="http://localhost/alexgross/wp-content/uploads/2022/11/Icon-awesome-twitter-square.png" alt="" />
                    <img src="http://localhost/alexgross/wp-content/uploads/2022/11/Icon-awesome-linkedin.png" alt="" />
                    </div>
                </div>
                <div class="col">
                    <p class="copyright">
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
    <div class="ichiran">
        <div class="container">
            <div class="row ichiran-pc">
                <div class="col-md-6">
                    <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'disappear_footer_left',
                                'container' => false,
                            )
                        );
                    ?>
                </div>
                <div class="col-md-6">
                    <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'disappear_footer_right',
                                'container' => false,
                            )
                        );
                    ?>
                </div>
                <hr>
            </div>
            <div class="row ichiran-group">
                <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'footer_link',
                                'container' => false,
                            )
                        );
                ?>
            </div>
        </div>
    </div>
</main>
<footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-6 col-sm-6">
                    <div class="logo">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="">
                    </div>
                </div>
                <div class="col-6 col-sm-6">
                    <p>Copyright - TEST-ITsenmongakkou, 2021 All Rights Reserved</p>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
</div>
</body>
</html>
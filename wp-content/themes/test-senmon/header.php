<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <title>TEST-IT</title>
</head>
<body>
<div class="wrap">
    <header class="header">
        <div class="container-fluid">
            <div class="flex">
                <div class="logo">
                    <h1><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="TEST-IT専門学校"></a></h1>
                </div>
                <nav class="nav">
                    <div class="nav-group disappear_pc">
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'pc_header',
                                'container' => false,
                            )
                        );
                        ?>
                    </div>
                    <div class="nav-group appearance_smartphone">
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'sp_header',
                                'container' => false,
                            )
                        );
                        ?>
                    </div>
                </nav>
                <div class="search">
                    <form method="get" action="<?php bloginfo('url'); ?>" class="search_container">
                        <input type="text" name="s" size="25" placeholder="サイト内検索">
                        <input class="fas" type="submit" value="&#xf002;">
                    </form>
                </div>
                <div class="icon">
                    <div class="siryou-icon">
                    <?php if ( is_home() ) { ?>
                        <a href="#siryou">
                            <i class="fas fa-file-alt fa-3x"></i>
                            <p>資料請求</p>
                        </a>
                    <?php } else { ?>
                        <a href="<?php echo get_permalink( 133 ); ?>">
                            <i class="fas fa-file-alt fa-3x"></i>
                            <p>資料請求</p>
                        </a>
                    <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </header>
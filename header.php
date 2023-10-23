<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <title><?php bloginfo( 'name' )?>;</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <!--Get your own code at fontawesome.com-->
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri()?>">
    <link rel="stylesheet" type="text/css" href=" <?php echo get_template_directory_uri();?>/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/metro.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/tooltip.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/responsive.css">
    <!--[ if IE]-->
    <script src="/js/html5shiv.js"></script>
    <!--[end if]-->
    <script src="<?php echo get_template_directory_uri();?>/js/jquery-1.8.2.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/js/scrollbar.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/js/jquery.easing.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/js/jquery.easy-ticker.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/js/tooltip.js"></script>
    <script type="text/javascript">
    jQuery(document).ready(function($) {
        $("#metro-box").mCustomScrollbar({
            horizontalScroll: true,
        });
    });
    </script>

    <script type="text/javascript">
    $(function() {
        $(".demo").easyTicker({
            direction: 'up',
            easing: 'swing',
            speed: 'slow',
            interval: 2000,
            height: 'auto',
            visible: 0,
            mousePause: true,
            controls: {
                up: '',
                down: '',
                toggle: '',
                playText: 'Play',
                stopText: 'Stop'
            },
            callbacks: {
                before: false,
                after: false
            }
        });
    });
    </script>

</head>

<body>
    <div class="head-menu">
        <div class="main-menu">
            <div class="search-icon" role="search">
                <form action="<?php bloginfo("home")?>" method="get">
                    <input type="text" name="s" value="">
                </form>
            </div>

            <?php
                wp_nav_menu( array('theme_location' => 'top_menu',"container"=>"") );
                ?>
        </div>
    </div>
    <div class="main" role="main">
        <header>
            <nav class="header-nav" role="navigation">

                <?php wp_nav_menu( array('theme_location' => 'main_menu',"container"=>"") );?>

                <ul style=" display: flex; flex-wrap: wrap;margin-right: 100px;">
                    <li class="fa fa-home" style="background-color:#1648ae; border-radius:10px 0px 10px 0px;"><a
                            href="#">
                            صفحه اصلی
                        </a></li>
                    <li class="fa fa-gears" style="background-color: #1a9dc4; border-radius:10px 0px 10px 0px;"><a
                            href="#">
                            نرم افزار
                        </a></li>
                    <li class="fa fa-music" style="background-color: #f0f317; border-radius:10px 0px 10px 0px;"><a
                            href="#">
                            موزیک
                        </a></li>
                    <li class="fa fa-code-fork" style="background-color: #14ab46;;border-radius:10px 0px 10px 0px;"><a
                            href="#">
                            شبکه
                        </a></li>
                    <li class="fa fa-android" style="background-color: #A3CB38;border-radius:10px 0px 10px 0px;"><a
                            href="#">
                            اندروید
                        </a></li>
                    <li class="fa fa-apple" style="background-color: #f64912;border-radius:10px 0px 10px 0px;"><a
                            href="#">
                            ios
                        </a></li>
                    <li class="fa fa-weibo" style="background-color: #EA2027;border-radius:10px 0px 10px 0px;"><a
                            href="#">
                            web
                        </a></li>
                </ul>
            </nav>
            <div class="logo"><a href="<?php bloginfo( "url" );?>">
                    <img src="<?php echo get_template_directory_uri();?>/images/logo.png" alt="">
            </div>
        </header>
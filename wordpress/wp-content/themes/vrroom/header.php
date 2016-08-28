<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="vrroom.nl">
    <meta name="author" content="DBK.nl">
    <link rel="icon" href="<?php echo get_template_directory_uri();?>/favicon/icon-114x114.png">


    <title><?php the_title();?></title>
    
    <?php wp_head();?>
    
    <!-- Bootstrap Core CSS -->
    <!-- <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'> -->
    <!-- <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300' rel='stylesheet' type='text/css'> -->

    <!-- <link href="css/main.css" rel="stylesheet"> -->
    <!-- <link href="css/apps.css" rel="stylesheet"> -->
    <!-- <link href="css/slick.css" rel="stylesheet">
    <link href="css/slick-theme.css" rel="stylesheet"> -->
    <!-- <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet"> -->

    <!-- <script src="js/snap.svg-min.js"></script> -->
    <!-- <script src="js/header.js"></script> -->
    <!-- <script src="js/modernizr.custom.js"></script> -->

    <!-- <link rel="stylesheet" type="text/css" href="css/demo.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/custom.css" /> -->
    <!-- <script type="text/javascript" src="js/modernizr.custom.79639.js"></script> -->
    <!-- <noscript>
        <link rel="stylesheet" type="text/css" href="css/styleNoJS.css" />
    </noscript>
 -->    <!-- Custom CSS -->
    <!-- <style>
    body {
        padding-top: 70px;
        /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
    }
    </style> -->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

        <!-- Navigation -->
<div id="o-wrapper" class="o-wrapper">

    <main class="o-content">
        <div class="o-container">
            <div class="c-buttons">
            <a class="navbar-brand" href="#frontpage">
                <img src="<?php echo get_template_directory_uri();?>/img/logo_clean.png" alt="Vrroom" class="logo">
            </a>
                <button id="c-button--slide-top" class="c-button"><i class="fa fa-bars fa-lg" aria-hidden="true"></i></button>
            </div>
        </div><!-- /o-container -->
    </main><!-- /o-content -->

</div><!-- /o-wrapper -->


<nav id="c-menu--slide-top" class="c-menu c-menu--slide-top">


<?php
    // wp_nav_menu( array(
    // 'menu'              => 'primary',
    // 'theme_location'    => 'primary',
    // 'menu_class'        => 'c-menu__items',
    // 'walker'            => new wp_bootstrap_navwalker())
    // );

   
        wp_nav_menu( array(
            'theme_location' => 'primary-menu',
            'menu_class'     => 'c-menu__items',
            'container' => ''

            ) ); 
    
?>
    <!-- <ul class="c-menu__items">
        <li class="c-menu__item"><a href="#experiences" class="c-menu__link">RESERVEREN</a></li>
        <li class="c-menu__item"><a href="#event" class="c-menu__link">EVENEMENTEN</a></li>
    </ul> -->
    <button class="c-menu__close pull-right hidden-xs"><strong><i class="fa fa-times" aria-hidden="true"></i></strong></button>
</nav><!-- /c-menu slide-top -->

<div id="c-mask" class="c-mask"></div><!-- /c-mask -->

    <!-- Page Content -->
    <div class="container demo-2" id="frontpage">
        <div id="slider" class="sl-slider-wrapper">
            <div class="sl-slider">
        
                <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
                    <div class="sl-slide-inner">
                        <?php if( get_field('head_one_img') ): ?>
                            <div class="bg-img bg-img-1" style="background-image: url('<?php the_field('head_one_img'); ?>');"></div>
                        <?php endif; ?>
                        <h2><?php the_field('header_one_title'); ?></h2>
                        <blockquote><p><?php the_field('header_one_paragraph'); ?> <span><i class="fa fa-quote-left" aria-hidden="true"></i> Ultimate Experience Rooms. <i class="fa fa-quote-right" aria-hidden="true"></i><span></p><cite class="reserveren"><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="#experiences" class="smoothscroll">Nu Reserveren</a></cite></blockquote>
                    </div>
                </div>
            
                <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
                    <div class="sl-slide-inner">
                        <?php if( get_field('head_two_img') ): ?>
                            <div class="bg-img bg-img-2" style="background-image: url('<?php the_field('head_two_img'); ?>');"></div>
                        <?php endif; ?>
                        <h2><?php the_field('head_two_title'); ?></h2>
                        <blockquote><p><?php the_field('header_two_paragraph'); ?> <span><a href="#experiences" class="lees smoothscroll"> Lees meer</a></span></p><cite class="reserveren"><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="#experiences" class="smoothscroll">Nu Reserveren</a></cite></blockquote>
                    </div>
                </div>
            
                <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
                    <div class="sl-slide-inner">
                        <?php if( get_field('header_three_img') ): ?>
                            <div class="bg-img bg-img-3" style="background-image: url('<?php the_field('header_three_img'); ?>');"></div>
                        <?php endif; ?>
                        <h2><?php the_field('header_three_title'); ?></h2>
                        <blockquote><p><?php the_field('header_three_paragraph'); ?> <span><a href="#experiences" class="lees smoothscroll"> Lees meer</a></span></p><cite class="reserveren"><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="#experiences" class="smoothscroll">Nu Reserveren</a></cite></blockquote>
                    </div>
                </div>
                
                <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="-5" data-slice2-rotation="25" data-slice1-scale="2" data-slice2-scale="1">
                    <div class="sl-slide-inner">
                        <?php if( get_field('header_four_img') ): ?>
                            <div class="bg-img bg-img-4" style="background-image: url('<?php the_field('header_four_img'); ?>');"></div>
                        <?php endif; ?>
                        <h2><?php the_field('header_four_title'); ?></h2>
                        <blockquote><p><?php the_field('header_four_paragraph'); ?> <span><a href="#experiences" class="lees smoothscroll"> Lees meer</a></span></p><cite class="reserveren"><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="#experiences" class="smoothscroll">Nu Reserveren</a></cite></blockquote>
                    </div>
                </div>
            
                <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-5" data-slice2-rotation="10" data-slice1-scale="2" data-slice2-scale="1">
                    <div class="sl-slide-inner">
                        <?php if( get_field('header_five_img') ): ?>
                            <div class="bg-img bg-img-5" style="background-image: url('<?php the_field('header_five_img'); ?>');"></div>
                        <?php endif; ?>
                        <h2><?php the_field('header_five_title'); ?></h2>
                        <blockquote><p><?php the_field('header_five_paragraph'); ?> <span><a href="#experiences" class="lees smoothscroll"> Lees meer</a></span></p><cite class="reserveren"><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="#experiences" class="smoothscroll">Nu Reserveren</a></cite></blockquote>
                    </div>
                </div>
            </div><!-- /sl-slider -->

                <nav id="nav-dots" class="nav-dots">
                    <span class="nav-dot-current"></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </nav>

        </div><!-- /slider-wrapper -->
        <!-- /.row -->

    </div><!-- /.container -->
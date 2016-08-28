<?php get_header(); ?>

    <section class="logos darken-blue" style="background-image: url('<?php echo get_template_directory_uri();?>/img/max.jpg');">
        <div class="container">
            <div class="row">
                <?php

                // check if the repeater field has rows of data
                if( have_rows('logos_games') ):

                    // loop through the rows of data
                    while ( have_rows('logos_games') ) : the_row();
                ?>    
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4">
                        <img class="img-responsive" src="<?php the_sub_field('logo');?>">
                    </div>
                <?php
                    endwhile;

                else :

                    // no rows found

                endif;

                ?>

            </div>
        </div>        
    </section>

    <section class="htcVive">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h1><?php the_field('htc_vive_title'); ?></h1>
                    <p><?php the_field('htc_vive_paragraph'); ?></p>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <?php if( get_field('htc_vive_img') ): ?>
                        <img src="<?php the_field('htc_vive_img'); ?>" data-aos="slide-up" class="img-responsive center-block">
                    <?php endif; ?>        
                </div>
            </div>
        </div>
    </section>
    

    <?php if( get_field('experiences_background') ): ?>
        <section class="experiences darken-bg" style="background-image: url('<?php the_field('experiences_background'); ?>');" id="experiences">
    <?php endif; ?> 
    <!-- <section class="experiences" style="background-color: black;"> -->
        <div class="container">
            <h1><i class="fa fa-gamepad fa-lg" aria-hidden="true"></i>Experiences</h1>
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#home">Originals</a></li>
                    <li><a data-toggle="tab" href="#menu1">Shooters</a></li>
                    <li><a data-toggle="tab" href="#menu2">Music</a></li>
                    <li><a data-toggle="tab" href="#menu3">Movies</a></li>
                </ul>

          <div class="tab-content">
            <div id="home" class="tab-pane fade in active">
              <section class="center slider originals">
                <?php
                    $type = 'experiences';
                    $args = array ( 
                                    'post_type' => $type,
                                    'experience_category' => 'originals',
                                    'post_status' => 'publish',
                                    'posts_per_page' => -1
                                    );
                    $my_query = new WP_query($args);
                        
                        if ( $my_query->have_posts()) {
                            while ($my_query->have_posts()) : $my_query->the_post();

                            $url_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                    ?>
                        <div class="text-center">
                            <a href="#" data-toggle="modal" data-target="#<?php the_ID()?>">
                                <div class="image hover10">
                                  <figure><img src="<?php echo $url_image; ?>" alt="<?php echo get_the_title() ?>"></figure>
                                  <p class="title"><?php echo get_the_title() ?></p>
                                </div>
                             </a>
                        </div>



                    <?php

                            endwhile;
                        }
                    wp_reset_query(); //Restore global post    
                ?>
                </section>
            </div>

            <div id="menu1" class="tab-pane fade">
              <section class="center slider reload">
                <?php
                    $type = 'experiences';
                    $args = array ( 
                                    'post_type' => $type,
                                    'experience_category' => 'shooters',
                                    'post_status' => 'publish',
                                    'posts_per_page' => -1
                                    );
                    $my_query = new WP_query($args);
                        
                        if ( $my_query->have_posts()) {
                            while ($my_query->have_posts()) : $my_query->the_post();

                            $url_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                    ?>
                        <div class="text-center">
                            <a href="#" data-toggle="modal" data-target="#<?php the_ID()?>">
                                <div class="image hover10">
                                  <figure><img src="<?php echo $url_image; ?>" alt="<?php echo get_the_title() ?>"></figure>
                                  <p class="title"><?php echo get_the_title() ?></p>
                                </div>
                             </a>
                        </div>

                    <?php

                            endwhile;
                        }
                    wp_reset_query(); //Restore global post    
                ?>
              </section>
            </div>

            <div id="menu2" class="tab-pane fade">
              <section class="center slider reload">
                 <?php
                    $type = 'experiences';
                    $args = array ( 
                                    'post_type' => $type,
                                    'experience_category' => 'music',
                                    'post_status' => 'publish',
                                    'posts_per_page' => -1
                                    );
                    $my_query = new WP_query($args);
                        
                        if ( $my_query->have_posts()) {
                            while ($my_query->have_posts()) : $my_query->the_post();

                            $url_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                    ?>
                        <div class="text-center">
                            <a href="#" data-toggle="modal" data-target="#<?php the_ID()?>">
                                <div class="image hover10">
                                  <figure><img src="<?php echo $url_image; ?>" alt="<?php echo get_the_title() ?>"></figure>
                                  <p class="title"><?php echo get_the_title() ?></p>
                                </div>
                             </a>
                        </div>

                    <?php

                            endwhile;
                        }
                        wp_reset_query(); //Restore global post    
                    ?>

              </section>
            </div>

            <div id="menu3" class="tab-pane fade">
              <section class="center slider reload1">
                <?php
                    $type = 'experiences';
                    $args = array ( 
                                    'post_type' => $type,
                                    'experience_category' => 'movie',
                                    'post_status' => 'publish',
                                    'posts_per_page' => -1
                                    );
                    $my_query = new WP_query($args);
                        
                        if ( $my_query->have_posts()) {
                            while ($my_query->have_posts()) : $my_query->the_post();

                            $url_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                    ?>
                        <div class="text-center">
                            <a href="#" data-toggle="modal" data-target="#<?php the_ID()?>">
                                <div class="image hover10">
                                  <figure><img src="<?php echo $url_image; ?>" alt="<?php echo get_the_title() ?>"></figure>
                                  <p class="title"><?php echo get_the_title() ?></p>
                                </div>
                             </a>
                        </div>

                    <?php

                            endwhile;
                        }
                    wp_reset_query(); //Restore global post    
                    
                    ?>
                </section>
            </div>

          </div>
        </div>
        </section>

    <!-- modal originals-->
    <?php
        $type = 'experiences';
        $args = array ( 
                        'post_type' => $type,
                        'experience_category' => 'originals',
                        'post_status' => 'publish',
                        'posts_per_page' => -1
                        );
        $my_query = new WP_query($args);
            
            if ( $my_query->have_posts()) {
                while ($my_query->have_posts()) : $my_query->the_post();

                $url_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
    ?>
    <div class="modal fade" id="<?php the_ID() ?>" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <?php
                                $terms = get_the_terms( $post->ID , 'experience_category' );
                                    foreach ( $terms as $term ) {
                                        $category_name = $term->name;
                                    }
                            ?>
                                <p><?php echo "VR" . " " . $category_name?></p>
                                <h4 class="modal-title" id="myModalLabel"><?php echo get_the_title() ?></h4>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="steam pull-right">
                                    <?php if( get_field('steam_logo') ): ?>
                                        <img src="<?php the_field('steam_logo'); ?>" class="img-responsive center-block">
                                    <?php endif; ?>    
                                    <ul class="star">
                                        <?php $stars = array(   '1-star' => 1,
                                                    '2-star' => 2,
                                                    '3-star' => 3,
                                                    '4-star' => 4,
                                                    '5-star' => 5);

                                        $numstars = $stars[get_field('rating_steam')];
                                        for($i= 0;$i < 5;$i++){
                                            if($i < $numstars){
                                        ?>
                                                   <li class="star"><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <?php
                                            }
                                            else{
                                        ?>        
                                                <li class="star"><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                        <?php        
                                            }

                                        }
                                        ?>
                                       
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <ul>
                                    <li><i class="fa fa-clock-o fa-2x" aria-hidden="true"></i><h5><?php the_field('duur'); ?></h5>
                                    <p><?php the_field('duur_paragraph'); ?></p>
                                    </li>
                                    <li><i class="fa fa-gamepad fa-2x" aria-hidden="true"></i><h5><?php the_field('deelnemer'); ?></h5>
                                    <p><?php the_field('deelnemer_paragraph'); ?></p>
                                    </li>
                                    <li><i class="fa fa-eye fa-2x" aria-hidden="true"></i><h5><?php the_field('leeftijd'); ?></h5>
                                    <p><?php the_field('leeftijd_paragraph'); ?></p>
                                    </li>
                                    <li><i class="fa fa-tag fa-2x" aria-hidden="true"></i><h5><?php the_field('genre'); ?></h5>
                                    <p><?php the_field('genre_paragraph'); ?></p>
                                    </li>
                                    <li><i class="fa fa-shield fa-2x" aria-hidden="true"></i><h5><?php the_field('versie'); ?></h5>
                                    <p><?php the_field('versie_paragraph'); ?></p>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <h5>Meer informatie</h5>
                                <p><?php the_field('meer_informatie'); ?><p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <h5>Beschikbaarheid</h5>
                                <ul class="tijden">
                                <?php

                                    // check if the repeater field has rows of data
                                    if( have_rows('beschikbaarheid') ):

                                        // loop through the rows of data
                                        while ( have_rows('beschikbaarheid') ) : the_row();
                                ?>    
                                    <li><?php the_sub_field('tijden');?></li>
                                <?php    
                                        endwhile;

                                    else :

                                        // no rows found

                                    endif;

                                ?>
                                </ul>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <h5>Reserveren</h5>  

                                <?php echo do_shortcode( '[contact-form-7 id="184" title="Reserveren"]' ); ?>

                            </div>
                        </div><!-- .row -->

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">sluiten</button>
                </div>
            </div>
        </div>
    </div>
    <?php

                endwhile;
            }
        wp_reset_query(); //Restore global post    
    ?>

    <!-- modal shooters -->
     <?php
        $type = 'experiences';
        $args = array ( 
                        'post_type' => $type,
                        'experience_category' => 'shooters',
                        'post_status' => 'publish',
                        'posts_per_page' => -1
                        );
        $my_query = new WP_query($args);
            
            if ( $my_query->have_posts()) {
                while ($my_query->have_posts()) : $my_query->the_post();

                $url_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
    ?>
    <div class="modal fade" id="<?php the_ID() ?>" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <?php
                                $terms = get_the_terms( $post->ID , 'experience_category' );
                                    foreach ( $terms as $term ) {
                                        $category_name = $term->name;
                                    }
                            ?>
                                <p><?php echo "VR" . " " . $category_name?></p>
                                <h4 class="modal-title" id="myModalLabel"><?php echo get_the_title() ?></h4>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="steam pull-right">
                                    <?php if( get_field('steam_logo') ): ?>
                                        <img src="<?php the_field('steam_logo'); ?>" class="img-responsive center-block">
                                    <?php endif; ?>    
                                    <ul class="star">
                                        <?php $stars = array(   '1-star' => 1,
                                                    '2-star' => 2,
                                                    '3-star' => 3,
                                                    '4-star' => 4,
                                                    '5-star' => 5);

                                        $numstars = $stars[get_field('rating_steam')];
                                        for($i= 0;$i < 5;$i++){
                                            if($i < $numstars){
                                        ?>
                                                   <li class="star"><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <?php
                                            }
                                            else{
                                        ?>        
                                                <li class="star"><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                        <?php        
                                            }

                                        }
                                        ?>
                                       
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <ul>
                                    <li><i class="fa fa-clock-o fa-2x" aria-hidden="true"></i><h5><?php the_field('duur'); ?></h5>
                                    <p><?php the_field('duur_paragraph'); ?></p>
                                    </li>
                                    <li><i class="fa fa-gamepad fa-2x" aria-hidden="true"></i><h5><?php the_field('deelnemer'); ?></h5>
                                    <p><?php the_field('deelnemer_paragraph'); ?></p>
                                    </li>
                                    <li><i class="fa fa-eye fa-2x" aria-hidden="true"></i><h5><?php the_field('leeftijd'); ?></h5>
                                    <p><?php the_field('leeftijd_paragraph'); ?></p>
                                    </li>
                                    <li><i class="fa fa-tag fa-2x" aria-hidden="true"></i><h5><?php the_field('genre'); ?></h5>
                                    <p><?php the_field('genre_paragraph'); ?></p>
                                    </li>
                                    <li><i class="fa fa-shield fa-2x" aria-hidden="true"></i><h5><?php the_field('versie'); ?></h5>
                                    <p><?php the_field('versie_paragraph'); ?></p>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <h5>Meer informatie</h5>
                                <p><?php the_field('meer_informatie'); ?><p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <h5>Beschikbaarheid</h5>
                                <ul class="tijden">
                                <?php

                                    // check if the repeater field has rows of data
                                    if( have_rows('beschikbaarheid') ):

                                        // loop through the rows of data
                                        while ( have_rows('beschikbaarheid') ) : the_row();
                                ?>    
                                    <li><?php the_sub_field('tijden');?></li>
                                <?php    
                                        endwhile;

                                    else :

                                        // no rows found

                                    endif;

                                ?>
                                </ul>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <h5>Reserveren</h5>    
                                
                                <?php echo do_shortcode( '[contact-form-7 id="184" title="Reserveren"]' ); ?>

                            </div>
                        </div><!-- .row -->

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">sluiten</button>
                </div>
            </div>
        </div>
    </div>
    <?php

                endwhile;
            }
        wp_reset_query(); //Restore global post    
    ?>

    <!-- modal music -->
    <?php
        $type = 'experiences';
        $args = array ( 
                        'post_type' => $type,
                        'experience_category' => 'music',
                        'post_status' => 'publish',
                        'posts_per_page' => -1
                        );
        $my_query = new WP_query($args);
            
            if ( $my_query->have_posts()) {
                while ($my_query->have_posts()) : $my_query->the_post();

                $url_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
    ?>
    <div class="modal fade" id="<?php the_ID() ?>" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <?php
                                $terms = get_the_terms( $post->ID , 'experience_category' );
                                    foreach ( $terms as $term ) {
                                        $category_name = $term->name;
                                    }
                            ?>
                                <p><?php echo "VR" . " " . $category_name?></p>
                                <h4 class="modal-title" id="myModalLabel"><?php echo get_the_title() ?></h4>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="steam pull-right">
                                    <?php if( get_field('steam_logo') ): ?>
                                        <img src="<?php the_field('steam_logo'); ?>" class="img-responsive center-block">
                                    <?php endif; ?>    
                                    <ul class="star">
                                        <?php $stars = array(   '1-star' => 1,
                                                    '2-star' => 2,
                                                    '3-star' => 3,
                                                    '4-star' => 4,
                                                    '5-star' => 5);

                                        $numstars = $stars[get_field('rating_steam')];
                                        for($i= 0;$i < 5;$i++){
                                            if($i < $numstars){
                                        ?>
                                                   <li class="star"><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <?php
                                            }
                                            else{
                                        ?>        
                                                <li class="star"><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                        <?php        
                                            }

                                        }
                                        ?>
                                       
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="container">

                        <div class="row">

                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <ul>
                                    <li><i class="fa fa-clock-o fa-2x" aria-hidden="true"></i><h5><?php the_field('duur'); ?></h5>
                                    <p><?php the_field('duur_paragraph'); ?></p>
                                    </li>
                                    <li><i class="fa fa-gamepad fa-2x" aria-hidden="true"></i><h5><?php the_field('deelnemer'); ?></h5>
                                    <p><?php the_field('deelnemer_paragraph'); ?></p>
                                    </li>
                                    <li><i class="fa fa-eye fa-2x" aria-hidden="true"></i><h5><?php the_field('leeftijd'); ?></h5>
                                    <p><?php the_field('leeftijd_paragraph'); ?></p>
                                    </li>
                                    <li><i class="fa fa-tag fa-2x" aria-hidden="true"></i><h5><?php the_field('genre'); ?></h5>
                                    <p><?php the_field('genre_paragraph'); ?></p>
                                    </li>
                                    <li><i class="fa fa-shield fa-2x" aria-hidden="true"></i><h5><?php the_field('versie'); ?></h5>
                                    <p><?php the_field('versie_paragraph'); ?></p>
                                    </li>
                                </ul>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <h5>Meer informatie</h5>
                                <p><?php the_field('meer_informatie'); ?><p>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <h5>Beschikbaarheid</h5>
                                <ul class="tijden">
                                <?php

                                    // check if the repeater field has rows of data
                                    if( have_rows('beschikbaarheid') ):

                                        // loop through the rows of data
                                        while ( have_rows('beschikbaarheid') ) : the_row();
                                ?>    
                                    <li><?php the_sub_field('tijden');?></li>
                                <?php    
                                        endwhile;

                                    else :

                                        // no rows found

                                    endif;

                                ?>
                                </ul>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <h5>Reserveren</h5>    
                                
                                <?php echo do_shortcode( '[contact-form-7 id="184" title="Reserveren"]' ); ?>

                            </div>
                        </div><!-- .row -->

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">sluiten</button>
                </div>
            </div>
        </div>
    </div>
    <?php

                endwhile;
            }
        wp_reset_query(); //Restore global post    
    ?>

     <!-- modal movie -->
    <?php
        $type = 'experiences';
        $args = array ( 
                        'post_type' => $type,
                        'experience_category' => 'movie',
                        'post_status' => 'publish',
                        'posts_per_page' => -1
                        );
        $my_query = new WP_query($args);
            
            if ( $my_query->have_posts()) {
                while ($my_query->have_posts()) : $my_query->the_post();

                $url_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
    ?>
    <div class="modal fade" id="<?php the_ID() ?>" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <?php
                                $terms = get_the_terms( $post->ID , 'experience_category' );
                                    foreach ( $terms as $term ) {
                                        $category_name = $term->name;
                                    }
                            ?>
                                <p><?php echo "VR" . " " . $category_name?></p>
                                <h4 class="modal-title" id="myModalLabel"><?php echo get_the_title() ?></h4>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="steam pull-right">
                                    <?php if( get_field('steam_logo') ): ?>
                                        <img src="<?php the_field('steam_logo'); ?>" class="img-responsive center-block">
                                    <?php endif; ?>    
                                    <ul class="star">
                                        <?php $stars = array(   '1-star' => 1,
                                                    '2-star' => 2,
                                                    '3-star' => 3,
                                                    '4-star' => 4,
                                                    '5-star' => 5);

                                        $numstars = $stars[get_field('rating_steam')];
                                        for($i= 0;$i < 5;$i++){
                                            if($i < $numstars){
                                        ?>
                                                   <li class="star"><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <?php
                                            }
                                            else{
                                        ?>        
                                                <li class="star"><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                        <?php        
                                            }

                                        }
                                        ?>
                                       
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <ul>
                                    <li><i class="fa fa-clock-o fa-2x" aria-hidden="true"></i><h5><?php the_field('duur'); ?></h5>
                                    <p><?php the_field('duur_paragraph'); ?></p>
                                    </li>
                                    <li><i class="fa fa-gamepad fa-2x" aria-hidden="true"></i><h5><?php the_field('deelnemer'); ?></h5>
                                    <p><?php the_field('deelnemer_paragraph'); ?></p>
                                    </li>
                                    <li><i class="fa fa-eye fa-2x" aria-hidden="true"></i><h5><?php the_field('leeftijd'); ?></h5>
                                    <p><?php the_field('leeftijd_paragraph'); ?></p>
                                    </li>
                                    <li><i class="fa fa-tag fa-2x" aria-hidden="true"></i><h5><?php the_field('genre'); ?></h5>
                                    <p><?php the_field('genre_paragraph'); ?></p>
                                    </li>
                                    <li><i class="fa fa-shield fa-2x" aria-hidden="true"></i><h5><?php the_field('versie'); ?></h5>
                                    <p><?php the_field('versie_paragraph'); ?></p>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <h5>Meer informatie</h5>
                                <p><?php the_field('meer_informatie'); ?><p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <h5>Beschikbaarheid</h5>
                                <ul class="tijden">
                                <?php

                                    // check if the repeater field has rows of data
                                    if( have_rows('beschikbaarheid') ):

                                        // loop through the rows of data
                                        while ( have_rows('beschikbaarheid') ) : the_row();
                                ?>    
                                    <li><?php the_sub_field('tijden');?></li>
                                <?php    
                                        endwhile;

                                    else :

                                        // no rows found

                                    endif;

                                ?>
                                </ul>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <h5>Reserveren</h5>    
                                
                                <?php echo do_shortcode( '[contact-form-7 id="184" title="Reserveren"]' ); ?>

                            </div>
                        </div><!-- .row -->
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">sluiten</button>
                </div>
            </div>
        </div>
    </div>
    <?php

                endwhile;
            }
        wp_reset_query(); //Restore global post    
    ?>
    
    <!-- evenementen -->
    <section class="evenement" id="event">

        <div class="container">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h1><i class="fa fa-calendar" aria-hidden="true"></i>Evenementen</h1>
            </div>

            <div class="row text-center">
                
                <?php
                    $type = 'evenementen';
                    $args = array ( 
                                    'post_type' => $type,
                                    'post_status' => 'publish',
                                    'posts_per_page' => -1
                                    );
                    $my_query = new WP_query($args);
                        
                        if ( $my_query->have_posts()) {
                            while ($my_query->have_posts()) : $my_query->the_post();

                            $url_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                ?>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 margin-bottom">
                        <a class="title" href="#" data-toggle="modal" data-target="#<?php the_ID()?>">
                            <div class="image center-block hover10" data-aos="slide-up">
                                <figure><img src="<?php echo $url_image; ?>"></figure>
                                <div class="text">
                                    <p><?php the_field('sub_tilte'); ?></p>
                                </div>
                            </div>
                        </a>
                    </div>

                <?php

                            endwhile;
                        }
                    wp_reset_query(); //Restore global post    
                ?>

            </div> <!-- .row -->

        </div><!-- .container -->

    </section>
    
    <?php
        $type = 'evenementen';
        $args = array ( 
                        'post_type' => $type,
                        'post_status' => 'publish',
                        'posts_per_page' => -1
                        );
        $my_query = new WP_query($args);
            
            if ( $my_query->have_posts()) {
                while ($my_query->have_posts()) : $my_query->the_post();

    ?>
    <div class="modal fade" id="<?php the_ID()?>" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <h4 class="modal-title" id="myModalLabel"><?php echo get_the_title() ?></h4>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="evenement pull-right">
                                   <p>Evenement</p> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h5>Meer informatie</h5>
                            <p><?php the_field('meer_informatie'); ?><p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">sluiten</button>
                </div>
            </div>
        </div>
    </div>
    <?php

                endwhile;
            }
        wp_reset_query(); //Restore global post    
    ?>
    
    <!-- banner -->
    <?php if( get_field('banners_img') ): ?>
    <section class="banner darken-bg" style="background-image: url('<?php the_field('banner_background'); ?>');">
    <?php endif; ?>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="quote text-center">
                        <h3><?php the_field('banner_title'); ?></h3>
                        <p>
                        <i class="fa fa-quote-left fa-2x" aria-hidden="true"></i>
                        <?php the_field('banner_paragraph'); ?>
                        <i class="fa fa-quote-right fa-2x" aria-hidden="true"></i>
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="image">
                        <?php if( get_field('banner_img') ): ?>
                            <img src="<?php the_field('banner_img'); ?>" class="center-block img-responsive">
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="nieuwsbrief">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="form-inline" id="contact-form" method="post" role="form">
                        <?php echo do_shortcode( '[contact-form-7 id="182" title="Nieuwsbrief"]' ); ?>

                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="text-center">
                        <!-- <h4 class="text">VOLG ONS OP</h4> -->
                        <ul class="socialmedia">
                        <?php

                            // check if the repeater field has rows of data
                            if( have_rows('social') ):

                                // loop through the rows of data
                                while ( have_rows('social') ) : the_row();
                        ?>    
                            <li class="color" data-aos="zoom-in"><a href="<?php the_sub_field('url');?>" target="_blank"><i class="fa <?php the_sub_field('icon');?> fa-3x" aria-hidden="true"></i></a></li>
                        <?php
                            endwhile;

                        else :

                            // no rows found

                        endif;

                        ?>    
                        </ul>
                    </div> 
                </div>
            </div>
        </div>    
    </section>

<?php get_footer(); ?>
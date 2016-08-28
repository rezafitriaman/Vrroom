<!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="navbar-brand smoothscroll" href="#frontpage"><img src="<?php echo get_template_directory_uri();?>/img/vrroomLogo.png" alt="Vrroom"></a>
                <section type="" class="navbar-toggle si-icons-default" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="si-icon si-icon-hamburger-cross" data-icon-name="hamburgerCross"></span>
                </section>
            <!-- <a class="navbar-brand" href="#">Start Bootstrap</a> -->
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <!-- wordpress-bootstrap navigatie "navwalker" -->
                <?php
                  wp_nav_menu( array(
                      'menu'              =>  'primary',
                      'theme_location'    =>  'primary',
                      'depth'             =>  2,
                      'container_id'      =>  'bs-example-navbar-collapse-1',
                      'menu_class'        =>  'nav navbar-nav',
                      'fallback_cb'       =>  'wp_bootstrap_navwalker::fallback',
                      'walker'            =>  new wp_bootstrap_navwalker())
                  );
                ?>

                <!-- <ul class="nav navbar-nav">
                    <li>
                        <a href="#experiences">VR Experiences</a>
                    </li>
                    <li>
                        <a href="#event">VR Evenementen</a>
                    </li>
                    <li>
                        <a href="#reserveren">VR Reserveren</a>
                    </li>
                </ul> -->
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


    <?php echo do_shortcode( '[contact-form-7 id="103" title="Nieuwsbrief"]' ); ?>

    <section class="nieuwsbrief">
    <div class="container">
        <div class="row text-center">

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="text-center form-inline ">
                <!-- <form class="form-inline center-block" id="" method="" role=""> -->
                    <?php echo do_shortcode( '[contact-form-7 id="103" title="Nieuwsbrief"]' ); ?>
                    <!-- <div class="form-group">
                      <input type="email" class="form-control" id="email" placeholder="Uw email-adres">
                    </div>
                        <button type="submit" class="btn btn-primary">Nieuwsbrief</button> -->
                <!-- </form> -->
                </div>
            </div>

        </div>
    </div>    
    </section>

    <?php if( get_field('social_media_background') ): ?>
        <section class="reserveren darken-bg" style="background-image: url('<?php the_field('social_media_background'); ?>');" id="reserveren">
    <?php endif; ?>
        <div class="container text-center">
            
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                    <div>
                        <h1 class="text"><?php the_field('social_media_text'); ?></h1>
                        <ul>
                        <?php

                            // check if the repeater field has rows of data
                            if( have_rows('social_media_icon') ):

                                // loop through the rows of data
                                while ( have_rows('social_media_icon') ) : the_row();
                            ?>
                            <li class="color"><a href="<?php the_sub_field('link');?>" target="_blank"><i class="fa <?php the_sub_field('icon');?> fa-3x" aria-hidden="true"></i></a></li>
                        <?php
                                endwhile;

                        else :

                            // no rows found

                        endif;

                        ?>
                            <!-- <li class="color"><a href="https://twitter.com/?lang=nl" target="_blank"><i class="fa fa-twitter-square fa-3x" aria-hidden="true"></i></a></li>
                            <li class="color"><a href="https://www.youtube.nl/" target="_blank"><i class="fa fa-youtube-square fa-3x" aria-hidden="true"></i></a></li>
                            <li class="color"><a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram fa-3x" aria-hidden="true"></i></a></li> -->
                        </ul>
                    </div> 
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 color">
                    <div class="text">
                        <h1><?php the_field('reserveren_title'); ?></h1>
                        <p><?php the_field('reserveren_paragraph'); ?></p>
                    </div> 
                        <div class="controls">
                        <?php echo do_shortcode( '[contact-form-7 id="102" title="Reserveren"]' ); ?>
                        <!-- <form id="contact-form" method="post" role="form">
                            <div class="form-group">
                                <select class="form-control" id="sel1">
                                    <option>Selecteer een experience</option>
                                    <option>Final Approach</option>
                                    <option>AudioShield</option>
                                    <option>Time Travel</option>
                                    <option>Apollo 11</option>
                                    <option>CDF Starfighter</option>
                                    <option>Vanishing Realms</option>
                                    <option>Zoolander</option>
                                    <option>The Hobbit</option>
                                    <option>Zombie Purge</option>
                                    <option>Disneyland60</option>
                                    <option>Invasion</option>
                                    <option>Jack White</option>
                                    <option>Revolt</option>
                                    <option>Fantastic Negrito</option>
                                    <option>Unicorn Island</option>
                                    <option>Paul McCartney</option>
                                    <option>Hover Junkers</option>
                                    <option>Elite Dangerous</option>
                                </select>
                             </div>
                        
                        
                            <div class="form-group">
                                <input id="form_name" type="text" name="name" class="form-control" placeholder="Voer je voor naam in *" required="required">
                            </div>
                            
                            
                            <div class="form-group">
                                <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Voer je achternaam in *" required="required">
                            </div>
                            
                            
                            <div class="form-group">
                                <input id="form_email" type="email" name="email" class="form-control" placeholder="Voer je email-adres in *" required="required">
                            </div>
                            
                            
                            <div class="form-group">
                                <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Voer je telefoonnummer in">
                            </div>

                            <div class="form-group">
                                <select class="form-control" id="sel1">
                                    <option>1 Persoon</option>
                                    <option>2 Persoon</option>
                                    <option>3 Persoon</option>
                                    <option>4 Persoon</option>
                                </select>
                            </div>
                            
                            <div class="form-group">    
                                <input type="submit" class="btn btn-primary" value="Verzenden">
                            </div>

                        </form> <!-- .form  -->  
                        </div> <!-- .controls -->

                </div> <!-- .col-lg-6 col-md-6 col-sm-6 col-xs-12 -->
            </div> <!-- .row -->   
        </div> <!-- .container text-center -->
    </section> <!-- .reserveren -->

.c-menu ul li a {
  display: block;
  padding: 0 4px;
  color: #fff;
}

<!-- form in the modal -->
<form>
                                    <div class="form-inline">
                                        <div class="form-group">
                                            <label class="sr-only" for="inputVoornaam">Voonaam</label>
                                            <!-- <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span> -->
                                            <input type="text" class="form-control" name="voornaam" id="inputVoornaam" placeholder="Voornaam *" required="required">
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="inputAchternaam">Achternaam</label>
                                            <input type="text" class="form-control" name="achternaam"  id="inputAchternaam" placeholder="Achternaam *" required="required">
                                        </div>
                                    </div>
                                    <div class="form-inline">
                                        <div class="form-group">
                                            <label class="sr-only" for="inputEmail">Email</label>
                                            <!-- <span class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></span> -->
                                            <input id="inputEmail" type="email" name="email" class="form-control" placeholder="Email-adres *" required="required">
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="inputTelefoon">Telefoon</label>
                                            <!-- <span class="input-group-addon"><i class="fa fa-phone" aria-hidden="true"></i></span> -->
                                            <input id="inputTelefoon" type="tel" name="phone" class="form-control" placeholder="Telefoonnummer *" required="required">
                                        </div>
                                    </div>
                                    <div class="form-inline">
                                        <div class="form-group">
                                            <select class="form-control" id="sel1">
                                                <option>1 Persoon</option>
                                                <option>2 Persoon</option>
                                                <option>3 Persoon</option>
                                                <option>4 Persoon</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control" id="sel1">
                                                <option>12.00</option>
                                                <option>13.00</option>
                                                <option>14.00</option>
                                                <option>15.30</option>
                                                <option>16.20</option>
                                                <option>16.30</option>
                                                <option>17.00</option>
                                                <option>17.30</option>
                                                <option>18.10</option>
                                                <option>20.20</option>
                                            </select>
                                        </div>   
                                    </div>
                                    <button type="submit" class="btn btn-primary">Reserveren</button> 
                                </form>
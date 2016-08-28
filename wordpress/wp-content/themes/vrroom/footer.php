<footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-lg-12 col-lg-12 col-lg-12">
                <?php if( get_field('footer_logo') ): ?>
                    <img class="img-responsive center-block logo" src="<?php the_field('footer_logo'); ?>">
                <?php endif; ?>    
                </div>
                <div class="col-lg-12 col-lg-12 col-lg-12 col-lg-12">
                   <p class="text-center">© COPYRIGHT <?php echo date("Y");?> <?php echo bloginfo('name'); ?></p>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <ul class="text-center">
                <?php

                // check if the repeater field has rows of data
                if( have_rows('footer_support_logo') ):

                    // loop through the rows of data
                    while ( have_rows('footer_support_logo') ) : the_row();
                ?>
                    <li><img class="img-responsive center-block sponsors" src="<?php the_sub_field('logo'); ?>"></li>
                <?php
                    endwhile;

                else :

                    // no rows found

                endif;

                ?>
                    <!-- <li><img class="img-responsive center-block sponsors" src="img/unreal_engine.png"></li>
                    <li><img class="img-responsive center-block sponsors" src="img/unity.png"></li>
                    <li><img class="img-responsive center-block sponsors" src="img/valve.png"></li>
                    <li><img class="img-responsive center-block sponsors" src="img/lionsgate.png"></li>
                    <li><img class="img-responsive center-block sponsors" src="img/google.png"></li> -->
                </ul>
                
                </div>
            </div>
            
        </div>
    </footer>

    <!-- jQuery Version 1.11.1 -->
    <!-- <script src="js/jquery.js"></script> -->

    <!-- Bootstrap Core JavaScript -->
    <!-- <script src="js/bootstrap.js"></script> -->

    <!-- svg -->
    <!-- <script src="js/body.js"></script> -->
    <!-- <script src="js/svgicons-config.js"></script>
    <script src="js/svgicons.js"></script>
    <script src="js/functioncall-svg.js"></script>
    <script type="text/javascript" src="js/jquery.ba-cond.min.js"></script>
    <script type="text/javascript" src="js/jquery.slitslider.js"></script> -->
    <!-- <script src="js/functionCallApps.js"></script> -->
    <!-- <script src="js/slick.js"></script> -->

<?php wp_footer();?>

</body>

</html>

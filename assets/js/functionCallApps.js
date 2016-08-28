//functioncall SlitSlider (header)
jQuery(document).ready(function($) {
            $(function() {
            
                var Page = (function() {

                    var $nav = $( '#nav-dots > span' ),
                        slitslider = $( '#slider' ).slitslider( {
                            onBeforeChange : function( slide, pos ) {

                                $nav.removeClass( 'nav-dot-current' );
                                $nav.eq( pos ).addClass( 'nav-dot-current' );

                            }
                        } ),

                        init = function() {

                            initEvents();
                            
                        },
                        initEvents = function() {

                            $nav.each( function( i ) {
                            
                                $( this ).on( 'click', function( event ) {
                                    
                                    var $dot = $( this );
                                    
                                    if( !slitslider.isActive() ) {

                                        $nav.removeClass( 'nav-dot-current' );
                                        $dot.addClass( 'nav-dot-current' );
                                    
                                    }
                                    
                                    slitslider.jump( i + 1 );
                                    return false;
                                
                                } );
                                
                            } );

                        };

                        return { init : init };

                })();

                Page.init();

                /**
                 * Notes: 
                 * 
                 * example how to add items:
                 */

                /*
                
                var $items  = $('<div class="sl-slide sl-slide-color-2" data-orientation="horizontal" data-slice1-rotation="-5" data-slice2-rotation="10" data-slice1-scale="2" data-slice2-scale="1"><div class="sl-slide-inner bg-1"><div class="sl-deco" data-icon="t"></div><h2>some text</h2><blockquote><p>bla bla</p><cite>Margi Clarke</cite></blockquote></div></div>');
                
                // call the plugin's add method
                ss.add($items);

                */
            
            });

});            

//functioncall Slick Slider (experiences)
jQuery(document).ready(function($) {
  $(".center").slick({
    nextArrow: '<i class="fa fa-arrow-right"></i>',
    prevArrow: '<i class="fa fa-arrow-left"></i>',
    mobileFirst: true,
    infinite: true,
    dots: true,
    infinite: true,
    centerMode: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    responsive: [
        {
            breakpoint: 480,
            settings: {
            mobileFirst: true,
            infinite: true,
            dots: true,
            infinite: true,
            centerMode: false,
            slidesToShow: 2,
            slidesToScroll: 2
            }
        },
        {
            breakpoint: 680,
            settings: {
            mobileFirst: true,
            infinite: true,
            dots: true,
            infinite: true,
            centerMode: false,
            slidesToShow: 4,
            slidesToScroll: 4
            }
        }
    ],
    
  });

});

//functioncall smooth slider
jQuery(document).ready(function($) {

$(function() {
  $('a[href*="#"]:not([href="#"],[href="#home"],[href="#menu1"],[href="#menu2"],[href="#menu3"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top - 80
        }, 1000);
        return false;
      }
    }
  });
});


});

jQuery(document).ready(function($) {

  /**
   * Slide top instantiation and action.
   */
  var slideTop = new Menu({
    wrapper: '#o-wrapper',
    type: 'slide-top',
    menuOpenerClass: '.c-button',
    maskId: '#c-mask'
  });

  var slideTopBtn = document.querySelector('#c-button--slide-top');
  
  slideTopBtn.addEventListener('click', function(e) {
    e.preventDefault;
    slideTop.open();
  });



});

// om de slide up effect te activeren 
jQuery(document).ready(function($) {

AOS.init({
        easing: 'ease-in-out-sine',
        duration: 1200
      });


});



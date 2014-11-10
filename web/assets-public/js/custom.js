/**
 * Created by i on 04.09.14.
 */

$(document).ready(function() {

    // PROPERTY FILTER:
    // ----------------

    var $beds    = $('.beds.control-group');
    var $baths   = $('.baths.control-group');
    var $control = $('.advanced.control-group a');

    $beds.hide();
    $baths.hide();

    $control.click(function(e) {
        e.preventDefault();
        $beds.slideToggle();
        $baths.slideToggle();
    })


    // TABLE POPOVER:
    // --------------

    var $cell = $('table .cell-result');
    var $cellPop = $('.cell-popover');

    $cell.each( function() {
       var $this = $(this);
       $this.click( function() {
           if ( $cellPop.is(':visible') ) {
               $cellPop.remove();
           } else {
               $cellPop.appendTo($this).show();
           }
       })
    });


    // Javascript to enable link to tab:
    // ---------------------------------
/*
    var $slideLink = $('.carousel__content-gallery-container a');
    var $tabImages  = $('.carousel__content-gallery img');
    var $newSlideLink;
    var $newSlideHref;

//    console.log('--- slideLink ---');
//    console.log($slideLink);
//    console.log('--- tabImages ---');
//    console.log($tabImages);

    $tabImages.each(function() {
        $(this).click(function() {
            $newSlideLink = $('.carousel__content-gallery-container a');
            $newSlideHref = $newSlideLink.attr('href');

//            console.log('--- Show SLIDE HREF ---');
//            console.log($newSlideLink);
//            console.log($newSlideHref);
        });
    }); // end each()


//      $('.nav-tabs a[href="#pool"]').tab('show')

    $newSlideLink.on('click', function() {
//        console.log('hi');
        $('.nav-tabs a[href="' + $newSlideHref + '"]').tab('show');
    });


*/


}); // end READY();
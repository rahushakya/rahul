$(function() {

    $('.calendar-container').on('click', '.fc-event', function() {

        var $gridContainer = $('.fc-time-grid-container');
        var $cellPop = $('.cell-popover');

        var $containerOffset = $(this).offset();
        var $containerHeight = $(this).height();

        console.log($containerOffset);
        console.log($containerHeight);

        if ( $cellPop.is(':visible') ) {
            $cellPop.hide();
        } else {
            $cellPop.show();
            $cellPop.offset({
                left: $containerOffset.left,
                top: ($containerOffset.top + $containerHeight + 5)
            });
        }

    });

    $('.cell-popover').on('click', function() {
        $(this).hide();
    });


}); // end ready()

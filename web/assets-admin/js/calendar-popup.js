$(function() {

    initPopup();

    $('.fc-content').on('click', '.fc-event', function() {

        console.log('hello!')

        var $popupFlag,
            $popupTitle,
            saveZ;

        $popupFlag  = $('.fc-event').children().is('.cell-popover');
        $popupTitle = $(this).find('.fc-event-title').text();

        var wW = $(window).width();
        var oP;
        var wP;
        var newOffset;

        if ( !$popupFlag ) {
            savedZ = $(this).css('z-index');
            $(this).css('z-index','100')
            $(this).append( initPopup($popupTitle) );

            // Calculate popover offset:
            oP = $(this).find('.cell-popover').offset();
            wP = $(this).find('.cell-popover').width();

            newOffset = (oP.left + wP) - wW;

            if ( newOffset > 0 ) {
                $(this).find('.cell-popover').offset( { left: (oP.left - newOffset) } );
            }

        } else {
            $('.fc-event').children('.cell-popover').remove();
            $(this).css('z-index', savedZ)
        }




    });

}); // end ready()

function initPopup(popupTitle) {

    var html = '<div class="cell-popover" style="left: ;">'
             +  '<div class="cell-popover-header">'
             +   '<a href="#">' + popupTitle + '</a>'
             +  '</div>'
             +  '<div class="cell-popover-body">';

//        if ( location.search !== '?calendar-client' ) {
//        html +=   '<p><strong>Клиент:</strong> Семен Горбунков</p>';
//        }

        html +=   '<p><strong>Начало:</strong> 08:00</p>'
             +    '<p><strong>Продолжительность занятия:</strong> 1 час</p>'
             +    '<p><strong>Адрес:</strong> <a href="location">пл. Восстания д.1</a></p>'
             +  '</div>'
             + '</div>';

    return html;

}
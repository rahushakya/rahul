$(document).ready(function() {

    /* initialize the calendar
     -----------------------------------------------------------------*/

    var $resultCalendar = $('#resultCalendar');

    $resultCalendar.fullCalendar({
        defaultView: 'agendaWeek',
        firstDay: 1,
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay'
        },
        editable: true,
        droppable: true, // this allows things to be dropped onto the calendar !!!
        drop: function(date, allDay) { // this function is called when something is dropped

            // retrieve the dropped element's stored Event Object
            var originalEventObject = $(this).data('eventObject');

            // we need to copy it, so that multiple events don't have a reference to the same object
            var copiedEventObject = $.extend({}, originalEventObject);

            // assign it the date that was reported
            copiedEventObject.start = date;
            copiedEventObject.allDay = allDay;

            // render the event on the calendar
            // the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
            $('#calendar').fullCalendar('renderEvent', copiedEventObject, true);

            // is the "remove after drop" checkbox checked?
            if ($('#drop-remove').is(':checked')) {
                // if so, remove the element from the "Draggable Events" list
                $(this).remove();
            }

        }
    });

    var resultEvent1 = {
        title:"Йога",
        allDay: false,
        start: '2014-11-03T12:00',
        end: '2014-11-03T14:00',
        color: 'green'
    };
    var resultEvent2 = {
        title:"Йога",
        allDay: false,
        start: '2014-11-05T12:00',
        end: '2014-11-05T14:00',
        color: 'green'
    };
    var resultEvent3 = {
        title:"Йога",
        allDay: false,
        start: '2014-11-07T12:00',
        end: '2014-11-07T14:00',
        color: 'green'
    };

    var resultEvents = [resultEvent1, resultEvent2, resultEvent3];

    for( var i = 0; i < resultEvents.length; i++ ) {
        $resultCalendar.fullCalendar('renderEvent', resultEvents[i], true);
    }

}); // end ready();
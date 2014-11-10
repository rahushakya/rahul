$(document).ready(function() {
	
	
    /* initialize the external events
    -----------------------------------------------------------------*/

    $('#external-events div.external-event').each(function() {

        // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
        // it doesn't need to have a start or end
        var eventObject = {
            title: $.trim($(this).text()) // use the element's text as the event title
        };

        // store the Event Object in the DOM element so we can get to it later
        $(this).data('eventObject', eventObject);

        // make the event draggable using jQuery UI
        $(this).draggable({
            zIndex: 999,
            revert: true,      // will cause the event to go back to its
            revertDuration: 0  //  original position after the drag
        });

    });


    /* Initialize Client Calendar
    -----------------------------------------------------------------*/

    var $clientCalendar = $('#calendar');

    $clientCalendar.fullCalendar({
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

        },
        monthNames: ['Январь','Февраль','Март','Апрель','Май','Июнь','Июль','Август','Сентябрь','Октябрь','Ноябрь','Декабрь'],
        monthNamesShort: ['Янв.','Фев.','Март','Апр.','Май','Июнь','Июль','Авг.','Сент.','Окт.','Ноя.','Дек.'],
        dayNames: ["Воскресенье","Понедельник","Вторник","Среда","Четверг","Пятница","Суббота"],
        dayNamesShort: ["ВС","ПН","ВТ","СР","ЧТ","ПТ","СБ"],
        buttonText: {
            prev: "&nbsp;&#9668;&nbsp;",
            next: "&nbsp;&#9658;&nbsp;",
            prevYear: "&nbsp;&lt;&lt;&nbsp;",
            nextYear: "&nbsp;&gt;&gt;&nbsp;",
            today: "Сегодня",
            month: "Месяц",
            week: "Неделя",
            day: "День"
        }
    });

    var clientEvent1 = {
        title:"Йога",
        allDay: false,
        start: '2014-11-03T12:00',
        end: '2014-11-03T14:00',
        color: 'green'
    };
    var clientEvent2 = {
        title:"Йога",
        allDay: false,
        start: '2014-11-05T12:00',
        end: '2014-11-05T14:00',
        color: 'green'
    };
    var clientEvent3 = {
        title:"Йога",
        allDay: false,
        start: '2014-11-07T12:00',
        end: '2014-11-07T14:00',
        color: 'green'
    };

    var clientEvents = [clientEvent1, clientEvent2, clientEvent3];

    for( var i = 0; i < clientEvents.length; i++ ) {
        $clientCalendar.fullCalendar('renderEvent', clientEvents[i], true);
    }

    /* Initialize Manager Calendar
     -----------------------------------------------------------------*/

    var $managerCalendar = $('#managerCalendar');

        $managerCalendar.fullCalendar({
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

        },
        monthNames: ['Январь','Февраль','Март','Апрель','Май','Июнь','Июль','Август','Сентябрь','Октябрь','Ноябрь','Декабрь'],
        monthNamesShort: ['Янв.','Фев.','Март','Апр.','Май','Июнь','Июль','Авг.','Сент.','Окт.','Ноя.','Дек.'],
        dayNames: ["Воскресенье","Понедельник","Вторник","Среда","Четверг","Пятница","Суббота"],
        dayNamesShort: ["ВС","ПН","ВТ","СР","ЧТ","ПТ","СБ"],
        buttonText: {
            prev: "&nbsp;&#9668;&nbsp;",
            next: "&nbsp;&#9658;&nbsp;",
            prevYear: "&nbsp;&lt;&lt;&nbsp;",
            nextYear: "&nbsp;&gt;&gt;&nbsp;",
            today: "Сегодня",
            month: "Месяц",
            week: "Неделя",
            day: "День"
        }
    });

    var managerEvent1 = {
        title:"Шварценеггер, бодибилдинг",
        allDay: false,
        start: '2014-10-06T14:00',
        end: '2014-10-06T15:30',
        color: 'gray'
    };
    var managerEvent2 = {
        title:"Шварценеггер, бодибилдинг",
        allDay: false,
        start: '2014-10-08T08:00',
        end: '2014-10-08T09:00',
        color: 'gray'
    };
    var managerEvent3 = {
        title:"Шварценеггер, бодибилдинг",
        allDay: false,
        start: '2014-10-10T18:00',
        end: '2014-10-10T20:00',
        color: 'orange'
    };
    var managerEvent4 = {
        title:"Шварценеггер, бодибилдинг",
        allDay: false,
        start: '2014-10-11T10:00',
        end: '2014-10-11T12:00',
        color: 'gray'
    };

    var managerEvents = [managerEvent1, managerEvent2, managerEvent3, managerEvent4];

    for( var i = 0; i < managerEvents.length; i++ ) {
        $managerCalendar.fullCalendar('renderEvent', managerEvents[i], true);
    }


    /* Initialize Trainer Calendar
     -----------------------------------------------------------------*/

    var $coachCalendar = $('#coachCalendar');

    $coachCalendar.fullCalendar({
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

        },
        monthNames: ['Январь','Февраль','Март','Апрель','Май','Июнь','Июль','Август','Сентябрь','Октябрь','Ноябрь','Декабрь'],
        monthNamesShort: ['Янв.','Фев.','Март','Апр.','Май','Июнь','Июль','Авг.','Сент.','Окт.','Ноя.','Дек.'],
        dayNames: ["Воскресенье","Понедельник","Вторник","Среда","Четверг","Пятница","Суббота"],
        dayNamesShort: ["ВС","ПН","ВТ","СР","ЧТ","ПТ","СБ"],
        buttonText: {
            prev: "&nbsp;&#9668;&nbsp;",
            next: "&nbsp;&#9658;&nbsp;",
            prevYear: "&nbsp;&lt;&lt;&nbsp;",
            nextYear: "&nbsp;&gt;&gt;&nbsp;",
            today: "Сегодня",
            month: "Месяц",
            week: "Неделя",
            day: "День"
        }
    });

    var coachEvent1 = {
        title:"Йога",
        allDay: false,
        start: '2014-11-03T12:00',
        end: '2014-11-03T14:00',
        color: 'green'
    };
    var coachEvent2 = {
        title:"Йога",
        allDay: false,
        start: '2014-11-05T12:00',
        end: '2014-11-05T14:00',
        color: 'green'
    };
    var coachEvent3 = {
        title:"Йога",
        allDay: false,
        start: '2014-11-07T12:00',
        end: '2014-11-07T14:00',
        color: 'green'
    };

    var coachEvents = [coachEvent1, coachEvent2, coachEvent3];

    for( var i = 0; i < coachEvents.length; i++ ) {
        $coachCalendar.fullCalendar('renderEvent', coachEvents[i], true);
    }

}); // end ready();
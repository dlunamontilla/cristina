/**
 * 
 * @returns { Promise<Array<Object<string, string|number>>> } 
 */
async function getEvents() {
    const response = await fetch('api/?events');
    if (!response.ok) {
        console.error("Lamentablemente, no se pudo procesar la petición, por favor, vuelva a intentarlo");
        return [];
    }

    const data = await response.json();
    console.log({ data });

    return data.map(row => {
        const { events_id, events_title, events_color, events_start, events_end } = row;

        const _data = {
            id: events_id,
            title: events_title,
            color: events_color,
            start: events_start,
            end: events_end
        };

        return _data;
    });
}

async function createCalendar() {
    const data = await getEvents();
    console.log({ data });
    
    $('#calendar').fullCalendar({
        locale: 'es',
        initialView: 'timeGridDay',

        header: { //botón de semana y agenda y orden a mostrar
            left: 'prev, next, today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay'
        },

        height: 500, //tamaño calendario
        editable: true, //editable
        navLinks: true, // poder navegar por dia, mes, etc.
        selectable: true, //seleccionar varios días
        selectMirror: true,
        selectHelper: true,
        eventLimit: true,
        mostrarEventoEnd: true,
        displayEventTime: true,

        eventRender: function (event, element) {
            element.bind('dblclick', function () {
                $('#modal2 #id').val(event.id);
                $('#modal2 #title').val(event.title);
                $('#modal2 #color').val(event.color);
                $('#modal2').modal('show');
            });
        },

        events: data,

        dayClick: function (fecha, javascriptEvent, vista) {
            $("#modal-addEvent").modal('show');
            $("#fecha_start").val(fecha.format());
        },
    });
}

$(function () {
    createCalendar();
});
document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
      initialView: 'dayGridMonth',
      locale: 'es',
      timeZone: 'local',
      headerToolbar: { //botón de semana y agenda y orden a mostrar
        left: 'prev, next, today Miboton',
        center: 'title',
        right: 'dayGridMonth, timeGridWeek, timeGridDay' 
      },

      customButtons:{
        Miboton:{
          text:"Botón",
          click:function(){
            alert("Hola mundo!");
          }
        }
      },

      dateClick: function(info){
        $('#exampleModal').modal();
        console.log(info);
        calendar.addEvent({title:"Evento x", date:info.dateStr});
      },

      eventClick:function(info){ //recuperar datos (información al hacer clic)
        console.log(info);
        console.log(info.event.title);
        console.log(info.event.start);

        console.log(info.event.end);
        console.log(info.event.textColor);
        console.log(info.event.backgroundColor);

        console.log(info.event.extendedProps.descripcion); 
      },

      events:[
        {
          title: "Mi evento 1",
          start: "2022-05-10 12:00:00",
          descripcion:"Descripción del evento 1"
        },
        {
          title: "Mi evento 2",
          start: "2022-05-06 12:30:00",
          end: "2022-05-09 12:30:00",
          color: "#FFCCAA",
          textColor: "#000000",
          descripcion:"Descripción del evento 2"
        }
      ],
      

      height: 500, //tamaño calendario
      editable: true,//editable
      navLinks: true, // poder navegar por dia, mes, etc.
      selectable: true, //seleccionar varios días
      selectMirror: true,

      // select: function(arg) {
      //   var title = prompt('Añadir Evento:');
      //   if (title) {
      //     calendar.addEvent({
      //       title: title,
      //       start: arg.start,
      //       end: arg.end,
      //       allDay: arg.allDay
      //     })
      //   }
      //   calendar.unselect()
      // },
      // eventClick: function(arg) {
      //   if (confirm('Quieres eliminar este evento?')) {
      //     arg.event.remove()
      //   }
      // },

    //   events: [
    //     {
    //       title: 'All Day Event',
    //       start: '2022-05-05'
    //     },
    //     {
    //       title: 'Long Event',
    //       start: '2020-09-07',
    //       end: '2020-09-10'
    //     },
    //   ]
    });

    calendar.render();
  });
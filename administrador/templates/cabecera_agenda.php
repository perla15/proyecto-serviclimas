<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda</title>

    <link rel="stylesheet" href="../index_css/estilos.css">

    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.css">
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/locales-all.js"></script>
    <script src='fullcalendar/dist/index.global.js'></script>
    <script>

      document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
          initialView: 'dayGridMonth',
          locale:"es",
          headerToolbar:{
            left:'prev,next today',
            center:'title',
            rigth:'dayGridMonth,timeGridWeek,timeGridDay'
          }
        });
        calendar.render();
      });

    </script>
</head>
<body id="body">
    
    <header>
        
    </header>

    <div class="menu__side" id="menu_side">

        <div class="name__page">
            <i class="fa-solid fa-right-left" id="btn_open"></i>
            <h4>BIEVENIDO</h4>
        </div>

        <div class="options__menu"> 

            <a href="../index.php">
                <div class="option">
                    <i class="fas fa-home" title="Inicio"></i>
                    <h4>Inicio</h4>
                </div>
            </a>

            <a href="recibos.php">
                <div class="option">
                    <i class="fa-solid fa-receipt" title="Recibos"></i>
                    <h4>Recibos</h4>
                </div>
            </a>
            
            <a href="notificaciones.php">
                <div class="option">
                    <i class="fa-solid fa-bell" title="Notificaciones"></i>
                    <h4>Notificaciones</h4>
                </div>
            </a>

            <a href="agenda.php" class="selected">
                <div class="option">
                    <i class="fa-solid fa-calendar-days" title="Agenda"></i>
                    <h4>Agenda</h4>
                </div>
            </a>

            <a href="../sql/cerrar_sesion.php">
                <div class="option ">
                    <i class="fa-solid fa-user-lock" title="Sesion"></i>
                    <h4>Cerrar Sesión</h4>
                </div>
            </a>
        </div>

    </div>
    <main>
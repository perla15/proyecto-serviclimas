<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recibos</title>

    <link rel="stylesheet" href="../index_css/estilos.css">
    <link rel="stylesheet" href="../secciones_css/secciones.css">
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
</head>
<body id="body">
    
    <header>
        <a href="../secciones/clientes.php">
                <div >
                    <h2 style="margin-left: 20px;"><i class="fa-solid fa-user-plus"></i>Nuevo Cliente</h2>
                </div>
        </a>
        <a href="../secciones/nuevo_recibo.php">
                <div >
                    <h2 style="margin-left: 20px;"><i class="fa-solid fa-file-circle-plus"></i>Nuevo Recibo</h2>
                </div>
        </a>
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

            <a href="recibos.php" class="selected">
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

            <a href="agenda.php">
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
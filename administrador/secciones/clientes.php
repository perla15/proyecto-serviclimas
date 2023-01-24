<?php
    session_start();
    include "../sql/conexion.php";
?>

<?php
    include('../templates/cabecera_recibos.php');
?>

    <section id="container">
        <div class="title_page">
            <h1>NUEVO CLIENTE <i class="fa-solid fa-user-plus"></i></h1>
        </div>
        <div class="datos_cliente">
            <div class="action_cliente">
                <h4>Datos del cliente</h4>

            </div>
            <form action="../sql/insertar_cliente.php" method="POST" id="form_new_cliente_venta"class="datos">
                <input type="hidden" name="action" value="addCliente">
                <input type="hidden" name="idcliente" value="" required>
                <div class="wd30">
                    <label>Nombre</label>
                    <input type="text" name="nom_cliente" id="nom_cliente">
                </div>
                <div class="wd30">
                    <label>Clave</label>
                    <input type="text" name="clave_cliente" id="clave_cliente">
                </div>
                
                <div class="wd30">
                    <label>Teléfono</label>
                    <input type="text" name="tel_cliente" id="tel_cliente">
                </div>
                <div class="wd100">
                    <label>Dirección</label>
                    <input type="text" name="dir_cliente" id="dir_cliente">
                </div>
                <div id="" class="action_cliente">
                    <button type="submit" class="btn_save"><i class="far fa-save fa-lg"></i> Guardar cliente</button>
                </div>
                
            </form>
        </div>
    </section>
      

<?php
    include('../templates/pie_secciones.php');
?>
<?php
    session_start();
    include "../sql/conexion.php";
?>

<?php
    include('../templates/cabecera_recibos.php');
?>

    <section id="container">
        <div class="title_page">
            <h1>RECIBO DE PAGO <i class="fa-solid fa-receipt"></i></h1>
        </div>
        <div class="datos_cliente">
            
            <form action="../sql/insertar_recibo.php" method="POST" id="form_new_cliente_venta"class="datos">
                <div class="wd100">
                    <div class="action_cliente">
                        <h4>Datos del cliente</h4>
                    </div>
                    <div  class="wd30">
                        <label>Clave</label>
                        <input type="text" name="clave_cliente" id="clave_cliente">
                    </div>
                </div>

                <div class="wd100">
                    <div class="wd10">
                        <br>
                    </div>
                </div>
                <div class="wd100">
                    <div class="action_cliente">
                        <h4>Detalles de la venta</h4>
                    </div>
                </div>
                <div class="wd10">
                    <label>Cantidad</label>
                    <input type="text" name="cant_detalle" id="clave_cliente">
                </div>
                <div class="wd30">
                    <label>Descripcion</label>
                    <input type="text" name="desc_detalle" id="nom_cliente">
                </div>
                <div class="wd10">
                    <label>Precio</label>
                    <input type="text" name="precio_detalle" id="tel_cliente">
                </div>
                <div class="wd10">
                    <label>Iva</label>
                    <input type="text" name="iva_detalle" id="tel_cliente">
                </div>
                <div class="wd10">
                    <label>Cantidad</label>
                    <input type="text" name="cant_detalle2" id="clave_cliente2">
                </div>
                <div class="wd30">
                    <label>Descripcion</label>
                    <input type="text" name="desc_detalle2" id="nom_cliente2">
                </div>
                <div class="wd10">
                    <label>Precio</label>
                    <input type="text" name="precio_detalle2" id="tel_cliente2">
                </div>
                <div class="wd10">
                    <label>Iva</label>
                    <input type="text" name="iva_detalle2" id="tel_cliente2">
                </div>
                <div id="" class="action_cliente">
                    <button type="submit" class="btn_save"><i class="far fa-save fa-lg"></i> Enviar</button>
                </div>
            </form>
        </div>
    </section>
      

<?php
    include('../templates/pie_secciones.php');
?>
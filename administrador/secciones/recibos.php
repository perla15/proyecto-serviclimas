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
                    <button type="submit" class="btn_save"><i class="far fa-save fa-lg"></i> Buscar cliente</button>
                </div>
                <div id="" class="action_cliente">
                    <button type="submit" class="btn_save"><i class="far fa-save fa-lg"></i> Agregar Nuevo Cliente</button>
                </div>
                
            </form>
        </div>
        <div class="datos_venta">
            <h4>Datos de la  venta</h4>
            <div class="datos">
                <div class="w50">
                    <label>Vendedor</label>
                    <p>Perla Noriega</p>
                </div>
                <div class="wd50">
                    <label>Acciones</label>
                    <div id="Acciones_venta">
                        <a href="#" class="btn_ok textcenter" ><i class="far fa-edit"></i>Editar</a>
                    </div>
                </div>
            </div>
        </div>

        <table class="tbl_venta">
            <thead>

                <tr>
                    <th class="textright" colspan="2">Descripción</th>
                    <th class="textright" colspan="1">Cantidad</th>
                    <th class="textright"colspan="1">Precio</th>
                    <th class="textright" colspan="1">Precio Total</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody id="detalle_venta">
                <tr>
                    <td colspan="2"><input type="text" name="txt_desc_producto" id="txt_desc_producto"></td>
                    <td style="width: 10px;" class="texcenter"><input type="text" name="txt_cant_producto" id="txt_cant_producto"></td>
                    <td class="textright"><input type="text" name="txt_prec_producto" id="txt_prec_producto"></td>
                    <td class="textright"><input type="text" name="txt_precT_producto" id="txt_precT_producto"></td>
                    <td class="">
                        <a class="link_delet" href="#" onclick="event.preventDefaulr();
                        del_product_detalle(1);"><i class="far fa-trash-alt"></i></a>
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><input type="text" name="txt_desc_producto" id="txt_desc_producto"></td>
                    <td style="width: 10px;" class="texcenter"><input type="text" name="txt_cant_producto" id="txt_cant_producto"></td>
                    <td class="textright"><input type="text" name="txt_prec_producto" id="txt_prec_producto"></td>
                    <td class="textright"><input type="text" name="txt_precT_producto" id="txt_precT_producto"></td>
                    <td class="">
                        <a class="link_delet" href="#" onclick="event.preventDefaulr();
                        del_product_detalle(1);"><i class="far fa-trash-alt"></i></a>
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><input type="text" name="txt_desc_producto" id="txt_desc_producto"></td>
                    <td style="width: 10px;" class="texcenter"><input type="text" name="txt_cant_producto" id="txt_cant_producto"></td>
                    <td class="textright"><input type="text" name="txt_prec_producto" id="txt_prec_producto"></td>
                    <td class="textright"><input type="text" name="txt_precT_producto" id="txt_precT_producto"></td>
                    <td class="">
                        <a class="link_delet" href="#" onclick="event.preventDefaulr();
                        del_product_detalle(1);"><i class="far fa-trash-alt"></i></a>
                    </td>
                </tr>
                
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="5" class="textright">SUBTOTAL Q.</td>
                    <td class="textright">15300.00</td>
                </tr>
                 <tr>
                    <td colspan="5" class="textright">IVA(16%)</td>
                    <td class="textright">2500</td>
                </tr>
                <tr>
                    <td colspan="5" class="textright">TOTAL</td>
                    <td class="textright">25000</td>
                </tr>
            </tfoot>
        </table>  
    </section>
      

<?php
    include('../templates/pie_secciones.php');
?>
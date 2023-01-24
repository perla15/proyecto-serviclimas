<?php
    session_start();
    include "../sql/conexion.php";

    //BUSCAR CLIENTE
    $clave_cliente = $_POST['clave_cliente'];
   
    $consulta= mysqli_query($conexion, "SELECT * FROM clientes WHERE clave = '$clave_cliente'");
    $ejecutar_detalles=mysqli_query($conexion, "INSERT INTO (descripcion) * FROM detalles WHERE clave = '$clave_cliente'");

    //ENVIAR DATOS
    $cant_detalle = $_POST['cant_detalle'];
    $desc_detalle = $_POST['desc_detalle'];
    $precio_detalle = $_POST['precio_detalle'];
    $subtotal_detalle = ($_POST['cant_detalle'])*($_POST['precio_detalle']);
    $iva_detalle = (($_POST['cant_detalle'])*($_POST['precio_detalle']))/100 *($_POST['iva_detalle']);

    $query = mysqli_query($conexion, "INSERT INTO detalle(cantidad,descripcion,precio,iva,subtotal) VALUES ('$cant_detalle','$desc_detalle','$precio_detalle','$iva_detalle','$subtotal_detalle')");

    if(mysqli_num_rows($consulta) > 0){
    

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
            <table class="tbl_venta">
                <thead>
                    <tr>
                        <th class="texcenter" colspan="2">Nombre</th>
                        <th class="texcenter" colspan="1">Clave</th>
                        <th class="texcenter"colspan="2">Direccion</th>
                        <th class="texcenter" colspan="1">Telefono</th>
                    </tr>
                </thead>
                <tbody id="detalle_venta">
                    <?php foreach ($consulta as $cliente){ ?>
                    <tr>
                        <td class="texcenter" colspan="2"><?php echo $cliente['nombre'];?></td>
                        <td class="texcenter" colspan="1"><?php echo $cliente['clave'];?></td>
                        <td class="texcenter" colspan="2"><?php echo $cliente['telefono'];?></td>
                        <td class="texcenter" colspan="1"><?php echo $cliente['direccion'];?></td>
                    </tr> <?php } ?>
                </tbody>
            </table>  
        </div>

        <div class="datos_venta">
            <h4>Datos de la  venta</h4>
            <div class="datos">
                <div class="w50">
                    <label>Vendedor</label>
                    <p>Perla Gisell Noriega Sandoval</p>
                </div>
            </div>
        </div>

        <form action="../sql/insertar_detalles.php" method="POST" id="form_new_detalle_venta"class="datos datos_venta">
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
                <div id="" class="action_cliente">
                    <button type="submit" class="btn_save"><i class="far fa-save fa-lg"></i> Enviar</button>
                </div>  
            </form>

        <!--
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
    -->
    </section>
      

<?php
    include('../templates/pie_secciones.php');
?>
<?php
    }
?>
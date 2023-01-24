<?php
    session_start();
    include "../sql/conexion.php";

    //BUSCAR CLIENTE
    $clave_cliente = $_POST['clave_cliente'];
    $consulta= mysqli_query($conexion, "SELECT * FROM clientes WHERE clave = '$clave_cliente'");

    //BUSCAR ID DE CLIENTE
    //$idCliente= mysqli_query($conexion,"SELECT id_cliente FROM clientes WHERE clave= '$clave_cliente'");

    //ENVIAR DATOS
    $cant_detalle = $_POST['cant_detalle'];
    $desc_detalle = $_POST['desc_detalle'];
    $precio_detalle = $_POST['precio_detalle'];
    $subtotal_detalle = ($_POST['cant_detalle'])*($_POST['precio_detalle']);
    $iva_detalle = ((($_POST['cant_detalle'])*($_POST['precio_detalle']))/100) * ($_POST['iva_detalle']);

    $query = mysqli_query($conexion, "INSERT INTO detalle (id_cliente,cantidad,descripcion,precio,iva,subtotal) SELECT id_cliente,'$cant_detalle','$desc_detalle','$precio_detalle','$iva_detalle','$subtotal_detalle' FROM clientes WHERE clave='$clave_cliente'");

    //ENVIAR DATOS 2
    $cant_detalle2 = $_POST['cant_detalle2'];
    $desc_detalle2 = $_POST['desc_detalle2'];
    $precio_detalle2 = $_POST['precio_detalle2'];
    $subtotal_detalle2 = ($_POST['cant_detalle2'])*($_POST['precio_detalle2']);
    $iva_detalle2 = ((($_POST['cant_detalle2'])*($_POST['precio_detalle2']))/100) * ($_POST['iva_detalle2']);

    $query = mysqli_query($conexion, "INSERT INTO detalle (id_cliente,cantidad,descripcion,precio,iva,subtotal) SELECT id_cliente,'$cant_detalle2','$desc_detalle2','$precio_detalle2','$iva_detalle2','$subtotal_detalle2' FROM clientes WHERE clave='$clave_cliente'");

    //$query2 = mysqli_query($conexion, "INSERT INTO detalle(id_cliente,cantidad,descripcion,precio,iva,subtotal) VALUES ('$idCliente','$cant_detalle2','$desc_detalle2','$precio_detalle2','$iva_detalle2','$subtotal_detalle2')");

     //BUSCAR DETALLE
    //$buscar_detalle= mysqli_query($conexion, "SELECT * FROM detalle WHERE id_cliente ALL (SELECT id_cliente FROM clientes WHERE clave ='$clave_cliente'");
    $buscar_detalle= mysqli_query($conexion, "SELECT d.cantidad,d.descripcion,d.precio,d.iva,d.subtotal FROM detalle AS d JOIN clientes AS c ON d.id_cliente = c.id_cliente WHERE c.clave='$clave_cliente'");

    //$buscar_detalle= mysqli_query($conexion, "SELECT * FROM detalle WHERE id_cliente = 1");

    //AGREGAR FACTURA

    //$factura = mysqli_query($conexion, "INSERT INTO factura(id_cliente,id_detalle,facturaFecha,facturaSubtotal,facturaIva,facturaTotal) VALUES ('$idCliente',''

    //ELIMIAR DETALLE
    $eliminar = "DELETE FROM detalle WHERE detalle.id_detalle` = ;";


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
    
        <table class="tbl_venta">
            <thead>
                <tr>
                    <th class="textright" colspan="1">Cantidad</th>
                    <th class="textright" colspan="2">Descripción</th>
                    <th class="textright"colspan="1">Precio</th>
                    <th class="textright" colspan="1">SubTotal</th>
                    <th class="textright"colspan="1">Iva</th>
                    <th class="textright" colspan="1">Eliminar</th>
                </tr>
            </thead>
            <tbody id="detalle_venta">
                <?php foreach ($buscar_detalle as $detalle){ ?>
                    <tr>
                        <td class="textright" colspan="1"><?php echo $detalle['cantidad'];?></td>
                        <td class="textright" colspan="2"><?php echo $detalle['descripcion'];?></td>
                        <td class="textright" colspan="1"><?php echo $detalle['precio'];?></td>
                        <td class="textright" colspan="1"><?php echo $detalle['subtotal'];?></td>
                        <td class="textright" colspan="1"><?php echo $detalle['iva'];?></td>
                        <td class="textright" colspan="1">
                        <a class="link_delet" href="#" onclick="event.preventDefaulr();
                        del_product_detalle(1);"><i class="far fa-trash-alt"></i>
                            

                        </a>
                    </td>
                    </tr> <?php } ?>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="5" class="textright">SUBTOTAL</td>
                    <td class="textright">
                        <?php
                            $subtotal_recibo=$subtotal_detalle+$subtotal_detalle2;
                            echo $subtotal_recibo;?>
                    </td>
                </tr>
                 <tr>
                    <td colspan="5" class="textright">IVA(16%)</td>
                    <td class="textright">
                        <?php
                            $iva_recibo=$iva_detalle+$iva_detalle2;
                            echo  $iva_recibo;?>
                    </td>
                </tr>
                <tr>
                    <td colspan="5" class="textright">TOTAL</td>
                    <td class="textright">
                        <?php
                            $total_reicibo=$subtotal_recibo + $iva_recibo;
                            echo $total_reicibo;?>    
                    </td>
                </tr>
            </tfoot>
        </table>  
        <button type="submit" class="btn_save"><i class="far fa-save fa-lg"></i> Descargar PDF</button>
    </section>
      

<?php
    include('../templates/pie_secciones.php');
?>

<?php
    }
?>
<?php
    
    include 'conexion.php';

    $nom_cliente = $_POST['nom_cliente'];
    $clave_cliente = $_POST['clave_cliente'];
    $tel_cliente = $_POST['tel_cliente'];
    $dir_cliente = $_POST['dir_cliente'];

    $query = "INSERT INTO clientes(nombre,clave,direccion,telefono) VALUES ('$nom_cliente','$clave_cliente','$tel_cliente','$dir_cliente')";

    //VERIFICACION DE DATOS
    $verificar_cliente = mysqli_query($conexion, "SELECT * FROM clientes WHERE clave='$clave_cliente'");

    if(mysqli_num_rows($verificar_cliente) > 0){
        echo'
            <script>
                alert("ESTA CLAVE YA ESTA REGISTRADA,INTENTA CON OTRO DIFERENTE");
            </script>
        ';
        
        exit();
    }

    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo '
        <script>
            alert("CLIENTE REGISTTRADO EXITOSAMENTE");
        </script>
        ';
    }else{
        echo '
        <script>
            alert("INTENTALO DE NUEVO, REGISTRO NO EXITOSO");
        </script>
        ';
    }
    mysqli_close($conexion);
?>
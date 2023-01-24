<?php
    
    include 'conexion.php';

    $admin_name = $_POST['admin_name'];
    $admin_pass = $_POST['admin_pass'];
    $pass_encriptada = hash('sha512', $admin_pass);

    $query = "INSERT INTO administradores(name_administrador,pass_administrador) VALUES ('$admin_name','$pass_encriptada')";

    //VERIFICACION DE DATOS
    $verificar_usuario = mysqli_query($conexion, "SELECT * FROM administradores WHERE name_administrador='$admin_name'");

    if(mysqli_num_rows($verificar_usuario) > 0){
        echo'
            <script>
                alert("ESTE USUARIO YA ESTA REGISTRADO,INTENTA CON OTRO DIFERENTE");
                window.location ="../index.php";
            </script>
        ';
        exit();
    }

    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo '
        <script>
            alert("USUARIO REGISTTRADO EXITOSAMENTE");
            window.location ="../index.php"
        </script>
        ';
    }else{
        echo '
        <script>
            alert("INTENTALO DE NUEVO, REGISTRO NO EXITOSO");
            window.location ="../index.php"
        </script>
        ';
    }
    mysqli_close($conexion);
?>
<?php
    session_start();

    include 'conexion.php';

    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $pass_encriptada = hash('sha512',$pass);

    $validar_login = mysqli_query($conexion, "SELECT * FROM administradores WHERE name_administrador = '$user' and pass_administrador = '$pass_encriptada'");

    if(mysqli_num_rows($validar_login) > 0){
        $_SESSION['administradores'] = $user;
        header("location: ../administrador/index.php");
        exit;
    }else{
        echo '
            <script>
                alert("El usuario no existe");
                window.location = "../index.php";
            </script>
        ';
        exit;
    }
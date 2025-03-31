<?php

include("./php/con_db.php");

if (isset($_POST['registrar'])) {
    if (strlen($_POST['id']) >= 1 &&
        strlen($_POST['usuario']) >= 1 &&
        strlen($_POST['email']) >= 1 &&
        strlen($_POST['celular']) >= 1 &&
        strlen($_POST['direccion']) >= 1 &&
        strlen($_POST['clave']) >= 1) {
        
        $id = trim($_POST['id']);
        $usuario = trim($_POST['usuario']);
        $email = trim($_POST['email']);
        $celular = trim($_POST['celular']);
        $direccion = trim($_POST['direccion']);
        $clave = trim($_POST['clave']);
        
        $consulta = "INSERT INTO `usuario`(`documento_de_identidad`, `nombre_de_usuario`, `correo`, `contraseña`, `nro_telefono`, `id_rol`, `direccion`) 
                     VALUES ('$id', '$usuario', '$email', '$clave', '$celular', 'C01', '$direccion')";
        
        $resultado = mysqli_query($conex, $consulta);
        
        if ($resultado) {
            echo "<script>alert('Usuario registrado correctamente');</script>";
            header("Location: login.html");
            exit(); 
        } else {
            echo "<script>alert('Error al registrar el usuario: " . mysqli_error($conex) . "');</script>";
        }
    } else {
        echo "<script>alert('Por favor llene todos los campos');</script>";
    }
}
?>
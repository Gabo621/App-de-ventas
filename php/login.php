<?php
session_start();

$usuario = $_POST['usuario'];
$clave = $_POST['clave'];

$conexion = mysqli_connect("localhost","root","","columbia_burger") or die("Error de conexion");

$consulta = "SELECT * FROM usuario WHERE 
            (nombre_de_usuario='$usuario' OR correo='$usuario') 
            AND contraseña='$clave'";

$resultado = mysqli_query($conexion,$consulta) or die("Error en la consulta: " . mysqli_error($conexion));
$filas = mysqli_num_rows($resultado);

if($filas > 0){
    $_SESSION['usuario'] = $usuario;
    header("location: /columbia_burger/tienda.html");
    exit();
}else{
    header("location: login.html?error=1"); 
    exit();
}

mysqli_free_result($resultado);
mysqli_close($conexion);
?>
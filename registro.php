<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Emblema+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/registro.css">
</head>
<body>
    
    <form method="post">

        <h1>Registro de Usuario</h1>

        <label for="">Documento de identidad</label>
        <input type="text" placeholder="Escriba su número de documento" name="id" required>

        <label for="">Nombre de usuario</label>
        <input type="text" placeholder="Escriba su usuario" name="usuario" required>

        <label for="">Email</label>
        <input type="email" placeholder="Escriba su email" name="email" required>

        <label for="">Número celular</label>
        <input type="text" placeholder="Escriba su número de celular" name="celular" required>

        <label for="">Dirección</label>
        <input type="text" placeholder="Escriba la dirección de su casa" name="direccion" required>

        <label for="">Contraseña</label>
        <input type="password" placeholder="Escriba su contraseña" name="clave" required>

        <label for="">Confirme su contraseña</label>
        <input type="password" placeholder="Escriba de nuevo su contraseña" name="clave" required>

        <input type="submit" value="Registrar" name="registrar">

    </form>

    <?php
    include("./php/register.php");
    ?>

</body>
</html>
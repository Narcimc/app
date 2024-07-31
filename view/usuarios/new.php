<?php require_once HEADER; ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title><?php echo $titulo; ?></title>
</head>
<body>
    <h1><?php echo $titulo; ?></h1>
    <form action="index.php?c=Usuarios&f=new" method="post" enctype="multipart/form-data">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" required><br>
        
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" value="<?php echo $user['username']; ?>" required><br>

        <label for="contrasena">Password:</label>
        <input type="text" name="contrasena" id="contrasena" value="<?php echo $user['contrasena']; ?>" required><br>
        
        <label for="correo">Correo:</label>
        <input type="text" name="correo" id="correo" value="<?php echo $user['correo']; ?>" required><br>
        
        <label for="imagen">Imagen:</label>
        <input type="file" name="imagen" id="imagen"><br>

        <label for="direccion">Dirección:</label>
        <input type="text" name="direccion" id="direccion" value="<?php echo $user['direccion']; ?>" required><br>
        
        <input type="submit" value="Guardar">
    </form>
    <a href="index.php?c=Usuarios&f=index">Atrás</a>
</body>
</html>

<?php require_once FOOTER; ?>
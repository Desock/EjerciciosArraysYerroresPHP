<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control de errores</title>
</head>
<body>
    <h1>Control de errores con die</h1>
    <?php
        $file = "./copia_seguridad/datos.txt";

        $file_content = file_get_contents($file) or die("Error: Fichero no encontrado.");

        echo $contenido;
    ?>
</body>
</html>
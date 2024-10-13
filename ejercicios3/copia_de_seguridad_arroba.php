<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control de errores</title>
</head>
<body>
    <h1>Control de errores con la @</h1>
    <?php
        $file = "./copia_seguridad/datos.txt";

        $file_content = @file_get_contents($file);

        if ($contenido === false) {
            echo "No se pudo abrir el fichero.<br>";
        } else {
            echo $contenido;
        }
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control de errores</title>
</head>
<body>
    <h1>Control de errores con Try Catch</h1>
    <?php
        $file = "./copia_seguridad/datos.txt";

        try {
            if (!file_exists($file)) {
                throw new Exception("El fichero no existe.");
            }
            
            $contenido = file_get_contents($file);
            echo $contenido;
        } catch (Exception $e) {
            echo "Excepción: " . $e->getMessage();
        }
    ?>
</body>
</html>
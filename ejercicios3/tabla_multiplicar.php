<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de multiplicar</title>
</head>
<body>
    <h1>Las tablas de multiplicar</h1>
    <?php
        $tablas = array(
            array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0),  
            array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9),  
            array(0, 2, 4, 6, 8, 10, 12, 14, 16, 18),  
            array(0, 3, 6, 9, 12, 15, 18, 21, 24, 27),  
            array(0, 4, 8, 12, 16, 20, 24, 28, 32, 36),  
            array(0, 5, 10, 15, 20, 25, 30, 35, 40, 45),  
            array(0, 6, 12, 18, 24, 30, 36, 42, 48, 54),  
            array(0, 7, 14, 21, 28, 35, 42, 49, 56, 63),  
            array(0, 8, 16, 24, 32, 40, 48, 56, 64, 72),  
            array(0, 9, 18, 27, 36, 45, 54, 63, 72, 81)   
        );
        
        for ($i = 0; $i <= 9; $i++) {
            echo "Tabla del $i:<br>"; 
            for ($j = 0; $j <= 9; $j++) {
                echo "$i x $j = " . $tablas[$i][$j] . "<br>";
            }
            
            echo "<br>"; // Espacio entre tablas
        }
    ?>
</body>
</html>
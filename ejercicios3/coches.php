<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos de coches</title>
</head>
<body>
    <h1>Coches ordenados por matricula</h1>
    <?php
        $coches = array(
            "1889KYK" => array("Ford", "Focus ST", 5),      
            "5632MZG" => array("Toyota", "Yaris GR", 2),  
            "9712KLV" => array("Subaru", "BRZ", 2),     
            "8920GKN" => array("Mazda", "RX-7", 2)           
        );

        ksort($coches);
        
        foreach ($coches as $matricula => $datosCoche) {
            echo "Matrícula: $matricula<br>";
            echo "Marca: " . $datosCoche[0] . "<br>";
            echo "Modelo: " . $datosCoche[1] . "<br>";
            echo "Número de puertas: " . $datosCoche[2] . "<br>";
        }
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curriculum</title>
</head>
<body>
    <h1>Curriculum en diferentes idiomas</h1>
    <?php
        $idioma = "es"; 

        $es_estudios = "Tengo el Bachillerato y un Grado Superior en Desarrollo de aplicaciones web";
        $es_idiomas = "Hablo español nativo y un nivel avanzado de inglés.";
        
        
        $en_estudios = "I have a Bachelor degree and a Vocational training in Web Application Development.";
        $en_idiomas = "I speak native Spanish and advanced English.";
        
       
        $estudios = ${$idioma . '_estudios'};
        $idiomas = ${$idioma . '_idiomas'};
        
        echo "<h2>Estudios</h2>";
        echo "<p>$estudios</p>";
        echo "<h2>Idiomas</h2>";
        echo "<p>$idiomas</p>";
    ?>
</body>
</html>
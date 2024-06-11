<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
</head>
<body>
    <?php
        $nombre = htmlspecialchars($_POST['nombre']);
        $deportes = $_POST['deportes'];
        $cantidad_deportes = count($deportes);

        echo "Nombre: $nombre";
        echo "Cantidad de deportes que practica: $cantidad_deportes";
    ?>
</body>
</html>

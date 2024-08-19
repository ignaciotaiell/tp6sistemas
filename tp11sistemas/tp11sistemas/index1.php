<!DOCTYPE html>
<html>
<head>
    <title>Confirmación de Pedido</title>
</head>
<body>
    <h1>Confirmación de Pedido</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST["nombre"];
        $direccion = $_POST["direccion"];
        $pizzas = $_POST["pizzas"];
    
        $archivo = fopen("pedidos.txt", "a") or die("Error al abrir el archivo");
    
        fputs($archivo, "Nombre: $nombre\n");
        fputs($archivo, "Dirección: $direccion\n");
        foreach ($pizzas as $pizza) {
            fputs($archivo, "$pizza\n");
        }
        fputs($archivo, "--------------------------------------------------------\n");
    
        fclose($archivo);
    }
    ?>
</body>
</html>
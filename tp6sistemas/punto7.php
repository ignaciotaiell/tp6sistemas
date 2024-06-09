<html>
<head>
<title></title>
</head>
<body>
<h1>Switch </h1>
<p>
<?php
$color = "rojo"; 

switch ($color) {
    case "rojo":
        echo "Hola";
        break;
    case "verde":
        echo "bienvenido";
        break;
    default:
        echo "Color no encontrado";
        break;
}
?>
</p>
</body>
</html>

<html>
<head>
<title></title>
</head>
<body>
<h1>Break en la ventana del navegador </h1>
<p>
<?php
$haceFrio = 15;
$respuesta = "";

if ($haceFrio < 20) {
    $respuesta = "Hace frio";
} else {
    $respuesta = "No hace frio";
}

echo $respuesta;
?>
</p>
</body>
</html>

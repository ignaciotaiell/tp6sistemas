<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST["numero"];

    function esPar($num) {
        return $num % 2 == 0;
    }
    $resultado = esPar($numero);
    echo $resultado ? "El número es par." : "El número es impar.";
}
?>
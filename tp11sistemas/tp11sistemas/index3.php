<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password1 = $_POST["password1"];
    $password2 = $_POST["password2"];

    if ($password1 !== $password2) {
        echo "Las claves ingresadas no coinciden. Por favor, inténtalo nuevamente.";
    } else {
        echo "Registro exitoso. ¡Bienvenido, $username!";
    }
}
?>
<?php
$dias_del_mes = [
    "Enero" => 31,
    "Febrero" => 28,
    "Marzo" => 31,
    "Abril" => 30,
    "Mayo" => 31,
    "Junio" => 30,
    "Julio" => 31,
    "Agosto" => 31,
    "Septiembre" => 30,
    "Octubre" => 31,
    "Noviembre" => 30,
    "Diciembre" => 31
];

foreach ($dias_del_mes as $mes => $dias) {
    echo "El mes de $mes tiene $dias días.\n";
}
?>

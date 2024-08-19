<?php
$apellidosNombres = $_REQUEST['apellidos_nombres'];
$dni = $_REQUEST['dni'];
$fechaNacimiento = $_REQUEST['fecha_nacimiento'];
$cursoActual = $_REQUEST['curso_actual'];
$materiasAdeudadas = $_REQUEST['materias_adeudadas'];
$materiaInscripcion = $_REQUEST['materia_inscripcion'];
$fechaInscripcion = $_REQUEST['fecha_inscripcion'];

$inscripcion = "$apellidosNombres\n$dni\n$fechaNacimiento\n$cursoActual\n$materiasAdeudadas\n$materiaInscripcion\n$fechaInscripcion\n--------------------------------------------------------\n";

file_put_contents("comprobante.txt", $inscripcion, FILE_APPEND);

echo "Inscripción guardada";
?>
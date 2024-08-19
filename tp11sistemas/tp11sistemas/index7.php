<?php
$filename = "comprobante.txt";

if (file_exists($filename)) {

    $fileContents = file_get_contents($filename);
    
    echo nl2br($fileContents); 
} else {
    echo "El archivo no existe o está vacío.";
}
?>
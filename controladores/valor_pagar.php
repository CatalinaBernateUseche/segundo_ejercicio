<?php
$pin = $_POST["pin"];
$clave = "995511"; 
if ($pin == $clave){
    echo "Aprobado";
} else {
    echo "HA CADUCADO";
}
?>
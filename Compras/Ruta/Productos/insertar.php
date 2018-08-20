<?php

include "../../Funciones/Productos.php";

$vamos = new Productos();
$vamos->create($_POST['nombre'],$_POST['precio'],$_POST['descripcion']);

?>
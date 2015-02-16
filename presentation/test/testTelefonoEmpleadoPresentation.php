<?php


include_once '../../business/telefonoEmpleadoBusiness.php';

$telefonoEmpleadoBusiness=new telefonoEmpleadoBusiness();

$telefonoEmpleado = new telefonoEmpleado(111111111,"25525667");
$telefonoEmpleadoBusiness->insertTelefonoEmpleado($telefonoEmpleado);
echo "Insertado Telefono";
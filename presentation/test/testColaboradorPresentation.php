<?php


include_once '../../business/colaboradorBusiness.php';

$colaboradorBusiness=new colaboradorBusiness();

//$colaborador = new colaborador(111111111,"Virginia","Lopez","Salas","Alajuela","vir@gmail.com","Muy atenta",1);
//$colaborador2 = new colaborador(222222222,"Maria","Marin","Rojas","Cartago","mar@gmail.com","Muy Servicial",2);
//$colaboradorBusiness->insertColaborador($colaborador2);
//echo "Insertado Colaborador";

//$colaboradorBusiness->deleteColaborador(222222222);
//echo "Borrado Colaborador";

$colaboradorA = new colaborador(222222222,"Damaris","Rojas","Marin","Heredia","dam@gmail.com","Muy amigable",3);
$colaboradorBusiness->updateColaborador($colaboradorA);
echo "Update Colaborador";
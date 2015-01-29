<?php

include_once '../../data/telefonoEmpleadoData.php';

class telefonoEmpleadoBusiness{

    public $telefonoEmpleadoData;
    
    //Constructor
    public function telefonoEmpleadoBusiness() {
        $this->telefonoEmpleadoData=new telefonoEmpleadoData();
    }

    public function insertTelefonoEmpleado($telefonoEmpleado) {
       return $this->telefonoEmpleadoData->insertTelefonoEmpleado($telefonoEmpleado);
    }

    public function deleteTelefonoEmpleado($cedulaColaborador){
       return $this->telefonoEmpleadoData->deleteTelefonoEmpleado($cedulaColaborador); 
    }
    
    public function updateTelefonoEmpleado($telefonoEmpleado){
        return $this->telefonoEmpleadoData->updateTelefonoEmpleado($telefonoEmpleado);
    }
    
}//fin de la clase

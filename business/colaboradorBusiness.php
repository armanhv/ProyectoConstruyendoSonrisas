<?php

include_once '../../data/colaboradorData.php';

class colaboradorBusiness{
    
    public $colaboradorData;
    
    //Constructor
    public function colaboradorBusiness() {
        $this->colaboradorData = new colaboradorData();
    }

    public function insertColaborador($colaboradorData) {
       return $this->colaboradorData->insertColaborador($colaboradorData);
    }

    public function deleteColaborador($cedulaColaborador){
       return $this->colaboradorData->deleteColaborador($cedulaColaborador); 
    }
    
    public function updateColaborador($cedulaColaborador){
        return $this->colaboradorData->updateTelefonoEmpleado($cedulaColaborador);
    }
    
}
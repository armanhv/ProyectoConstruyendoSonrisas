<?php

include_once '../../data/tipoColaboradorData.php';

class tipoColaboradorBusiness {

    public $tipoColaboradorData;
    
    //Constructor
    public function tipoColaboradorBusiness() {
        $this->tipoColaboradorData=new tipoColaboradorData();
    }

    public function insertTipoColaborador($tipoColaborador) {
       return $this->tipoColaboradorData->insertTipoColaborador($tipoColaborador);
    }

    public function deleteTipoColaborador($idColaborador) {
        return $this->tipoColaboradorData->deleteTipoColaborador($idColaborador);
    }

    
    public function updateTipoColaborador($tipoColaborador) {
        return $this->tipoColaboradorData->updateTipoColaborador($tipoColaborador);
    }

    public function getIdTipoColaborador() {
        return $this->tipoColaboradorData->getIdTipoColaborador();
    }

    
    public function getTipoColaboradores() {
        return $this->tipoColaboradorData->getTipoColaboradores();
    }
}//fin de la clase

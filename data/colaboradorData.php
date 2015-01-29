<?php

include_once '../../domain/colaborador.php';
include_once '../../data/conexionBaseDatos.php';

class colaboradorData{
    
    public $conexionBaseDatos;
    
    public function colaboradorData() {
        $this->conexionBaseDatos = new conexionBaseDatos();
    }
    
    public function insertTelefonoEmpleado($colaborador){
        $query = "insert into tbColaborador values (" . $colaborador->cedulaColaborador
                . ",'" . $colaborador->nombreEmpleado . "',"
                . "'" . $colaborador->primerApellido  . "',"
                . "'" . $colaborador->segundoApellido . "',"
                . "'" . $colaborador->direccion  . "',"
                . "'" . $colaborador->email  . "',"
                . "'" . $colaborador->descripcion . "',"
                . "'" . $colaborador->primerApellido  . "',"
                . " " . $colaborador->tipoColaborador . ")";
        $result = mysqli_query($this->conexionBaseDatos->abrirConexion(), $query);
        $this->conexionBaseDatos->cerrarConexion();
        if($result){
            return true;
        }else{
            return false;
        }
    }
    
    public function deleteTelefonoEmpleado($cedulaColaborador){
     
    }
    
    public function updateTelefonoEmpleado($cedulaColaborador){
       
    }
    
}
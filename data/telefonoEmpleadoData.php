<?php

include_once '../../domain/telefonoEmpleado.php';
include_once '../../data/conexionBaseDatos.php';

class telefonoEmpleadoData{
    
    public $conexionBaseDatos;
    
    public function telefonoEmpleadoData() {
        $this->conexionBaseDatos = new conexionBaseDatos();
    }
    
    public function insertTelefonoEmpleado($telefonoEmpleado){
        $query = "insert into tbTelefonoEmpleado values (" . $telefonoEmpleado->cedulaColaborador . ",'" . $telefonoEmpleado->numeroTelefono . "')";
        $result = mysqli_query($this->conexionBaseDatos->abrirConexion(), $query);
        $this->conexionBaseDatos->cerrarConexion();
        if($result){
            return true;
        }else{
            return false;
        }
    }
    
    public function deleteTelefonoEmpleado($cedulaColaborador){
        $query = "delete from tbTelefonoEmpleado where cedulaColaborador=" . $cedulaColaborador . ";";
        $result = mysqli_query($this->conexionBaseDatos->abrirConexion(), $query);
        $this->conexionBaseDatos->cerrarConexion();
        if($result){
            return true;
        }else{
            return false;
        }
    }
    
    public function updateTelefonoEmpleado($telefonoEmpleado){
        $query = "update tbTelefonoEmpleado set numeroTelefono='" . $telefonoEmpleado->numeroTelefono 
                . "'where cedulaColaborador = ".$telefonoEmpleado->cedulaColaborador . ";";
        $result = mysqli_query($this->conexionBaseDatos->abrirConexion(), $query);
        $this->conexionBaseDatos->cerrarConexion();
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
    
}


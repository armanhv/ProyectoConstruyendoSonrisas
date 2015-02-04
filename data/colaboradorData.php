<?php

include_once '../../domain/colaborador.php';
include_once '../../data/conexionBaseDatos.php';

class colaboradorData{
    
    //Atributos
    public $conexionBaseDatos;
    
    //Constructor
    public function colaboradorData() {
        $this->conexionBaseDatos = new conexionBaseDatos();
    }//End Constructor
    
    //insertColaborador
    public function insertColaborador($colaborador){
        $query = "insert into tbcolaborador values (" . $colaborador->cedulaColaborador
                . ",'" . $colaborador->nombreEmpleado . "','" . $colaborador->primerApellido  . "',"
                . "'" . $colaborador->segundoApellido . "','" . $colaborador->direccion  . "',"
                . "'" . $colaborador->email  . "','" . $colaborador->descripcion . "',"
                . " " . $colaborador->tipoColaborador . ")";
        $result = mysqli_query($this->conexionBaseDatos->abrirConexion(), $query);
        $this->conexionBaseDatos->cerrarConexion();
        if($result){
            return true;
        }else{
            return false;
        }
    }//End insertColaborador
    
    //deleteColaborador
    public function deleteColaborador($cedulaColaborador){
     
    }//End deleteColaborador
    
    //updateColaborador
    public function updateColaborador($cedulaColaborador){
       
    }//End updateColaborador
    
}//End colaboradorData
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
        $query  = "delete from tbcolaborador where ( cedulaColaborador = " . $cedulaColaborador .")";
        $result = mysqli_query($this->conexionBaseDatos->abrirConexion(), $query);
        $this->conexionBaseDatos->cerrarConexion();
        if($result){
            return true;
        }else{
            return false;
        }
    }//End deleteColaborador
    
    //updateColaborador
    public function updateColaborador($colaborador){
        $query = "update tbcolaborador set " 
                . " nombreEmpleado = '" . $colaborador->nombreEmpleado   . "',"
                . " primerApellido = '" . $colaborador->primerApellido   . "',"
                . " segundoApellido = '" . $colaborador->segundoApellido . "',"
                . " direccion = '" . $colaborador->direccion             . "',"
                . " email = '" . $colaborador->email                     . "',"
                . " descripcion = '" . $colaborador->descripcion         . "'"
                . " where (cedulaColaborador = " . $colaborador->cedulaColaborador .")";
        $result = mysqli_query($this->conexionBaseDatos->abrirConexion(), $query);
        $this->conexionBaseDatos->cerrarConexion();
        if($result){
            return true;
        }else{
            return false;
        }
    }//End updateColaborador
    
}//End colaboradorData
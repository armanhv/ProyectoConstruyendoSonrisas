<?php

include_once '../../domain/tipoColaborador.php';
include_once '../../data/conexionBaseDatos.php';

class tipoColaboradorData {

    //Atributos
    public $conexionBaseDatos;

    //tipoColaborador
    public function tipoColaboradorData() {
        $this->conexionBaseDatos = new conexionBaseDatos();
    }//End tipoColaborador

    //insertTipoColaborador
    public function insertTipoColaborador($tipoColaborador) {
        $query = "insert into tbTipoColaborador values (" .  $this->getIdTipoColaborador() . ",'" . $tipoColaborador->nombreColaborador . "')";
        $result = mysqli_query($this->conexionBaseDatos->abrirConexion(), $query);
        $this->conexionBaseDatos->cerrarConexion();
        if ($result) {
            return true;
        } else {
            return false;
        }
    }//End insertTipoColaborador

    //deletetipoColaborador
    public function deleteTipoColaborador($idColaborador) {
        $query = "delete from tbTipoColaborador where idColaborador=" . $idColaborador . ";";
        $result = mysqli_query($this->conexionBaseDatos->abrirConexion(), $query);
        $this->conexionBaseDatos->cerrarConexion();
        if ($result) {
            return true;
        } else {
            return false;
        }
    }//End deleteTipoColaborador

    //updateTipoColaborador
    public function updateTipoColaborador($tipoColaborador) {
        $query = "update tbTipoColaborador set nombreColaborador='" . $tipoColaborador->nombreColaborador
                . "' where idColaborador =" . $tipoColaborador->idColaborador;

        $result = mysqli_query($this->conexionBaseDatos->abrirConexion(), $query);
        $this->conexionBaseDatos->cerrarConexion();
        if ($result) {
            return true;
        } else {
            return false;
        }
    }//End updateTipoColaborador

    //getIdTipoColaborador
    public function getIdTipoColaborador() {       
        $result = mysqli_query($this->conexionBaseDatos->abrirConexion(), "select max(idColaborador) from tbTipoColaborador;");        
        $this->conexionBaseDatos->cerrarConexion();
        if (mysqli_num_rows($result)!=0) {
            $id = mysqli_fetch_array($result);
            return ++$id[0];
        } else {
            return 1;
        }        
    }//End getIdTipoColaborador

    //getTipoColaborador
    public function getTipoColaboradores() {
        $result = mysqli_query($this->conexionBaseDatos->abrirConexion(), "select * from tbTipoColaborador");
        $arrayTiposColaborador = [];

        while ($row = mysqli_fetch_array($result)) {
            $currentTipoColaborador = new tipoColaborador($row['idColaborador'], $row['nombreColaborador']);
            array_push($arrayTiposColaborador, $currentTipoColaborador);
        }

        $this->conexionBaseDatos->cerrarConexion();
        return $arrayTiposColaborador;
    }//End getTipoColaborador

}//End tipoColaborador

//fin de la clase

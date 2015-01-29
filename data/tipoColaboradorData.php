<?php

include_once '../../domain/tipoColaborador.php';
include_once '../../data/conexionBaseDatos.php';

class tipoColaboradorData {

    public $conexionBaseDatos;

    public function tipoColaboradorData() {
        $this->conexionBaseDatos = new conexionBaseDatos();
    }

    public function insertTipoColaborador($tipoColaborador) {
        $query = "insert into tbTipoColaborador values (" .  $this->getIdTipoColaborador() . ",'" . $tipoColaborador->nombreColaborador . "')";
        $result = mysqli_query($this->conexionBaseDatos->abrirConexion(), $query);
        $this->conexionBaseDatos->cerrarConexion();
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteTipoColaborador($idColaborador) {
        $query = "delete from tbTipoColaborador where idColaborador=" . $idColaborador . ";";
        $result = mysqli_query($this->conexionBaseDatos->abrirConexion(), $query);
        $this->conexionBaseDatos->cerrarConexion();
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

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
    }

    public function getIdTipoColaborador() {       
        $result = mysqli_query($this->conexionBaseDatos->abrirConexion(), "select max(idColaborador) from tbTipoColaborador;");        
        $this->conexionBaseDatos->cerrarConexion();
        if (mysqli_num_rows($result)!=0) {
            $id = mysqli_fetch_array($result);
            return ++$id[0];
        } else {
            return 1;
        }        
    }

    public function getTipoColaboradores() {
        $result = mysqli_query($this->conexionBaseDatos->abrirConexion(), "select * from tbTipoColaborador");
        $arrayTiposColaborador = [];

        while ($row = mysqli_fetch_array($result)) {
            $currentTipoColaborador = new tipoColaborador($row['idColaborador'], $row['nombreColaborador']);
            array_push($arrayTiposColaborador, $currentTipoColaborador);
        }

        $this->conexionBaseDatos->cerrarConexion();
        return $arrayTiposColaborador;
    }

}

//fin de la clase

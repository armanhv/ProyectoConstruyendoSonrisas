<?php

class tipoColaborador{
    
    //Atributos
    public $idColaborador;
    public $nombreColaborador;
    
    //Constructor
    public function tipoColaborador($idColaborador,$nombreColaborador){
        $this->idColaborador=$idColaborador;
        $this->nombreColaborador=$nombreColaborador;        
    }//End Constructor

}//End tipoColaborador

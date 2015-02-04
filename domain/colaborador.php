<?php

class colaborador{

	//Variables
	public $cedulaColaborador;
	public $nombreEmpleado;
	public $primerApellido;
	public $segundoApellido;
	public $direccion;
	public $email;
	public $descripcion;
	public $tipoColaborador;

	//Constructor
	public function colaborador($cedulaColaborador,$nombreEmpleado,$primerApellido,$segundoApellido,
        $direccion,$email,$descripcion,$tipoColaborador){
        $this->cedulaColaborador=$cedulaColaborador;
        $this->nombreEmpleado=$nombreEmpleado;
        $this->primerApellido=$primerApellido;
        $this->segundoApellido=$segundoApellido;
        $this->direccion=$direccion;
        $this->email=$email;
        $this->descripcion=$descripcion;
        $this->tipoColaborador=$tipoColaborador;
    }//End Constructor

}//End colaborador
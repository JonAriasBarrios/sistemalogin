<?php
class rolUser{
    //Atributos
    private $idrolUser;
    private $nombrerolUser;
    private $descripcion;

    //Constructor
    public function _constructor($nombrerolUser, $descripcion){
        $this->nombrerolUser=$nombrerolUser;
        $this->descripcion=$descripcion;

    }

    //SETTER & GETTER
    public function setNombrelUser($nombrerolUser){
      $this->setNombrelUser=$nombrerolUser;
    }
    public function getNombrelUser(){
      return $this->getNombrelUser;
    }

    public function setDescripcion($descripcion){
      $this->setDescripcion=$descripcion;
    }
    public function getDescripcion(){
      return $this->getDescripcion;
    }

    //Metodos para el CRUD

    public function insertarRolUsuario(){
      //Aqui va el codigo para insertar el usuario
    }

    public function modificarRolUsuario(){
      //Aqui va el codigo para insertar el usuario
    }

    public function eliminarRolUsuario(){
      //Aqui va el codigo para insertar el usuario
    }

    public function consultarRolUsuario(){
      //Aqui va el codigo para insertar el usuario
    }

}
?>
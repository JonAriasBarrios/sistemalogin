<?php
class Usuario{
  //Atributos
  private $idUsuario;
  private $nombreUsuario;
  private $apellidoPaternoUsuario;
  private $apellidoMaternoUsuario;
  private $emailUsuario;
  private $telefonoUsuario;
  private $estatusUsuario;

  public function __construct(
    $nombreUsuario, $apellidoPaternoUsuario, $apellidoMaternoUsuario, $emailUsuario, $telefonoUsuario, $estatusUsuario
  )
  {
    $this->nombreUsuario=$nombreUsuario;
    $this->apellidoPaternoUsuario=$apellidoPaternoUsuario;
    $this->apellidoMaternoUsuario=$apellidoMaternoUsuario;
    $this->emailUsuario=$emailUsuario;
    $this->telefonoUsuario=$telefonoUsuario;
    $this->estatusUsuario=$estatusUsuario;
    
  }

  //Metodos set y get

    public function  insertarUsuario(){
      // Aqui va el codigo para insertar
    }

    public function  modificarUsuario(){
      // Aqui va el codigo para insertar
    }

    public function  eliminarUsuario(){
      // Aqui va el codigo para insertar
    }
    public function  consultarUsuario(){
      // Aqui va el codigo para insertar
    }
}
?>
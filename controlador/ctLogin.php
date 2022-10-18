<?php
// include_once('../modelo/ConexionBD.php');
// $objConexionBD=new ConexionBD('localhost:3306','root','12345','loginbd');
// $objConexionBD->conectarBD();


//echo "Bienvenido a PHP";

include_once('../modelo/Login.php');


$nombreUsuario;
$claveUsuario;

$nombreUsuario=$_REQUEST['txtUsuario'];  //REQUEST PARA POST Y GET
$claveUsuario=$_REQUEST['txtClave'];

$objLogin=new Login($nombreUsuario,$claveUsuario);

if ($objLogin->validarLogin()) {
    //session_start();
    //$_SESSION['usuarioValido']=$nombreUsuario;
    echo "Bienvenido" . $nombreUsuario;
    echo '
    <script>
    window.location.href="../vista/paginas/phps/indexAdmin.php";
    </script>
    ';
}else {
    echo "Usuario y/o contraseña incorrecta";
}


?>
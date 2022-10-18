<?php

echo "Bienvenido a PHP";
$nombreUsuario;
$claveUsuario;

$nombreUsuario=$_REQUEST['txtUsuario'];  //REQUEST PARA POST Y GET
$claveUsuario=$_REQUEST['txtClave'];

if ($nombreUsuario=="Jonathan" && $claveUsuario=="1234") {
    session_start();
    $_SESSION['usuarioValido']=$nombreUsuario;
    echo "Bienvenido" . $nombreUsuario;
    echo '
    <script>
    window.location.href="indexAdmin.php";
    </script>
    ';
}else {
    echo "Usuario y/o contraseña incorrecta";
}

?>
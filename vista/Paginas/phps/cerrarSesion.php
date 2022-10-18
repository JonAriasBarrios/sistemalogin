<?php
session_start();
if(isset($_SESSION['usuarioValido'])){
// remove all session variables
session_unset();

// destroy the session
session_destroy();
echo '
    <script>
    window.location.href="../../../index.html";
    </script>
    ';

}else{
    echo 'No has iniciado sesion';
}


?>
<?php
session_start();
if(isset($_SESSION['usuarioValido'])){

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/cssIndex.css">
    <link rel="stylesheet" href="../../css/index.css" />
    <link rel="stylesheet" href="../../css/cssMenu.css" />
    <link rel="stylesheet" href="../../CSS/cssdropdown.css"/>
    <link
      rel="stylesheet"
      href="../../vendor/fontawesome-free-6.2.0-web/css/all.css"/> 
    <title>PaginaPrincipal</title>

</head>
<body>
    <div id="contenedorPrincipal">
        <header id="encabezado">
            <h1>Mi pagina Web</h1>  
        </header>
        <nav id="menu">
            
        <ul>
            <li>
                <a href="../../Paginas/inicio.html" target="iframeContent" 
                class="pancho"><i class="fa-solid fa-igloo"></i> Inicio</a>
            </li>
            <li>
                <a href="../../Paginas/acercade.html" target="iframeContent">
                <i class="fa-sharp fa-solid fa-bell"></i> Acerca de</a>
            </li>
            <li>
                
                <a href="../../Paginas/galeria.html" target="iframeContent">
                <i class="fa-sharp fa-solid fa-image"></i> Galeria</a>
            </li>
            <li id="mPerfil1">
              
            <div class="dropdown" id="mPerfil">
                <button class="dropbtn"><i class="fa-sharp fa-solid fa-ghost"></i>PERFIL</button>
                <div class="dropdown-content">
                  <a href="#">Datos</a>
                  <a
                    href="../../paginas/login.html"
                    target="iframeContent"
                    ><i class="fa-sharp fa-solid fa-user"></i>Iniciar Sesión</a
                  >
                  <a href="cerrarSesion.php">Cerrar Sesión</a>
                </div>
                
              </div>
              </li>
              
        </ul>
        <div id="hola">
                <h4>Bienvenido :
                  <?php
                  echo''.$_SESSION['usuarioValido'];
                  ?>
                </h4>
              </div>
        </nav>

        <section id="contenido">
            <iframe
              id="iframeContent"
              name="iframeContent"
              src="../../paginas/inicio.html"
              frameborder="0"
            ></iframe>
          </section>

    </div>
</body>
</html>

<?php
}else{
  echo 'Debes iniciar sesion';
  echo '<br>';
  echo'<a href="../../../index.html">
  Iniciar Session
  </a>';
}
?>
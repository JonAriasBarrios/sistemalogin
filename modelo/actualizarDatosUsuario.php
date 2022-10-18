<?php
    $servername = "localhost";
    $username = "root";
    $password = "12345";
    $dbname = "loginbd";

    
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


        // prepare sql and bind parameters
        $stmt = $conn->prepare("call loginbd.sp_actualizarUsuario(:id, :nombre, :APaterno, :AMaterno, :email, :telefono, :estatus);");

        $stmt->bindParam(':id', $_POST["inpID"]);
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':APaterno', $APaterno);
        $stmt->bindParam(':AMaterno', $AMaterno);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':telefono', $telefono);
        $stmt->bindParam(':estatus', $estatus);

        //* update row 1
        $id = $_POST["inpID"];
        $nombre = $_POST["inpNombre"];
        $APaterno = $_POST["inpAPaterno"];
        $AMaterno = $_POST["inpAMaterno"];
        $email = $_POST["inpEmail"];
        $telefono = $_POST["inpTelefono"];
        $estatus = $_POST["inpEstatus"];

        $stmt->execute();


        echo "Los cambios fueron exitosos ==> Datos: $id - $nombre - $APaterno - $AMaterno - $email - $telefono - $estatus";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    $conn = null;
?>
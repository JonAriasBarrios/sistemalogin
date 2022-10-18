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
    $stmt = $conn->prepare("call loginbd.sp_insertarUsuario(:nombre, :apellidoPa, :apellidoMa, :email, :telefono, :status)");
    $stmt->bindParam(':nombre', $nombre);
    $stmt->bindParam(':apellidoPa', $apellidoPa);
    $stmt->bindParam(':apellidoMa', $apellidoMa);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':telefono', $telefono);
    $stmt->bindParam(':status', $status);

       //* insert row 1
    $nombre = $_POST["inpNombre"];
    $APaterno = $_POST["inpAPaterno"];
    $AMaterno = $_POST["inpAMaterno"];
    $email = $_POST["inpEmail"];
    $telefono = $_POST["inpTelefono"];
    $estatus = $_POST["inpEstatus"];

    $stmt->execute();


    echo "New records created successfully";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
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
        $stmt = $conn->prepare("call loginbd.sp_eliminarU(:id);");

        $stmt->bindParam(':id', $id);

        //* update row 1
        $id = $_POST["inpID"];

        $stmt->execute();


        echo "Los cambios fueron exitosos ==> idUsuario: $id";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    $conn = null;
?>
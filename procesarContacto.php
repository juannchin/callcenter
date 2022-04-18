<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Formulario</title>
    <?php
    // Include config file
    require_once "config.php";

?>
</head>
<body>
<?php   
        $nombre = $_POST["nombre"]; 
        $apellido = $_POST["apellido"]; 
        $email = $_POST["email"]; 
        $telefono = $_POST["telefono"];  
        $paqueteCable = $_POST["paquetesCable"]; 
        $paqueteInternet = $_POST["paquetesInternet"];
        $paqueteTelefonia = $_POST["paquetesTelefonia"]; 

        // Create connection
        //$conn = mysqli_connect($servername, $username, $password, $database);
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        } else {
            echo "Connected successfully<br><br>";
        }
        
        $sql = "INSERT INTO clientes (nombre, apellido, email, telefono, paquete1, paquete2, paquete3) 
                VALUES ('$nombre', '$apellido', '$email', '$telefono', '$paqueteCable', '$paqueteInternet', '$paqueteTelefonia')";
        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);

?>
</body>
</html>
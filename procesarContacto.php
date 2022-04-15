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
        $paqueteInternet = $_POST["paquetesInternet"]; 

        // Create connection
        //$conn = mysqli_connect($servername, $username, $password, $database);
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        
        echo "Connected successfully";
        
        $sql = "INSERT INTO clientes (nombre, apellido, email, telefono) VALUES ('$nombre', '$apellido', '$email', '$telefono')";
        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);

?>
</body>
</html>
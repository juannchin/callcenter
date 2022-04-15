<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=2.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Inicio</title>
</head>

<body>
    <div id="main">
    <!-- Aquí está la CABECERA de nuestra página -->
    <header>
            <img class="encabezado" src="../images/Encabezado.png" alt="">
            <div class="login-info">
                <span>Bienvenido <?php echo $login_session; ?> </span><a href = "logout.php"> Salir</a> 
            </div>
        </header>
        <div class="clr"></div>

        <!-- Aquí está el menú principal de nuestra página -->
                <nav>
                    <ul>
                        <li><a href="home.php">Inicio</a></li>
                        <li><a href="leads.php">Leads</a></li>
                        <li><a href="clientes.php">Clientes</a></li>
                        <li><a href="admin.php">Administracion</a></li>

                    </ul>
                </nav>
        <div class="clr"></div>

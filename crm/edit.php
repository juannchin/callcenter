<?php
   include('includes/sesion.php');
?>
    <?php include('includes/header.php'); 
    $id = $_GET['id'];
    $tipo = $_GET['tipo'];
    ?>
        <!-- Aquí está el contenido principal de nuestra página -->
        <main>
            <!-- Contiene un artículo -->
            <?php
            if ($tipo=="lead") {
                $result = mysqli_query($conn,"SELECT * FROM clientes WHERE id ='$id'");
                while($row = mysqli_fetch_array($result))
                {
                echo"<input type='hidden' name='id' value='{$row['id']}' required>";
                echo"<input type='text' placeholder='Nombre' name='firstname' value='{$row['nombre']}' required>";
                echo"<input type='text' placeholder='Apellido' name='middlename' value='{$row['apellido']}' required>";
                echo"<input type='text' placeholder='Telefono' name='telefono' value='{$row['telefono']}' required>";
                echo"<input type='text' placeholder='Email' name='email' value='{$row['email']}' required>";
                echo"<label><b>Fecha de venta</b>";
                echo"<input type='date' name='fechaventa' value='{$row['fechaventa']}'required>";
                echo"</label>";
                
                echo"<div class='clearfix'>";
                echo"<button type='submit' class='signupbtn'>Actualizar</button>";
                echo"</div>";
                }
        
            } elseif ($tipo=="admin") {
                $result = mysqli_query($conn,"SELECT * FROM users WHERE id ='$id'");
                while($row = mysqli_fetch_array($result))
                {
                    echo"<input type='hidden' name='id' value='{$row['id']}' required>";
                    echo"<input type='text' placeholder='Nombre' name='firstname' value='{$row['username']}' required>";
                    echo"<input type='text' placeholder='Apellido' name='middlename' value='{$row['password']}' required>";
                    
                    echo"<div class='clearfix'>";
                    echo"<button type='submit' class='signupbtn'>Actualizar</button>";
                    echo"</div>";
                }

            } ?>
        <div class="clr"></div>
        </main>
<?php include('includes/footer.php'); ?>
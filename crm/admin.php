<?php
   include('includes/sesion.php');
?>
    <?php include('includes/header.php'); 
    
    $ses_sql = mysqli_query($conn,"SELECT * FROM users");
    
    ?>
        <!-- Aquí está el contenido principal de nuestra página -->
        <main>
            <!-- Contiene un artículo -->
        <article>
            <h2>Administrar usuarios del sistema</h2>

            <p>Si te encanta todo el mundo tecnológico te encuentras en el lugar perfecto ya que ofrecemos los servicios de Internet Residencial, Cable 100% Digital y servicios de Telefonia Movil.</p>

            <?php
            echo "<table border='1'>
            <tr>
            <th>Nombre</th>
            <th>password</th>
            <th>Rol</th>
            <th>Editar</th>
            <th>Borrar</th>
            </tr>";

            while($row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC))
            {
            echo "<tr>";
            echo "<td>" . $row['username'] . "</td>";
            echo "<td>" . $row['password'] . "</td>";
            echo "<td>" . $row['rol'] . "</td>";
            echo "<td align='center'><a href='edit.php?id=".$row['id']."&tipo=admin'><img src='imagenes/Editing-Edit-icon.png' width='25' alt='Editar'></a></td>";
            echo "<td align='center'><a href='delete.php?id=".$row['id']."'><img src='imagenes/desactivar.png' width='25' alt='Desactivar'></a></td>";
            echo "</tr>";
            }
            echo "</table>";
            ?>
            
        </article>
        <div class="clr"></div>
        </main>
<?php include('includes/footer.php'); ?>
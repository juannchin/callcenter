<?php
   include('includes/sesion.php');
?>
    <?php include('includes/header.php'); 
    
    $ses_sql = mysqli_query($conn,"SELECT * FROM clientes WHERE cuenta NOT NULL");
    
    ?>
        <!-- Aquí está el contenido principal de nuestra página -->
        <main>
            <!-- Contiene un artículo -->
        <article>
            <h2>Bienvenidos al CRM de Flashpoint</h2>

            <p>Si te encanta todo el mundo tecnológico te encuentras en el lugar perfecto ya que ofrecemos los servicios de Internet Residencial, Cable 100% Digital y servicios de Telefonia Movil.</p>

            <?php
            echo "<table border='1'>
            <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Telefono</th>
            <th>Email</th>
            <th>Editar</th>
            <th>Borrar</th>
            </tr>";

            while($row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC))
            {
            echo "<tr>";
            echo "<td>" . $row['nombre'] . "</td>";
            echo "<td>" . $row['apellido'] . "</td>";
            echo "<td>" . $row['telefono'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td><a href='edit.php?id=".$row['id']."'><img src='./images/icons8-Edit-32.png' alt='Edit'></a></td>";
            echo "<td><a href='delete.php?id=".$row['id']."'><img src='./images/icons8-Trash-32.png' alt='Delete'></a></td>";
            echo "</tr>";
            }
            echo "</table>";
            ?>
            
        </article>
        <div class="clr"></div>
        </main>
<?php include('includes/footer.php'); ?>
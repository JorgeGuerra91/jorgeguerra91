<?php 
    session_start();
    include 'conexion.php'; 
    $sql="SELECT *  FROM tareas";
    $query=mysqli_query($con,$sql);
?>

<!DOCTYPE html>
<html lang="es">
                    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <script defer src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script defer src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script defer src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap-icons.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="bootstrap/package/dist/sweetalert2.min.js"></script>      
    <script defer src ="js/script.js"></script>
    <link rel="stylesheet" href="css/lista.css">
    <link rel="icon" type="image/png" href="img/lista.png">
    <title>Lista de tareas</title>
</head>

<body>
<div class="container mt-3 mb-3 p-3 rounded-3 fondo2">
    <div class="row">
        <div class="col-12 d-flex justify-content-center  pb-3 colorletra">
            
            <h1>Lista de tareas 📝</h1>
                
        </div>
    </div>
    <form action="tarea_envio.php" method="post">
<div class="row">
     <div class="col-4 col-x3 justify-content-center p-3 fondo1 rounded-3">
     <div class="input-group mb-3 mt-2">
    <input type="text" class="form-control" name="tarea" id="usuario" placeholder="Agrega una tarea" required>
    <div class="input-group-append">
    <button class="btn btn-outline-success" type="submit" name="guardar1"  title="Agregar tarea" >✚</button>
    </form>
  </div>
    </div>
    </div>
</form>
     <div class="col-8 justify-content-center p-3 border fondo1 rounded-3"><table id="example" class="table table-responsive" style="width:100%">
        <thead>
            <tr>
                <th>Tareas</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        <?php
                while($row=mysqli_fetch_array($query)){
                       ?>
                        <tr>
                            <td><?php  echo $row['tarea']?></td>
                                           <td class="text-end">
                                        <a href="delete_tarea.php?id_tarea=<?php echo $row['id_tarea'] ?>" class="btn btn-outline-danger" title="Eliminar tarea">❌</a>
                                     </td>
                                </tr>
                            <?php 
                        }
                    ?>  
        </tfoot>
    </table></div>
</div>
</body>
</html>

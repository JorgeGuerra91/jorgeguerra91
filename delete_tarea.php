<?php
include_once 'conexion.php';
if (isset($_GET['id_tarea'])) {
   $id_tarea=$_GET['id_tarea'];
   $sql_del="DELETE FROM tareas WHERE id_tarea=$id_tarea";
   $result_del=mysqli_query($con, $sql_del);
    if($result_del){
        header('Location: index.php');
    }else{
        ?>
        <script>
            alert("Error al eliminar, vuelva a intentarlo mas tarde..")
        </script>
        <?php
    }
    
} else {
    header('Location: index.php');
}
?>
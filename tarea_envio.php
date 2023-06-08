<?php
session_start();
include 'conexion.php';


function revisaremp($documento,$tipo_doc,$con){
    $sql="SELECT * from usuarios where doc_usu='$documento' and tipo_id_usu='$tipo_doc'";
    $result=mysqli_query($con,$sql);
    if(mysqli_num_rows($result) > 0){
        return 1;
    }else{
        return 0;
    }
}


if (isset($_POST['guardar1'])) {
    {    
		if(strlen($_POST['tarea'])>=1){
			$auto = trim($_POST['tarea']);
		}
		
		$tarea = trim($_POST['tarea']);
		$fecha_solicitud = $date;
	
		$update = "INSERT INTO `tareas`(`tarea`) VALUES ('$tarea')";
		$result = mysqli_query($con, $update);
		if ($result) {
			?>	
			<script type="text/javascript">
			window.location.href='index.php';	
			</script>
			<?php
		}else{
			?>
		<script>
		const Toast = Swal.mixin({
toast: true,
position: 'top-end',
showConfirmButton: false,
timer: 3000,
timerProgressBar: true,
didOpen: (toast) => {
toast.addEventListener('mouseenter', Swal.stopTimer)
toast.addEventListener('mouseleave', Swal.resumeTimer)
}
})

Toast.fire({
icon: 'error',
title: 'No se actualizaron los datos'
})
	</script>
	<?php
			}
		}
	}
?>
 
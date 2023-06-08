<?php
session_start();
include 'conexion.php';



if (isset($_POST['guardar1'])) {
    {    
	
		$tarea = trim($_POST['tarea']);
	
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
 

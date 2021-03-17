<?php 
		
	include("conexion.php");
		$correo = $_POST['correo'];
		$contrasena= $_POST['contrasena'];

		$consulta="SELECT * FROM usuario WHERE correo='$correo' AND contrasena='$contrasena'";
			
			$resultado = mysqli_query($conn, $consulta);
			$filas=mysqli_num_rows($resultado);

			if($filas==1){
				echo"<script> alert('Bienvenido'); window.location='../inicio.html'</script>";
			}else{
				echo "
					<script>
					alert('Error de autenticacion');
					window.Location=../index.html
					</script>
				";
			}
		
		mysqli_close($conexion);
?>	
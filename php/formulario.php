<?php  

	include("conexion.php");

		$nombre= $_POST["nombre"];
		$apellidos= $_POST["apellidos"];
		$correo= $_POST["correo"];
		$contrasena= $_POST["contrasena"];

			$insertar = "INSERT INTO usuario (nombre, apellidos, correo, contrasena) VALUES('$nombre', '$apellidos', '$correo', '$contrasena')";

					$verificar_correo= mysqli_query($conn, "SELECT * FROM usuario WHERE correo = '$correo'"); 
					if (mysqli_num_rows($verificar_correo) == 1) 
					{
						echo "
							<script>
							alert('El correo ya esta siendo utilizado');
							window.location='../formulario.html'
							</script>
						";
					}

						$resultado = mysqli_query($conn, $insertar);
						if (!$resultado) {
						echo "error al registrarse";
						}else{
							echo "
								<script>
								alert('Usted se a registrado correctamente');
								window.location='../index.html'
								</script>
							";
						}

			mysqli_close($conexion);

?>
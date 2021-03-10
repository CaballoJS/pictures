<?php 

include("conexion.php");


if (isset($_POST['register'])) {
    if (strlen($_POST['email']) >= 1 && strlen($_POST['contraseña']) >= 1) {
	    $email = trim($_POST['email']);
	    $contraseña = trim($_POST['contraseña']);
	    // $fechareg = date("d/m/y");
	    $consulta = "INSERT INTO datos(correo, contraseña) VALUES ('$email','$contraseña')";
	    $resultado = mysqli_query($conex,$consulta);
		
		if ($resultado) {
	    	?> 
	    	<p class="ok">wait a moment...</p>
 			 <script src="main.js"></script>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
	
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>
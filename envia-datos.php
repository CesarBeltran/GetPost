<?php
	if (isset($_GET["enviar_btn"])) {
		echo "Los datos los enviaste por el metodo GET, Los datos son:<br/> <br/>  El nombre es: ".$_GET["nombre_txt"]."<br/>  El Password es: ".$_GET["password_txt"];
	
	}elseif (isset($_POST["enviar_btn"])) {
		echo "Los datos los enviaste por el metodo POST, Los datos son:<br/><br/> El nombre es: ".$_POST["nombre_txt"]." <br/> El Password es: ".$_POST["password_txt"];

	}


?>
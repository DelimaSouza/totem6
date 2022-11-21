<?php

	session_start();

	require_once('config.php');

	
	$usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
	$serie = filter_input(INPUT_POST, 'serie', FILTER_SANITIZE_STRING);
	


	$sql = $conn->query("SELECT * FROM nomes WHERE usuario='$usuario'");
	if(mysqli_num_rows($sql) > 0){
		$_SESSION['jaexiste'] = "Usuario já existe, escolha outro.";
		header('Location: index.php');
		exit();
	} else {
 		$result_usuario = "INSERT INTO nomes (usuario,serie) VALUES ('$usuario','$serie')";
		$resultado_usuario = mysqli_query($conn, $result_usuario);
		
}
	
	if(mysqli_insert_id($conn)) {
		$_SESSION['msg'] = "<li>$usuario, cadastrado com sucesso</li>";
		header("Location: index.php");		
	}else {
		$_SESSION['erro'] = "O USUARIO: '$usuario' NÃO foi cadastrado com sucesso";
		header("Location: index.php");
	}	
?>
<?php

$login = $_POST['user'];
$senha = $_POST['pass'];

require("conexao.php");

$sql = "SELECT * FROM funcionario WHERE login='".$login."' AND senha ='".$senha."'";

$query = mysqli_query($con, $sql);

if (mysqli_num_rows($query) > 0) {
	while ($dados = mysqli_fetch_assoc($query)) {
		session_start();
		$_SESSION['usuario'] = $login;
		$_SESSION['senha'] = $senha;
	}

	while($i = mysqli_fetch_assoc($query)){
		$_SESSION['id'] = $i['id'];
	}

	header('location:index_funcionario.php');

}
else{
	unset($_SESSION['usuario']);
	header('location:index.php');
}


?>
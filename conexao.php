<?php
	define("HOST", "localhost");
	define("USER", "root");
	define("PASS", "");
	define("DB", "livros");
	header('Content-Type: text/html; charset=utf-8');
	$con = mysqli_connect(HOST,USER,PASS);
	$banco = mysqli_select_db($con, DB);
?>
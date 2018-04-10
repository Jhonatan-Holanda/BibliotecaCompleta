<?php

require 'conexao.php';

if(isset($_POST['action'])){
$nome = strtoupper($_POST["nome"]);
$autor = strtoupper($_POST["autor"]);
$genero = strtoupper($_POST["genero"]);
$prateleira = strtoupper($_POST["prateleira"]);
$fila = strtoupper($_POST["fila"]);
$cod = strtoupper($_POST["codigo"]);
$qnt = strtoupper($_POST["quantidade"]);

$dir = "foto/";
$ext = strtolower(substr($_FILES['file']['name'], -4));
$Nimg = md5(microtime()).$ext;
$tam = $_FILES['file']['size'];
$tam = ceil(($tam / 1024) / 1024);
if($tam < 2){
	if($ext == ".jpg" || $ext == ".png" || $ext == ".bmp" || $ext == ".gif"){
		if(move_uploaded_file($_FILES['file']['tmp_name'], $dir.$Nimg)){
			
			$sql = "INSERT INTO obras (nome, autor, qnt, genero, prateleira,fila,img,cod) VALUES ('".$nome."', '".$autor."','".$qnt."','".$genero."','".$prateleira."','".$fila."','".$Nimg."','".$cod."')";
			
			$query = mysqli_query($con, $sql);

			if(!$query){
				echo "<script>alert('Erro ao Cadastrar!')</script>";
			}else{
				echo '
                            <script>
                                    alert("Cadastrado com sucesso!")
                                    setTimeout(function(){
                                            window.location = "index_funcionario.php?pg=mostrar_livros";
                                    }, 500);
                            </script>';
			}
		}else{
			echo "<script>alert('Erro ao CADASTRA!')</script>";
		}
	}else{
		echo "Os formatos aceitos: jpg, png, bmp e gif";
	}
}else{
	echo "Tamanho ultrapassou 2MB";
}}
?>

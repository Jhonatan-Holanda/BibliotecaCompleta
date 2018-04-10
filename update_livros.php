<?php

require 'conexao.php';

if(isset($_POST['action'])){

$id = $_GET['prod_id'];

$nome = strtoupper($_POST["nome"]);
$autor = strtoupper($_POST["autor"]);
$genero = strtoupper($_POST["genero"]);
$prateleira = strtoupper($_POST["prateleira"]);
$fila = strtoupper($_POST["fila"]);
$cod = strtoupper($_POST["codigo"]);
$qnt = strtoupper($_POST["quantidade"]);
$img = $_FILES['file']['name'];
$imga = $_GET['img'];

$dir = "foto/";
$ext = strtolower(substr($_FILES['file']['name'], -4));
$Nimg = md5(microtime()).$ext;
$tam = $_FILES['file']['size'];
$tam = ceil(($tam / 1024) / 1024);

if($img == ""){
	
			$sql = "UPDATE obras SET nome = '$nome',autor ='$autor',genero ='$genero',prateleira ='$prateleira',fila ='$fila',cod ='$cod',qnt ='$qnt',img ='$imga' WHERE id ='$id'";
			
			$query = mysqli_query($con, $sql);

			if(!$query){
				echo "<script>alert('Erro ao Editar nada!')</script>";
			}else{
				echo '
                            <script>
                                    alert("Editado com sucesso!")
                                    setTimeout(function(){
                                            window.location = "index_funcionario.php?pg=mostrar_livros";
                                    }, 500);
                            </script>';
			}
}else{
if($tam < 2){
	if($ext == ".jpg" || $ext == ".png" || $ext == ".bmp" || $ext == ".gif"){
		if(move_uploaded_file($_FILES['file']['tmp_name'], $dir.$Nimg)){
			


			$sql = "UPDATE obras SET nome = '$nome',autor ='$autor',genero ='$genero',prateleira ='$prateleira',fila ='$fila',cod ='$cod',qnt ='$qnt',img ='$Nimg' WHERE id ='$id'";
			
			$query = mysqli_query($con, $sql);

			if(!$query){
				echo "<script>alert('Erro ao Editar!')</script>";
			}else{
				echo '
                            <script>
                                    alert("Editado com sucesso!")
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
}
}
}
?>

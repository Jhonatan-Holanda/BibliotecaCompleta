<?php
if (isset($_SESSION['usuario'])) {
$logado = $_SESSION['usuario'];   

 }
 
$sql = "SELECT * FROM aluno WHERE login='$logado' ";
$query = mysqli_query($con, $sql);
while ($d = mysqli_fetch_assoc($query)){
    $nome = $d['nome'];
    $curso = $d['curso'];
    $serie = $d['serie'];
    $email = $d['email'];
    $senha = $d['senha'];
    $nasc = $d['data_nasc'];
}     
?>
<meta charset="utf-8">
<style>
     #bread{
      margin-left:15px;
     }
     nav{
         background: green;
     }
   </style>
   
	<nav>
<div class="nav-wrapper" class=''>
      <div class="col s12" id="bread">
        <a href="#!" class="breadcrumb">Sistema</a>
        <a href="#!" class="breadcrumb">Aluno</a>
        <a href="#!" class="breadcrumb">Meu Perfil</a>
      </div>
    </div>
  </nav>  
   <div class='container-fluid'>
   <div class="row">
       <form class="col s12" method="post">
      <div class="row">
        <div class="input-field col s6">
            <input  id="first_name" type="text" class="validate" value="<?php echo $nome?>" disabled>
          <label for="first_name">Nome</label>
        </div>
        <div class="input-field col s6">
            <input id="last_name" type="text" class="validate" value="<?php echo $serie."-"; echo $curso; ?>" disabled>
          <label for="last_name">Grade</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
            <input id="email" type="email" class="validate" value="<?php echo $email?>" name="email">
          <label for="email">Email</label>
        </div>
      </div>      
        <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate" value="<?php echo $logado?>" disabled>
          <label for="email">Matrícula</label>
        </div>
      </div>     
      <div class="row">
        <div class="input-field col s6">
          <input id="password" type="password" class="validate" value="<?php echo $senha?>" disabled>
          <label for="password">Password</label>
        </div>
          <div class="input-field col s6">
              <input id="password" type="text" class="validate" name="senha" value="<?php echo $senha?>">
          <label for="password">Change Password</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s3">
            <input id="password" type="text" class="validate" value="<?php echo $nasc;?>" disabled>
          <label for="password">Data Nascimento</label>
        </div>
      </div>
     <center>
      <button class="btn waves-effect waves-light" type="submit" name="action">Submit
    <i class="material-icons right">send</i>
  </button>
    </center>
    </form>
  </div>
   </div>
 <?php  
 if ($_POST['senha']!=""){
    $senha = $_POST['senha'];
    $email = $_POST['email'];
 
    $sql = "UPDATE aluno SET email = '$email', senha = '$senha' WHERE login=$logado";
    $query = mysqli_query($con, $sql);
    echo "<meta http-equiv='refresh' content='0'>";
 }
 ?>
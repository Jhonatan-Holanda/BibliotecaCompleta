<?php
if (isset($_SESSION['usuario'])) {
$logado = $_SESSION['usuario'];   
$titulo ="";
$sql = "SELECT * FROM reserva";
$query = mysqli_query($con, $sql);

$sqla = "SELECT nome FROM aluno WHERE login=$logado";
$querya = mysqli_query($con, $sqla);
while ($a= mysqli_fetch_assoc($querya)){
    $aluno = $a['nome'];
     while ($d = mysqli_fetch_assoc($query)){
    if($aluno ==$d['nome_pessoa']){
        $titulo = $d['nome_livro'];
        
    }else{
        $titulo="Não Possui Livro";
    }
    }
}

     
 }
?>
  <style type="text/css">
     #bread{
      margin-left:15px;
     }
      nav{
         background: green;
     }
   </style>
  <nav>
    <div class="nav-wrapper">
      <div class="col s12" id="bread">
        <a href="#!" class="breadcrumb">Sistema</a>
        <a href="#!" class="breadcrumb">Aluno</a>
        <a href="#!" class="breadcrumb">Home</a>
      </div>
    </div>
  </nav>  
 <div class="row">
    <div class="col s12 m4">
      <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <span class="card-title">Livro Em Posse</span>
          <p><?php echo $titulo;?></p>
        </div>
       
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col s12 m12">
      <div class="card">
        <div class="card-image">
          <img src="img/desespero(2).jpg">
          <span class="card-title">Notícia do dia</span>
        </div>
        <div class="card-content">
          <p>Alunos de informática estão proibidos de entrarem na biblioteca por descumprir com as regras estabelecidas</p>
        </div>
      
      </div>
    </div>
  </div>
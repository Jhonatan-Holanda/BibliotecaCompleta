<?php 
if (isset($_SESSION['usuario'])) {
   $logado = $_SESSION['usuario'];
}else{
	header('location:index.php');
}  

?>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

<div class="container" >
  <h4 align="center">Editar Funcionario</h4>
   <div class="row">
    <form class="col s6">
      <div class="row"> 
        <div class="input-field col s12">
              <i class="material-icons prefix">person</i>
          <input  placeholder="Nome" id="nome" type="text" class="validate">
          <label for="nome"></label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">local_phone</i>
          <input placeholder="Telefone" id="telefone" type="text" class="validate">
          <label for="telefone"></label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">email</i>
          <input placeholder="Email" id="email" type="text" class="validate">
          <label for="email"></label>
        </div>
      </div>
        <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix"></i>
          <input placeholder="Senha" id="senha" type="text" class="validate">
          <label for="senha"></label>
        </div>
      </div>
      <div class="row">
        <div class="file-field input-field col s12">
        <div class="btn">
          <i class="material-icons left">photo</i>
          <span>File</span>
          <input type="file" multiple>
        </div>
        <div class="file-path-wrapper">
          <input class="file-path validate" type="text" placeholder="Upload one or more files">
        </div>
        </div>
      </div>
      <div class="row">
        
           <button class="btn waves-effect waves-light col s5" type="submit" name="action">Editar
              <i class="material-icons left">mode_edit</i>
           </button>
        
        <div class="col s2"></div>
        
         <button class="btn waves-effect waves-light col s5" type="submit"  name="action">Cancelar
         <i class="material-icons left">cancel</i>
         </button>
        
      </div>
  </form>
</div>
</div>
      

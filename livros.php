<?php 
if (isset($_SESSION['usuario'])) {
   $logado = $_SESSION['usuario'];
}else{
	header('location:index.php');
}  

?>
         <div class="container" >
          <h4 align="center">Cadastro de Livros</h4>
         <div class="row">
             <form class="col s12" method="post" enctype="multipart/form-data" action="up_livros.php">
      <div class="row">
        <div class="input-field col s8 push-s2">
              <i class="material-icons prefix">class</i>
          <input  placeholder="Nome" name="nome" type="text" class="validate">
          <label for="nome"></label>
        </div>
      </div>
      <div class="row">
            <div class="input-field col s4 push-s2">
              <i class="material-icons prefix">person</i>
              <input placeholder="Autor" name="autor" type="text" class="validate">
              <label for="autor"></label>
            </div>
            <div class="input-field col s4 push-s2">
              <i class="material-icons prefix">menu</i>
              <input placeholder="Genero" name="genero" type="text" class="validate">
              <label for="genero"></label>
            </div>
      </div>
      <div class="row">
        <div class="input-field col s4 push-s2">
               <i class="material-icons prefix"></i>
          <input placeholder="Prateleira" name="prateleira" type="text" class="validate">
          <label for="prateleira"></label>
        </div>

        <div class="input-field col s4 push-s2">
          <i class="material-icons prefix"></i>
          <input placeholder="Fila" name="fila" type="text" class="validate">
          <label for="fila"></label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s4 push-s2">
          <i class="material-icons prefix"></i>
          <input placeholder="Codigo" name="codigo" type="text" class="validate">
          <label for="codigo"></label>
        </div>
           <div class="input-field col s4 push-s2">
          <i class="material-icons prefix"></i>
          <input placeholder="Quantidade" name="quantidade" type="text" class="validate">
          <label for="quantidade"></label>
        </div>
      </div>
      <div class="row">
        <div class="file-field input-field col s8 push-s2">
        <div class="btn">
          <i class="material-icons left">photo</i>
          <span>File</span>
          <input type="file" multiple>
        </div>
        <div class="file-path-wrapper">
          <input class="file-path validate" name="file" type="file" placeholder="Upload one or more files">
        </div>
        </div>
      </div>
      <div class="row">
        
         <button class="btn waves-effect waves-light col s3 push-s2" type="submit" name="action">Salvar
         <i class="material-icons left">save</i>
         </button>
        
          <div class="col s2"></div>

         <button class="btn waves-effect waves-light col s3 push-s2" type="submit"  name="action">Cancelar
         <i class="material-icons left">cancel</i>
         </button>
      
      </div>
    </form>
  </div>
  </div>

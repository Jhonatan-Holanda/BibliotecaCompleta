<?php 
if (isset($_SESSION['usuario'])) {
   $logado = $_SESSION['usuario'];
}else{
	header('location:index.php');
}  

?>
<div class="container">
  <div class="row">
    <div class="col s12">
      <div class="col s12">
        <table class="highlight centered responsive-table">
          <thead>
            <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>Gênero</th>
                <th>Autor</th>
                <th>Prateleira</th>
                <th>Fila</th>
                <th>Quantidade</th>
                <th>Visualizar</th>
                <th>Modificar</th>
                <th>Deletar</th>
            </tr>
          </thead>

          <tbody>
          <?php

            $sql = "SELECT * FROM obras";
            $query = mysqli_query($con, $sql);
            while($dados = mysqli_fetch_assoc($query)){
              echo "
                <tr>
                  <td><label>".$dados['cod']."</label></td>
                  <td><label>".$dados['nome']."</label></td>
                  <td><label>".$dados['genero']."</label></td>
                  <td><label>".$dados['autor']."</label></td>
                  <td><label>".$dados['prateleira']."</label></td>
                  <td><label>".$dados['fila']."</label></td>
                  <td><label>".$dados['qnt']."</label></td>
                  <td>
                  <a href='index_funcionario.php?pg=visualizar&&prod_id=".$dados['id']."'>
                  <button type='submit' class='btn btn-warning'>
                    <i class='fa fa-eye'></i> Visualizar
                  </button> 
                  </td>
                  <td>
                  <a href='index_funcionario.php?pg=editar_livro&&prod_id=".$dados['id']."'>
                  <button type='submit' class='btn btn-primary'>
                    <i class='fa fa-edit'></i> Editar
                  </button> 
                  </td>
                  <td>
                  <a href='index_funcionario.php?pg=mostrar_livros&&del=del&&prod_id=".$dados['id']."'>
                  <button type='submit' class='btn btn-danger'>
                    <i class='fa fa-trash'></i> Deletar
                  </button> 
                  </td>
                </tr>
              ";
          }

          ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<?php
  if(isset($_GET['del'])){
    $id = $_GET['prod_id'];

    $sql = "DELETE FROM obras WHERE id = '$id'";
    $query = mysqli_query($con,$sql);

    if($query){
        echo '
              <script>
                alert("removido com sucesso!")
                setTimeout(function(){
                window.location = "index_funcionario.php?pg=mostrar_livros";
                }, 500);
              </script>
            ';
    }else{
         echo "<script>alert('Não removido')</script>";
    }
  }
?>
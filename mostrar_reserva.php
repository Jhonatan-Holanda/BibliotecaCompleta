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
                <th>Nome da Livro</th>
                <th>Nome do Pessoa</th>
                <th>Endereço Pessoa</th>
                <th>Email Pessoa</th>
                <th>Data Recibimento</th>
                <th>Data Entrega</th>
                <th>Ação</th>
            </tr>
          </thead>

          <tbody>
          <?php

            $sql = "SELECT * FROM reserva";

            $query = mysqli_query($con, $sql);

            $sql_livro = "SELECT * FROM obras";
            $query_livro = mysqli_query($con,$sql_livro);

            $d = mysqli_fetch_assoc($query_livro);

            while($dados = mysqli_fetch_assoc($query)){
            echo "
            <tr>
              <td><label>".$dados['nome_livro']."</label></td>
              <td><label>".$dados['nome_pessoa']."</label></td>
              <td><label>".$dados['endereco']."</label></td>
              <td><label>".$dados['email']."</label></td>
              <td><label>".$dados['data_recebimento']."</label></td>
              <td><label>".$dados['data_entrega']."</label></td>
              <td>
                <button type='submit' class='btn btn-danger'>
                  <a href='index_funcionario.php?pg=mostrar_reserva&&del=del&&prod_id=".$dados['id']."&&id=".$d['id']."' name='del'>
                  <label style='color:white'>Deletar</label>
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
    $id_livro = $_GET['id'];

    $sql_selecionar = "SELECT * FROM obras WHERE id = '$id_livro'";
    $query_selecionar = mysqli_query($con,$sql_selecionar);

    $d = mysqli_fetch_assoc($query_selecionar);

      if($query_selecionar){

        $quantidade = $dados['qnt'] + 1;

        $sql_update = "UPDATE obras SET qnt = ".$quantidade." WHERE id =".$id_livro."";
        $query_update = mysqli_query($con,$sql_update);

        if($query_update){
            $sql = "DELETE FROM reserva WHERE id = '$id'";
            $query =  mysqli_query($con, $sql);
              if($query){

                  echo '
                      <script>
                          alert("Reserva removido!");
                          setTimeout(function(){
                          window.location = "index_funcionario.php?pg=mostrar_reserva";
                            }, 500);
                      </script>';
        
              }else{
                echo "<script>alert('Erro ao Deletar!!')</script>"; 
              }
          
        }else{
          echo "<script>alert('Falha!!')</script>";
        }
      }else{
        echo "<script>alert('Erro ao Selecionar')</script>";
      }
}
?>




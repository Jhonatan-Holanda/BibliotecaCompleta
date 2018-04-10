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
                <th>Curso</th>
                <th>Serie</th>
                <th>Data Recibimento</th>
                <th>Data Entrega</th>
                <th>Ação</th>
            </tr>
          </thead>

          <tbody>
          <?php
                  $sql = "SELECT * FROM reserva";
                  $query = mysqli_query($con,$sql);
                  $cont = mysqli_num_rows($query);
                  date_default_timezone_set('America/Fortaleza');
                  for($i = 1;$i < ($cont + 1);$i++){
                        $dados=mysqli_fetch_assoc($query);
                        while(date('Y-m-d') > $dados['data_entrega']){
                         echo "
                           <tr>
                             <td><label>".$dados['nome_livro']."</label></td>
                             <td><label>".$dados['nome_pessoa']."</label></td>
                             <td><label>".$dados['endereco']."</label></td>
                             <td><label>".$dados['email']."</label></td>
                             <td><label>".$dados['curso']."</label></td>
                             <td><label>".$dados['serie']."</label></td>
                             <td><label>".$dados['data_recebimento']."</label></td>
                             <td><label>".$dados['data_entrega']."</label></td>
                             <td><a class='btn '>Email</a></td>
                           </tr>
                              ";
                        break;
                    }
                  }

                ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>





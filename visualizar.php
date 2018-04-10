<div class="container">
  <div class="row">
    <?php

        $prod_id = $_GET['prod_id'];

        $sql = "SELECT * FROM obras WHERE id = '$prod_id'";
        $query = mysqli_query($con, $sql);
        $dados = mysqli_fetch_array($query);
      ?>
    <div class="col s8 push-s4 md5">    
      <div class="col s4">  
        <img style="width: 150px; height: 250px; border-radius: 20px" src="foto/<?php echo $dados['img']; ?>" alt="" class="img-rounded img-responsive">
      </div>
      <div class="col s4">
        <h4><?php echo $dados['nome']; ?></h4>
        <small><cite title="Autor da Obra"><?php echo $dados['autor']; ?><i class="glyphicon glyphicon-map-marker">
        </i></cite></small>
          <i class="glyphicon glyphicon-envelope"><?php echo $dados['genero']; ?></i><br><br>
          <i class="glyphicon glyphicon-envelope"><?php echo "Pratileira: ".$dados['prateleira']; ?></i><br>
          <i class="glyphicon glyphicon-envelope"><?php echo "Fila: ".$dados['fila']; ?></i><br><br>
          <div class="btn-group">
            <a class="btn btn-primary" href="index_funcionario.php?pg=mostrar_livros"><i class="fa fa-arrow-left"></i> Voltar</a>
          </div>
      </div>
    </div>
  </div>
</div>
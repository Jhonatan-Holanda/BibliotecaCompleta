 <style type="text/css">
     #bread{
      margin-left:15px;
     }
     nav{
         background: green;
     }
   </style>
<nav>
    <meta charset="utf-8"/>
    <div class="nav-wrapper">
      <div class="col s12" id="bread">
        <a href="#!" class="breadcrumb">Sistema</a>
        <a href="#!" class="breadcrumb">Aluno</a>
        <a href="#!" class="breadcrumb">Livros</a>
      </div>
    </div>
  </nav>  
  <table class="responsive-table centered">
        <thead>
          <tr>
              <th>Título</th>
              <th>Autor</th>
              <th>Gênero</th>
              <th>Prateleira</th>
              <th>Fila</th>
              <th>Código</th>
              <th>Reservar</th>
          </tr>
        </thead>
        <tbody>
            <?php
            
            $sql = "SELECT * FROM obras";
            $query = mysqli_query($con, $sql);
            
            while ($d = mysqli_fetch_assoc($query)){
                echo '<tr>'
                   . '<td>'.$d['nome'].'</td>'
                   . '<td>'.$d['autor'].'</td>'
                   . '<td>'.$d['genero'].'</td>'
                   . '<td>'.$d['prateleira'].'</td>'
                   . '<td>'.$d['fila'].'</td>'
                   . '<td>'.$d['cod'].'</td>'     
                   . '<td><a href="reservar_a.php?id='.$d['id'].'" class="waves-effect waves-light btn">Reservar</a></td>'
                   . '</tr>';
                
            }
            ?>
        </tbody>
        </table>
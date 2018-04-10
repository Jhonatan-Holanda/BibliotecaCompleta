<meta charset="utf-8">
<?php
require("conexao.php");

if(isset($_POST['enviar'])){
date_default_timezone_set('America/Fortaleza');
$nomeL = strtoupper($_POST['nome_livro']);
$nomeP = strtoupper($_POST['nome_aluno']);
$end = strtoupper($_POST['endereco']);
$email = $_POST['email'];
$curso = strtoupper($_POST['curso']);
$serie =  strtoupper($_POST['serie']);
$dia = date('d');
$mes = date('m');
$ano = date('Y');

$dataR = $ano."-".$mes."-".$dia;

if($mes == '1'){

  $diaE = $dia + 7;

  $dataE = $ano."-".$mes."-".$diaE;

    if($diaE > 31){

       $mesE = $mes + 1;

       $diaEE = $diaE - 31;

       $dataE = $ano."-".$mesE."-".$diaEE;
  }

}
if($mes == '2'){

  $diaE = $dia + 7;

  $dataE = $ano."-".$mes."-".$diaE;
    if($diaE > 28){

       $mesE = $mes + 1;

        $diaEE = $diaE - 28;

       $dataE = $ano."-".$mesE."-".$diaEE;

     }

    }
if($mes == '3'){

  $diaE = $dia + 7;

  $dataE = $ano."-".$mes."-".$diaE;
    if($diaE > 31){

       $mesE = $mes + 1;

       $diaEE = $diaE - 31;

       $dataE = $ano."-".$mesE."-".$diaEE;

     }

    }
if($mes == '4'){

  $diaE = $dia + 7;

  $dataE = $ano."-".$mes."-".$diaE;
    if($diaE > 30){

       $mesE = $mes + 1;

       $diaEE = $diaE - 30;

       $dataE = $ano."-".$mesE."-".$diaEE;

     }

    }
if($mes == '5'){

  $diaE = $dia + 7;

  $dataE = $ano."-".$mes."-".$diaE;
    if($diaE > 31){

       $mesE = $mes + 1;

       $diaEE = $diaE - 31;

       $dataE = $ano."-".$mesE."-".$diaEE;

     }

    }
if($mes == '6'){

  $diaE = $dia + 7;

  $dataE = $ano."-".$mes."-".$diaE;
    if($diaE > 30){

       $mesE = $mes + 1;

       $diaEE = $diaE - 30;

       $dataE = $ano."-".$mesE."-".$diaEE;

      }

    }
if($mes == '7'){

  $diaE = $dia + 7;

  $dataE = $ano."-".$mes."-".$diaE;
    if($diaE > 31){

       $mesE = $mes + 1;

       $diaEE = $diaE - 31;

       $dataE = $ano."-".$mesE."-".$diaEE;

     }
    
    }

if($mes == '8'){

  $diaE = $dia + 7;

  $dataE = $ano."-".$mes."-".$diaE;
    if($diaE > 31){

       $mesE = $mes + 1;

       $diaEE = $diaE - 31;

       $dataE = $ano."-".$mesE."-".$diaEE;

      }

    }
if($mes == '9'){

  $diaE = $dia + 7;

  $dataE = $ano."-".$mes."-".$diaE;
    if($diaE > 30){

       $mesE = $mes + 1;

       $diaEE = $diaE - 30;

       $dataE = $ano."-".$mesE."-".$diaEE;

      }

    }
if($mes == '10'){

  $diaE = $dia + 7;

  $dataE = $ano."-".$mes."-".$diaE;
    if($diaE > 31){

       $mesE = $mes + 1;

       $diaEE = $diaE - 31;

       $dataE = $ano."-".$mesE."-".$diaEE;

      }

    }
if($mes == '11'){

  $diaE = $dia + 7;

  $dataE = $ano."-".$mes."-".$diaE;
    if($diaE > 30){

       $mesE = $mes + 1;

       $diaEE = $diaE - 30;

       $dataE = $ano."-".$mesE."-".$diaEE;



      }

    }
if($mes == '12'){

  $diaE = $dia + 7;

  $dataE = $ano."-".$mes."-".$diaE;

    if($diaE > 31){

       $mesE = 1;

       $anoP = $ano + 1;

       $diaEE = $diaE - 31;

       $dataE = $anoP."-".$mesE."-".$diaEE;

    }
  }

$sql = "SELECT * FROM obras WHERE nome = '".$nomeL."'";
$query = mysqli_query($con, $sql);

$d= mysqli_fetch_assoc($query);

if($query){

    if(mysqli_num_rows($query) == 0){

        echo "<script>alert('Livro N�o Esta no Sistema')</script>";

    }else{
        if($d['qnt'] == 0){
            echo '
                <script>
                        setTimeout(function(){
                                alert("Todos os Livros ja Foram alugados")
                                    window.location = "index_funcionario.php?pg=reserva";
                        }, 500);
                </script>';
        }else{
            $sql = "INSERT INTO reserva (nome_livro, nome_pessoa, endereco, email, curso, serie, data_recebimento, data_entrega) VALUES ('$nomeL','$nomeP','$end','$email','$curso','$serie', '$dataR','$dataE')";

            $query = mysqli_query($con,$sql);

            if($query){
                  $quantidade = $d['qnt'] - 1;
                  $sql = "UPDATE obras SET qnt = ".$quantidade." where id = ".$d['id']."";
                  $query = mysqli_query($con, $sql);
                  
                  if($query){
                     echo '
                        <script>
                                setTimeout(function(){
                                        alert("Livro Reservado '.$nomeL.'")
                                            window.location = "index_funcionario.php?pg=mostrar_reserva";
                                }, 500);
                        </script>';
                  }else{
                     echo '
                        <script>
                                setTimeout(function(){
                                        alert("ERRO")
                                            window.location = "index_funcionario.php?pg=reserva";
                                }, 500);
                        </script>';
                  }
            }else{
                echo '
                    <script>
                            setTimeout(function(){
                                    alert("Livro N�o Reservado ")
                                        window.location = "index_funcionario.php?pg=reserva";
                            }, 500);
                    </script>';
                
            }
        }
        
    }
}else{
  echo "<script>alert('Livro N�o Reservado')
                        window.location = 'index_funcionario.php?pg=reserva';
            }, 500);
    </script>";
}

}
?>  


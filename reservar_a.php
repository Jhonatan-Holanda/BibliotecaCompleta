<?php
require("conexao.php");
session_start();
if (isset($_SESSION['usuario'])) {
$logado = $_SESSION['usuario'];   
 }
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
$id = $_GET['id'];
$sql = "SELECT * FROM obras WHERE id='$id'";
$query = mysqli_query($con,$sql);

$d = mysqli_fetch_assoc($query);
if($query){
    if ($d['qnt']>0){        
        $sqla="SELECT * FROM aluno WHERE login = '$logado' AND teste=0";
        $querya = mysqli_query($con, $sqla);
        if ($querya){
        while($a = mysqli_fetch_assoc($querya)){
        $sqlr = "INSERT INTO reserva (nome_livro,nome_pessoa,endereco,email,data_recebimento,data_entrega) VALUES('".$d['nome']."','".$a['nome']."','".$a['endereco']."','".$a['email']."','".$dataR."','".$dataE."')";
        $queryr = mysqli_query($con, $sqlr);
        
        $sqlz = "UPDATE aluno SET teste = '1' WHERE login=$logado";
        $queryz = mysqli_query($con, $sqlz);
        
        if ($queryr){
            $quantidade = $d['qnt'] - 1;
            $sqll = "UPDATE obras SET qnt = ".$quantidade." WHERE id = $id";
            $queryl = mysqli_query($con, $sqll);
            if($queryl){
                echo '<script>alert("Livro reservado com sucesso")</script>';   
                echo "<meta http-equiv='refresh' content='0; url=indexaluno.php?pg=mostrar_livros' />";
                
        }
       }        
     }        
            }else{          
                 echo '<script>alert("Livro reservado com sucesso")</script>';   
                echo "<meta http-equiv='refresh' content='0; url=indexaluno.php?pg=mostrar_livros' />";
        }
    }else{
        echo '<script>alert("Livro indisponível")</script>';   
        echo "<meta http-equiv='refresh' content='0; url=indexaluno.php?pg=mostrar_livros' />";            
    
    
}
}else{
    echo "<script>alert('Livro não selecionado')</script>";
    
}
    
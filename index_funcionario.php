<?php require("conexao.php");
session_start();
if (isset($_SESSION['usuario'])) {
   $logado = $_SESSION['usuario'];
}else{
	header('location:index.php');
}  


if (isset($_GET['sair'])) {
	unset($_SESSION['usuario']);
	header("location:index.php");
}
        ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Page Title</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="css/materialize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
</head>
<body>
	<nav>
     <div class="nav-wrapper grey darken-4">
        <div class="container">
		    <a href="#" class="brand-logo">BIBLIOTECA</a>
		    <a href="#" data-activates="menu-mobile" class="button-collapse">
		        <i class="material-icons">menu</i>
		    </a>
		    <ul class="right hide-on-med-and-down">
		        <li><a href="?pg=home">Home</a></li>
		        <li><a data-beloworigin="true" class="dropdown-button" href="#" data-activates="dropdown1">Reservas<i class="material-icons right">arrow_drop_down</i></a></li>
			    <li><a data-beloworigin="true" class="dropdown-button" href="#" data-activates="dropdown2">Livros<i class="material-icons right">arrow_drop_down</i></a></li>
                            <li><a href="?sair=sair">Sair</a></li>
                    </ul>
		    <ul class="side-nav" id="menu-mobile">
		        <li><a align="center" href="?pg=home">Home</a></li>
		        <li cl align="center" class="divider"></li>
		        <li><p align="center" class="teal-text ts">Reserva</p></li>
		        <li cl align="center" class="divider"></li>
		    	<li><a align="center" href="?pg=reserva">Reservar</a></li>
		    	<li><a align="center" href="?pg=mostrar_reserva">Mostrar Reserva</a></li>
		    	<li><a align="center" href="?pg=mostrar_atrasados">Mostrar Atrasados</a></li>
		    	<li cl align="center" class="divider"></li>
				<li><p align="center" class="teal-text ts" align="center">Livros</p></li>
				<li cl align="center" class="divider"></li>
		        <li><a align="center" href="?pg=mostrar_livros">Mostrar Livros</a></li>
		        <li><a align="center" href="?pg=livros">Cadastrar Livros</a></li>
		    </ul>
		</div>
     </div>
 </nav>	 
    <ul id="dropdown1" class="dropdown-content">
        <li><a href="?pg=reserva">Reserva</a></li>
        <li><a href="?pg=mostrar_reserva">Mostra Reservas</a></li>
        <li><a href="?pg=mostrar_atrasados">Mostra Atrasados</a></li>
    </ul>
    <ul id="dropdown2" class="dropdown-content">
        <li><a href="?pg=livros">Cadastrar Livros</a></li>
        <li><a href="?pg=mostrar_livros">Mostrar Livros</a></li>
    </ul>
    <div style="min-height: calc(100vh - 106px)">
    	<?php
                error_reporting(0);
    		$pg = $_GET['pg'];
    		switch ($pg) {
    			case 'home':
    				include 'reserva.php';
    				break;
    			case 'reserva':
    				include 'reserva.php';
    				break;
    			case 'mostrar_reserva':
    				include 'mostrar_reserva.php';
    				break;
    			case 'mostrar_atrasados':
    				include 'mostrar_atrasados.php';
    				break;
    			case 'mostrar_livros':
    				include 'mostrar_livros.php';
    				break;
    			case 'livros':
    				include 'livros.php';
                                    break;
                        case 'editar_livro':
                            
                            include 'editar_livro.php';
                        break;
                            case 'visualizar':
                        include 'visualizar.php';
                        break;
    			default:
                        include 'reserva.php';
                        break;
    		}

    	?>
    </div>
	<div class="footer-copyright grey darken-4 grad" style="padding: 10px">
        <div class="container">
        	<div class="container center white-text">
            	© 2018 Copyright by <span class="teal-text">BIBLIOTECA</span>
        	</div>
    	</div>
    </div>

  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
  <script type="text/javascript">
       	$('.dropdown-button').dropdown({
		    inDuration: 300,
		    outDuration: 225,
		    constrainWidth: false, // Does not change width of dropdown to that of the activator
		    hover: false, // Activate on hover
		    gutter: 0, // Spacing from edge
		    belowOrigin: true, // Displays dropdown below the button
		    alignment: 'left', // Displays dropdown with edge aligned to the left of button
		    stopPropagation: false // Stops event propagation
		});
		$(function(){
     		$(".button-collapse").sideNav();
		});
  </script>
</body>
</html>

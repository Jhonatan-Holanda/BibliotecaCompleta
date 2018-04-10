<!DOCTYPE html>
<html>
<head>
	<title>Biblioteca</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width-device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/materialize.css">
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
</head>
<body>
	<div class="container-fluid fundo">
		<div class="col-md-12" style="margin-top:90px">
			<div class="row">
				<div class="col-md-12">
						<div class="col-md-2"></div>
						<div class="col-md-3" style="background: rgb(0,0,0,0.5);border-radius: 5px;">
							<img src="img/fun.png" class="img-responsive">
							<center><a class="btn btn-success form-control" href="#janela2" rel="modal">Logar</a><center><br>	
						</div>
						<div class="col-md-2"></div>
						<div class="col-md-3" style="background: rgb(0,0,0,0.5);border-radius: 5px;">
							<img src="img/aluno.png" class="img-responsive">
							<center><a class="btn btn-success form-control" href="#janela3" rel="modal">Logar</a><center><br>
						</div>
						<div class="col-md-2"></div>
				</div>
			</div>
		</div>
	</div>
	<div class="window" id="janela2">
		<div class="row" style="height: 30px">
			<div class="col-md-12"></div>
		</div>

		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-12">
				<form action="vlogin.php" method="post">
					<h4 align="center">Login</h4>
						<input class="form-control" type="text" name="user" placeholder="Matricula Professor">
						<div class="row" style="height: 5px">
							<div class="col-md-12"></div>
						</div>
						<input class="form-control" type="password" name="pass" placeholder="Senha" minlength="6">
						<div class="row" style="height: 10px">
							<div class="col-md-12"></div>
						</div>
						<input class="form-control btn-primary" id="btn" type="submit" value="Login">	
				</form>
			</div>
			<div class="col-md-4"></div>
		</div>
	</div>

		<!-- mascara para cobrir o site -->	
		<div id="mascara"></div>
		</div>
	<div class="window" id="janela3">
		<div class="row" style="height: 30px">
			<div class="col-md-12"></div>
		</div>

		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-12">
				<form action="vlogin_aluno.php" method="post">
					<h4 align="center">Login</h4>
						<input class="form-control" type="text" name="user" placeholder="Matricula Aluno">
						<div class="row" style="height: 5px">
							<div class="col-md-12"></div>
						</div>
						<input class="form-control" type="password" name="pass" placeholder="Senha" minlength="6">
						<div class="row" style="height: 10px">
							<div class="col-md-12"></div>
						</div>
						<input class="form-control btn-primary" id="btn" type="submit" value="Login">	
				</form>
			</div>
			<div class="col-md-4"></div>
		</div>
	</div>

		<!-- mascara para cobrir o site -->	
		<div id="mascara"></div>
		</div>
</body>
</html>
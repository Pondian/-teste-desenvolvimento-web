<?php
	include_once("conexao.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Sistema de postagens</title>
		<link href="css/style.css" rel="stylesheet" type="text/css">
		
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

	</head>
	<body>
		<div id="body">
		<center>
			<?php
				if(isset($_GET['pagina'])){
					$do = ($_GET['pagina']);
				}else{
					$do = "inicio";
				}

				if(file_exists($do.".php")){
					include($do.".php");
				}else{
					print 'Página não encontrada';
				}
			?>
			</center>
		</div>
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	</body>
</html>
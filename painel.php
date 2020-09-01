<?php
	include_once("conexao.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Sistema de postagens</title>
		<link href="css/style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="css/bulma.min.css" />
		<link rel="stylesheet" href="css/publicar.css" />
	
	</head>
	<body>
		<div>
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
		
	</body>
</html>
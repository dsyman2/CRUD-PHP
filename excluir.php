<html>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title> CRUD - PHP </title>
<body>
<h3>Exclusão - Consultar</h3>
<?php
	include_once('conexao.php');

	$sqlconsulta = $pdo->prepare("delete from  tabelaimg where codigo = :codigo;");
	$sqlconsulta->bindParam(':codigo', $_POST['codigo'], PDO::PARAM_INT);
	$sqlconsulta->execute();
	$pdo = null;
	
?>
<h3> Exclusão realizada com Sucesso!!!</h3>
<br><br>
<input type='button' onclick="window.location='exclusao.php';" value="Voltar">
</body>
</html>

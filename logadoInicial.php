<html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title> CRUD - PHP</title>
<body>
	<h4>Olá, <?php session_start('log'); echo $_SESSION['usuario'] ?></h4>
	<h3>CRUD</h3>
	<a href='inclusao.php'>Incluir</a><br>
	<a href='consulta.php'>Consultar</a><br>
	<a href='geral.php'>Consulta Geral</a><br>
	<a href='exclusao.php'>Excluir</a><br>
	<a href='alteracao.php'>Alterar</a><br>
<br>
	<a href="sair.php"><input type='button' value="Sair"></a>
</body>

</html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title> CRUD - PHP</title>
<body>
<h3>Alterar</h3>
<?php
	include_once('conexao.php');
	
	$sqlconsulta = $pdo->prepare("select * from tabelaimg where codigo = :codigo;");
	$sqlconsulta->bindParam(':codigo', $_POST['codigo'], PDO::PARAM_INT);
	$sqlconsulta->execute();
	$dados = $sqlconsulta->fetch(PDO::FETCH_ASSOC);
	$pdo = null;
?>
<form name="produto" action="alterar.php" method="post">
	<b>C�digo:</b> <input type="number" name="codigo" value='<?php echo $dados['codigo']; ?>' readonly><br><br>
	<b>Produto:</b> <input type="text" name="produto" maxlength='80' style="width:550px" value='<?php echo $dados['produto']; ?>'><br><br>
	<b>Descri��o: </b><br><textarea name="descricao" rows='3' cols='100' style="resize: none;" ><?php echo $dados['descricao']; ?></textarea><br><br>
	<b>Data: </b> <input type="date" name="data" value='<?php echo $dados['data']; ?>'><br><br>
	<b>Valor: R$ </b><input type="number" step="0.01" name="valor" value='<?php echo $dados['valor']; ?>'> <br><br>
	<input type="submit" value="Ok">&nbsp;&nbsp;
	<input type="reset" value="Limpar">
	<input type='button' onclick="window.location='alteracao.php';" value="Voltar">
</form>
</body>
</html>

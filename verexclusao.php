<html>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title> CRUD - PHP </title>
<body>
<h3> Exclusão - Consultar</h3>
<?php
	include_once('conexao.php');

	$sqlconsulta = $pdo->prepare("select * from tabelaimg where codigo = :codigo;");
	$sqlconsulta->bindParam(':codigo', $_POST['codigo'], PDO::PARAM_INT);
	$sqlconsulta->execute();
	$dados = $sqlconsulta->fetch(PDO::FETCH_ASSOC);
	$pdo = null;

?>
<b>Código:</b> <input type="number"  value="<?php echo $dados['codigo']; ?>" readonly ><br><br>
<b>Produto:</b> <input type="text"  maxlength='80' style="width:550px" value="<?php echo $dados['produto']; ?>" readonly ><br><br>
<b>Descrição: </b><br><textarea  rows='3' cols='100' style="resize: none;" readonly ><?php echo $dados['descricao']; ?></textarea><br><br>
<b>Data: </b> <input type="date" value="<?php echo $dados['data']; ?>" readonly ><br><br>
<b>Valor: R$ </b><input type="number" step="0.01" name="valor" value="<?php echo $dados['valor']; ?>" readonly > <br><br>
<form name="produto" action="excluir.php" method="post">
	<input type='hidden' name='codigo' value="<?php echo $dados['codigo']; ?>">
	<input type='submit' value='Apagar'>
	<input type='button' onclick="window.location='exclusao.php';" value="Voltar">
</form>
</body>
</html>

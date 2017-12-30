<html>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title> CRUD - PHP </title>
<body>
<h3>Consulta geral</h3>
<b>* Clique na imagem para ver detalhes</b><br><br>
<?php
	include_once('conexao.php');
    session_start('log');
	$query = $pdo->prepare("select * from tabelaimg where id_usuario = :codigo;");
	$query->bindParam(':codigo',  $_SESSION['id'] , PDO::PARAM_INT);
	$query->execute();
	echo "<table border='1px'>";
	echo "<tr><th width='30px' align='center'>Id</th><th width='100px'>Código</th><th width='250px'>Produto</th><th width='100px'>Valor</th><th width='100px'>Produto</th><tr>";

	while($dados = $query->fetch(PDO::FETCH_ASSOC))
	{
		echo "<tr>";
		echo "<td align='center'>". $dados['id']."</td>";
		echo "<td>". $dados['codigo']."</td>";
		echo "<td>". $dados['produto']."</td>";
		echo "<td align='right'> R$ ". $dados['valor']."</td>";		
		if (empty($dados['imagem'])){
			$imagem = 'SemImagem.png';
		}else{
			$imagem = $dados['imagem'];
		}
		$id = base64_encode($dados['id']);
		echo "<td align='center'><a href='verproduto.php?id=$id'><img src='imagens/$imagem' width='50px' heigth='50px'></a>";
		echo "</tr>";
	}
	echo "</table>";
	
	$pdo = null;
?>
<br>
<input type='button' onclick="window.location='logadoInicial.php';" value="Voltar">
</body>
</html>

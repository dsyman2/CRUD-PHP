<html>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title> CRUD - PHP</title>
<body>
<h3>Consulta Geral - Detalhes do Produto</h3>
<?php

	function convertedata($data){
		$data_vetor = explode('-', $data);
		$novadata = implode('/', array_reverse ($data_vetor));
		return $novadata;
	}

	include_once('conexao.php');

	if(isset($_GET['id']) && is_numeric(base64_decode($_GET['id']))){
			$id = base64_decode($_GET['id']);
	} else {
		header('Location: index.php');
	}
	
	$sqlconsulta = $pdo->prepare("select * from tabelaimg where id = :id;");
	$sqlconsulta->bindParam(':id', $id, PDO::PARAM_INT);
	$sqlconsulta->execute();
	$dados = $sqlconsulta->fetch(PDO::FETCH_ASSOC);
	
	echo "<table boreder='1px'><tr><td width='250px'>";
	if (empty($dados['imagem'])){
			$imagem = 'SemImagem.png';
		}else{
			$imagem = $dados['imagem'];
		}
	echo "<img src='imagens/$imagem' >";
	echo "</td><td width='400px'>";
	echo "<b>Data: </b>".convertedata($dados['data'])."<br><br>";	
	echo "<b>Id: </b>".$dados['id']."<br>";
	echo "<b>Codigo: </b>".$dados['codigo']."<br>";
	echo "<b>Produto: </b>".$dados['produto']."<br>";	
	echo "<b>Descrição: </b>".$dados['descricao']."<br>";	
	echo "<b>Valor: </b> R$ ".$dados['valor']."<br>";
	echo "</td></tr></table>";
	
	$pdo = null;
	
?>
<br>
<input type='button' onclick="window.location='geral.php';" value="Voltar">
</body>
</html>

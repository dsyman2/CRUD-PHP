<html>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title> CRUD - PHP</title>
<body>
<h3>Inclusão</h3>
<?php
	include_once('conexao.php');
	session_start('log');
	$imagem="";
	$sql = "insert into tabelaimg 
			(id, codigo, produto, descricao, data, valor, imagem, id_usuario) 
			values
			(:id, :codigo, :produto, :descricao, :data, :valor, :imagem , :usuario)";
	
	$sqlinsert = $pdo->prepare($sql);    

	$sqlinsert ->bindParam(':id', $_POST['id'], PDO::PARAM_NULL);		
	$sqlinsert ->bindParam(':codigo', $_POST['codigo'], PDO::PARAM_INT);	
	$sqlinsert ->bindParam(':produto', $_POST['produto'], PDO::PARAM_STR);       
	$sqlinsert ->bindParam(':descricao', $_POST['descricao'], PDO::PARAM_STR);    
	$sqlinsert ->bindParam(':data', $_POST['data'], PDO::PARAM_STR);
	$sqlinsert ->bindParam(':valor', $_POST['valor'], PDO::PARAM_STR); 
	$sqlinsert ->bindParam(':imagem', $_POST['imagem'], PDO::PARAM_STR); 
    $sqlinsert ->bindParam(':usuario', $_SESSION['id'], PDO::PARAM_STR); 

	$sqlinsert->execute(); 
	
	$pdo = null;
?>

<h3> Inclusão realizada com Sucesso!!!</h3>
<br><br>
<input type='button' onclick="window.location='logadoInicial.php';" value="Voltar">
</body>
</html>

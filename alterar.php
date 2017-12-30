<html>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title> CRUD - PHP </title>
<body>
<h3>Alterar</h3>
<?php
	include_once('conexao.php');
	$sql = "update tabelaimg set 
					produto = :produto, 
           			descricao = :descricao, 
           			data = :data,  
            		valor = :valor  
           			WHERE codigo = :codigo";
	$sqlupdate = $pdo->prepare($sql);                             
	$sqlupdate->bindParam(':produto', $_POST['produto'], PDO::PARAM_STR);       
	$sqlupdate->bindParam(':descricao', $_POST['descricao'], PDO::PARAM_STR);    
	$sqlupdate->bindParam(':data', $_POST['data'], PDO::PARAM_STR);
	$sqlupdate->bindParam(':valor', $_POST['valor'], PDO::PARAM_STR); 
	$sqlupdate->bindParam(':codigo', $_POST['codigo'], PDO::PARAM_INT);  

	$sqlupdate->execute();	
	
	$pdo = null;
?>

<h3> Alteração realizada com Sucesso!!!</h3>
<br><br>
	<input type='button' onclick="window.location='alteracao.php';" value="Voltar">
</body>
</html>

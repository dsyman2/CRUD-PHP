<?php
	include_once('conexao.php');
	
	$sqlconsulta = $pdo->prepare("select * from tabelausuario where email = :email and senha = :senha");
	$sqlconsulta->bindParam(':email', $_POST['email'], PDO::PARAM_INT);
	$sqlconsulta->bindParam(':senha', $_POST['senha'], PDO::PARAM_INT);
	$sqlconsulta->execute();
	$dados = $sqlconsulta->fetch(PDO::FETCH_ASSOC);
	$pdo = null;

	if($dados <> ''){
		 session_start('log');
         $_SESSION['id'] = $dados['id'];
         $_SESSION['usuario'] = $dados['nome'];
		 header('location:logadoInicial.php'); 
	}
	else{
		header('location:dadosincorretos.php');
	}
?>
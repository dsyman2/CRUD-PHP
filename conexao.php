<?php
    $host = "localhost:3307"; 	
    $user = "root"; 			
    $senha = "usbw"; 		
    $banco = "banco"; 			
	
		try {
			// Instancia o objeto PDO
			$pdo = new PDO('mysql:host='.$host.';dbname='.$banco, $user, $senha);
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			if (!$pdo) {
				echo "Problemas na conexão!";
				exit;
			}
		} catch (PDOException $exc) {
			echo "Problemas na conexão!";
			echo $exc->getMessage();
			exit;
		}
?>
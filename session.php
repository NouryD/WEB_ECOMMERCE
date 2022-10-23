<?php
	include 'DBConnection.php';

	session_start();

	if(isset($_SESSION['Clients'])){
		$conn = $pdo->open();

		try{
			$stmt = $conn->prepare("SELECT * FROM Clients WHERE numClient=:numClient");
			$stmt->execute(['numClient'=>$_SESSION['Clients']]);
			$Client = $stmt->fetch();
		}
		catch(PDOException $e){
			echo "There is some problem in connection: " . $e->getMessage();
		}

		$pdo->close();
	}
?>
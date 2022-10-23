<?php

	$conn= mysqli_connect("localhost","root","root"); 
	mysqli_select_db($conn,"WEB");
	if(!(isset($_SESSION['nom'])&&isset($_SESSION['email'])))
	{
		header('Location: register.php');
	}
	
	
	$email=$_POST['email'];
	$motDePasse=$_POST['motDePasse'];

	$query="SELECT * FROM `Clients` WHERE `email` LIKE '$email' AND `motDePasse` LIKE '$motDePasse'";

	//running the serch in DB and storing in $result
    
	$result=mysqli_query($conn,$query);

	//function to return the number of rows in $result

	$num_rows=mysqli_num_rows($result);

	if($num_rows==1)
	{
		//correct login

		//retriving session name

		$row=mysqli_fetch_assoc($result);
		$_SESSION['nom']=$row['nom'];
		$_SESSION['email']=$row['email'];
		$_SESSION['numClient']=$row['numClient'];

		header('Location: search.php');
	}
	else
	{	//incorrect login
		//redirect
		header('Location: index.php');
	}

?>

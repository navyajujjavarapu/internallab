<?php
	include "connect.php"
	
	if(isset($_POST['sub'])){
	
		
		$email=$_POST['email'];
		$pass=$_POST['pass'];
		$sqli="select * from `user` where `email`='$email';";
		$res1=mysqli_query($conn,$sqli);
		
		if(mysqli_num_rows($res1)>0{
			$row=mysqli_fetch_assoc($res1)
			$SESSION['email']=$row['email'];
			header('Location:home.php');
		}
		else{
		$warning="invalid login";
		}
	}
?>

<html>
	<head>
		<title>login</title>
	
	<style>
	h1{
		text-align:center;
		font-size:40px;
		background-color:#ccc;
		padding:10px;
		word-spacing:2px;
	}
	a,span{
		font-size:20px;
		text-decoration:none;
		word-spacing:5px;
	}
	.one{
	border:2px solid black;
	font-size:20px;
	text-align:left;
	padding-top:3%;
	margin-left:400px;
	margin-right:400px;
	padding-left:5%;
	}
	.two{
	background-color:white;
	}
	
	</style>
	
	</head>
	
	<body>
	
	<h1>IQUICK PRODUCT </h1>
	<div class="one">
		<form method="post">
		
			
			<label>Email : </label>
			<input type="text" name='email' placeholder="enter email"> <br><br>

			<label>Passsword : </label>
			<input type="password" name='pass' placeholder="enter password" > <br><br>
			
			<input type="button" name='sub' value="submit" >
			
		</form>
	</div> 
	</body>
</html>

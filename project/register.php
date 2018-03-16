<?php
	include "connect.php"
	
	if(isset($_POST['sub'])){
	
		$name=$_POST['name'];
		$email=$_POST['email'];
		$cno=$_POST['cno'];
		$pass=$_POST['pass'];
		$repass=$_POST['repass'];
		
		if($pass!=$repass){
			$warning = "passwords do not match";
		}
		
		else{
			$sqli="select * from `user` where `email`='$email';";
			$res1=mysqli_query($conn,$sqli);
		
			if(mysqli_num_rows($res1)>0){
				$warning ="user already exist" ;
			}
		
			else{
				$sql="INSERT INTO `user`(`name`,`email`,`cno`,`pass`) values ('$name','$email','$cno','$pass');";
				$res =mysqli_query($conn,$sql);
				header('Location:login.php');
			}
		}
	}
?>

<html>
	<head>
		<title>register</title>
	
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
		<form method="post" action="home.php">
		
			<label>Name : </label>
			<input type="text" name='name' placeholder="enter name"> <br><br>
			
			<label>Email : </label>
			<input type="text" name='email' placeholder="enter email"> <br><br>

			<label>Contact Number : </label>
			<input type="text" name='cno' placeholder="enter number"> <br><br>
			
			<label>Passsword : </label>
			<input type="password" name='pass' placeholder="enter password" > <br><br>
			
			<label>Confirm Passsword : </label>
			<input type="password" name='repass' placeholder="Retype password" > <br><br>
			
			<input type="button" name='sub' value="submit" >
			
		</form>
	</div> 
	</body>
</html>

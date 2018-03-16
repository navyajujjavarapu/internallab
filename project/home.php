<?php
include "connect.php";
session_start();
?>
<html>
	<head>
		<title>home</title>
	
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
	.first,.sec{
	float:center;
		padding:5%;
		margin:0px 100px;
	
	}
	li{
		text-decoration:none;
		text-align:right;
	
	</style>
	
	</head>
	
	<body>
	
	<h1>IQUICK PRODUCT </h1>
	<li><a href="index.php" align:right>Logout </a></li>
	<div class="one">
	<form method="post">
          <a href="sell.php"><input class="first" type="button" value="SELL A PRODUCT " name="get"/><br><br></br>
	 <a href="buy.php"><input class="sec"type="button" value="BUY  A PRODUCT "/></a>
	 </form>
	 </div>
      </body>
       </html>

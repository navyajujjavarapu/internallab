<?php
include "connect.php";
session_start();
?>
<head>
	<title>sell page</title>
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
		word-spacing:10px;
		float:right;
	}
	.one{
	font-size:20px;
	text-align:right;
	}
	 a{
	 word-spacing:5px;
	background-color:white;
	}
	.main{
	border:2px solid black;
	margin-left:400px;
	margin-right:400px;
	padding:5%;
	}

	</style>
</head>
	<body>
	<div class="two">
	<h1>IQUICK PRODUCT </h1>
	
      <ul>
      <span><a href="index.php">Logout</a></span>
      <span><a href="home.php">Home </a></span>
      
      </ul>
      
    </div>
    
	 <br></br>
    <div class="main">
    
	    <form action="additem.php" method="get">
	    
	       <label>Item name :  </label>   
	       <input type="text" name="iname"><br></br>
	       
	       <label>Item type :  </label>  
	       <input type="text" name="itype"> <br></br> 
	       
	       <label>Item cost :  </label>  
	       <input type="text" name="icost"> <br></br> 
	       
	      <label>Descrpition : </label>  <br><br>
	      
	     <textarea type="text" rows="30" cols="50"></textarea><br></br> 
	      
	       
	       
		  <button type="submit" value="Submit" name="Submit_btn">Submit</button><br><br/>
		     
	    </form>
	    </div>
	    <a href="home.php"><button name="back_btn" value="  Back ">Back</button>
	</body>
</html>

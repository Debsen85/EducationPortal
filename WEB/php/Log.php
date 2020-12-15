<?php
	if(isset($_POST['submit'])){
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	
	include "db.php";
	$result1 = mysqli_query($conn,"SELECT Email, Password FROM Portal WHERE Email = '".$email."' AND  Password = '".$pass."'");

        if($result1->num_rows >0)
        { 
            header('Location: ../html/homepage2.html');
        }            
        else
        {
            echo 'The username or password are incorrect!';
        }
}
?>
<!DOCTYPE html>
<html>
<head>
<title>LOGIN PAGE</title>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, inital-scale=1.0">

<link rel="stylesheet" href="../css/stylesheet_basic.css">
<link rel="stylesheet" href="../css/notif_style.css">
<style>
.title {	position:relative; top: 180px; width:50%; margin:auto;height: auto; padding: 100px;
		font-weight:bold; text-shadow: 0px 1px #c65353; color:white;
		font-size:100px; padding:14px; background:#d27979;border-radius:50px;
		box-shadow: 4px 4px 4px 4px #732626; text-shadow: 6px 4px #732626;
	}
video { float: right; margin: 5px 10px 45px 10px; border-radius:25px; }
img   { float: top; margin: 5px 5px 5px 5px; }
p.info { color: white; font-size: 25px; padding:10px;}
</style>
</head>
<body>
<div class="tab" style="top:0px;">
    <ul >
		<li class="logo">Edocutal</li>
  		<li><a href="http://localhost/WEB/php/login.php">Back</a></li>
  	</ul>
</div>
	
<img src="../media/img/background.jpg" style="z-index:-1; width:98%; height:800px; margin:auto; position:absolute; top:80px;">


<center><h1 class="title" >Edocutal</h1></center>
	</br></br></br></br></br></br></br></br></br></br></br></br>
	<h1 class="logo" align="center">This is the Edocutal Login Portal</h1>	
		<form action="#" method="POST">
			<h2 style="color: yellow;" align="center">E-Mail:</h2>
			<center><input type="String" name="email"></center>
			<h2 style="color: yellow;" align="center">Password:</h2>
			<center><input type="password" name="pass"></center>
			</br></br>
			<center><input type="submit" name="submit"></center>
		</form>
	</body>
</html>
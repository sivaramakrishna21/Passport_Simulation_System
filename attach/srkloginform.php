<?php
	
	if(isset($_POST['Submit'])){
		$email=$_POST['email_id'];
		$password=$_POST['passwordat'];
		$con=new mysqli("localhost","root","","sivaram");
		$sql="SELECT * from registrationform where email='$email' and password='$password'";
		$result=mysqli_query($con,$sql);
		if($result->num_rows>0)
		{
			header('Location:pass2.html');
			exit();
		}
		else
		{
			$message = "enter correct mail and password";
			echo "<script type='text/javascript'>alert('$message');</script>";
			return false;
		}
		$con->close();
	}
?>
<html>
<head>
<title>APPLICATION FORM</title>
<style>
input[type=text] {
  width: 70%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 3px solid #ccc;
  -webkit-transition: 0.5s;
  transition: 0.5s;
  outline: none;
}
input[type=text]:focus {
  border: 3px solid #555;
}
input[type=password] {
  width: 70%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 3px solid #ccc;
  -webkit-transition: 0.5s;
  transition: 0.5s;
  outline: none;
}
input[type=password]:focus {
  border: 3px solid #555;
}

.container {
  position: relative;
  width: 100%;
  max-width: 400px;
}

.container img {
  width: 100%;
  height: auto;
}

.container .btn {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: navy;
  color: white;
  font-size: 16px;
  padding: 16px 30px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
}

.container .btn:hover {
  background-color: orange;
  color: black;
}

body  {
  background-image: url("log.jpg");
  background-color: #cccccc;
}
p{
border:10px;solid powderblue;
color:black;
}
</style>
</head>
<body>
<div class="right">
<center>
<form name="myform" method="post";>
<br>
<br><p>
  <label for="loginid">Login ID:&nbsp;</label>
  <input type="text" id="loginid" name="email_id"><br>
  <label for="password">Password:&nbsp;</label>
  <input type="password" id="password" name="passwordat">

<div class="container">
<input type="submit" name="Submit" class="btn" value="login"></p><br>
</div><br><br><br>
<div class="container">
<a href="registrationform.php" class="btn">back</a><br>
</div>
<br>
<br>
</center>
</form>
</div>
<div class="right">
</div>

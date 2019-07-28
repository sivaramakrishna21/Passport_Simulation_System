<?php
	session_start();
	if(isset($_POST['Submit'])){
		$_SESSION['stat']=$_POST['app_id'];
		$stat=$_POST['app_id'];
		$con=new mysqli("localhost","root","","sivaram");
		$sql="SELECT * from ppslotbooking where registerid='$stat'";
		$result=mysqli_query($con,$sql);
		if($result->num_rows>0)
		{
			header('Location:finalstatusappoin.php');
			exit();
		}
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
  <label for="loginid">Application ID:&nbsp;</label>
  <input type="text" id="loginid" name="app_id"><br>
<div class="container">
<input type="submit" name="Submit" class="btn" value="get status"></p><br>
</div><br><br><br>
<div class="container">
<a href="registrationform.php" class="btn">back</a><br>
</div>
<br>
<br>
</center>
</form>
</div>


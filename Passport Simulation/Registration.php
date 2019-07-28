<?php
if(isset($_POST['Submit'])){
		$firstname= $_POST['fname'];
		$lastname= $_POST['lname'];
		$email=$_POST['email'];
		$loginid=$_POST['loginid'];
		$password=$_POST['pwd'];
		$password1=$_POST['confirmpwd'];
if (strpos($_POST['email'], '.com') == false) {
			$message = "enter correct mail";
			echo "<script type='text/javascript'>alert('$message');</script>";
			return false;
		}

 else if($_POST['pwd']<>$_POST['confirmpwd']){
$m6="Password and Confirm Password are not matched";
echo "<script type='text/javascript'>alert('$m6');</script>";
			return false;
}
else
{
		$con=new mysqli("localhost","root","","sivaram");
		$sql="select * from REGISTRATIONSPP where loginid='$loginid'";
		$res=mysqli_query($con,$sql);
		if($res->num_rows>0)
		{
			$message = "you already have account";
			echo "<script type='text/javascript'>alert('$message');</script>";
			return false;
		}
		else
		{	
			$sql1="insert into `REGISTRATIONSPP` values('$firstname','$lastname','$email','$loginid','$password','$password1')";
			if ($con->query($sql1) === TRUE) {
				header('Location:login.php');
			}
		}
		$con->close();
	}

}


?>
<!DOCTYPE html>
<html>
<head>
<style> 
input[type=text] {
  width: 30%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 3px solid #ccc;
  -webkit-transition: 0.5s;
  transition: 0.5s;
  outline: none;
}
input[type=password] {
  width: 30%;
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
input[type=password]:focus {
  border: 3px solid #555;
}
h2{
  color: Navy;
  text-align: center;
}

</style>

<style>
.button {
  background-color: Navy; 
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
}
.button1:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}

}
</style>
</head>
<body>

<center>


<form method="post" name="myform">

<h2>User Registration</h2>
  <label for="fname">First Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
  <input type="text" id="fname" name="fname" required><br>
  <label for="lname">Last Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
  <input type="text" id="lname" name="lname" required><br>
  <label for="email">Email-ID:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
  <input type="text" id="email" name="email" required><br>
  <label for="loginid">Login ID:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
  <input type="text" id="loginid" name="loginid" required><br>
  <label for="pwd">Password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
  <input type="password" id="pwd" name="pwd" required><br>
  <label for="confirmpwd">Confirm Password:</label>
  <input type="password" id="confirmpwd" name="confirmpwd" required><br>
<input type="submit" class="button" name="Submit" value="submit"></p></div><br><br>
</form>
</center>
</body>
</html>

<?php
	if(isset($_POST['Submit'])){
		$firstname= $_POST['fname'];
		$lastname= $_POST['lname'];
		$gender=$_POST['gender'];
		$aadhar=$_POST['aadhar'];
		$birthvillage=$_POST['birthvillage'];
		foreach($_POST['country'] as $select);
		$state=$_POST['state'];
		$district=$_POST['district'];
		$education=$_POST['education'];
		$employment=$_POST['employment'];
		$email=$_POST['email'];
		$phone=$_POST['mobileno'];
		if (strpos($email, '.com') == false) {
			$message = "enter correct mail";
			echo "<script type='text/javascript'>alert('$message');</script>";
			return false;
		}
		else if(strlen($phone)!=10)
		{
			$message = "wrong number";
			echo "<script type='text/javascript'>alert('$message');</script>";
			return false;
		}
		$con=new mysqli("localhost","root","","sivaram");
		$sql="SELECT * from passportform where email='$email'";
		$result=mysqli_query($con,$sql);
		if($result->num_rows>0)
		{
			$message = "you already have account";
			echo "<script type='text/javascript'>alert('$message');</script>";
			return false;
		}
		else 
		{
			$appid=$_POST['slotbook'].$phone;
			$sql1="insert into passportform values('$firstname','$lastname','$gender','$aadhar','$birthvillage','$select','$state','$district','$education','$employment','$email','$phone','$appid')";
			if ($con->query($sql1) === TRUE) {
				$sql2="insert into appstatus values('$appid',0,0,0,0,0,0,0)";
				if ($con->query($sql2) === TRUE)
				{
					header('Location:login.php');
				}
			}
		}
		$con->close();
	}
?>
<!DOCTYPE html>
<html>
<head>
<title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  
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
  width: 30%;
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

.Breadcrumbh_Bar{width:100%;}
.Breadcrumbh_Bar .Brown_BG{background-color:#be5d23;color:#FFF;font-size:12px;font-weight:bold;}
.Breadcrumbh_Bar .Light_Blue_BG{background-color:#e9eff3;font-size:13px;color:#242323;}
.Breadcrumbh_Bar .Content_Bar{background-color:#e9eff3;font-size:12px;font-weight:bold;color:#242323;padding-left:0px;padding-right:0px;border: #F00 solid 0px;}
div.div1 {
  border: 1px solid black;
  width:350px;
height=200px;
  margin: auto;
  background-color: skyblue;
}
.carousel {
  width:710px;
  height:211px;
}
.container {
  position: relative;
  width: 100%;
  max-width: 400px;
}
.container img {
  width: 50%;
  height: auto;
}


background-color: #cccccc;
}
p{
border:10px;solid powderblue;
color:black;
}
body {
  font-family: Arial, Helvetica, sans-serif;
  
}

.navbar {
  overflow: hidden;
  background-color: navy;
  
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  width:20%;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color:skyblue ;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: maroon;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: white;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: skyblue;
}

.dropdown:hover .dropdown-content {
  display: block;
}
* {
  box-sizing: border-box;
}

/* Create a column layout with Flexbox */
.row {
  display: flex;
}

/* Left column (menu) */
.left {
  flex: 45%;
  padding: 15px 0;
}

.left h2 {
  padding-left: 50px;
}
/* Right column (page content) */
.right {
  flex: 200%;
  padding: 0px;
}
.right h2{
  color: Navy;
  text-align:center;
}
/* Style the search box */
#mySearch {
  width: 100%;
  font-size: 18px;
  padding: 18px;
  border:1px solid #ddd;
}

/* Style the navigation menu inside the left column */
#myMenu {
  list-style-type: none;
  padding: 15px;
  margin: 0;
}

#myMenu li a {
  backgrxound-color: #f6f6f6;
  padding: 12px;
  text-decoration: none;
  font-size: 18px;
  color:white;
  display: block
}

#myMenu li a:hover {
  background-color: skyblue;
}

</style>
<style>
.button {
  background-color: navy; /* Green */
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
.button2:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
</style>
</head>
<body>
<div class="navbar">
  <a href="file:///home/anits/pro1.html">Home</a>
  <a href="#news">login</a>
  <div class="dropdown">
    <button class="dropbtn">applypassport 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">Link 1</a>
      <a href="#">Link 2</a>
      <a href="#">Link 3</a>
    </div>
  </div>
<a href="#news">about</a>
<a href="#news">contactus</a> 
</div>
<tr>
<table >	
		  <td width="8"><span  style="width:8px; float:left; display:inline; height:23px; "></span></td>
          <td class="Light_Blue_BG">
          	<div class="Content_Bar" style="width:950px;">
          		<marquee behavior="scroll" direction="left" id="marquee" onkeydown="this.setAttribute('scrollamount', 0, 0);" onmouseover="this.setAttribute('scrollamount', 0, 0);" onmouseout="this.setAttribute('scrollamount', 6, 0);"><strong>500 POPSKs have been made operational in the Country.** New Tatkaal Scheme Launched. For details please refer The Gazette of India - G.S.R. 39(E) under Latest News section on the portal ** No applicants would be serviced at PSK/POPSK without prior online appointment.** Please refer 'Passport Office Page' for more details.</strong>
          		</marquee> 
          	</div>
         </td>
          <td width="22" align="center" valign="middle" class="Light_Blue_BG">
          	<input type="button" value="Pause" id="marqueeControlButton" onClick="controlMarquee();" style="display:none">
          	<img id ="image1" alt="stop" src="stop.jpg" width="19" height="19"  onClick="controlMarquee();"/>
          	<img id ="image2" alt="start" width="19" height="19" src="start.png"  onClick="controlMarquee();" style="display:none;"/>
          </td>
        </tr>
        </table>			
</div>


<div class="row">
  <div class="left" style="background-color:navy;">
    <h2>Menu</h2>
    <input type="text" id="mySearch" onkeyup="myFunction()" placeholder="Search.." title="Type in a category">
    <ul id="myMenu">
      <li><a href="#">HTML</a></li>
      <li><a href="#">CSS</a></li>
      <li><a href="#">JavaScript</a></li>
      <li><a href="#">PHP</a></li>
      <li><a href="#">Python</a></li>
      <li><a href="#">jQuery</a></li>
      <li><a href="#">SQL</a></li>
      <li><a href="#">Bootstrap</a></li>
      <li><a href="#">Node.js</a></li>
    </ul>
  </div>
<div class="right">
<h2>Application Form</h2>
<form name="myform" method="post";>
<center>
<label for="fname">First Name:&nbsp;</label>
<input type="text" id="fname" name="fname" required/><br>
<label for="surname">&nbsp;&nbsp;&nbsp;&nbsp; Surname:&nbsp;</label>
<input type="text" id="lname" name="lname" required/>
<br>
<label for="gender">Gender:&nbsp;</label>
<input type="radio" name="gender" value="Male" checked>Male&nbsp;&nbsp;
<input type="radio" name="gender" value="Female">Female&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
country:&nbsp;&nbsp;<select name="country[]" id="mySelect">
<option value="China">China</option>
<option value="Denmark">Denmark</option>
<option value="Finland">Finland</option>
<option value="India">India</option>
<option value="france">France</option>
</select><br>
<label for="aadhar">Aadhar no:&nbsp;</label>
<input type="text" id="aadhar" name="aadhar" required/><br>
<label for="aadhar">BirthVillage:</label>
<input type="text" id="birthvillage" name="birthvillage" required/><br>
<br>
<label for="State">&nbsp;&nbsp;State:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
<input type="text" id="state" name="state" required/><br>
<label for="District">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; District:&nbsp;</label>
<input type="text" id="district" name="district" required/><br>
<label for="Education">&nbsp;&nbsp;Education:&nbsp;</label>
<input type="text" id="education" name="education" required/><br>
<label for="Employment">&nbsp;&nbsp;&nbsp;&nbsp; Employment:</label>
<input type="text" id="employment" name="employment" required/><br>
<label for="email">Email-ID:&nbsp;</label>
<input type="text" id="email" name="email" required/><br>
<label for="Mobile no">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mobile No:</label>
<input type="text" id="mobileno" name="mobileno" required/><br><br><br>
Select Date: <input type="date" name="slotbook" data-date-inline-picker="true"><br>
<br><br>
<div class="container">
<input type="submit" name="Submit" class="btn" value="submit"></p></div><br><br>
</center>
</form>
</body>
</div>


<script>
function myFunction() {
  var input, filter, ul, li, a, i;
  input = document.getElementById("mySearch");
  filter = input.value.toUpperCase();
  ul = document.getElementById("myMenu");
  li = ul.getElementsByTagName("li");
  for (i = 0; i < li.length; i++) {
    a = li[i].getElementsByTagName("a")[0];
    if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
      li[i].style.display = "";
    } else {
      li[i].style.display = "none";
    }
  }
}

function controlMarquee() { 

	var marquee=document.getElementById('marquee'); 

	if(document.getElementById('marqueeControlButton').value=="Pause"){ 

	document.getElementById('marqueeControlButton').value="Start"; 
	document.getElementById("image1").style.display = "none"; 
	document.getElementById("image2").style.display = "";

	marquee.stop(); 

	} 

	else if(document.getElementById('marqueeControlButton').value=="Start"){ 

	document.getElementById('marqueeControlButton').value="Pause"; 
	document.getElementById("image2").style.display = "none"; 
	document.getElementById("image1").style.display = "";

	marquee.start(); 

	} 

	} 
</script>

</body>
</html>


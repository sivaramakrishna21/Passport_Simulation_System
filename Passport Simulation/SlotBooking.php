<?php
if(isset($_POST['submit'])){
//Create connection
$stat=$_POST['aid'];
$conn1 =mysqli_connect("localhost","root","","sivaram");
$sql1 = "SELECT registerid FROM `passportform` where registerid='$stat' ";
$result = mysqli_query($conn1, $sql1);
if($result->num_rows>0)
{
$conn =mysqli_connect("localhost","root","","sivaram");

$sql="INSERT INTO ppslotbooking(registerid,Name,seldate,selslot,status) VALUES('$_POST[aid]','$_POST[name]','$_POST[slotbook]','$_POST[slot]',0)";
mysqli_query($conn,$sql);
}
else
{
$message = "This Application Id Is Not Valid.Please Check";
			echo "<script type='text/javascript'>alert('$message');</script>";
}
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
  width:25%;
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
input[type=text] {
  width: 80%;
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
  <a href="http://localhost/Passport%20Simulation/pro1.html">Home</a>
  <a href="http://localhost/Passport%20Simulation/pass2.php">login</a>
<a href="srkaboutuspage.html">about</a>
<a href="srkcontactuspage.html">contactus</a> 
</div>
<tr>
<table >	
		  <td width="8"><span  style="width:8px; float:left; display:inline; height:23px; "></span></td>
          <td class="Light_Blue_BG">
          	<div class="Content_Bar" style="width:950px;">
          		<marquee behavior="scroll" direction="left" id="marquee" onkeydown="this.setAttribute('scrollamount', 0, 0);" onmouseover="this.setAttribute('scrollamount', 0, 0);" onmouseout="this.setAttribute('scrollamount', 6, 0);"><strong>WELCOME TO THE PASSPORT SIMULATION WEBSITE
</strong>
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
   
     <li><a href="http://localhost/passport%20Simulation/adminlogin.php">passport admin</a></li>
      <li><a href="http://localhost/Passport%20Simulation/regionallogin.php">Regional admin</a></li>
      <li><a href="http://localhost/Passport%20Simulation/policelogin.php">Police</a></li>
      <li><a href="http://localhost/Passport%20Simulation/srkpassportform.php">Apply for Passport</a></li>
      <li><a href="http://localhost/Passport%20Simulation/appointmentstatus.php">Appointment Status</a></li>
      <li><a href="https://portal1.passportindia.gov.in/AppOnlineProject/pdf/passports_act.pdf">Passport Act 1967</a></li>
      <li><a href="https://portal1.passportindia.gov.in/AppOnlineProject/pdf/Passport_Rules_1980.pdf">Passport Rules 1980</a></li>
    </ul>
  </div> 
  
<div class="right">
<form method="post" name="myform">
<table align="center">
  <tr>
    <td>Application Id:</td>
<td><input type="text" name="aid"></td>
  </tr>
<tr>
    <td>Name:</td>
<td><input type="text" name="name"></td> 
  </tr>
<tr>
    <td>Select Date:</td>
<td><input type="date" name="slotbook" data-date-inline-picker="true"></td>
  </tr>
<tr>
    <td>Select Slot:</td>
<td>  <input list="slot" name="slot">
  <datalist id="slot">
    <option value="AM">
    <option value="PM">
  </datalist></td>
  </tr>
</table>
<table align="center">
<tr>
<td><input type="submit" align:"center"  name="submit" value="Book Slot"></td>
<td><input type="submit" align:"center" value="Cancel"></td>
</tr>
</table>
</form>
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


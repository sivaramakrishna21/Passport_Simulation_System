<?php
	session_start();
	if(isset($_SESSION['stat']))
	{
		echo "<center>";
		echo "<h1>APPLICATION STATUS</h1>";
		$con=new mysqli("localhost","root","","sivaram");
		$stat1=$_SESSION['stat'];
		$rows=$con->query("select * from appstatus where registerid='$stat1'");
		while(list($registerid,$status,$regionalstatus,$policestatus,$adminstatus)=$rows->fetch_row()){
  		echo "<tr><td>registerid:$registerid</td></tr>";
		if($status==-1)
			echo "<tr><td>your application is rejected ...<br></td></tr><br>";
		else if($status==1)
			echo "<tr><td>your application is accepted...<br><h3>you will recieve your passport in a while</h3></td></tr><br>";
		else if($policestatus==1)
				echo "<tr><td>your application is under processing by police</td></tr><br>";
		else if($regionalstatus==1)
				echo "<tr><td>your application is under processing by regional officer</td></tr><br>";
			
		else
			{
				echo "<tr><td>your application is under processing by admin</td></tr><br>";
			}
	}
}
?>
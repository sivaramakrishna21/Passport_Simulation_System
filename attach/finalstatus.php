<?php
	session_start();
	if(isset($_SESSION['stat']))
	{
		echo "<center>";
		echo "<h1>APPLICATION STATUS</h1>";
		$con=new mysqli("localhost","root","","sivaram");
		$stat1=$_SESSION['stat'];
		$rows=$con->query("select * from appstatus where registerid='$stat1'");
		while(list($registerid,$regionalofficer,$police,$admin,$status,$regoinalstatus,$policestatus,$adminstatus)=$rows->fetch_row()){
  		echo "<tr><td>registerid:$registerid</td></tr>";
		if($status==1)
			echo "<tr><td>your application is accepted...<br><h3>you will recieve your passport in a while</h3></td></tr><br>";
		else if($regionalofficer==1&&$$regoinalstatus=0){
			if($admin==1)
				echo "<tr><td>your application is rejected</td></tr><br>";
			else
				echo "<tr><td>your application isunder review by regional officer</td></tr><br>";
			}
		else if($police==1&&$$policestatus=0){
			if($admin==1)
				echo "<tr><td>your application is rejected</td></tr><br>";
			else
				echo "<tr><td>your application isunder review by regional police officer</td></tr><br>";
			}
		else if($admin==1&&$adminstatus==0)
			{
				echo "<tr><td>your application is rejected</td></tr><br>";
			}
	}
}
?>
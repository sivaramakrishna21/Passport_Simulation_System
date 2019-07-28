<?php
	session_start();
	if(isset($_SESSION['stat']))
	{
		echo "<center>";
		echo "<h1>APPOINTMENT STATUS</h1>";
		$con=new mysqli("localhost","root","","sivaram");
		$stat1=$_SESSION['stat'];
		$rows=$con->query("select * from ppslotbooking where registerid='$stat1'");
		while(list($p,$applid,$p1,$p2,$appointmentstatus)=$rows->fetch_row()){
  		echo "<tr><td>$applid&nbsp</td></tr>";
		if($appointmentstatus==1)
			echo "<tr><td>Your appointment is confirmed...<br><h3>Kindly bring all your documents for Verification</h3></td></tr><br>";
		else if($appointmentstatus==0)
			echo "<tr><td>Your appointment is under process ...<br><h3>Please wait for some more time,</tr><br>";
		
	}
}
?>

  <?php
$conn = mysqli_connect("localhost","root","","testdb");
// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
$sql = "SELECT * FROM ppslotbooking";
if($result = mysqli_query($conn, $sql)){
    if($result->NUM_ROWS > 0)
{
               	echo "<table border=1 align=center>";
               	echo "<caption>received details</caption>";
            	echo "<tr>";
		echo "<th>applid</th>";
                echo "<th>name</th>";
                echo "<th>seldate</th>";
		echo "<th>selslot</th>";
                echo "</tr>";
        	while($row = mysqli_fetch_array($result)){
            		echo "<tr>";
			echo "<td>" . $row['applid'] . "</td>";
                	echo "<td>" . $row['name'] . "</td>";
                	echo "<td>" . $row['seldate'] . "</td>";
			echo "<td>" . $row['selslot'] . "</td>";
                  	echo "</tr>";
}
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } 
else{
        echo "No records matching your query were found.";
    }
} 
else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 
// Close connection
mysqli_close($conn);
?>
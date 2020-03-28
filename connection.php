<?php
$servername = "remotemysql.com:3306";
$username = "gk5G7Iia9l";
$password = "MIGiFsNi2N";
$dbname="gk5G7Iia9l";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if($conn)
{
	echo "connection made online database";
	
	$sql1 = "INSERT INTO patientpersonal (firstName,lastName, cnic, contactNumber, city) VALUES ('Khawar', 'Bashir', '3520112301209', '03334649525','Lahore')";
	echo "Going to insert First Query";										

	if($conn->query($sql1)===True){
			echo "Record has been entered";
			
	}
											
	
	
	
	$sql = "SELECT * FROM patientpersonal";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
    // output data of each row
    	while($row = $result->fetch_assoc()) {
        	echo "id: " . $row["patientID"]. " - Name: " . $row["firstName"]. " " . $row["lastName"]. "<br>";
    	}
	} else {
    echo "0 results";
	}


							
}
else  {
    die("Connection failed: " . $conn->connect_error);
}


$conn->close();
?>
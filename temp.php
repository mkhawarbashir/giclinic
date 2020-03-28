<!doctype html>
<html>
   <head>
      <title>Connecting MySQL Server</title>
   </head>
   <body>
      <?php
         $dbhost = 'remotemysql.com:3306';
         $dbuser = 'gk5G7Iia9l';
         $dbpass = 'MIGiFsNi2N';
	   	 $dbname = 'gk5G7Iia9l';
         $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
         
         if(! $conn ) {
            die('Could not connect: ' . mysqli_error());
         }
         echo 'Connected successfully';
	   	$sql1 = "INSERT INTO patient_personal (first_name,last_name, cnic, contact_number, city) VALUES ('Khawar', 'Bashir', '3520112301209', '03334649525','Lahore')";
			echo "Going to insert First Query";										

		if($conn->query($sql1)===True){
			echo "Record has been entered";
			
		}
	   else {
		   echo "Error: " . $sql . "<br>" . $conn->error;
	   }
         mysqli_close($conn);
      ?>
   </body>
</html>
<?php
$servername = "tid-websvrprd.llnl.gov";
$username = "distefano3";
$password = "distefano3";
$db = "utrDatabase";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);

// Check connection
if (!$conn) { ?>
	<script type="text/javascript">
		alert("Connection to DB failed.");
	</script>
<?php 
	//die("Connection to DB failed: " . mysqli_connect_error());

}
//echo "Connected successfully";
?> 
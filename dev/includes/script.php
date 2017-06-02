<?php require_once "includes/functions.php"; ?>
<?php require_once "includes/db.php"; ?>

<?php 
	if(isset($_POST[currentLevel200])){
		$query  = "UPDATE progress_table SET ";
		$query .= "currentLevel200= $currentLevel200, ";
		$query .= "WHERE id = 1 ";
		$query .= "LIMIT 1";
	} elseif(isset($_POST[currentLevel300])){
		$query  = "UPDATE progress_table SET ";
		$query .= "currentLevel300= $currentLeve300, ";
		$query .= "WHERE id = 1 ";
		$query .= "LIMIT 1";
	}elseif(isset($_POST[currentLevel400])){
		$query  = "UPDATE progress_table SET ";
		$query .= "currentLevel400= $currentLeve400, ";
		$query .= "WHERE id = 1 ";
		$query .= "LIMIT 1";
	}elseif(isset($_POST[currentLevel500])){
		$query  = "UPDATE progress_table SET ";
		$query .= "currentLevel500= $currentLeve500, ";
		$query .= "WHERE id = 1 ";
		$query .= "LIMIT 1";
	}elseif(isset($_POST[currentLevel600])){
		$query  = "UPDATE progress_table SET ";
		$query .= "currentLevel600= $currentLeve600, ";
		$query .= "WHERE id = 1 ";
		$query .= "LIMIT 1";
	}
	
	$result = mysqli_query($conn, $query);
	
	if($result && mysqli_affected_rows($conn) ==1) {
			//Success
			header("Location: l2.php?id=300&subid=301"); 
			
		} else {
			//Failure
			// $message = "Subject pdate failed";
			header("Location: index.php"); 

		}
	//closing else statement

	
?>
   
   
<?php
	if (isset($conn)) { mysqli_close($conn); }
?>




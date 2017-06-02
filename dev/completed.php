<?php require "includes/session.php";?>
<?php require "includes/functions.php"; ?>



<?php //This page checks and unchecks actions in tables and updates progress bar
$queryLevel  = "SELECT * FROM progress_table ";
$queryLevel .= "WHERE id = 1";
$resultLevel = mysqli_query($conn, $queryLevel);
if(!$resultLevel) { ?>
	<script type="text/javascript">
		alert("Database query failed.");
	</script>
<?php } 

//if (isset($_POST['submit'])) {

	$user= htmlentities($_SESSION['username']);  	
	$row= (int) $_POST["row"];
	$checked= (int) $_POST["checked"]; //whether completed or incomplete
	$action=  $_POST["task"]; //name of task ie action1 name, action2 name
	$actionNumber= (int) $_POST['actionNumber']; //correspondes with action1, action2, etc
	$alertNumber= 0; //(int) ($_GET["alert_id"]);
	$date= date("l jS \of F Y h:i:s A", strtotime('-7 hours'));
	$level= $_POST['level'];
	$page= $_POST['page'];
	
	
 	
		if ($checked ==0){
		$checked=1;
	
			$queryActionComplete  = "INSERT INTO completed_tasks ("; 
			$queryActionComplete .= "  alert_id, task_name, user, completed_at, complete_incomplete";
			$queryActionComplete .= ") VALUES (";
			$queryActionComplete .= "  $alertNumber, '$action', '$user', '$date', $checked ";
			$queryActionComplete .= ")";
			
			$resultActionComplete = mysqli_query($conn, $queryActionComplete);
			
			while($list = mysqli_fetch_assoc($resultLevel)) {
			if($level==200){
				$x= $list[currentLevel200] +1;
					$queryProgress  = "UPDATE progress_table SET ";
					$queryProgress .= "currentLevel200= $x ";
					$queryProgress .= "WHERE id = 1 ";
					$queryProgress .= "LIMIT 1";
			} else if($level==300) {
				$x= $list[currentLevel300] +1;
					$queryProgress  = "UPDATE progress_table SET ";
					$queryProgress .= "currentLevel300= $x ";
					$queryProgress .= "WHERE id = 1 ";
					$queryProgress .= "LIMIT 1";
			} else if ($level==400){
				$x= $list[currentLevel400] +1;
					$queryProgress  = "UPDATE progress_table SET ";
					$queryProgress .= "currentLevel400= $x ";
					$queryProgress .= "WHERE id = 1 ";
					$queryProgress .= "LIMIT 1";
			} else if ($level==500){
				$x= $list[currentLevel500] +1;
					$queryProgress  = "UPDATE progress_table SET ";
					$queryProgress .= "currentLevel500= $x ";
					$queryProgress .= "WHERE id = 1 ";
					$queryProgress .= "LIMIT 1";
			} else {
				$x= $list[currentLevel600] +1;
					$queryProgress  = "UPDATE progress_table SET ";
					$queryProgress .= "currentLevel600= $x ";
					$queryProgress .= "WHERE id = 1 ";
					$queryProgress .= "LIMIT 1";
			}
			$resultProgress = mysqli_query($conn, $queryProgress);
		}// close while 
			
		
	} else{
		$checked=0;
		
			$query_incomplete  = "INSERT INTO completed_tasks (";
			$query_incomplete .= "  alert_id, task_name, user, completed_at , complete_incomplete ";
			$query_incomplete .= ") VALUES (";
			$query_incomplete .= "  $alertNumber, '$action', '$user', '$date', $checked";
			$query_incomplete .= ")";
			
			$resultAction = mysqli_query($conn, $query_incomplete);
			
		while($list = mysqli_fetch_assoc($resultLevel)) {
					
			if($level==200){
				$x= $list[currentLevel200] -1;
					$queryProgress  = "UPDATE progress_table SET ";
					$queryProgress .= "currentLevel200= $x ";
					$queryProgress .= "WHERE id = 1 ";
					$queryProgress .= "LIMIT 1";
			} else if($level==300) {
				$x= $list[currentLevel300] -1;
					$queryProgress  = "UPDATE progress_table SET ";
					$queryProgress .= "currentLevel300= $x ";
					$queryProgress .= "WHERE id = 1 ";
					$queryProgress .= "LIMIT 1";
			} else if ($level==400){
				$x= $list[currentLevel400] -1;
					$queryProgress  = "UPDATE progress_table SET ";
					$queryProgress .= "currentLevel400= $x ";
					$queryProgress .= "WHERE id = 1 ";
					$queryProgress .= "LIMIT 1";
			} else if ($level==500){
				$x= $list[currentLevel500] -1;
					$queryProgress  = "UPDATE progress_table SET ";
					$queryProgress .= "currentLevel500= $x ";
					$queryProgress .= "WHERE id = 1 ";
					$queryProgress .= "LIMIT 1";
			} else {
				$x= $list[currentLevel600] -1;
					$queryProgress  = "UPDATE progress_table SET ";
					$queryProgress .= "currentLevel600= $x ";
					$queryProgress .= "WHERE id = 1 ";
					$queryProgress .= "LIMIT 1";
			}
			$resultProgress = mysqli_query($conn, $queryProgress);
		}// close while
			
	}
	switch ($actionNumber) {
		case 1:
			// Process the form
			$query  = "UPDATE main_table SET ";
			$query .= "action1_checked= $checked ";
			$query .= "WHERE id = $row ";
			$query .= "LIMIT 1";
			break;
		case 2:
				// Process the form
			$query  = "UPDATE main_table SET ";
			$query .= "action2_checked= $checked ";
			$query .= "WHERE id = $row ";
			$query .= "LIMIT 1";
			break;
		case 3:
				// Process the form
			$query  = "UPDATE main_table SET ";
			$query .= "action3_checked= $checked ";
			$query .= "WHERE id = $row ";
			$query .= "LIMIT 1";
			break;
		case 4:
				// Process the form
			$query  = "UPDATE main_table SET ";
			$query .= "action4_checked= $checked ";
			$query .= "WHERE id = $row ";
			$query .= "LIMIT 1";
			break;
		case 5:
			// Process the form
			$query  = "UPDATE main_table SET ";
			$query .= "action5_checked= $checked ";
			$query .= "WHERE id = $row ";
			$query .= "LIMIT 1";	
			break;
		case 6:
				// Process the form
			$query  = "UPDATE main_table SET ";
			$query .= "action6_checked= $checked ";
			$query .= "WHERE id = $row ";
			$query .= "LIMIT 1";
			break;
		case 7:
				// Process the form
			$query  = "UPDATE main_table SET ";
			$query .= "action7_checked= $checked ";
			$query .= "WHERE id = $row ";
			$query .= "LIMIT 1";
			break;
		case 8:
				// Process the form
			$query  = "UPDATE main_table SET ";
			$query .= "action8_checked= $checked ";
			$query .= "WHERE id = $row ";
			$query .= "LIMIT 1";
			break;
		case 9:
				// Process the form
			$query  = "UPDATE main_table SET ";
			$query .= "action9_checked= $checked ";
			$query .= "WHERE id = $row ";
			$query .= "LIMIT 1";
			break;
		default:
			header("Location: index.php"); 
	}
	
	$result = mysqli_multi_query($conn, $query);
	if($result && mysqli_affected_rows($conn) ==1) {
			//Success
			//header("Location: l2.php?id=200&subid=201");
			//header("Location: l2.php?id=" . $level. "&subid=" . $page);  
			
		} else {
			//Failure
			// $message = "Subject pdate failed";
			header("Location: l2.php?id=400&subid=401"); 

		}

		
		//closing else statement
//	} else {
		//If not a submit
	//	header("Location: index.php"); 
//	}
	
?>
   
 <script>
alert("were leaving");
</script>  
<?php
	if (isset($conn)) { mysqli_close($conn); }
?>













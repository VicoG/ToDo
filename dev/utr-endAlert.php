
<div class="tray tray-center  mt40 pt40">         
<div class="panel invoice-panel">
	<div class="panel-heading">
		<span class="panel-title">
		<span class="fa fa-comments "></span>Emergency Alert complete</span>
		          	
	</div>
	<div class="panel-body p20" id="invoice-item row col-md-12">            
		<div class="row col-md-2"></div>
		<div class="row col-md-8">
		  	<fieldset >
				<legend><h2 class="text-system">Congratulations:</h2></legend>
				<h4>The Key RRS Strategy Objectives have been met.</h4>
				<br>
				<h4> The Alert activity has been completed.</h4>
				<br>
				<h4><a href="utr-logout.php">Logout</a></h4>
			 </fieldset>
	</div>
	</div>
</div>
</div>

<?php 

if (isset($_POST['submit'])) {
		
	$alertName= mysql_check($_POST["alertName"]);
	$userName= htmlentities($_SESSION["username"]); 
	$alertID= htmlentities($_SESSION["alertID"]);
	$endDate= date("l jS \of F Y h:i:s A");  
	
	// After the list of POST values add this sql code to update alert table
	$endAlertQuery  = "UPDATE alert SET ";
	$endAlertQuery .= "completed_at = '$endDate', ";
	$endAlertQuery .= "completed_by = '$userName', ";
	$endAlertQuery .= "alert_complete = 1 ";
	$endAlertQuery .= "WHERE id = $alertID ";
	$endAlertQuery .= "LIMIT 1";
						
	$endAlertResult = mysqli_query($conn, $endAlertQuery);
	
	if(!$endAlertResult) { ?>
		<script type="text/javascript">
			alert("End alert  query failed.");
		</script>
<?php	}
		
	
		//Reset Progress Bar
		$UpdateQuery1  = "UPDATE progress_table SET ";
		$UpdateQuery1 .= "currentLevel200= 0, ";
		$UpdateQuery1 .= "currentLevel300= 0, ";
		$UpdateQuery1 .= "currentLevel400= 0, ";
		$UpdateQuery1 .= "currentLevel500= 0, ";
		$UpdateQuery1 .= "currentLevel600= 0 ";
		$UpdateQuery1 .= "WHERE id = 1 ";
		$UpdateQuery1 .= "LIMIT 1";
		
		$updateQuery = mysqli_query($conn, $UpdateQuery1);	
		
		
	// Database query to reset actions completed 
		$findActionChecked  = "SELECT id FROM main_table ";
	
		$findActionChecked = mysqli_query($conn, $findActionChecked);
		//Test if there was a query error
		if(!$findActionChecked) { ?>
		<script type="text/javascript">
			alert("Action checked query failed.");
		</script>
<?php	}
		
		//Mark actions_checked to 0 in main_table
			
		while($resultRow = mysqli_fetch_assoc($findActionChecked)) { 
		
		$UpdateActionCheck  = "UPDATE main_table SET ";
		$UpdateActionCheck .= "action1_checked= 0, ";
		$UpdateActionCheck .= "action2_checked= 0, ";
		$UpdateActionCheck .= "action3_checked= 0, ";
		$UpdateActionCheck .= "action4_checked= 0, ";
		$UpdateActionCheck .= "action5_checked= 0, ";
		$UpdateActionCheck .= "action6_checked= 0, ";
		$UpdateActionCheck .= "action7_checked= 0, ";
		$UpdateActionCheck .= "action8_checked= 0, ";
		$UpdateActionCheck .= "action9_checked= 0 ";
		$UpdateActionCheck .= "WHERE id = $resultRow[id] ";
		$UpdateActionCheck .= "LIMIT 1";
		
		$UpdateActionCheckQuery = mysqli_query($conn, $UpdateActionCheck);
	
		} //close while
				
		if(!$UpdateActionCheckQuery) {?>
		<script type="text/javascript">
			alert("Update action checked query failed.");
		</script>
<?php	}

		} else{
		redirectTo("index.php");
		exit; 
	} //closing - submit

	if (isset($conn)) { mysqli_close($conn); }
?>








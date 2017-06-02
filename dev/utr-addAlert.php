
<div class="tray tray-center">         
<div class="panel invoice-panel">
	<div class="panel-heading">
		<span class="panel-title text-danger">
		<span class="fa fa-comments "></span>CREATE an Emergency Alert</span>
		<div class="panel-header-menu pull-right mr10">              
			<a href="l2.php?id=100&subid=100" class="btn btn-default btn-sm"><i class="fa fa-arrow-left pr5"></i> Back</a>                       
		</div>           	
	</div>
	<div class="panel-body p20" id="invoice-item row col-md-12">            
		<div class="row col-md-2"></div>
		<div class="row col-md-8">
		<form method="post" action="l2.php?id=100&subid=addAlert" class="form-horizontal" role="form">
		  <div class="form-group has-success">
			<h4>Name the incident</h4>
			<input type="text" class="form-control" name="alertName" value=""  placeholder="Optional">
		  </div>
		  <div class="radio">
		  	<h4>Is this a Live Event or a Training Exercise?</h4>
			<label> 
			  <input type="radio" name="alertType" id="alertTypeLive" value="0" checked> Live Event: 
		    </label><br/><label>
			  <input type="radio" name="alertType" id="alertTypeTraining" value="1"> Training Exercise:
			</label>
		  </div>
		  <h4 class=" text-danger">By clicking Submit you are initiating an ALERT</h4>
		  <button type="submit" name="submit" class="btn btn-success" onclick="return confirm('Are you SURE you want to initiate an ALERT?');">Submit</button>
		</form>
	</div>
	</div>
</div>
</div>

<?php 

if (isset($_POST['submit'])) {
		
	$alertType= (int) $_POST["alertType"];
	$alertName= mysql_check($_POST["alertName"]); 
	$userName= htmlentities($_SESSION["username"]);
	$date= date("l jS \of F Y h:i:s A");  
	
	// After the list of POST values add this sql code to insert
	$queryAlert  = "INSERT INTO alert (";
	$queryAlert .= "  date_initiated, initiated_by, incident_name, training";
	$queryAlert .= ") VALUES (";
	$queryAlert .= "  '$date', '$userName', '$alertName', $alertType ";
	$queryAlert .= ")";
	
	$alertResult = mysqli_query($conn, $queryAlert);
	
	if(!$alertResult) {
		die("Select alert  query failed.");
	}
	
	// set alert name into session	
	//$_SESSION["alertName"] = $alertName;

	// Database query to set progress bar
		$find  = "SELECT action1, action2, action3, action4, action5, action6, action7, action8, action9, page FROM main_table ";
	
		$findResult = mysqli_query($conn, $find);
		//Test if there was a query error
		if(!$findResult) {
			die("Select progress bar/ action query failed.");
		}
			
		$level200=0;
		$level300=0;
		$level400=0;
		$level500=0;
		$level600=0;
		
			//Populate Table
			
		while($resultRow = mysqli_fetch_assoc($findResult)) { 
		
			if($resultRow[page] <300){
				$level200 +=1;
				if(!empty($resultRow["action2"])) {
					$level200 +=1;
					if(!empty($resultRow["action3"])) {
						$level200 +=1;
						if(!empty($resultRow["action4"])) {
							$level200 +=1;
							if(!empty($resultRow["action5"])) {
								$level200 +=1;	
								if(!empty($resultRow["action6"])) {
									$level200 +=1;
									if(!empty($resultRow["action7"])) {
										$level200 +=1;
										if(!empty($resultRow["action8"])) {
											$level200 +=1;
											if(!empty($resultRow["action9"])) {
												$level200 +=1;
											} //close 9
										}// close 8
									} // close 7
								} // close 6
							} // close 5
						} // close 4
					} // close 3
				} //close 2
		
			}elseif($resultRow[page]<400) {
				$level300 +=1;
				if(!empty($resultRow["action2"])) {
					$level300 +=1;
					if(!empty($resultRow["action3"])) {
						$level300 +=1;
						if(!empty($resultRow["action4"])) {
							$level300 +=1;
							if(!empty($resultRow["action5"])) {
								$level300 +=1;	
								if(!empty($resultRow["action6"])) {
									$level300 +=1;
									if(!empty($resultRow["action7"])) {
										$level300 +=1;
										if(!empty($resultRow["action8"])) {
											$level300 +=1;
											if(!empty($resultRow["action9"])) {
												$level300 +=1;
											} //close 9
										}// close 8
									} // close 7
								} // close 6
							} // close 5
						} // close 4
					} // close 3
				} //close 2
			
			}elseif($resultRow[page]<500) {
				$level400 +=1;
				if(!empty($resultRow["action2"])) {
					$level400 +=1;
					if(!empty($resultRow["action3"])) {
						$level400 +=1;
						if(!empty($resultRow["action4"])) {
							$level400 +=1;
							if(!empty($resultRow["action5"])) {
								$level400 +=1;	
								if(!empty($resultRow["action6"])) {
									$level400 +=1;
									if(!empty($resultRow["action7"])) {
										$level400 +=1;
										if(!empty($resultRow["action8"])) {
											$level400 +=1;
											if(!empty($resultRow["action9"])) {
												$level400 +=1;
											} //close 9
										}// close 8
									} // close 7
								} // close 6
							} // close 5
						} // close 4
					} // close 3
				} //close 2
			
			}elseif($resultRow[page]<600) {
				$level500 +=1;
				if(!empty($resultRow["action2"])) {
					$level500 +=1;
					if(!empty($resultRow["action3"])) {
						$level500 +=1;
						if(!empty($resultRow["action4"])) {
							$level500 +=1;
							if(!empty($resultRow["action5"])) {
								$level500 +=1;	
								if(!empty($resultRow["action6"])) {
									$level500 +=1;
									if(!empty($resultRow["action7"])) {
										$level500 +=1;
										if(!empty($resultRow["action8"])) {
											$level500 +=1;
											if(!empty($resultRow["action9"])) {
												$level500 +=1;
											} //close 9
										}// close 8
									} // close 7
								} // close 6
							} // close 5
						} // close 4
					} // close 3
				} //close 2
			
			}else {
				$level600 +=1;
				if(!empty($resultRow["action2"])) {
					$level600 +=1;
					if(!empty($resultRow["action3"])) {
						$level600 +=1;
						if(!empty($resultRow["action4"])) {
							$level600 +=1;
							if(!empty($resultRow["action5"])) {
								$level600 +=1;	
								if(!empty($resultRow["action6"])) {
									$level600 +=1;
									if(!empty($resultRow["action7"])) {
										$level600 +=1;
										if(!empty($resultRow["action8"])) {
											$level600 +=1;
											if(!empty($resultRow["action9"])) {
												$level600 +=1;
											} //close 9
										}// close 8
									} // close 7
								} // close 6
							} // close 5
						} // close 4
					} // close 3
				} //close 2
			} // close else
		} // close while
			 
				
		$UpdateQuery1  = "UPDATE progress_table SET ";
		$UpdateQuery1 .= "level200= $level200, ";
		$UpdateQuery1 .= "level300= $level300, ";
		$UpdateQuery1 .= "level400= $level400, ";
		$UpdateQuery1 .= "level500= $level500, ";
		$UpdateQuery1 .= "level600= $level600, ";
		$UpdateQuery1 .= "currentLevel200= 0, ";
		$UpdateQuery1 .= "currentLevel300= 0, ";
		$UpdateQuery1 .= "currentLevel400= 0, ";
		$UpdateQuery1 .= "currentLevel500= 0, ";
		$UpdateQuery1 .= "currentLevel600= 0 ";
		$UpdateQuery1 .= "WHERE id = 1 ";
		$UpdateQuery1 .= "LIMIT 1";
		
		$updateQuery = mysqli_query($conn, $UpdateQuery1);

		if(!$updateQuery) {
			die("Update Progressbar query failed.");
		} else{
		redirectTo("l2.php?id=100&subid=101");
		exit; 
		}
	//closing else statement - submit
	} 
?>
   
<?php
	if (isset($conn)) { mysqli_close($conn); }
?>








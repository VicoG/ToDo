
<?php include "includes/functions.php"; ?>


<?php
	//$row = $_GET['row'];

?>

 <?php
//2. Database query
	/*$query = "SELECT * FROM 	main_table WHERE id = $row";
	
	$result = mysqli_query($conn, $query);
	//Test if there was a query error
	if(!$result) {
		die("Database query failed.");
	}*/
?>

<?php /*

if (isset($_POST['submit'])) {
	// Process the form
	
	// validations
	$required_fields = array("menu_name", "position", "visible");
	validate_presences($required_fields);
	
	$fields_with_max_lengths = array("menu_name" => 30);
	validate_max_lengths($fields_with_max_lengths);
	
	if (empty($errors)) {
		
		// Perform Update
				
	$level= $_POST["level"];
	$page= $_POST["page"];
	$transit= $_POST["transit"];

	$responsible1_header= mysql_check($_POST["responsible1_header"]); 
	$responsible1_details1= mysql_check($_POST["responsible1_details1"]);  
	$responsible1_details2= mysql_check($_POST["responsible1_details2"]);
	
	// Add this to prevent sql injections for strings only when adding a row to a table or inserting new strings not for display
	//$responsible1_header= mysqli_real_escape_string($conn, $responsible1_header); 
	
	$responsible2_header= mysql_check($_POST["responsible2_header"]); 
	$responsible2_details1= mysql_check($_POST["responsible2_details1"]);  
	$responsible2_details2= mysql_check($_POST["responsible2_details2"]);
	
	$agency1= mysql_check($_POST["agency1"]);
	$agency2= mysql_check($_POST["agency2"]); 
	$agency3= mysql_check($_POST["agency3"]); 
	$agency4= mysql_check($_POST["agency4"]);
	$agency5= mysql_check($_POST["agency5"]);
	
	$action1= mysql_check($_POST["action1"]);
	$action1_details1= mysql_check($_POST["action1_details1"]); 
	$action1_details2= mysql_check($_POST["action1_details2"]);
	$action1_details3= mysql_check($_POST["action1_details3"]);
	$action1_details4= mysql_check($_POST["action1_details4"]); 
	
	$action2= mysql_check($_POST["action2"]);
	$action2_details1= mysql_check($_POST["action2_details1"]); 
	$action2_details2= mysql_check($_POST["action2_details2"]);
	$action2_details3= mysql_check($_POST["action2_details3"]);
	$action2_details4= mysql_check($_POST["action2_details4"]); 
	
	$action3= mysql_check($_POST["action3"]);
	$action3_details1= mysql_check($_POST["action3_details1"]); 
	$action3_details2= mysql_check($_POST["action3_details2"]);
	$action3_details3= mysql_check($_POST["action3_details3"]);
	$action3_details4= mysql_check($_POST["action3_details4"]); 
	
	$action4= mysql_check($_POST["action4"]);
	$action4_details1= mysql_check($_POST["action4_details1"]); 
	$action4_details2= mysql_check($_POST["action4_details2"]);
	$action4_details3= mysql_check($_POST["action4_details3"]);
	$action4_details4= mysql_check($_POST["action4_details4"]);
	 
	$action5= mysql_check($_POST["action5"]);
	$action5_details1= mysql_check($_POST["action5_details1"]); 
	$action5_details2= mysql_check($_POST["action5_details2"]);
	$action5_details3= mysql_check($_POST["action5_details3"]);
	$action5_details4= mysql_check($_POST["action5_details4"]);
	 
	$action6= mysql_check($_POST["action6"]);
	$action6_details1= mysql_check($_POST["action6_details1"]); 
	$action6_details2= mysql_check($_POST["action6_details2"]);
	$action6_details3= mysql_check($_POST["action6_details3"]);
	$action6_details4= mysql_check($_POST["action6_details4"]); 
	
	$action7= mysql_check($_POST["action7"]);
	$action7_details1= mysql_check($_POST["action7_details1"]); 
	$action7_details2= mysql_check($_POST["action7_details2"]);
	$action7_details3= mysql_check($_POST["action7_details3"]);
	$action7_details4= mysql_check($_POST["action7_details4"]);
  
  
	$required1= mysql_check($_POST["required1"]);
	$required2= mysql_check($_POST["required2"]); 
	$required3= mysql_check($_POST["required3"]); 
	$required4= mysql_check($_POST["required4"]);
	$required5= mysql_check($_POST["required5"]); 
	
	$resources1= mysql_check($_POST["resources1"]);
	$resources2= mysql_check($_POST["resources2"]);
	$resources3= mysql_check($_POST["resources3"]);
	$resources4= mysql_check($_POST["resources4"]);
	$resources5= mysql_check($_POST["resources5"]);
	$resources6= mysql_check($_POST["resources6"]);
	$resources7= mysql_check($_POST["resources7"]);
	$resources8= mysql_check($_POST["resources8"]);
				
		
	// After the list of POST values add this sql code to insert
	$query  = "UPDATE main_table SET (";
	$query .= "  responsible1_header, responsible1_details1, responsible1_details2, responsible2_header,responsible2_details1,responsible2_details2,";
	$query .= "  agency1, agency2, agency3, agency4, agency5,";
	
	$query .= "  action1, action1_details1, action1_details2, action1_details3, action1_details4,";
	$query .= "  action2, action2_details1, action2_details2, action2_details3, action2_details4,";
	$query .= "  action3, action3_details1, action3_details2, action3_details3, action3_details4,";
	$query .= "  action4, action4_details1, action4_details2, action4_details3, action4_details4,";
	$query .= "  action5, action5_details1, action5_details2, action5_details3, action5_details4,";
	$query .= "  action6, action6_details1, action6_details2, action6_details3, action6_details4,";
	$query .= "  action7, action7_details1, action7_details2, action7_details3, action7_details4,";
	
	$query .= "  required1, required2, required3, required4, required5,";
	$query .= "  resources1, resources2, resources3, resources4, resources5, resources6, resources7, resources8,";
	
	$query .= "  page, transit";

	$query .= ") VALUES (";
	$query .= "  '{$responsible1_header}', '{$responsible1_details1}', '{$responsible1_details2}',";
	$query .= "  '{$responsible2_header}', '{$responsible2_details1}', '{$responsible2_details2}',";
	$query .= "  '{$agency1}', '{$agency2}', '{$agency3}', '{$agency4}', '{$agency5}',";
	
	$query .= "  '{$action1}', '{$action1_details1}', '{$action1_details2}', '{$action1_details3}', '{$action1_details4}',";
	$query .= "  '{$action2}', '{$action2_details1}', '{$action2_details2}', '{$action2_details3}', '{$action2_details4}',";
	$query .= "  '{$action3}', '{$action3_details1}', '{$action3_details2}', '{$action3_details3}', '{$action3_details4}',";
	$query .= "  '{$action4}', '{$action4_details1}', '{$action4_details2}', '{$action4_details3}', '{$action4_details4}',";
	$query .= "  '{$action5}', '{$action5_details1}', '{$action5_details2}', '{$action5_details3}', '{$action5_details4}',";
	$query .= "  '{$action6}', '{$action6_details1}', '{$action6_details2}', '{$action6_details3}', '{$action6_details4}',";
	$query .= "  '{$action7}', '{$action7_details1}', '{$action7_details2}', '{$action7_details3}', '{$action7_details4}',";
	
	$query .= "  '{$required1}', '{$required2}', '{$required3}', '{$required4}', '{$required5}',";
	$query .= "  '{$resources1}', '{$resources2}', '{$resources3}', '{$resources4}', '{$resources5}', '{$resources6}', '{$resources7}', '{$resources8}',";
	
	$query .= "  '{$page}', '{$transit}'";
	$query .= "WHERE id = {$row} ";
	$query .= "LIMIT 1";
	$query .= ")";
	
	$result = mysqli_query($conn, $query);
	
	echo $result;
	if($result && mysqli_affected_rows($conn) ==1) {
			//Success
			header("Location: l2.php?id=" . $level. "&subid=" . $page); 
			
		} else {
			//Failure
			// $message = "Subject pdate failed";
			header("Location: l2.php?id=" . $level. "&subid=add"); 

		}
	//closing else statement
	} else {
		//If not a submit
		header("Location: index.php"); 
	
	}
}*/
?>
   
<div class="tray tray-center">         
	<div class="panel invoice-panel">
    	<div class="panel-heading">
        	<span class="panel-title">
            <span class="fa fa-pencil-square"></span> Add a Row to page <?php echo $table; ?></span>
           	<div class="panel-header-menu pull-right mr10">              
            	<a href="l2.php?id=<?php echo $id; ?>&subid=<?php echo $table; ?>" class="btn btn-default btn-sm"><i class="fa fa-arrow-left pr5"></i> Back</a>                       
          	</div>
        </div>
  		<div class="panel-body p20" id="invoice-item">            
        	<div class="row">
            	<div class="col-md-12">
				
   				  <!-- Begin Form -->                           

                 <form method="post" action="create_row.php" class="form-horizontal" role="form">
				 
				 <!-- Pass id and subid -->
				 
				 <input type='hidden' name='level' value="<?php echo htmlspecialchars($id); ?>"; />
				 <input type='hidden' name='page' value="<?php echo htmlspecialchars($table); ?>"; /> 
				 <input type='hidden' name='transit' value="<?php echo htmlspecialchars($transit); ?>"; />   
				 
				 <!-- Responsible  NIMS-->   
				  <fieldset class="text-system">
						<legend>Responsible NIMS Element:</legend>	                
                  <div class="form-group">
                    <label for="inputStandard" class="col-md-2 control-label">Responsible NIMS Element</label>
                    <div class="col-md-2">
                      <div>
                        <input type="text" required name="responsible1_header" value="<?php echo responsible1_header ?>" class="form-control" placeholder="Required">
                      </div>
                    </div>
					<label for="inputStandard" class="col-md-2 control-label">SubGroup</label>
                    <div class="col-md-2">
                      <div>
                        <input type="text" name="responsible1_details1" class="form-control" placeholder="Optional">
                      </div>
                    </div>
					<label for="inputStandard" class="col-md-2 control-label">SubGroup</label>
                    <div class="col-md-2">
                      <div>
                        <input type="text" name="responsible1_details2" class="form-control" placeholder="Optional">
                      </div>
                    </div>
                  </div>
				  <div class="form-group">
                    <label for="inputStandard" class="col-md-2 control-label">Responsible NIMS Element</label>
                    <div class="col-md-2">
                      <div>
                        <input type="text" name="responsible2_header" class="form-control" placeholder="Optional">
                      </div>
                    </div>
					<label for="inputStandard" class="col-md-2 control-label">SubGroup</label>
                    <div class="col-md-2">
                      <div>
                        <input type="text" name="responsible2_details1" class="form-control" placeholder="Optional">
                      </div>
                    </div>
					<label for="inputStandard" class="col-md-2 control-label">SubGroup</label>
                    <div class="col-md-2">
                      <div>
                        <input type="text" name="responsible2_details1" class="form-control" placeholder="Optional">
                      </div>
                    </div>
                  </div>
				  </fieldset>
				  				  <!-- Agencies -->                           
	
					<fieldset>
						<legend></legend>	  
 				    <div class="form-group">
                    <label for="inputStandard" class="col-md-2 control-label">Responsible Agency(s) or Role/Title</label>
                    <div class="col-md-2">
                      <div>
                        <input type="text" required name="agency1" class="form-control" placeholder="Required">
                      </div>
                    </div>
					<div class="col-md-2">
                      <div>
                        <input type="text" name="agency2" class="form-control" placeholder="Optional">
                      </div>
                    </div>
					<div class="col-md-2">
                      <div>
                        <input type="text" name="agency3" class="form-control" placeholder="Optional">
                      </div>
                    </div>
					<div class="col-md-2">
                      <div>
                        <input type="text" name="agency4" class="form-control" placeholder="Optional">
                      </div>
                    </div>
					<div class="col-md-2">
                      <div>
                        <input type="text" name="agency5" class="form-control" placeholder="Optional">
                      </div>
                    </div>
                  </div>
					<legend></legend>	  
				  </fieldset>
				  				  <!-- Actions -->

                  <fieldset class="text-system">
						<legend>Key Actions or Decisions:</legend>	
					<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
					  <div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingOne">
						  <h4 class="panel-title">
							<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
							  Key Action and/or Decision #1
							</a>
						  </h4>
						</div>
						<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
						  <div class="panel-body">
							<fieldset class="form-group col-md-12">
								<label for="inputSelect" >Key Actions or Decisions (1)</label>
								 <input type="text" required name="action1" class="form-control" placeholder="Required">
							  </fieldset>
								<div class="form-group">
									<label for="inputSelect" class="col-md-2 control-label">Key Action Details</label>
									<div class="col-md-9">
									  <div>
										<input type="text" name="action1_details1" class="form-control" placeholder="Optional">
									  </div>
								  </div>
									<label for="inputSelect" class="col-md-2 control-label">Key Action Details</label>
									<div class="col-md-9">
									  <div>
										<input type="text" name="action1_details2" class="form-control" placeholder="Optional">
									  </div>
									</div>
									<label for="inputSelect" class="col-md-2 control-label">Key Action Details</label>
									<div class="col-md-9">
									  <div>
										<input type="text" name="action1_details3" class="form-control" placeholder="Optional">
									  </div>
								    </div>
									<label for="inputSelect" class="col-md-2 control-label">Key Action Details</label>
									<div class="col-md-9">
									  <div>
										<input type="text" name="action1_details4" class="form-control" placeholder="Optional">
									  </div>
								  </div>
								</div>
							</div>
					  </div>
					  
					  <div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingTwo">
						  <h4 class="panel-title">
							<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
							  Key Action and/or Decision #2
							</a>
						  </h4>
						</div>
						
						<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
						  <div class="panel-body">
						<fieldset class="form-group col-md-12">
							<label for="inputSelect" >Key Actions or Decisions (2)</label>
							 <input type="text" name="action2" class="form-control" placeholder="Optional">
						</fieldset>
							<div class="form-group">
								<label for="inputSelect" class="col-md-2 control-label">Key Action Details</label>
								<div class="col-md-9">
								  <div>
									<input type="text" name="action2_details1" class="form-control" placeholder="Optional">
								  </div>
							  </div>
								<label for="inputSelect" class="col-md-2 control-label">Key Action Details</label>
								<div class="col-md-9">
								  <div>
									<input type="text" name="action2_details2" class="form-control" placeholder="Optional">
								  </div>
								</div>
								<label for="inputSelect" class="col-md-2 control-label">Key Action Details</label>
								<div class="col-md-9">
								  <div>
									<input type="text" name="action2_details3" class="form-control" placeholder="Optional">
								  </div>
								</div>
								<label for="inputSelect" class="col-md-2 control-label">Key Action Details</label>
								<div class="col-md-9">
								  <div>
									<input type="text" name="action2_details4" class="form-control" placeholder="Optional">
								  </div>
							  </div>
							</div>
							</div>
						  </div>
					  </div>
					  
					  <div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingThree">
						  <h4 class="panel-title">
							<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
							  Key Action and/or Decision #3
							</a>
						  </h4>
						</div>
						<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
						  <div class="panel-body">
							<fieldset class="form-group col-md-12">
								<label for="inputSelect" >Key Actions or Decisions (3)</label>
								<input type="text" name="action3" class="form-control" placeholder="Optional">
							</fieldset>
								<div class="form-group">
									<label for="inputSelect" class="col-md-2 control-label">Key Action Details</label>
									<div class="col-md-9">
									  <div>
										<input type="text" name="action3_details1" class="form-control" placeholder="Optional">
									  </div>
								  </div>
									<label for="inputSelect" class="col-md-2 control-label">Key Action Details</label>
									<div class="col-md-9">
									  <div>
										<input type="text" name="action3_details2" class="form-control" placeholder="Optional">
									  </div>
									</div>
									<label for="inputSelect" class="col-md-2 control-label">Key Action Details</label>
									<div class="col-md-9">
									  <div>
										<input type="text" name="action3_details3" class="form-control" placeholder="Optional">
									  </div>
								    </div>
									<label for="inputSelect" class="col-md-2 control-label">Key Action Details</label>
									<div class="col-md-9">
									  <div>
										<input type="text" name="action3_details4" class="form-control" placeholder="Optional">
									  </div>
								  </div>
								</div>
							</div>
						</div>
					  </div>
					  
					  <div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingFour">
						  <h4 class="panel-title">
							<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
							  Key Action and/or Decision #4
							</a>
						  </h4>
						</div>
						<div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
						  <div class="panel-body">
							<fieldset class="form-group col-md-12">
								<label for="inputSelect" >Key Actions or Decisions (4)</label>
								<input type="text" name="action4" class="form-control" placeholder="Optional">
							</fieldset>
								<div class="form-group">
									<label for="inputSelect" class="col-md-2 control-label">Key Action Details</label>
									<div class="col-md-9">
									  <div>
										<input type="text" name="action4_details1" class="form-control" placeholder="Optional">
									  </div>
								  </div>
									<label for="inputSelect" class="col-md-2 control-label">Key Action Details</label>
									<div class="col-md-9">
									  <div>
										<input type="text" name="action4_details2" class="form-control" placeholder="Optional">
									  </div>
									</div>
									<label for="inputSelect" class="col-md-2 control-label">Key Action Details</label>
									<div class="col-md-9">
									  <div>
										<input type="text" name="action4_details3" class="form-control" placeholder="Optional">
									  </div>
								    </div>
									<label for="inputSelect" class="col-md-2 control-label">Key Action Details</label>
									<div class="col-md-9">
									  <div>
										<input type="text" name="action4_details4" class="form-control" placeholder="Optional">
									  </div>
								  </div>
								</div>
							</div>
						</div>
					  </div>
					  
					  <div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingFive">
						  <h4 class="panel-title">
							<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
							  Key Action and/or Decision #5
							</a>
						  </h4>
						</div>
						<div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
						  <div class="panel-body">
							<fieldset class="form-group col-md-12">
								<label for="inputSelect" >Key Actions or Decisions (5)</label>
								<input type="text" name="action5" class="form-control" placeholder="Optional">
							</fieldset>
									<div class="form-group">
									<label for="inputSelect" class="col-md-2 control-label">Key Action Details</label>
									<div class="col-md-9">
									  <div>
										<input type="text" name="action5_details1" class="form-control" placeholder="Optional">
									  </div>
								  </div>
									<label for="inputSelect" class="col-md-2 control-label">Key Action Details</label>
									<div class="col-md-9">
									  <div>
										<input type="text" name="action5_details2" class="form-control" placeholder="Optional">
									  </div>
									</div>
									<label for="inputSelect" class="col-md-2 control-label">Key Action Details</label>
									<div class="col-md-9">
									  <div>
										<input type="text" name="action5_details3" class="form-control" placeholder="Optional">
									  </div>
								    </div>
									<label for="inputSelect" class="col-md-2 control-label">Key Action Details</label>
									<div class="col-md-9">
									  <div>
										<input type="text" name="action5_details4" class="form-control" placeholder="Optional">
									  </div>
								  </div>
								</div>
						  </div>
						</div>
					  </div>
					  
					  <div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingSix">
						  <h4 class="panel-title">
							<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
							  Key Action and/or Decision #6
							</a>
						  </h4>
						</div>
						<div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
						  <div class="panel-body">
							<fieldset class="form-group col-md-12">
								<label for="inputSelect" >Key Actions or Decisions (6)</label>
								<input type="text" name="action6" class="form-control" placeholder="Optional">
							</fieldset>
								<div class="form-group">
									<label for="inputSelect" class="col-md-2 control-label">Key Action Details</label>
									<div class="col-md-9">
									  <div>
										<input type="text" name="action6_details1" class="form-control" placeholder="Optional">
									  </div>
								  </div>
									<label for="inputSelect" class="col-md-2 control-label">Key Action Details</label>
									<div class="col-md-9">
									  <div>
										<input type="text" name="action6_details2" class="form-control" placeholder="Optional">
									  </div>
									</div>
									<label for="inputSelect" class="col-md-2 control-label">Key Action Details</label>
									<div class="col-md-9">
									  <div>
										<input type="text" name="action6_details3" class="form-control" placeholder="Optional">
									  </div>
								    </div>
									<label for="inputSelect" class="col-md-2 control-label">Key Action Details</label>
									<div class="col-md-9">
									  <div>
										<input type="text" name="action6_details4" class="form-control" placeholder="Optional">
									  </div>
								  </div>
								</div>
						  </div>
						</div>
					  </div>
					  
					  <div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingSeven">
						  <h4 class="panel-title">
							<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
							  Key Action and/or Decision #7
							</a>
						  </h4>
						</div>
						<div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
						  <div class="panel-body">
							<fieldset class="form-group col-md-12">
								<label for="inputSelect" >Key Actions or Decisions (7)</label>
								<input type="text" name="action7" class="form-control" placeholder="Optional">
							</fieldset>
								<div class="form-group">
									<label for="inputSelect" class="col-md-2 control-label">Key Action Details</label>
									<div class="col-md-9">
									  <div>
										<input type="text" name="action7_details1" class="form-control" placeholder="Optional">
									  </div>
								  </div>
									<label for="inputSelect" class="col-md-2 control-label">Key Action Details</label>
									<div class="col-md-9">
									  <div>
										<input type="text" name="action7_details2" class="form-control" placeholder="Optional">
									  </div>
									</div>
									<label for="inputSelect" class="col-md-2 control-label">Key Action Details</label>
									<div class="col-md-9">
									  <div>
										<input type="text" name="action7_details3" class="form-control" placeholder="Optional">
									  </div>
								    </div>
									<label for="inputSelect" class="col-md-2 control-label">Key Action Details</label>
									<div class="col-md-9">
									  <div>
										<input type="text" name="action7_details4" class="form-control" placeholder="Optional">
									  </div>
								  </div>
								</div>
							</div>
						</div>
					  </div>
					</div>
					</div>
				</fieldset>
		  
				  <!-- Information Required-->  
				    
				  <fieldset class="text-system">
						<legend>Information or Data Required:</legend>	                       
                  <div class="form-group">
                    <label class="col-lg-3 control-label" for="textArea2">Information or Data Required</label>
                    <div class="col-lg-8">
                      <div>
                        <textarea class="form-control" id="textArea2" name="required1" rows="3" placeholder="Optional"></textarea>
                      </div>
                    </div>
                  </div>
				  <div class="form-group">
                    <label class="col-lg-3 control-label" for="textArea2">Information or Data Required</label>
                    <div class="col-lg-8">
                      <div>
                        <textarea class="form-control" id="textArea2" name="required2" rows="3" placeholder="Optional"></textarea>
                      </div>
                    </div>
                  </div>
				  <div class="form-group">
                    <label class="col-lg-3 control-label" for="textArea2">Information or Data Required</label>
                    <div class="col-lg-8">
                      <div>
                        <textarea class="form-control" id="textArea2" name="required3" rows="3" placeholder="Optional"></textarea>
                      </div>
                    </div>
                  </div>
				  <div class="form-group">
                    <label class="col-lg-3 control-label" for="textArea2">Information or Data Required</label>
                    <div class="col-lg-8">
                      <div>
                        <textarea class="form-control" id="textArea2" name="required4" rows="3" placeholder="Optional"></textarea>
                      </div>
                    </div>
                  </div>
				  <div class="form-group">
                    <label class="col-lg-3 control-label" for="textArea2">Information or Data Required</label>
                    <div class="col-lg-8">
                      <div>
                        <textarea class="form-control" id="textArea2" name="required5" rows="3" placeholder="Optional"></textarea>
                      </div>
                    </div>
                  </div>
				  <div class="form-group">
                    <label class="col-lg-3 control-label" for="textArea2">Information or Data Required</label>
                    <div class="col-lg-8">
                      <div>
                        <textarea class="form-control" id="textArea2" name="required6" rows="3" placeholder="Optional"></textarea>
                      </div>
                    </div>
                  </div>
				  </fieldset>
				  
				  <fieldset class="form-group">
                    <label for="textArea2">Resources or Assets Needed</label>
                    <textarea class="form-control" id="textArea2" name="resources1" rows="3" placeholder="Optional"></textarea>
                  </fieldset>
				  <fieldset class="form-group">
                    <label for="textArea2">Resources or Assets Needed</label>
                    <textarea class="form-control" id="textArea2" name="resources2" rows="3" placeholder="Optional"></textarea>
                  </fieldset>
				  <fieldset class="form-group">
                    <label for="textArea2">Resources or Assets Needed</label>
                    <textarea class="form-control" id="textArea2" name="resources3" rows="3" placeholder="Optional"></textarea>
                  </fieldset>
				  <fieldset class="form-group">
                    <label for="textArea2">Resources or Assets Needed</label>
                    <textarea class="form-control" id="textArea2" name="resources4" rows="3" placeholder="Optional"></textarea>
                  </fieldset>
				  <fieldset class="form-group">
                    <label for="textArea2">Resources or Assets Needed</label>
                    <textarea class="form-control" id="textArea2" name="resources5" rows="3" placeholder="Optional"></textarea>
                  </fieldset>
				  <fieldset class="form-group">
                    <label for="textArea2">Resources or Assets Needed</label>
                    <textarea class="form-control" id="textArea2" name="resources6" rows="3" placeholder="Optional"></textarea>
                  </fieldset> 
				  <fieldset class="form-group">
                    <label for="textArea2">Resources or Assets Needed</label>
                    <textarea class="form-control" id="textArea2" name="resources7" rows="3" placeholder="Optional"></textarea>
                  </fieldset> 
				  <fieldset class="form-group">
                    <label for="textArea2">Resources or Assets Needed</label>
                    <textarea class="form-control" id="textArea2" name="resources8" rows="3" placeholder="Optional"></textarea>
                  </fieldset>                                            
              
            <br />
           	<div class="row" id="invoice-footer">
            	<div class="col-md-12">                
                	<div class="clearfix"></div>
                    	<div class="invoice-buttons">
							<input type="submit" class="btn btn-system mr10" name="submit" value="Save" />
                        	<!-- <input type="button" class="btn btn-default mr10" name="submit"><i class="fa fa-save pr5"></i> Save</input>&nbsp; -->
                       	</div>
                  	</div>
              	</div>
          	</div>
     	</div>
        </form>
	  </div>            
	</div>  
		<!-- End Form--> 
		
		              
        <div class="panel invoice-panel">
            <div class="panel-heading">
                <span class="panel-title">
                <span class="fa fa-upload"></span> References to Supporting Information</span>           		
            </div>
            <div class="panel-body p20" id="invoice-item">            
                <div class="row">
                    <div class="col-md-12">
                                                                        
                        <div class="tray-bin pl10 mb10" style="min-height: 250px;">
                            <h5 class="text-muted mt10 fw600 pl10">
                                <i class="fa fa-exclamation-circle text-info fa-lg pr10"></i> Drag and Drop Uploader
                            </h5>
                            <form action="/file-upload" class="dropzone dropzone-sm" id="dropZone">
                                <div class="fallback">
                                    <input name="file" type="file" multiple />
                                </div>
                            </form>
                        </div>
            
                        <!--<h5 class="micro-header fw600 text-left">
                      		<i class="fa fa-exclamation-circle text-info fa-lg pr10"></i> Current Documents 
                        </h5>
                        <form action="/file-upload" class="dropzone" id="dropZone2" style="height: 200px;">
                       		<div class="fallback">
                            	<input name="file" type="file" multiple />
                          	</div>
                        </form>    -->                                                    
                    </div>
                </div>
            </div>
        </div>                                
   	</div>         
</div>



!--<script>
	$(document).ready(function(){
		/* Data Insert Starts Here */
		 $(document).on('submit', '#emp-SaveForm', function() {
		   
			$.post("create.php", $(this).serialize())
				.done(function(data){
		   $("#dis").fadeOut();
		   $("#dis").fadeIn('slow', function(){
			 $("#dis").html('<div class="alert alert-info">'+data+'</div>');
				$("#emp-SaveForm")[0].reset();
			   }); 
		   });   
			  return false;
			});
		 /* Data Insert Ends Here */
		 
		  /* Data Delete Starts Here */
		 $(".delete-link").click(function()
		 {
		  var id = $(this).attr("id");
		  var del_id = id;
		  var parent = $(this).parent("td").parent("tr");
		  if(confirm('Sure to Delete ID no = ' +del_id))
		  {
		   $.post('delete.php', {'del_id':del_id}, function(data)
		   {
			parent.fadeOut('slow');
		   }); 
		  }
		  return false;
		 });
		 /* Data Delete Ends Here */
		 
		 /* Get Edit ID  */
		 $(".edit-link").click(function()
		 {
		  var id = $(this).attr("id");
		  var edit_id = id;
		  if(confirm('Sure to Edit ID no = ' +edit_id))
		  {
		   $(".content-loader").fadeOut('slow', function()
			{
			$(".content-loader").fadeIn('slow');
			$(".content-loader").load('edit_form.php?edit_id='+edit_id);
			$("#btn-add").hide();
			$("#btn-view").show();
		   });
		  }
		  return false;
		 });
		 /* Get Edit ID  */
		 
		 /* Update Record  */
		 $(document).on('submit', '#emp-UpdateForm', function() {
		  
			$.post("update.php", $(this).serialize())
				.done(function(data){
		   $("#dis").fadeOut();
		   $("#dis").fadeIn('slow', function(){
				$("#dis").html('<div class="alert alert-info">'+data+'</div>');
				$("#emp-UpdateForm")[0].reset();
			 $("body").fadeOut('slow', function()
			 {
			 $("body").fadeOut('slow');
			 window.location.href="index.php";
			 });     
			   }); 
		  });   
			 return false;
			});
		 /* Update Record  */
	});

</script>

<!-- Create Row SQL on form processing page -->


   
   
<!-- Delete SQL -->

<?php
/*
if($_POST['id']) {
	$id = $_POST['id'];
	 
	$query  = "DELETE FROM tablename ";
	$query .= "where id = {$id} ";
	$query .= "LIMIT 1";
 
	$result = mysqli_query($conn, $query);
		
	if($result && mysqli_affected_rows($conn) ==1) {
		//Success
		//redirect_to("pagenumber.php"); use this function
		echo "Success";
	} else {
		//Failure
		// $message = "Subject delete failed";
		die("Database query failed. " . mysqli_error($conn));
	}
}*/
?>  

<!-- Get Edit Data SQL -->

<?php /*

if($_GET['edit_id'])
{
 $id = $_GET['edit_id']; 
 $stmt=$db_con->prepare("SELECT * FROM tbl_employees WHERE emp_id=:id");
 $stmt->execute(array(':id'=>$id)); 
 $row=$stmt->fetch(PDO::FETCH_ASSOC);
}
*/
?>

<!--<script>
	$(document).ready(function(){
		/* Data Insert Starts Here */
		 $(document).on('submit', '#emp-SaveForm', function() {
		   
			$.post("create.php", $(this).serialize())
				.done(function(data){
		   $("#dis").fadeOut();
		   $("#dis").fadeIn('slow', function(){
			 $("#dis").html('<div class="alert alert-info">'+data+'</div>');
				$("#emp-SaveForm")[0].reset();
			   }); 
		   });   
			  return false;
			});
		 /* Data Insert Ends Here */
		 
		  /* Data Delete Starts Here */
		 $(".delete-link").click(function()
		 {
		  var id = $(this).attr("id");
		  var del_id = id;
		  var parent = $(this).parent("td").parent("tr");
		  if(confirm('Sure to Delete ID no = ' +del_id))
		  {
		   $.post('delete.php', {'del_id':del_id}, function(data)
		   {
			parent.fadeOut('slow');
		   }); 
		  }
		  return false;
		 });
		 /* Data Delete Ends Here */
		 
		 /* Get Edit ID  */
		 $(".edit-link").click(function()
		 {
		  var id = $(this).attr("id");
		  var edit_id = id;
		  if(confirm('Sure to Edit ID no = ' +edit_id))
		  {
		   $(".content-loader").fadeOut('slow', function()
			{
			$(".content-loader").fadeIn('slow');
			$(".content-loader").load('edit_form.php?edit_id='+edit_id);
			$("#btn-add").hide();
			$("#btn-view").show();
		   });
		  }
		  return false;
		 });
		 /* Get Edit ID  */
		 
		 /* Update Record  */
		 $(document).on('submit', '#emp-UpdateForm', function() {
		  
			$.post("update.php", $(this).serialize())
				.done(function(data){
		   $("#dis").fadeOut();
		   $("#dis").fadeIn('slow', function(){
				$("#dis").html('<div class="alert alert-info">'+data+'</div>');
				$("#emp-UpdateForm")[0].reset();
			 $("body").fadeOut('slow', function()
			 {
			 $("body").fadeOut('slow');
			 window.location.href="index.php";
			 });     
			   }); 
		  });   
			 return false;
			});
		 /* Update Record  */
	});

</script>

<!-- Create Row SQL on form processing page -->


   
   
<!-- Delete SQL -->

<?php
/*
if($_POST['id']) {
	$id = $_POST['id'];
	 
	$query  = "DELETE FROM tablename ";
	$query .= "where id = {$id} ";
	$query .= "LIMIT 1";
 
	$result = mysqli_query($conn, $query);
		
	if($result && mysqli_affected_rows($conn) ==1) {
		//Success
		//redirect_to("pagenumber.php"); use this function
		echo "Success";
	} else {
		//Failure
		// $message = "Subject delete failed";
		die("Database query failed. " . mysqli_error($conn));
	}
}*/
?>  

<!-- Get Edit Data SQL -->

<?php /*

if($_GET['edit_id'])
{
 $id = $_GET['edit_id']; 
 $stmt=$db_con->prepare("SELECT * FROM tbl_employees WHERE emp_id=:id");
 $stmt->execute(array(':id'=>$id)); 
 $row=$stmt->fetch(PDO::FETCH_ASSOC);
}
*/
?>



























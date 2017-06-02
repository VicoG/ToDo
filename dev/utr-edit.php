<?php
	$level = $_GET['id'];//level of progress ie 200. 300 etc
	$row = $_GET['row']; // id number of row selected
	$table = $_GET['table']; // page number or subid ie 301, 204 etc

?>

 <?php
// Database query
	$query = "SELECT * FROM 	main_table WHERE id = $row";
	
	$result = mysqli_query($conn, $query);
	$data = mysqli_fetch_assoc($result);
	//Test if there was a query error
	if(!$result) {?>
		<script>
			function myFunction() {
				alert("Database Edit query failed.");
			}
		</script>
	<?php }

?>
<div class="tray tray-center mt20 pt20">         
	<div class="panel invoice-panel">
    	<div class="panel-heading">
        	<span class="panel-title">
            <span class="fa fa-pencil-square"></span> Edit Row, in Table <?php echo $table; ?></span>
           	<div class="panel-header-menu pull-right mr10">              
            	<a href="l2.php?id=<?php echo $id; ?>&subid=<?php echo $table; ?>" class="btn btn-default btn-sm"><i class="fa fa-arrow-left pr5"></i> Back</a>                       
          	</div>
        </div>
  		<div class="panel-body p20" id="invoice-item">            
        	<div class="row">
            	<div class="col-md-12">
				
   				  <!-- Begin Form -->                           

			<form method="post" action="edit_row.php" class="form-horizontal" role="form">
				 
				 <!-- Pass id and subid -->
				 
				 <input type='hidden' name='row' value="<?php echo htmlspecialchars($row); ?>"; />
				 <input type='hidden' name='level' value="<?php echo htmlspecialchars($level); ?>"; />
				 <input type='hidden' name='page' value="<?php echo htmlspecialchars($table); ?>"; /> 				 
				 
				 <!-- Responsible  NIMS-->   
				  <fieldset class="text-system">
						<legend>Responsible NIMS Element:</legend>	                
                  <div class="form-group">
                    <label for="inputStandard" class="col-md-2 control-label">Responsible NIMS Element</label>
                    <div class="col-md-2">
                      <div>
                        <input type="text" required name="responsible1_header" value="<?php	echo $data["responsible1_header"]; ?>" class="form-control" pattern=".{0,200}"  title=" Maximum characters is 200" placeholder="Required">
                      </div>
                    </div>
					<label for="inputStandard" class="col-md-2 control-label">SubGroup</label>
                    <div class="col-md-2">
                      <div>
                        <input type="text" name="responsible1_details1" value="<?php	echo $data["responsible1_details1"]; ?>" class="form-control" pattern=".{0,200}"  title=" Maximum characters is 200" placeholder="Optional">
                      </div>
                    </div>
					<label for="inputStandard" class="col-md-2 control-label">SubGroup</label>
                    <div class="col-md-2">
                      <div>
                        <input type="text" name="responsible1_details2" value="<?php	echo $data["responsible1_details2"]; ?>" class="form-control" pattern=".{0,200}"  title=" Maximum characters is 200" placeholder="Optional">
                      </div>
                    </div>
                  </div>
				  <div class="form-group">
                    <label for="inputStandard" class="col-md-2 control-label">Responsible NIMS Element</label>
                    <div class="col-md-2">
                      <div>
                        <input type="text" name="responsible2_header" value="<?php	echo $data["responsible2_header"]; ?>" class="form-control" pattern=".{0,200}"  title=" Maximum characters is 200" placeholder="Optional">
                      </div>
                    </div>
					<label for="inputStandard" class="col-md-2 control-label">SubGroup</label>
                    <div class="col-md-2">
                      <div>
                        <input type="text" name="responsible2_details1" value="<?php	echo $data["responsible2_details1"]; ?>" class="form-control" pattern=".{0,200}"  title=" Maximum characters is 200" placeholder="Optional">
                      </div>
                    </div>
					<label for="inputStandard" class="col-md-2 control-label">SubGroup</label>
                    <div class="col-md-2">
                      <div>
                        <input type="text" name="responsible2_details2" value="<?php	echo $data["responsible2_details2"]; ?>" class="form-control" pattern=".{0,200}"  title=" Maximum characters is 200" placeholder="Optional">
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
                        <input type="text" required name="agency1" value="<?php	echo $data["agency1"]; ?>" class="form-control" pattern=".{0,200}"  title=" Maximum characters is 200" placeholder="Required">
                      </div>
                    </div>
					<div class="col-md-2">
                      <div>
                        <input type="text" name="agency2" value="<?php	echo $data["agency2"]; ?>" class="form-control" pattern=".{0,200}"  title=" Maximum characters is 200" placeholder="Optional">
                      </div>
                    </div>
					<div class="col-md-2">
                      <div>
                        <input type="text" name="agency3" value="<?php	echo $data["agency3"]; ?>" class="form-control" pattern=".{0,200}"  title=" Maximum characters is 200" placeholder="Optional">
                      </div>
                    </div>
					<div class="col-md-2">
                      <div>
                        <input type="text" name="agency4" value="<?php	echo $data["agency4"]; ?>"  class="form-control" pattern=".{0,200}"  title=" Maximum characters is 200" placeholder="Optional">
                      </div>
                    </div>
					<div class="col-md-2">
                      <div>
                        <input type="text" name="agency5" value="<?php	echo $data["agency5"]; ?>" class="form-control" pattern=".{0,200}"  title=" Maximum characters is 200" placeholder="Optional">
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
								 <input type="text" required name="action1" value="<?php	echo $data["action1"]; ?>" class="form-control" pattern=".{0,200}"  title=" Maximum characters is 200" placeholder="Required">
							  </fieldset>
								<div class="form-group">
									<label for="inputSelect" class="col-md-2 control-label">Key Action Details</label>
									<div class="col-md-9">
									  <div>
										<input type="text" name="action1_details1" value="<?php	echo $data["action1_details1"]; ?>" class="form-control" pattern=".{0,200}"  title=" Maximum characters is 200" placeholder="Optional">
									  </div>
								  </div>
									<label for="inputSelect" class="col-md-2 control-label">Key Action Details</label>
									<div class="col-md-9">
									  <div>
										<input type="text" name="action1_details2" value="<?php	echo $data["action1_details2"]; ?>" class="form-control" pattern=".{0,200}"  title=" Maximum characters is 200" placeholder="Optional">
									  </div>
									</div>
									<label for="inputSelect" class="col-md-2 control-label">Key Action Details</label>
									<div class="col-md-9">
									  <div>
										<input type="text" name="action1_details3" value="<?php	echo $data["action1_details3"]; ?>" class="form-control" pattern=".{0,200}"  title=" Maximum characters is 200" placeholder="Optional">
									  </div>
								    </div>
									<label for="inputSelect" class="col-md-2 control-label">Key Action Details</label>
									<div class="col-md-9">
									  <div>
										<input type="text" name="action1_details4" value="<?php	echo $data["action1_details4"]; ?>" class="form-control" pattern=".{0,200}"  title=" Maximum characters is 200" placeholder="Optional">
									  </div>
								  </div>
								  <label for="inputSelect" class="col-md-2 control-label">Key Action Details</label>
									<div class="col-md-9">
									  <div>
										<input type="text" name="action1_details5" value="<?php	echo $data["action1_details5"]; ?>" class="form-control" pattern=".{0,200}"  title=" Maximum characters is 200" placeholder="Optional">
									  </div>
								  </div>
									<label for="inputSelect" class="col-md-2 control-label">Key Action Details</label>
									<div class="col-md-9">
									  <div>
										<input type="text" name="action1_details6" value="<?php	echo $data["action1_details6"]; ?>" class="form-control" pattern=".{0,200}"  title=" Maximum characters is 200" placeholder="Optional">
									  </div>
									</div>
									<label for="inputSelect" class="col-md-2 control-label">Key Action Details</label>
									<div class="col-md-9">
									  <div>
										<input type="text" name="action1_details7" value="<?php	echo $data["action1_details7"]; ?>" class="form-control" pattern=".{0,200}"  title=" Maximum characters is 200" placeholder="Optional">
									  </div>
								    </div>
									<label for="inputSelect" class="col-md-2 control-label">Key Action Details</label>
									<div class="col-md-9">
									  <div>
										<input type="text" name="action1_details8" value="<?php	echo $data["action1_details8"]; ?>" class="form-control" pattern=".{0,200}"  title=" Maximum characters is 200" pattern=".{0,200}"  title=" Maximum characters is 200" placeholder="Optional">
									  </div>
								  </div>
								  <label for="inputSelect" class="col-md-2 control-label">Key Action Details</label>
									<div class="col-md-9">
									  <div>
										<input type="text" name="action1_details9" value="<?php	echo $data["action1_details9"]; ?>" class="form-control" pattern=".{0,200}"  title=" Maximum characters is 200" placeholder="Optional">
									  </div>
								  </div>
									<label for="inputSelect" class="col-md-2 control-label">Key Action Details</label>
									<div class="col-md-9">
									  <div>
										<input type="text" name="action1_details10" value="<?php	echo $data["action1_details10"]; ?>" class="form-control" pattern=".{0,200}"  title=" Maximum characters is 200" placeholder="Optional">
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
							 <input type="text" name="action2" value="<?php	echo $data["action2"]; ?>" class="form-control" pattern=".{0,200}"  title=" Maximum characters is 200" placeholder="Optional">
						</fieldset>
							<div class="form-group">
								<label for="inputSelect" class="col-md-2 control-label">Key Action Details</label>
								<div class="col-md-9">
								  <div>
									<input type="text" name="action2_details1" value="<?php	echo $data["action2_details1"]; ?>" class="form-control" pattern=".{0,200}"  title=" Maximum characters is 200" placeholder="Optional">
								  </div>
							  </div>
								<label for="inputSelect" class="col-md-2 control-label">Key Action Details</label>
								<div class="col-md-9">
								  <div>
									<input type="text" name="action2_details2" value="<?php	echo $data["action2_details2"]; ?>" class="form-control" pattern=".{0,200}"  title=" Maximum characters is 200" placeholder="Optional">
								  </div>
								</div>
								<label for="inputSelect" class="col-md-2 control-label">Key Action Details</label>
								<div class="col-md-9">
								  <div>
									<input type="text" name="action2_details3"value="<?php	echo $data["action2_details3"]; ?>" class="form-control" pattern=".{0,200}"  title=" Maximum characters is 200" placeholder="Optional">
								  </div>
								</div>
								<label for="inputSelect" class="col-md-2 control-label">Key Action Details</label>
								<div class="col-md-9">
								  <div>
									<input type="text" name="action2_details4" value="<?php	echo $data["action2_details4"]; ?>" class="form-control" pattern=".{0,200}"  title=" Maximum characters is 200" placeholder="Optional">
								  </div>
							  </div>
								<label for="inputSelect" class="col-md-2 control-label">Key Action Details</label>
								<div class="col-md-9">
								  <div>
									<input type="text" name="action2_details5" value="<?php	echo $data["action2_details5"]; ?>" class="form-control" pattern=".{0,200}"  title=" Maximum characters is 200" placeholder="Optional">
								  </div>
							  </div>
								<label for="inputSelect" class="col-md-2 control-label">Key Action Details</label>
								<div class="col-md-9">
								  <div>
									<input type="text" name="action2_details6" value="<?php	echo $data["action2_details6"]; ?>" class="form-control" pattern=".{0,200}"  title=" Maximum characters is 200" placeholder="Optional">
								  </div>
								</div>
								<label for="inputSelect" class="col-md-2 control-label">Key Action Details</label>
								<div class="col-md-9">
								  <div>
									<input type="text" name="action2_details7"value="<?php	echo $data["action2_details7"]; ?>" class="form-control" pattern=".{0,200}"  title=" Maximum characters is 200" placeholder="Optional">
								  </div>
								</div>
								<label for="inputSelect" class="col-md-2 control-label">Key Action Details</label>
								<div class="col-md-9">
								  <div>
									<input type="text" name="action2_details8" value="<?php	echo $data["action2_details8"]; ?>" class="form-control" pattern=".{0,200}"  title=" Maximum characters is 200" placeholder="Optional">
								  </div>
							  </div>
								<label for="inputSelect" class="col-md-2 control-label">Key Action Details</label>
								<div class="col-md-9">
								  <div>
									<input type="text" name="action2_details9" value="<?php	echo $data["action2_details9"]; ?>" class="form-control" pattern=".{0,200}"  title=" Maximum characters is 200" placeholder="Optional">
								  </div>
							  </div>
								<label for="inputSelect" class="col-md-2 control-label">Key Action Details</label>
								<div class="col-md-9">
								  <div>
									<input type="text" name="action2_details10" value="<?php	echo $data["action2_details10"]; ?>" class="form-control" pattern=".{0,200}"  title=" Maximum characters is 200" placeholder="Optional">
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
								<input type="text" name="action3" value="<?php	echo $data["action3"]; ?>" class="form-control" pattern=".{0,200}"  title=" Maximum characters is 200" placeholder="Optional">
							</fieldset>
								<div class="form-group">
									<label for="inputSelect" class="col-md-2 control-label">Key Action Details</label>
									<div class="col-md-9">
									  <div>
										<input type="text" name="action3_details1" value="<?php	echo $data["action3_details1"]; ?>" class="form-control" pattern=".{0,200}"  title=" Maximum characters is 200" placeholder="Optional">
									  </div>
								  </div>
									<label for="inputSelect" class="col-md-2 control-label">Key Action Details</label>
									<div class="col-md-9">
									  <div>
										<input type="text" name="action3_details2" value="<?php	echo $data["action3_details2"]; ?>" class="form-control" pattern=".{0,200}"  title=" Maximum characters is 200" placeholder="Optional">
									  </div>
									</div>
									<label for="inputSelect" class="col-md-2 control-label">Key Action Details</label>
									<div class="col-md-9">
									  <div>
										<input type="text" name="action3_details3" value="<?php	echo $data["action3_details3"]; ?>" class="form-control" pattern=".{0,200}"  title=" Maximum characters is 200" placeholder="Optional">
									  </div>
								    </div>
									<label for="inputSelect" class="col-md-2 control-label">Key Action Details</label>
									<div class="col-md-9">
									  <div>
										<input type="text" name="action3_details4"value="<?php	echo $data["action3_details4"]; ?>"  class="form-control" pattern=".{0,200}"  title=" Maximum characters is 200" placeholder="Optional">
									  </div>
								  </div>
									<label for="inputSelect" class="col-md-2 control-label">Key Action Details</label>
									<div class="col-md-9">
									  <div>
										<input type="text" name="action3_details5" value="<?php	echo $data["action3_details5"]; ?>" class="form-control" pattern=".{0,200}"  title=" Maximum characters is 200" placeholder="Optional">
									  </div>
									</div>
									<label for="inputSelect" class="col-md-2 control-label">Key Action Details</label>
									<div class="col-md-9">
									  <div>
										<input type="text" name="action3_details6" value="<?php	echo $data["action3_details6"]; ?>" class="form-control" pattern=".{0,200}"  title=" Maximum characters is 200" placeholder="Optional">
									  </div>
								    </div>
									<label for="inputSelect" class="col-md-2 control-label">Key Action Details</label>
									<div class="col-md-9">
									  <div>
										<input type="text" name="action3_details7"value="<?php	echo $data["action3_details7"]; ?>"  class="form-control" pattern=".{0,200}"  title=" Maximum characters is 200" placeholder="Optional">
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
								<input type="text" name="action4" value="<?php	echo $data["action4"]; ?>" class="form-control" pattern=".{0,200}"  title=" Maximum characters is 200" placeholder="Optional">
							</fieldset>
								<div class="form-group">
									<label for="inputSelect" class="col-md-2 control-label">Key Action Details</label>
									<div class="col-md-9">
									  <div>
										<input type="text" name="action4_details1" value="<?php	echo $data["action4_details1"]; ?>" class="form-control" pattern=".{0,200}"  title=" Maximum characters is 200" placeholder="Optional">
									  </div>
								  </div>
									<label for="inputSelect" class="col-md-2 control-label">Key Action Details</label>
									<div class="col-md-9">
									  <div>
										<input type="text" name="action4_details2" value="<?php	echo $data["action4_details2"]; ?>" class="form-control" pattern=".{0,200}"  title=" Maximum characters is 200" placeholder="Optional">
									  </div>
									</div>
									<label for="inputSelect" class="col-md-2 control-label">Key Action Details</label>
									<div class="col-md-9">
									  <div>
										<input type="text" name="action4_details3" value="<?php	echo $data["action4_details3"]; ?>" class="form-control" pattern=".{0,200}"  title=" Maximum characters is 200" placeholder="Optional">
									  </div>
								    </div>
									<label for="inputSelect" class="col-md-2 control-label">Key Action Details</label>
									<div class="col-md-9">
									  <div>
										<input type="text" name="action4_details4" value="<?php	echo $data["action4_details4"]; ?>" class="form-control" pattern=".{0,200}"  title=" Maximum characters is 200" placeholder="Optional">
									  </div>
								  </div>
								  <label for="inputSelect" class="col-md-2 control-label">Key Action Details</label>
									<div class="col-md-9">
									  <div>
										<input type="text" name="action4_details5" value="<?php	echo $data["action4_details5"]; ?>" class="form-control" pattern=".{0,200}"  title=" Maximum characters is 200" placeholder="Optional">
									  </div>
									</div>
									<label for="inputSelect" class="col-md-2 control-label">Key Action Details</label>
									<div class="col-md-9">
									  <div>
										<input type="text" name="action4_details6" value="<?php	echo $data["action4_details6"]; ?>" class="form-control" pattern=".{0,200}"  title=" Maximum characters is 200" placeholder="Optional">
									  </div>
								    </div>
									<label for="inputSelect" class="col-md-2 control-label">Key Action Details</label>
									<div class="col-md-9">
									  <div>
										<input type="text" name="action4_details7" value="<?php	echo $data["action4_details7"]; ?>" class="form-control" pattern=".{0,200}"  title=" Maximum characters is 200" placeholder="Optional">
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
								<input type="text" name="action5" value="<?php	echo $data["action5"]; ?>" class="form-control" pattern=".{0,200}"  title=" Maximum characters is 200" placeholder="Optional">
							</fieldset>
									<div class="form-group">
									<label for="inputSelect" class="col-md-2 control-label">Key Action Details</label>
									<div class="col-md-9">
									  <div>
										<input type="text" name="action5_details1" value="<?php	echo $data["action5_details1"]; ?>" class="form-control" pattern=".{0,200}"  title=" Maximum characters is 200" placeholder="Optional">
									  </div>
								  </div>
									<label for="inputSelect" class="col-md-2 control-label">Key Action Details</label>
									<div class="col-md-9">
									  <div>
										<input type="text" name="action5_details2" value="<?php	echo $data["action5_details2"]; ?>" class="form-control" pattern=".{0,200}"  title=" Maximum characters is 200" placeholder="Optional">
									  </div>
									</div>
									<label for="inputSelect" class="col-md-2 control-label">Key Action Details</label>
									<div class="col-md-9">
									  <div>
										<input type="text" name="action5_details3" value="<?php	echo $data["action5_details3"]; ?>" class="form-control" pattern=".{0,200}"  title=" Maximum characters is 200" placeholder="Optional">
									  </div>
								    </div>
									<label for="inputSelect" class="col-md-2 control-label">Key Action Details</label>
									<div class="col-md-9">
									  <div>
										<input type="text" name="action5_details4" value="<?php	echo $data["action5_details4"]; ?>" class="form-control" pattern=".{0,200}"  title=" Maximum characters is 200" placeholder="Optional">
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
								<input type="text" name="action6" value="<?php	echo $data["action6"]; ?>" class="form-control" pattern=".{0,200}"  title=" Maximum characters is 200" placeholder="Optional">
							</fieldset>
								<div class="form-group">
									<label for="inputSelect" class="col-md-2 control-label">Key Action Details</label>
									<div class="col-md-9">
									  <div>
										<input type="text" name="action6_details1" value="<?php	echo $data["action6_details1"]; ?>" class="form-control" pattern=".{0,200}"  title=" Maximum characters is 200" placeholder="Optional">
									  </div>
								  </div>
									<label for="inputSelect" class="col-md-2 control-label">Key Action Details</label>
									<div class="col-md-9">
									  <div>
										<input type="text" name="action6_details2" value="<?php	echo $data["action6_details2"]; ?>" class="form-control" pattern=".{0,200}"  title=" Maximum characters is 200" placeholder="Optional">
									  </div>
									</div>
									<label for="inputSelect" class="col-md-2 control-label">Key Action Details</label>
									<div class="col-md-9">
									  <div>
										<input type="text" name="action6_details3" value="<?php	echo $data["action6_details3"]; ?>" class="form-control" pattern=".{0,200}"  title=" Maximum characters is 200" placeholder="Optional">
									  </div>
								    </div>
									<label for="inputSelect" class="col-md-2 control-label">Key Action Details</label>
									<div class="col-md-9">
									  <div>
										<input type="text" name="action6_details4" value="<?php	echo $data["action6_details4"]; ?>" class="form-control" pattern=".{0,200}"  title=" Maximum characters is 200" placeholder="Optional">
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
								<input type="text" name="action7" value="<?php	echo $data["action7"]; ?>" class="form-control" pattern=".{0,200}"  title=" Maximum characters is 200" placeholder="Optional">
							</fieldset>
								<div class="form-group">
									<label for="inputSelect" class="col-md-2 control-label">Key Action Details</label>
									<div class="col-md-9">
									  <div>
										<input type="text" name="action7_details1" value="<?php	echo $data["action7_details1"]; ?>" class="form-control" pattern=".{0,200}"  title=" Maximum characters is 200" placeholder="Optional">
									  </div>
								  </div>
									<label for="inputSelect" class="col-md-2 control-label">Key Action Details</label>
									<div class="col-md-9">
									  <div>
										<input type="text" name="action7_details2" value="<?php	echo $data["action7_details2"]; ?>" class="form-control" pattern=".{0,200}"  title=" Maximum characters is 200" placeholder="Optional">
									  </div>
									</div>
									<label for="inputSelect" class="col-md-2 control-label">Key Action Details</label>
									<div class="col-md-9">
									  <div>
										<input type="text" name="action7_details3" value="<?php	echo $data["action7_details3"]; ?>" class="form-control" pattern=".{0,200}"  title=" Maximum characters is 200" placeholder="Optional">
									  </div>
								    </div>
									<label for="inputSelect" class="col-md-2 control-label">Key Action Details</label>
									<div class="col-md-9">
									  <div>
										<input type="text" name="action7_details4" value="<?php	echo $data["action7_details4"]; ?>" class="form-control" pattern=".{0,200}"  title=" Maximum characters is 200" placeholder="Optional">
									  </div>
								  </div>
								</div>
							</div>
						</div>
					  </div>
					  
					  <div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingEight">
						  <h4 class="panel-title">
							<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
							  Key Action and/or Decision #8
							</a>
						  </h4>
						</div>
						<div id="collapseEight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEight">
						  <div class="panel-body">
							<fieldset class="form-group col-md-12">
								<label for="inputSelect" >Key Actions or Decisions (8)</label>
								<input type="text" name="action8" value="<?php	echo $data["action8"]; ?>" class="form-control" pattern=".{0,200}"  title=" Maximum characters is 200" placeholder="Optional">
							</fieldset>
								<div class="form-group">
									<label for="inputSelect" class="col-md-2 control-label">Key Action Details</label>
									<div class="col-md-9">
									  <div>
										<input type="text" name="action8_details1" value="<?php	echo $data["action8_details1"]; ?>" class="form-control" pattern=".{0,200}"  title=" Maximum characters is 200" placeholder="Optional">
									  </div>
								  </div>
									<label for="inputSelect" class="col-md-2 control-label">Key Action Details</label>
									<div class="col-md-9">
									  <div>
										<input type="text" name="action8_details2" value="<?php	echo $data["action8_details2"]; ?>" class="form-control" pattern=".{0,200}"  title=" Maximum characters is 200" placeholder="Optional">
									  </div>
									</div>
									<label for="inputSelect" class="col-md-2 control-label">Key Action Details</label>
									<div class="col-md-9">
									  <div>
										<input type="text" name="action8_details3" value="<?php	echo $data["action8_details3"]; ?>" class="form-control" pattern=".{0,200}"  title=" Maximum characters is 200" placeholder="Optional">
									  </div>
								    </div>
									<label for="inputSelect" class="col-md-2 control-label">Key Action Details</label>
									<div class="col-md-9">
									  <div>
										<input type="text" name="action8_details4" value="<?php	echo $data["action8_details4"]; ?>" class="form-control" pattern=".{0,200}"  title=" Maximum characters is 200"  placeholder="Optional">
									  </div>
								  </div>
								</div>
							</div>
						</div>
					  </div>

					  <div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingNine">
						  <h4 class="panel-title">
							<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
							  Key Action and/or Decision #9
							</a>
						  </h4>
						</div>
						<div id="collapseNine" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingNine">
						  <div class="panel-body">
							<fieldset class="form-group col-md-12">
								<label for="inputSelect" >Key Actions or Decisions (9)</label>
								<input type="text" name="action9" value="<?php	echo $data["action9"]; ?>" class="form-control" pattern=".{0,200}"  title=" Maximum characters is 200" placeholder="Optional">
							</fieldset>
								<div class="form-group">
									<label for="inputSelect" class="col-md-2 control-label">Key Action Details</label>
									<div class="col-md-9">
									  <div>
										<input type="text" name="action9_details1" value="<?php	echo $data["action9_details1"]; ?>" class="form-control" pattern=".{0,200}"  title=" Maximum characters is 200" placeholder="Optional">
									  </div>
								  </div>
									<label for="inputSelect" class="col-md-2 control-label">Key Action Details</label>
									<div class="col-md-9">
									  <div>
										<input type="text" name="action9_details2" value="<?php	echo $data["action9_details2"]; ?>" class="form-control" pattern=".{0,200}"  title=" Maximum characters is 200" placeholder="Optional">
									  </div>
									</div>
									<label for="inputSelect" class="col-md-2 control-label">Key Action Details</label>
									<div class="col-md-9">
									  <div>
										<input type="text" name="action9_details3" value="<?php	echo $data["action9_details3"]; ?>" class="form-control" pattern=".{0,200}"  title=" Maximum characters is 200" placeholder="Optional">
									  </div>
								    </div>
									<label for="inputSelect" class="col-md-2 control-label">Key Action Details</label>
									<div class="col-md-9">
									  <div>
										<input type="text" name="action9_details4" value="<?php	echo $data["action9_details4"]; ?>" class="form-control" pattern=".{0,200}"  title=" Maximum characters is 200" placeholder="Optional">
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
                        <input class="form-control" type="text" name="required1" value="<?php	echo $data["required1"]; ?>"  pattern=".{0,200}"  title=" Maximum characters is 200" placeholder="Optional"></input>
                      </div>
                    </div>
                  </div>
				  <div class="form-group">
                    <label class="col-lg-3 control-label" for="textArea2">Information or Data Required</label>
                    <div class="col-lg-8">
                      <div>
                        <input class="form-control" type="text" name="required2" value="<?php	echo $data["required2"]; ?>"  pattern=".{0,200}"  title=" Maximum characters is 200" placeholder="Optional"></input>
                      </div>
                    </div>
                  </div>
				  <div class="form-group">
                    <label class="col-lg-3 control-label" for="textArea2">Information or Data Required</label>
                    <div class="col-lg-8">
                      <div>
                        <input class="form-control"type="text" name="required3" value="<?php	echo $data["required3"]; ?>"  pattern=".{0,200}"  title=" Maximum characters is 200" placeholder="Optional"></input>
                      </div>
                    </div>
                  </div>
				  <div class="form-group">
                    <label class="col-lg-3 control-label" for="textArea2">Information or Data Required</label>
                    <div class="col-lg-8">
                      <div>
                        <input class="form-control" type="text" name="required4" value="<?php	echo $data["required4"]; ?>" pattern=".{0,200}"  title=" Maximum characters is 200" placeholder="Optional"></input>
                      </div>
                    </div>
                  </div>
				  <div class="form-group">
                    <label class="col-lg-3 control-label" for="textArea2">Information or Data Required</label>
                    <div class="col-lg-8">
                      <div>
                        <input class="form-control" type="text" name="required5" value="<?php	echo $data["required5"]; ?>"  pattern=".{0,200}"  title=" Maximum characters is 200" placeholder="Optional"></input>
                      </div>
                    </div>
                  </div>
				  <div class="form-group">
                    <label class="col-lg-3 control-label" for="textArea2">Information or Data Required</label>
                    <div class="col-lg-8">
                      <div>
                        <input class="form-control" type="text" name="required6" value="<?php	echo $data["required6"]; ?>"  pattern=".{0,200}"  title=" Maximum characters is 200" placeholder="Optional"></input>
                      </div>
                    </div>
                  </div>
				  <div class="form-group">
                    <label class="col-lg-3 control-label" for="textArea2">Information or Data Required</label>
                    <div class="col-lg-8">
                      <div>
                        <input class="form-control" type="text" name="required7" value="<?php	echo $data["required7"]; ?>"  pattern=".{0,200}"  title=" Maximum characters is 200" placeholder="Optional"></input>
                      </div>
                    </div>
                  </div>
				  </fieldset>
				  
				  <fieldset class="form-group">
                    <label for="textArea2">Resources or Assets Needed</label>
                    <input class="form-control" type="text" name="resources1" value="<?php	echo $data["resources1"]; ?>"  pattern=".{0,200}"  title=" Maximum characters is 200" placeholder="Optional"></input>
                  </fieldset>
				  <fieldset class="form-group">
                    <label for="textArea2">Resources or Assets Needed</label>
                    <input class="form-control" type="text" name="resources2" value="<?php	echo $data["resources2"]; ?>"  pattern=".{0,200}"  title=" Maximum characters is 200" placeholder="Optional"></input>
                  </fieldset>
				  <fieldset class="form-group">
                    <label for="textArea2">Resources or Assets Needed</label>
                    <input class="form-control" type="text" name="resources3" value="<?php	echo $data["resources3"]; ?>"  pattern=".{0,200}"  title=" Maximum characters is 200" placeholder="Optional"></input>
                  </fieldset>
				  <fieldset class="form-group">
                    <label for="textArea2">Resources or Assets Needed</label>
                    <input class="form-control" type="text" name="resources4" value="<?php	echo $data["resources4"]; ?>"  pattern=".{0,200}"  title=" Maximum characters is 200" placeholder="Optional"></input>
                  </fieldset>
				  <fieldset class="form-group">
                    <label for="textArea2">Resources or Assets Needed</label>
                    <input class="form-control" type="text" name="resources5" value="<?php	echo $data["resources5"]; ?>"  pattern=".{0,200}"  title=" Maximum characters is 200" placeholder="Optional"></input>
                  </fieldset>
				  <fieldset class="form-group">
                    <label for="textArea2">Resources or Assets Needed</label>
                    <input class="form-control" type="text" name="resources6" value="<?php	echo $data["resources6"]; ?>"  pattern=".{0,200}"  title=" Maximum characters is 200" placeholder="Optional"></input>
                  </fieldset> 
				  <fieldset class="form-group">
                    <label for="textArea2">Resources or Assets Needed</label>
                    <input class="form-control" type="text" name="resources7" value="<?php	echo $data["resources7"]; ?>"  pattern=".{0,200}"  title=" Maximum characters is 200" placeholder="Optional"></input>
                  </fieldset> 
				  <fieldset class="form-group">
                    <label for="textArea2">Resources or Assets Needed</label>
                    <input class="form-control" type="text" name="resources8" value="<?php	echo $data["resources8"]; ?>" pattern=".{0,200}"  title=" Maximum characters is 200" placeholder="Optional" ></input>
                  </fieldset>                                            
              
            <br />
           	<div class="row" id="invoice-footer">
            	<div class="col-md-12">                
                	<div class="clearfix"></div>
                    	<div class="invoice-buttons">
							<input type="submit" class="btn btn-system mr10" name="submit" value="Save" />
                       	</div>
                  	</div>
              	</div>
          	</div>
     	</div>
        </form>
	  </div>            
	</div>  
		<!-- End Form-->                                
</div>

<!-- Header Main Content Area-->      
<div class="tray tray-center mt20 pt20">         
	<div class="panel invoice-panel">
    	<div class="panel-heading">
        	<span class="panel-title">
            <span class="fa fa-code-fork"></span> Characterization</span>
        </div>
		
                    	                    	
   <!--Main content Area--> 
   <?php   
   // Database query
   $result= responderTableQuery(200);
	
	?>
<script type="text/javascript">	               
$(document).ready( function () {
    $('#tableResponse').DataTable({  
		"columnDefs": [
			{ "orderable": false, "targets": 6 },
			{ "orderable": false, "targets": 4 },
			{ "orderable": false, "targets": 5 }
	  	],
		dom: 'Bfrtip',
        buttons: [
            'print'
		]
	} );
	
	$('#tableTransit').DataTable({  
		"columnDefs": [
			{ "orderable": false, "targets": 6 },
			{ "orderable": false, "targets": 4 },
			{ "orderable": false, "targets": 5 }
	  	],
		dom: 'Bfrtip',
        buttons: [
            'print'
		]
	} );
} );	
</script>
	
<div class="panel-body " id="invoice-item">
<div>
	<button id="toggleResponder" type="button" class="btn btn-xs text-alert" style="border-radius:1em; margin-left:43%;"><i class="fa fa-arrow-up" aria-hidden="true"></i>&nbsp;&nbsp; Hide/ Show Responder Table &nbsp;&nbsp;<i class="fa fa-arrow-down" aria-hidden="true"></i></button>
</div>             
	<div id="TR" class="row table-responsive">
		<div class="col-md-12">
		<table class="table table-hover table-bordered" style="margin-top:-7em;" id="tableResponse">
		<caption class="bg-alert"><h2>Responder Specific</h2></caption>
		<thead>
			<tr class="primary">
				<th>Responsible NIMS Element</th>
				<th>Responsible Agency(s) or Role/Title</th> 
				<th>Key Actions or Decisions</th>
				<th>Information or Data Required</th>
				<th>Resources or Assets Needed</th>
				<th>References to Supporting Information</th>
				<th></th>
			</tr>
		</thead>
	  <tbody>
	  	<tr>
			<?php	
				//Populate Table
			while($row = mysqli_fetch_assoc($result)) { ?>
			<td>
				<dl>
					<dt> <?php echo $row["responsible1_header"]; ?></dt>
						<dd><?php echo $row["responsible1_details1"]; ?> </dd><br>
						<dd><?php echo $row["responsible1_details2"]; ?> </dd>
				</dl>
				<dl>
					<dt> <?php echo $row["responsible2_header"]; ?></dt>
						<dd><?php echo $row["responsible2_details1"]; ?> </dd><br> 
						<dd><?php echo $row["responsible2_details2"]; ?> </dd>
					</dt>
				</dl>
			</td>
			<td>
				<dl>
					<dd> <?php	echo $row["agency1"]; ?> </dd><br>
					<dd> <?php	echo $row["agency2"]; ?> </dd><br>
					<dd> <?php	echo $row["agency3"]; ?> </dd><br>
					<dd> <?php	echo $row["agency4"]; ?> </dd><br>
					<dd> <?php	echo $row["agency5"]; ?> </dd>
				</dl>
			</td>
			<td> 
			<form  method="post" action="completed.php?task=<?php echo $row["action1"]; ?>&row=<?php echo $row["id"];?>&checked=<?php echo $row["action1_checked"]; ?>&actionNumber=1">
				<input type='hidden' name='level' value="300"; />
				<input type='hidden' name='page' value="301"; /> 
				<button 
					<?php 
						if ($row["action1_checked"] == 0) { 
							echo 'class="btn btn-warning btn-xs" name="submit" > <i class="fa fa-square-o fa-lg" aria-hidden="true"></i> ';
						} else { 
							echo 'class="btn btn-success btn-xs" name="submit" > <i class="fa fa-check-square-o fa-lg" aria-hidden="true"></i> ';
					} ?>
					 
				</button> <strong><?php	echo $row["action1"]; ?> </strong>
			</form>
				<dl>
					<dd><?php	echo $row["action1_details1"]; ?></dd> 
					<dd><?php	echo $row["action1_details2"]; ?></dd> 
					<dd><?php	echo $row["action1_details3"]; ?></dd> 
					<dd><?php	echo $row["action1_details4"]; ?></dd> 
					<dd><?php	echo $row["action1_details5"]; ?></dd> 
					<dd><?php	echo $row["action1_details6"]; ?></dd>
					<dd><?php	echo $row["action1_details7"]; ?></dd> 
					<dd><?php	echo $row["action1_details8"]; ?></dd> 
					<dd><?php	echo $row["action1_details9"]; ?></dd> 
					<dd><?php	echo $row["action1_details10"]; ?></dd> 
				</dl>
				<?php if(!empty($row["action2"])) { ?>
				<form  method="post" action="completed.php?task=<?php echo $row["action2"]; ?>&row=<?php echo $row["id"];?>&checked=<?php echo $row["action2_checked"]; ?>&actionNumber=2">
					<input type='hidden' name='level' value="300"; />
					<input type='hidden' name='page' value="301"; /> 
					<button 
						<?php 
							if ($row["action2_checked"] == 0) { 
								echo 'class="btn btn-warning btn-xs" name="submit" > <i class="fa fa-square-o fa-lg" aria-hidden="true"></i> ';
							} else { 
								echo 'class="btn btn-success btn-xs" name="submit" > <i class="fa fa-check-square-o fa-lg" aria-hidden="true"></i> ';
						} ?>
						 
					</button> <strong><?php	echo $row["action2"]; ?> </strong>
				</form>
				<dl>
					<dd><?php	echo $row["action2_details1"]; ?> </dd>
					<dd><?php	echo $row["action2_details2"]; ?> </dd>
					<dd><?php	echo $row["action2_details3"]; ?> </dd>
					<dd><?php	echo $row["action2_details4"]; ?> </dd>
					<dd><?php	echo $row["action2_details5"]; ?> </dd>
					<dd><?php	echo $row["action2_details6"]; ?> </dd>
					<dd><?php	echo $row["action2_details7"]; ?> </dd>
					<dd><?php	echo $row["action2_details8"]; ?> </dd>
					<dd><?php	echo $row["action2_details9"]; ?> </dd>
					<dd><?php	echo $row["action2_details10"]; ?> </dd>
				</dl>
					<?php if(!empty($row["action3"])) { ?>
						<form  method="post" action="completed.php?task=<?php echo $row["action3"]; ?>&row=<?php echo $row["id"];?>&checked=<?php echo $row["action3_checked"]; ?>&actionNumber=3">
							<input type='hidden' name='level' value="300"; />
							<input type='hidden' name='page' value="301"; /> 
							<button 
								<?php 
									if ($row["action3_checked"] == 0) { 
										echo 'class="btn btn-warning btn-xs" name="submit" > <i class="fa fa-square-o fa-lg" aria-hidden="true"></i> ';
									} else { 
										echo 'class="btn btn-success btn-xs" name="submit" > <i class="fa fa-check-square-o fa-lg" aria-hidden="true"></i> ';
								} ?>
								 
							</button> <strong><?php	echo $row["action3"]; ?> </strong>
						</form>
					<dl>
						<dd><?php	echo $row["action3_details1"]; ?> </dd>
						<dd><?php	echo $row["action3_details2"]; ?> </dd>
						<dd><?php	echo $row["action3_details3"]; ?> </dd>
						<dd><?php	echo $row["action3_details4"]; ?> </dd>
						<dd><?php	echo $row["action3_details5"]; ?> </dd>
						<dd><?php	echo $row["action3_details6"]; ?> </dd>
						<dd><?php	echo $row["action3_details7"]; ?> </dd>
					</dl>
						<?php if(!empty($row["action4"])) { ?>
							 <form  method="post" action="completed.php?task=<?php echo $row["action4"]; ?>&row=<?php echo $row["id"];?>&checked=<?php echo $row["action4_checked"]; ?>&actionNumber=4">
								<input type='hidden' name='level' value="300"; />
								<input type='hidden' name='page' value="301"; /> 
								<button 
									<?php 
										if ($row["action4_checked"] == 0) { 
											echo 'class="btn btn-warning btn-xs" name="submit" > <i class="fa fa-square-o fa-lg" aria-hidden="true"></i> ';
										} else { 
											echo 'class="btn btn-success btn-xs" name="submit" > <i class="fa fa-check-square-o fa-lg" aria-hidden="true"></i> ';
									} ?>
									 
								</button> <strong><?php	echo $row["action4"]; ?> </strong>
							</form>
							<dl>
								<dd><?php	echo $row["action4_details1"]; ?> </dd>
								<dd><?php	echo $row["action4_details2"]; ?> </dd>
								<dd><?php	echo $row["action4_details3"]; ?> </dd>
								<dd><?php	echo $row["action4_details4"]; ?> </dd>
								<dd><?php	echo $row["action4_details5"]; ?> </dd>
								<dd><?php	echo $row["action4_details6"]; ?> </dd>
								<dd><?php	echo $row["action4_details7"]; ?> </dd>
							</dl>
								<?php if(!empty($row["action5"])) { ?>			
									<form  method="post" action="completed.php?task=<?php echo $row["action5"]; ?>&row=<?php echo $row["id"];?>&checked=<?php echo $row["action5_checked"]; ?>&actionNumber=5">
										<input type='hidden' name='level' value="300"; />
										<input type='hidden' name='page' value="301"; /> 
										<button 
											<?php 
												if ($row["action5_checked"] == 0) { 
													echo 'class="btn btn-warning btn-xs" name="submit" > <i class="fa fa-square-o fa-lg" aria-hidden="true"></i> ';
												} else { 
													echo 'class="btn btn-success btn-xs" name="submit" > <i class="fa fa-check-square-o fa-lg" aria-hidden="true"></i> ';
											} ?>
											 
										</button> <strong><?php	echo $row["action5"]; ?> </strong>
									</form>
								<dl>
									<dd><?php	echo $row["action5_details1"]; ?> </dd>
									<dd><?php	echo $row["action5_details2"]; ?> </dd>
									<dd><?php	echo $row["action5_details3"]; ?> </dd>
									<dd><?php	echo $row["action5_details4"]; ?> </dd>
								</dl>
											<?php if(!empty($row["action6"])) { ?>
												<form  method="post" action="completed.php?task=<?php echo $row["action6"]; ?>&row=<?php echo $row["id"];?>&checked=<?php echo $row["action6_checked"]; ?>&actionNumber=6">
													<input type='hidden' name='level' value="300"; />
													<input type='hidden' name='page' value="301"; /> 
													<button 
														<?php 
															if ($row["action6_checked"] == 0) { 
																echo 'class="btn btn-warning btn-xs" name="submit" > <i class="fa fa-square-o fa-lg" aria-hidden="true"></i> ';
															} else { 
																echo 'class="btn btn-success btn-xs" name="submit" > <i class="fa fa-check-square-o fa-lg" aria-hidden="true"></i> ';
														} ?>
														 
													</button> <strong><?php	echo $row["action6"]; ?> </strong>
												</form>
											<dl>
												<dd><?php	echo $row["action6_details1"]; ?> </dd>
												<dd><?php	echo $row["action6_details2"]; ?> </dd>
												<dd><?php	echo $row["action6_details3"]; ?> </dd>
												<dd><?php	echo $row["action6_details4"]; ?> </dd>
											</dl>
														<?php if(!empty($row["action7"])) { ?>
															<form  method="post" action="completed.php?task=<?php echo $row["action7"]; ?>&row=<?php echo $row["id"];?>&checked=<?php echo $row["action7_checked"]; ?>&actionNumber=7">
																<input type='hidden' name='level' value="300"; />
																<input type='hidden' name='page' value="301"; /> 
																<button 
																	<?php 
																		if ($row["action7_checked"] == 0) { 
																			echo 'class="btn btn-warning btn-xs" name="submit" > <i class="fa fa-square-o fa-lg" aria-hidden="true"></i> ';
																		} else { 
																			echo 'class="btn btn-success btn-xs" name="submit" > <i class="fa fa-check-square-o fa-lg" aria-hidden="true"></i> ';
																	} ?>
																	 
																</button> <strong><?php	echo $row["action7"]; ?> </strong>
															</form>
														<dl>
															<dd><?php	echo $row["action7_details1"]; ?> </dd>
															<dd><?php	echo $row["action7_details2"]; ?> </dd>
															<dd><?php	echo $row["action7_details3"]; ?> </dd>
															<dd><?php	echo $row["action7_details4"]; ?> </dd>
														</dl>
															<?php if(!empty($row["action8"])) { ?>
																<form  method="post" action="completed.php?task=<?php echo $row["action8"]; ?>&row=<?php echo $row["id"];?>&checked=<?php echo $row["action8_checked"]; ?>&actionNumber=8">
																<input type='hidden' name='level' value="300"; />
																<input type='hidden' name='page' value="301"; /> 
																<button 
																	<?php 
																		if ($row["action8_checked"] == 0) { 
																			echo 'class="btn btn-warning btn-xs" name="submit" > <i class="fa fa-square-o fa-lg" aria-hidden="true"></i> ';
																		} else { 
																			echo 'class="btn btn-success btn-xs" name="submit" > <i class="fa fa-check-square-o fa-lg" aria-hidden="true"></i> ';
																	} ?>
																	 
																</button> <strong><?php	echo $row["action8"]; ?> </strong>
															</form>
															<dl>
																<dd><?php	echo $row["action8_details1"]; ?> </dd>
																<dd><?php	echo $row["action8_details2"]; ?> </dd>
																<dd><?php	echo $row["action8_details3"]; ?> </dd>
																<dd><?php	echo $row["action8_details4"]; ?> </dd>
															</dl>
																<?php if(!empty($row["action9"])) { ?>
																	<form  method="post" action="completed.php?task=<?php echo $row["action9"]; ?>&row=<?php echo $row["id"];?>&checked=<?php echo $row["action9_checked"]; ?>&actionNumber=9">
																		<input type='hidden' name='level' value="300"; />
																		<input type='hidden' name='page' value="301"; /> 
																		<button 
																			<?php 
																				if ($row["action9_checked"] == 0) { 
																					echo 'class="btn btn-warning btn-xs" name="submit" > <i class="fa fa-square-o fa-lg" aria-hidden="true"></i> ';
																				} else { 
																					echo 'class="btn btn-success btn-xs" name="submit" > <i class="fa fa-check-square-o fa-lg" aria-hidden="true"></i> ';
																			} ?>
																			 
																		</button> <strong><?php	echo $row["action9"]; ?> </strong>
																	</form>
																<dl>
																	<dd><?php	echo $row["action9_details1"]; ?> </dd>
																	<dd><?php	echo $row["action9_details2"]; ?> </dd>
																	<dd><?php	echo $row["action9_details3"]; ?> </dd>
																	<dd><?php	echo $row["action9_details4"]; ?> </dd>
																</dl>
															<?php } ?><!-- close 8-->
														<?php } ?><!-- close 8-->
													<?php } ?><!-- close 7-->
											<?php } ?><!-- close 6-->
									<?php } ?><!-- close 5-->
							<?php } ?><!-- close 4-->
					<?php } ?><!-- close 3-->
				<?php } ?><!-- close 2-->
			</td>
			<td style= "list-style-type: none;">
				<dl>
				<dd><?php	echo $row["required1"]; ?> </dd> <br>
				<dd><?php	echo $row["required2"]; ?> </dd> <br>
				<dd><?php	echo $row["required3"]; ?> </dd> <br>
				<dd><?php	echo $row["required4"]; ?> </dd> <br>
				<dd><?php	echo $row["required5"]; ?> </dd> <br>
				<dd><?php	echo $row["required6"]; ?> </dd> <br>
				<dd><?php	echo $row["required7"]; ?> </dd> 
				</dl>
			</td>
			<td style= "list-style-type: none;">
				<dl>
					<dd> <?php	echo $row["resources1"]; ?> </dd> <br>
					<dd> <?php	echo $row["resources2"]; ?> </dd> <br>
					<dd> <?php	echo $row["resources3"]; ?> </dd> <br>
					<dd> <?php	echo $row["resources4"]; ?> </dd> <br>
					<dd> <?php	echo $row["resources5"]; ?> </dd> <br>
					<dd> <?php	echo $row["resources6"]; ?> </dd> <br>
					<dd> <?php	echo $row["resources7"]; ?> </dd> <br>
					<dd> <?php	echo $row["resources8"]; ?> </dd>
				</dl>
			</td>
			<td>
				<p><a href="http://tid-appsvr.llnl.gov/utr/dev/docs/<?php	echo $row["doc1"]; ?>" target="_blank" ><?php	echo $row["doc1"]; ?></a></p>
				<p><a href="http://tid-appsvr.llnl.gov/utr/dev/docs/<?php	echo $row["doc2"]; ?>" target="_blank" ><?php	echo $row["doc2"]; ?></a></p>
				<p><a href="http://tid-appsvr.llnl.gov/utr/dev/docs/<?php	echo $row["doc3"]; ?>" target="_blank" ><?php	echo $row["doc3"]; ?></a></p>
				<p><a href="http://tid-appsvr.llnl.gov/utr/dev/docs/<?php	echo $row["doc4"]; ?>" target="_blank" ><?php	echo $row["doc4"]; ?></a></p>
				<p><a href="http://tid-appsvr.llnl.gov/utr/dev/docs/<?php	echo $row["doc5"]; ?>" target="_blank" ><?php	echo $row["doc5"]; ?></a></p>
				<p><a href="http://tid-appsvr.llnl.gov/utr/dev/docs/<?php	echo $row["doc6"]; ?>" target="_blank" ><?php	echo $row["doc6"]; ?></a></p>
			</td>  
			<td>
				<div class="btn-group">
				  <a href="l2.php?id=300&subid=edit&table=301&row=<?php	echo $row["id"]; ?> " data-toggle="tooltip" title="Edit Row" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a><br><br>
				  <a href="l2.php?id=300&subid=fileUpload&table=301&row=<?php	echo $row["id"]; ?> "  data-toggle="tooltip" title="Add a file"class="btn btn-system btn-sm"><i class="fa fa-download"></i></a><br><br>
				  <button type="button" onClick="delete_rec();" alt="delete" data-toggle="tooltip" title="Delete the Row" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>
				 </div>
			</td> 
		</tr> <br>
			<?php 
				}
			 ?>
			
	  </tbody>
	</table>
	</div>                
	<br />
	<div class="row " id="invoice-footer">
		<div class="col-md-12">                
			<div class="clearfix"></div>
			<div class="invoice-buttons">
				<a href="l2.php?id=300&subid=add&table=301&transit=0" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Add</a>                             
          	</div>
     	</div>                               
    </div> 

	</div>            
	</div>        
</div>


 <?php
	// Database query for transit table
	$result2= transitTableQuery(301);
?>

	
		<!-- Transit Specific table begin-->
<div class="panel-body" id="invoice-item" >
	<div>
		<button id="toggleTransit" type="button" class="btn btn-xs text-warning" style="border-radius:1em; margin-left:43%;"><i class="fa fa-arrow-up" aria-hidden="true"></i>&nbsp;&nbsp; Hide/ Show Transit Table &nbsp;&nbsp;<i class="fa fa-arrow-down" aria-hidden="true"></i></button>
		</div>                   
	<div id="TT" class="row">
		<div class="col-md-12">
		<table class="display table table-responsive table-hover table-bordered" id="tableTransit">
		<caption class="bg-warning"><h2>Transit Specific</h2></caption>
		<thead>
			<tr class="primary">
				<th>Responsible NIMS Element</th>
				<th>Responsible Agency(s) or Role/Title</th> 
				<th>Key Actions or Decisions</th>
				<th>Information or Data Required</th>
				<th>Resources or Assets Needed</th>
				<th>References to Supporting Information</th>
				<th></th>
			</tr>
		</thead>
		
	  <tbody class="text-light">
	  	<tr>
			<?php	
				//Populate Table
			while($row = mysqli_fetch_assoc($result2)) { ?>
			<td>
			<dl>
				<dt> <?php echo $row["responsible1_header"]; ?></dt>
					<dd><?php echo $row["responsible1_details1"]; ?> </dd> 
					<dd><?php echo $row["responsible1_details2"]; ?> </dd>
				</dt>
			</dl>
			<dl>
				<dt> <?php echo $row["responsible2_header"]; ?></dt>
					<dd><?php echo $row["responsible2_details1"]; ?> </dd> 
					<dd><?php echo $row["responsible2_details2"]; ?> </dd>
				</dt>
			</dl>
			</td>
			<td>
				<dl>
					<dd> <?php	echo $row["agency1"]; ?> </dd><br>
					<dd> <?php	echo $row["agency2"]; ?> </dd><br>
					<dd> <?php	echo $row["agency3"]; ?> </dd><br>
					<dd> <?php	echo $row["agency4"]; ?> </dd><br>
					<dd> <?php	echo $row["agency5"]; ?> </dd>
				</dl>
			</td>
			<td> 
			<form  method="post" action="completed.php?task=<?php echo $row["action1"]; ?>&row=<?php echo $row["id"];?>&checked=<?php echo $row["action1_checked"]; ?>&actionNumber=1">
				<input type='hidden' name='level' value="300"; />
				<input type='hidden' name='page' value="301"; /> 
				<button 
					<?php 
						if ($row["action1_checked"] == 0) { 
							echo 'class="btn btn-warning btn-xs" name="submit" id="addComplete" > <i class="fa fa-square-o fa-lg" aria-hidden="true"></i> ';
						} else { 
							echo 'class="btn btn-success btn-xs" name="submit" id="addIncomplete"> <i class="fa fa-check-square-o fa-lg" aria-hidden="true"></i> ';
					} ?>
					 
				</button> <strong><?php	echo $row["action1"]; ?> </strong>
			</form>
				<dl>
					<dd><?php	echo $row["action1_details1"]; ?></dd> 
					<dd><?php	echo $row["action1_details2"]; ?></dd> 
					<dd><?php	echo $row["action1_details3"]; ?></dd> 
					<dd><?php	echo $row["action1_details4"]; ?></dd> 
					<dd><?php	echo $row["action1_details5"]; ?></dd> 
					<dd><?php	echo $row["action1_details6"]; ?></dd>
					<dd><?php	echo $row["action1_details7"]; ?></dd> 
					<dd><?php	echo $row["action1_details8"]; ?></dd> 
					<dd><?php	echo $row["action1_details9"]; ?></dd> 
					<dd><?php	echo $row["action1_details10"]; ?></dd> 
				</dl>
				<?php if(!empty($row["action2"])) { ?>
				<form  method="post" action="completed.php?task=<?php echo $row["action2"]; ?>&row=<?php echo $row["id"];?>&checked=<?php echo $row["action2_checked"]; ?>&actionNumber=2">
					<input type='hidden' name='level' value="300"; />
					<input type='hidden' name='page' value="301"; /> 
					<button 
						<?php 
							if ($row["action2_checked"] == 0) { 
								echo 'class="btn btn-warning btn-xs" name="submit" > <i class="fa fa-square-o fa-lg" aria-hidden="true"></i> ';
							} else { 
								echo 'class="btn btn-success btn-xs" name="submit" > <i class="fa fa-check-square-o fa-lg" aria-hidden="true"></i> ';
						} ?>
						 
					</button> <strong><?php	echo $row["action2"]; ?> </strong>
				</form>
				<dl>
					<dd><?php	echo $row["action2_details1"]; ?> </dd>
					<dd><?php	echo $row["action2_details2"]; ?> </dd>
					<dd><?php	echo $row["action2_details3"]; ?> </dd>
					<dd><?php	echo $row["action2_details4"]; ?> </dd>
					<dd><?php	echo $row["action2_details5"]; ?> </dd>
					<dd><?php	echo $row["action2_details6"]; ?> </dd>
					<dd><?php	echo $row["action2_details7"]; ?> </dd>
					<dd><?php	echo $row["action2_details8"]; ?> </dd>
					<dd><?php	echo $row["action2_details9"]; ?> </dd>
					<dd><?php	echo $row["action2_details10"]; ?> </dd>
				</dl>
					<?php if(!empty($row["action3"])) { ?>
						<form  method="post" action="completed.php?task=<?php echo $row["action3"]; ?>&row=<?php echo $row["id"];?>&checked=<?php echo $row["action3_checked"]; ?>&actionNumber=3">
							<input type='hidden' name='level' value="300"; />
							<input type='hidden' name='page' value="301"; /> 
							<button 
								<?php 
									if ($row["action3_checked"] == 0) { 
										echo 'class="btn btn-warning btn-xs" name="submit" > <i class="fa fa-square-o fa-lg" aria-hidden="true"></i> ';
									} else { 
										echo 'class="btn btn-success btn-xs" name="submit" > <i class="fa fa-check-square-o fa-lg" aria-hidden="true"></i> ';
								} ?>
								 
							</button> <strong><?php	echo $row["action3"]; ?> </strong>
						</form>
					<dl>
						<dd><?php	echo $row["action3_details1"]; ?> </dd>
						<dd><?php	echo $row["action3_details2"]; ?> </dd>
						<dd><?php	echo $row["action3_details3"]; ?> </dd>
						<dd><?php	echo $row["action3_details4"]; ?> </dd>
						<dd><?php	echo $row["action3_details5"]; ?> </dd>
						<dd><?php	echo $row["action3_details6"]; ?> </dd>
						<dd><?php	echo $row["action3_details7"]; ?> </dd>
					</dl>
						<?php if(!empty($row["action4"])) { ?>
							 <form  method="post" action="completed.php?task=<?php echo $row["action4"]; ?>&row=<?php echo $row["id"];?>&checked=<?php echo $row["action4_checked"]; ?>&actionNumber=4">
								<input type='hidden' name='level' value="300"; />
								<input type='hidden' name='page' value="301"; /> 
								<button 
									<?php 
										if ($row["action4_checked"] == 0) { 
											echo 'class="btn btn-warning btn-xs" name="submit" > <i class="fa fa-square-o fa-lg" aria-hidden="true"></i> ';
										} else { 
											echo 'class="btn btn-success btn-xs" name="submit" > <i class="fa fa-check-square-o fa-lg" aria-hidden="true"></i> ';
									} ?>
									 
								</button> <strong><?php	echo $row["action4"]; ?> </strong>
							</form>
							<dl>
								<dd><?php	echo $row["action4_details1"]; ?> </dd>
								<dd><?php	echo $row["action4_details2"]; ?> </dd>
								<dd><?php	echo $row["action4_details3"]; ?> </dd>
								<dd><?php	echo $row["action4_details4"]; ?> </dd>
								<dd><?php	echo $row["action4_details5"]; ?> </dd>
								<dd><?php	echo $row["action4_details6"]; ?> </dd>
								<dd><?php	echo $row["action4_details7"]; ?> </dd>
							</dl>
								<?php if(!empty($row["action5"])) { ?>			
									<form  method="post" action="completed.php?task=<?php echo $row["action5"]; ?>&row=<?php echo $row["id"];?>&checked=<?php echo $row["action5_checked"]; ?>&actionNumber=5">
										<input type='hidden' name='level' value="300"; />
										<input type='hidden' name='page' value="301"; /> 
										<button 
											<?php 
												if ($row["action5_checked"] == 0) { 
													echo 'class="btn btn-warning btn-xs" name="submit" > <i class="fa fa-square-o fa-lg" aria-hidden="true"></i> ';
												} else { 
													echo 'class="btn btn-success btn-xs" name="submit" > <i class="fa fa-check-square-o fa-lg" aria-hidden="true"></i> ';
											} ?>
											 
										</button> <strong><?php	echo $row["action5"]; ?> </strong>
									</form>
								<dl>
									<dd><?php	echo $row["action5_details1"]; ?> </dd>
									<dd><?php	echo $row["action5_details2"]; ?> </dd>
									<dd><?php	echo $row["action5_details3"]; ?> </dd>
									<dd><?php	echo $row["action5_details4"]; ?> </dd>
								</dl>
											<?php if(!empty($row["action6"])) { ?>
												<form  method="post" action="completed.php?task=<?php echo $row["action6"]; ?>&row=<?php echo $row["id"];?>&checked=<?php echo $row["action6_checked"]; ?>&actionNumber=6">
													<input type='hidden' name='level' value="300"; />
													<input type='hidden' name='page' value="301"; /> 
													<button 
														<?php 
															if ($row["action6_checked"] == 0) { 
																echo 'class="btn btn-warning btn-xs" name="submit" > <i class="fa fa-square-o fa-lg" aria-hidden="true"></i> ';
															} else { 
																echo 'class="btn btn-success btn-xs" name="submit" > <i class="fa fa-check-square-o fa-lg" aria-hidden="true"></i> ';
														} ?>
														 
													</button> <strong><?php	echo $row["action6"]; ?> </strong>
												</form>
											<dl>
												<dd><?php	echo $row["action6_details1"]; ?> </dd>
												<dd><?php	echo $row["action6_details2"]; ?> </dd>
												<dd><?php	echo $row["action6_details3"]; ?> </dd>
												<dd><?php	echo $row["action6_details4"]; ?> </dd>
											</dl>
														<?php if(!empty($row["action7"])) { ?>
															<form  method="post" action="completed.php?task=<?php echo $row["action7"]; ?>&row=<?php echo $row["id"];?>&checked=<?php echo $row["action7_checked"]; ?>&actionNumber=7">
																<input type='hidden' name='level' value="300"; />
																<input type='hidden' name='page' value="301"; /> 
																<button 
																	<?php 
																		if ($row["action7_checked"] == 0) { 
																			echo 'class="btn btn-warning btn-xs" name="submit" > <i class="fa fa-square-o fa-lg" aria-hidden="true"></i> ';
																		} else { 
																			echo 'class="btn btn-success btn-xs" name="submit" > <i class="fa fa-check-square-o fa-lg" aria-hidden="true"></i> ';
																	} ?>
																	 
																</button> <strong><?php	echo $row["action7"]; ?> </strong>
															</form>
														<dl>
															<dd><?php	echo $row["action7_details1"]; ?> </dd>
															<dd><?php	echo $row["action7_details2"]; ?> </dd>
															<dd><?php	echo $row["action7_details3"]; ?> </dd>
															<dd><?php	echo $row["action7_details4"]; ?> </dd>
														</dl>
															<?php if(!empty($row["action8"])) { ?>
																<form  method="post" action="completed.php?task=<?php echo $row["action8"]; ?>&row=<?php echo $row["id"];?>&checked=<?php echo $row["action8_checked"]; ?>&actionNumber=8">
																<input type='hidden' name='level' value="300"; />
																<input type='hidden' name='page' value="301"; /> 
																<button 
																	<?php 
																		if ($row["action8_checked"] == 0) { 
																			echo 'class="btn btn-warning btn-xs" name="submit" > <i class="fa fa-square-o fa-lg" aria-hidden="true"></i> ';
																		} else { 
																			echo 'class="btn btn-success btn-xs" name="submit" > <i class="fa fa-check-square-o fa-lg" aria-hidden="true"></i> ';
																	} ?>
																	 
																</button> <strong><?php	echo $row["action8"]; ?> </strong>
															</form>
															<dl>
																<dd><?php	echo $row["action8_details1"]; ?> </dd>
																<dd><?php	echo $row["action8_details2"]; ?> </dd>
																<dd><?php	echo $row["action8_details3"]; ?> </dd>
																<dd><?php	echo $row["action8_details4"]; ?> </dd>
															</dl>
																<?php if(!empty($row["action9"])) { ?>
																	<form  method="post" action="completed.php?task=<?php echo $row["action9"]; ?>&row=<?php echo $row["id"];?>&checked=<?php echo $row["action9_checked"]; ?>&actionNumber=9">
																		<input type='hidden' name='level' value="300"; />
																		<input type='hidden' name='page' value="301"; /> 
																		<button 
																			<?php 
																				if ($row["action9_checked"] == 0) { 
																					echo 'class="btn btn-warning btn-xs" name="submit" > <i class="fa fa-square-o fa-lg" aria-hidden="true"></i> ';
																				} else { 
																					echo 'class="btn btn-success btn-xs" name="submit" > <i class="fa fa-check-square-o fa-lg" aria-hidden="true"></i> ';
																			} ?>
																			 
																		</button> <strong><?php	echo $row["action9"]; ?> </strong>
																	</form>
																<dl>
																	<dd><?php	echo $row["action9_details1"]; ?> </dd>
																	<dd><?php	echo $row["action9_details2"]; ?> </dd>
																	<dd><?php	echo $row["action9_details3"]; ?> </dd>
																	<dd><?php	echo $row["action9_details4"]; ?> </dd>
																</dl>
															<?php } ?><!-- close 8-->
														<?php } ?><!-- close 8-->
													<?php } ?><!-- close 7-->
											<?php } ?><!-- close 6-->
									<?php } ?><!-- close 5-->
							<?php } ?><!-- close 4-->
					<?php } ?><!-- close 3-->
				<?php } ?><!-- close 2-->
			</td>
			<td style= "list-style-type: none;">
				<dl>
				<dd><?php	echo $row["required1"]; ?> </dd> <br>  
				<dd><?php	echo $row["required2"]; ?> </dd> <br>
				<dd><?php	echo $row["required3"]; ?> </dd> <br>
				<dd><?php	echo $row["required4"]; ?> </dd> <br>
				<dd><?php	echo $row["required5"]; ?> </dd> <br>
				<dd><?php	echo $row["required6"]; ?> </dd> <br>
				<dd><?php	echo $row["required7"]; ?> </dd> 
				</dl>
			</td>
			<td style= "list-style-type: none;">
				<dl>
					<dd> <?php	echo $row["resources1"]; ?> </dd> <br>
					<dd> <?php	echo $row["resources2"]; ?> </dd> <br>
					<dd> <?php	echo $row["resources3"]; ?> </dd> <br>
					<dd> <?php	echo $row["resources4"]; ?> </dd> <br>
					<dd> <?php	echo $row["resources5"]; ?> </dd> <br>
					<dd> <?php	echo $row["resources6"]; ?> </dd> <br>
					<dd> <?php	echo $row["resources7"]; ?> </dd> <br>
					<dd> <?php	echo $row["resources8"]; ?> </dd>
				</dl>
			</td>
			<td>
				<p><a href="http://tid-appsvr.llnl.gov/utr/dev/docs/<?php	echo $row["doc1"]; ?>" target="_blank" ><?php	echo $row["doc1"]; ?></a></p>
				<p><a href="http://tid-appsvr.llnl.gov/utr/dev/docs/<?php	echo $row["doc2"]; ?>" target="_blank" ><?php	echo $row["doc2"]; ?></a></p>
				<p><a href="http://tid-appsvr.llnl.gov/utr/dev/docs/<?php	echo $row["doc3"]; ?>" target="_blank" ><?php	echo $row["doc3"]; ?></a></p>
				<p><a href="http://tid-appsvr.llnl.gov/utr/dev/docs/<?php	echo $row["doc4"]; ?>" target="_blank" ><?php	echo $row["doc4"]; ?></a></p>
				<p><a href="http://tid-appsvr.llnl.gov/utr/dev/docs/<?php	echo $row["doc5"]; ?>" target="_blank" ><?php	echo $row["doc5"]; ?></a></p>
				<p><a href="http://tid-appsvr.llnl.gov/utr/dev/docs/<?php	echo $row["doc6"]; ?>" target="_blank" ><?php	echo $row["doc6"]; ?></a></p>
			</td> 
			<td>
				<div class="btn-group">
				  <a href="l2.php?id=300&subid=edit&table=301&row=<?php	echo $row["id"]; ?> "data-toggle="tooltip" title="Edit Row" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a><br><br>
				  <a href="l2.php?id=300&subid=fileUpload&table=301&row=<?php	echo $row["id"]; ?> "  data-toggle="tooltip" title="Add a file"class="btn btn-system btn-sm"><i class="fa fa-download"></i></a><br><br>
				  <button type="button" onClick="delete_rec();" alt="delete" data-toggle="tooltip" title="Delete the Row" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>
				 </div>
			</td> 
		</tr> <br>
			<?php 
				}
			 ?>
			
	  </tbody>
	</table> 
	</div>                
	<br />
	<div class="row" id="invoice-footer">
		<div class="col-md-12">                
			<div class="clearfix"></div>
			<div class="invoice-buttons"> 
				<a href="l2.php?id=300&subid=add&table=301&transit=1" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Add</a>                             
          	</div>
     	</div>                               
    </div>  

	</div>            
	</div>       
</div>







    

<script type="text/javascript">

	$(document).ready(function(){
		$("#toggle").click(function(){
			$("#nav-spy").toggle(1000);
		});
		
		  $('.filter').multifilter();
	});

		

</script>

<!-- Right Side Progress panel -->
<!--<aside class="tray tray-left" style="padding-top:10em;">
        <div class="panel panel-tile br-primary-light">
            <div class="panel-body p5"> 
            		          <!-- Progress Bars -->
		   <?php
			// Database query
				$queryProgress  = "SELECT * FROM progress_table ";
				$queryProgress .= "WHERE id = 1 ";
			
				$resultProgress = mysqli_query($conn, $queryProgress);
				//Test if there was a query error
				if(!$resultProgress) {
					die("Database Progress Bar query failed.");
				}
			?>
			<?php while($progressRow = mysqli_fetch_assoc($resultProgress)) { 
			$level200Progress= ($progressRow[currentLevel200] / $progressRow[level200]) * 100;
			$level300Progress= ($progressRow[currentLevel300] / $progressRow[level300]) * 100;
			$level400Progress= ($progressRow[currentLevel400] / $progressRow[level400]) * 100;
			$level500Progress= ($progressRow[currentLevel500] / $progressRow[level500]) * 100;
			$level600Progress= ($progressRow[currentLevel600] / $progressRow[level600]) * 100;
			?>
          
       <!--  <h5 class="sidebar-label text-center text-warning pt25 pb10">Response Progress</h5>-->
		  <!--

          <li class="sidebar-stat">
          	<a href="#projectOne" class="fs11">
            	<span class="fa fa-comments"></span>
              	<span class="sidebar-title text-muted">Notification</span>
              	<span class="pull-right mr20 text-muted">35%</span>
              	<div class="progress progress-bar-xs mh20 mb10">
                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 35%">
                  <span class="sr-only">35% Complete</span>
                </div>
              </div>
            </a>
          </li>
		  -->
         <!-- <p class="sidebar-stat">
            	<span class="fa fa-truck ml10"></span>
              	<span class="sidebar-title text-muted ">First Response (200)</span>
              	<span class="pull-right mr20 text-warning"><?php echo(round($level200Progress)); ?> %</span>
              	<div class="progress progress-bar-xs mh5 mb10">
                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo(round($level200Progress)); ?>%">
                </div>
              </div>
          </p>
		
          <h5 class="sidebar-label text-center text-danger pt25 pb10">Remediation Progress</h5>

          <p class="sidebar-stat">
            	<span class="fa fa-code-fork ml10"></span>
              	<span class="sidebar-title text-muted"> Characterization (300)</span>
              	<span class="pull-right mr20 text-danger"><?php echo(round($level300Progress)); ?>%</span>
              	<div class="progress progress-bar-xs mh5 mb10">
                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo(round($level300Progress)); ?>%">
                </div>
              </div>
          </p>
          <p class="sidebar-stat">
            	<span class="fa fa-exclamation-triangle ml10"></span>
              	<span class="sidebar-title text-muted">Decontamination (400)</span>
              	<span class="pull-right mr20 text-danger"><?php echo(round($level400Progress)); ?>%</span>
              	<div class="progress progress-bar-xs mh5 mb10">
                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo(round($level400Progress)); ?>%">
                </div>
              </div>
          </p>
          <p class="sidebar-stat">
            	<span class="fa fa-building ml10"></span>
              	<span class="sidebar-title text-muted">Clearance (500)</span>
              	<span class="pull-right mr20 text-danger"><?php echo(round($level500Progress)); ?>%</span>
              	<div class="progress progress-bar-xs mh5 mb10">
                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo(round($level500Progress)); ?>%">
                </div>
              </div>
          </p>

          <h5 class="sidebar-label text-center text-system pt25 pb10">Restoration Progress</h5>

          <p class="sidebar-stat">
            	<span class="fa fa-wrench"></span>
              	<span class="sidebar-title text-muted">Reoccupancy (600)</span>
              	<span class="pull-right mr20 text-system"><?php echo(round($level600Progress)); ?>%</span>
              	<div class="progress progress-bar-xs mh5 mb10">
                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo(round($level600Progress)); ?>%">
                </div>
              </div>
          </p>
          <?php }?>
    </div>
	<div class="clearfix">

                <div class="c100 p50 small">
                    <span>50%</span>
                    <div class="slice">
                        <div class="bar"></div>
                        <div class="fill"></div>
                    </div>
                </div>
			</div>
</aside>-->
<!--
<div class="navbar-btn btn-group">
            <a href="#" class="topbar-menu-toggle btn btn-sm">
              <span class="ad ad-wand"></span>
            </a>
          </div>

<div id="topbar-dropmenu" class="alt topbar-menu-open" style="display: block;">
        <div class="topbar-menu row">
          <div class="col-xs-4 col-sm-2">
            <a href="#" class="metro-tile bg-primary light">
              <span class="glyphicon glyphicon-inbox text-muted"></span>
              <span class="metro-title">Messages</span>
            </a>
          </div>
          <div class="col-xs-4 col-sm-2">
            <a href="#" class="metro-tile bg-info light">
              <span class="glyphicon glyphicon-user text-muted"></span>
              <span class="metro-title">Users</span>
            </a>
          </div>
          <div class="col-xs-4 col-sm-2">
            <a href="#" class="metro-tile bg-success light">
              <span class="glyphicon glyphicon-headphones text-muted"></span>
              <span class="metro-title">Support</span>
            </a>
          </div>
          <div class="col-xs-4 col-sm-2">
            <a href="#" class="metro-tile bg-system light">
              <span class="glyphicon glyphicon-facetime-video text-muted"></span>
              <span class="metro-title">Videos</span>
            </a>
          </div>
          <div class="col-xs-4 col-sm-2">
            <a href="#" class="metro-tile bg-warning light">
              <span class="fa fa-gears text-muted"></span>
              <span class="metro-title">Settings</span>
            </a>
          </div>
          <div class="col-xs-4 col-sm-2">
            <a href="#" class="metro-tile bg-alert light">
              <span class="glyphicon glyphicon-picture text-muted"></span>
              <span class="metro-title">Pictures</span>
            </a>
          </div>
        </div>
      </div>
	  
	  
      <div style="padding-right: 24px; margin-right: -14px;" tabindex="0" class="sidebar-right-content nano-content p10">

              <h5 class="title-divider text-muted mb20"> Server Statistics
                <span class="pull-right"> 2013
                  <i class="fa fa-caret-down ml5"></i>
                </span>
              </h5>
              <div class="progress mh5">
                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 44%">
                  <span class="fs11">DB Request</span>
                </div>
              </div>
              <div class="progress mh5">
                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 84%">
                  <span class="fs11 text-left">Server Load</span>
                </div>
              </div>
              <div class="progress mh5">
                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 61%">
                  <span class="fs11 text-left">Server Connections</span>
                </div>
              </div>

              <h5 class="title-divider text-muted mt30 mb10">Traffic Margins</h5>
              <div class="row">
                <div class="col-xs-5">
                  <h3 class="text-primary mn pl5">132</h3>
                </div>
                <div class="col-xs-7 text-right">
                  <h3 class="text-success-dark mn">
                    <i class="fa fa-caret-up"></i> 13.2% </h3>
                </div>
              </div>

              <h5 class="title-divider text-muted mt25 mb10">Database Request</h5>
              <div class="row">
                <div class="col-xs-5">
                  <h3 class="text-primary mn pl5">212</h3>
                </div>
                <div class="col-xs-7 text-right">
                  <h3 class="text-success-dark mn">
                    <i class="fa fa-caret-up"></i> 25.6% </h3>
                </div>
              </div>

              <h5 class="title-divider text-muted mt25 mb10">Server Response</h5>
              <div class="row">
                <div class="col-xs-5">
                  <h3 class="text-primary mn pl5">82.5</h3>
                </div>
                <div class="col-xs-7 text-right">
                  <h3 class="text-danger mn">
                    <i class="fa fa-caret-down"></i> 17.9% </h3>
                </div>
              </div>

              <h5 class="title-divider text-muted mt40 mb20"> Server Statistics
                <span class="pull-right text-primary fw600">USA</span>
              </h5>

              <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
              <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

      </div>
    <div class="nano-pane"><div style="height: 230px; transform: translate(0px, 0px);" class="nano-slider"></div></div>-->



<!-- Side content of Main Content Area-->
<!--<aside  class="tray tray-right tray320 pt50" style="background-color:rgb(22, 89, 114);" >
<div id="scrollPanel">
        <div class="panel panel-tile text-primary br-b bw5 br-primary-light mt40">
            <div class="panel-body pl20 p5">                
                 <img src="assets/images/action.png" class="img-responsive pull-right" />
                <h2 class="mt15 lh15">
                    <b>301</b>
                </h2>
                <h5 class="text-muted mt20">Characterization</h5>
            </div>
            <div class="panel-footer bg-white br-t br-light p12">
                <p>Identify and prioritize areas, operations, and/or facilities for detailed characteizations/ remediation.  </p>                                       
            </div>                    
        </div>        
     <div class="panel panel-primary" id="p7" data-panel-color="panel-info">
        <div class="panel-heading">
            <span id="toggle" data-toggle="tooltip" title="Click to Show/Hide SubMenu" class="panel-title">Key RRS Strategy Objectives (301)</span>                    
        </div>
        <div class="panel-body">
            <p> <strong>1.</strong> Prioritize critical transit system infrastructure required to maintain or restore limited operations</p>
            <p> <strong>2.</strong> Determine potential for partial restart of non-contaminated portion of system</p>
            <p> <strong>3.</strong> Ensure isolation of contaminated areas from areas targeted for restart or continuance of operations</p> 
            <br />
        </div>
    </div>
	<div id="nav-spy">
		<div class="panel panel-tile text-primary br-b bw5 br-primary-light">
            <div class="panel-body">                
                <p><strong>301-1</strong><span class="text-muted"> Develop incident-specific Rapid Return to Service (RRS) Strategy based on incident and site specific parameters</span></p>
				<i class="fa fa-arrow-down fa-2 pull-right"></i>                                
            </div>
		</div>
		<div class="panel panel-tile text-primary br-b bw5 br-primary-light">
	        <div class="panel-body">                
                <p><strong>301-2</strong><span class="text-muted"> Identify transit system operational impacts to maintain and/or reestablish partial service levels</span></p>
            </div>
            <div class="panel-footer bg-white br-t br-light p12">
					<p class="text-danger">Transit Infrastructure</p>
					<p class="text-warning">Rolling Stock</p>
					<p class="text-success">RRS Priority Infrastructure</p>
					<p class="text-info">Transit Workforce</p>
			</div>
			<div class="panel-body">                
				<i class="fa fa-arrow-down fa-2 pull-right"></i>                                                                                           
            </div>
		</div>
		<div class="panel panel-tile text-primary br-b bw5 br-primary-light">
            <div class="panel-body">                
                <p><strong>301-3</strong><span class="text-muted"> Implement pre-incident sampling plan for rolling stock air filters and other targeted areas to allow rapid system characterization</span></p>
				<i class="fa fa-arrow-down fa-2 pull-right"></i>                                
            </div>
		</div>
		<div class="panel panel-tile text-primary br-b bw5 br-primary-light">
            <div class="panel-body">                
                <p><strong>301-4</strong><span class="text-muted"> Gather/collect existing information from first response phase (sampling, epidemiological, modeling, etc.)</span></p>
				<i class="fa fa-arrow-down fa-2 pull-right"></i>                                
            </div>
		</div>
		<div class="panel panel-tile text-primary br-b bw5 br-primary-light">
	        <div class="panel-body">                
                <p><strong>301-5</strong><span class="text-muted"> Assess sytem components based on existing information and classify, to develop an initial prioritized listing of characterization/remediation/RRS areas</span></p>
            </div>
            <div class="panel-footer bg-white br-t br-light p12">
					<p class="text-danger">Contamination at unacceptable levels confirmed or assumed (rule in)</p>
					<p class="text-warning">Contamination likely or possible, but degree of contamination uncertain</p>
					<p class="text-success">Contamination unlikely (rule out)</p>
			</div>
			<div class="panel-body">                
				<i class="fa fa-arrow-down fa-2 pull-right"></i>                                                                                           
            </div>
		</div>
				<div class="panel panel-tile text-primary br-b bw5 br-primary-light">
            <div class="panel-body">                
                <p><strong>301-6</strong><span class="text-muted"> Characterize to support decontamination design if needed, otherwise no characterization</span></p>
				<i class="fa fa-arrow-down fa-2 pull-right"></i>                                
            </div>
		</div>
			
		<ul class="nav tray-nav tray-nav-border" >
			 <li>
				<a href="l2.php?id=400&subid=400" class="btn btn-primary pull-right mb15 mt15">To 400</a>                                                
			</li>                                                                                            
		</ul>
		<div class="panel panel-tile text-primary br-b bw5 br-primary-light">
            <div class="panel-body">                
                <p><strong>301-7</strong><span class="text-muted"> Gather/collect existing information from first response phase (sampling, epidemiological, modeling, etc.)</span></p>
				<i class="fa fa-arrow-down fa-2 pull-right"></i>                                
            </div>
			<ul class="nav tray-nav tray-nav-border" >
				 <li>
					<a href="l2.php?id=300&subid=302" class="btn btn-primary pull-right mb15 mt15">To 302</a>                                                
				</li>                                                                                            
			</ul>
		</div>
		
		<div class="panel panel-tile text-primary br-b bw5 br-primary-light">
            <div class="panel-body">                
                <p><strong>301-8</strong><span class="text-muted"> Develop early-release clearance goals and plans for non-contaminated areas </span></p>
				<i class="fa fa-arrow-down fa-2 pull-right"></i>                                
            </div>
		</div>
			
		<ul class="nav tray-nav tray-nav-border" >
			 <li>
				<a href="l2.php?id=500&subid=500" class="btn btn-primary pull-right mb15 mt15">To 500</a>                                                
			</li>                                                                                            
		</ul>

	</div>	    
					   
      <div class="panel panel-primary" id="p7" data-panel-color="panel-info">
        <div class="panel-heading">
            <span class="panel-title">Key RRS Strategy Objectives (300)</span>                    
        </div>
        <div class="panel-body">
            <p> <strong>1.</strong> Rapid system characterization</p>
            <p> <strong>2.</strong> Identification of contaminated and non-contaminated areas</p>
            <p> <strong>3.</strong> Establishment of clearance goals</p> 
            <p> <strong>4.</strong> Prioritized clearance sampling for phased return to service in non-contaminated areas</p> 
            <p> <strong>5.</strong> Characterization of contaminiated areas to support decontamination decisions</p>
			<p> <strong>6.</strong> Public Health to recommend potential medical options for TA workforce</p>  
            <br />
        </div>
    </div>-->

	<!--Legend-->     
    <!--<div class="panel panel-primary panel-border top" id="p7" data-panel-color="panel-info">
        <div class="panel-heading">
            <span class="panel-title"> Legend</span>                    
        </div>
        <div class="panel-body">                        
            <div class="legend-icons">
                <ul class="list-unstyled">
                  <li>
                    <img src="assets/images/start.png" class="img-responsive" alt="Responsive image" /> - Start
                  </li>
                  <li>
                    <img src="assets/images/question.png" class="img-responsive" alt="Responsive image" /> - Key Question
                  </li>    
                  <li>
                    <img src="assets/images/action.png" class="img-responsive" alt="Responsive image" /> - Action to perform
                  </li>                               
                   <li>
                    <img src="assets/images/round_rec.png" class="img-responsive" alt="Responsive image" /> - Key concluding decision points
                  </li>
                   <li>
                    <img src="assets/images/problem_resolved.png" class="img-responsive" alt="Responsive image" /> - Problem Resolved
                  </li>
                </ul>
           </div>                                                                         
    	</div>
	</div>                                
</div></aside>-->




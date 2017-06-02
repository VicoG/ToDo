<?php require "includes/db.php";?>
<?php require "includes/functions.php";?>

		<!-- Brings up Responder Specific table -->
<?php

	$page= (int) $_GET["page"];
	$level= (int) $_GET[level];
	$result= responderTableQuery($page);
	

echo 
'<div class="panel-body mt20 pt30" id="invoice-item" >             
	<div id="TR" class="row table-responsive ">
	 <div class="col-md-12">
	   <table class="display table table-hover table-bordered mt0 pt0"  id="tableResponder" style=" clear: both;">
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
	  <tr>';
		
	
	
		//Populate Table
while($row = mysqli_fetch_assoc($result)) { 
echo '<td>
	  <dl>
		<dt>' .  $row["responsible1_header"]  . '</dt>
			<dd>' . $row["responsible1_details1"] . '</dd> 
			<dd>' . $row["responsible1_details2"] . '</dd>
		</dt>
	</dl>
	<dl>
		<dt>' . $row["responsible2_header"] . '</dt>
			<dd>' . $row["responsible2_details1"] . '</dd> 
			<dd>' . $row["responsible2_details2"] . '</dd>
		</dt>
	</dl>
	</td>
	<td>
		<p>' . $row["agency1"] . '</p>
		<p>' . $row["agency2"] . '</p>
		<p>' . $row["agency3"] . '</p>
		<p>' . $row["agency4"] . '</p>
		<p>' . $row["agency5"] . '</p>
	</td>
	<td> 
	<form  method="post" ;>
		<input type="hidden" id="task" name="task" value="' . $row["action1"] . '"/>
		<input type="hidden" id="row" name="row" value=' . $row["id"] . '/>
		<input type="hidden" id="checked" name="checked" value=' . $row["action1_checked"] . '/>
		<input type="hidden" id="page" name="page" value=' . $page . '/> 
		<input type="hidden" id="level" name="level" value=' . $level . '/>
		<input type="hidden" id="actionNumber" name="actionNumber" value="1" /> 
		<button id="submit"'; 
			if ($row["action1_checked"] == 0) { 
				echo 'class="btn btn-warning btn-xs" name="submit" > <i class="fa fa-square-o fa-lg" aria-hidden="true"></i> ';
			} else { 
				echo 'class="btn btn-success btn-xs" name="submit" > <i class="fa fa-check-square-o fa-lg" aria-hidden="true"></i> ';
			} 
		echo '</button> <strong>' . $row["action1"] . '</strong>
	</form>
		<p>' . $row["action1_details1"] . '</p> 
		<p>' . $row["action1_details2"] . '</p> 
		<p>' . $row["action1_details3"] . '</p> 
		<p>' . $row["action1_details4"] . '</p> 
		<p>' . $row["action1_details5"] . '</p> 
		<p>' . $row["action1_details6"] . '</p>
		<p>' . $row["action1_details7"] . '</p> 
		<p>' . $row["action1_details8"] . '</p> 
		<p>' . $row["action1_details9"] . '</p> 
		<p>' . $row["action1_details10"] . '</p> 
	';
	if(!empty($row["action2"])) { 
		echo '<form  method="post">
			<input type="hidden" id="task" name="task" value="' . $row["action2"] . '"/>
			<input type="hidden" id="row" name="row" value=' . $row["id"] . '/>
			<input type="hidden" id="checked" name="checked" value=' . $row["action2_checked"] . '/>
			<input type="hidden" id="page" name="page" value=' . $page . '/> 
			<input type="hidden" id="level" name="level" value=' . $level . '/>
			<input type="hidden" id="actionNumber" name="actionNumber" value="2" /> 
			<button id="submit"'; 
				if ($row["action2_checked"] == 0) { 
					echo 'class="btn btn-warning btn-xs" name="submit" > <i class="fa fa-square-o fa-lg" aria-hidden="true"></i> ';
				} else { 
					echo 'class="btn btn-success btn-xs" name="submit" > <i class="fa fa-check-square-o fa-lg" aria-hidden="true"></i> ';
				} 
			echo '</button> <strong>' . $row["action2"] . '</strong>
		</form>
			<p>' . $row["action2_details1"] . '</p> 
			<p>' . $row["action2_details2"] . '</p> 
			<p>' . $row["action2_details3"] . '</p> 
			<p>' . $row["action2_details4"] . '</p> 
			<p>' . $row["action2_details5"] . '</p> 
			<p>' . $row["action2_details6"] . '</p>
			<p>' . $row["action2_details7"] . '</p> 
			<p>' . $row["action2_details8"] . '</p> 
			<p>' . $row["action2_details9"] . '</p> 
			<p>' . $row["action2_details10"] . '</p> 
		';
			if(!empty($row["action3"])) { 
			echo '<form  method="post">
				<input type="hidden" id="task" name="task" value="' . $row["action3"] . '"/>
				<input type="hidden" id="row" name="row" value=' . $row["id"] . '/>
				<input type="hidden" id="checked" name="checked" value=' . $row["action3_checked"] . '/>
				<input type="hidden" id="page" name="page" value=' . $page . '/> 
				<input type="hidden" id="level" name="level" value=' . $level . '/>
				<input type="hidden" id="actionNumber" name="actionNumber" value="3" /> 
				<button id="submit"'; 
					if ($row["action3_checked"] == 0) { 
						echo 'class="btn btn-warning btn-xs" name="submit" > <i class="fa fa-square-o fa-lg" aria-hidden="true"></i> ';
					} else { 
						echo 'class="btn btn-success btn-xs" name="submit" > <i class="fa fa-check-square-o fa-lg" aria-hidden="true"></i> ';
					} 
				echo '</button> <strong>' . $row["action3"] . '</strong>
			</form>
				<p>' . $row["action3_details1"] . '</p> 
				<p>' . $row["action3_details2"] . '</p> 
				<p>' . $row["action3_details3"] . '</p> 
				<p>' . $row["action3_details4"] . '</p> 
				<p>' . $row["action3_details5"] . '</p> 
				<p>' . $row["action3_details6"] . '</p>
				<p>' . $row["action3_details7"] . '</p> 
			';
				if(!empty($row["action4"])) { 
				echo '<form  method="post">
					<input type="hidden" id="task" name="task" value="' . $row["action4"] . '"/>
					<input type="hidden" id="row" name="row" value=' . $row["id"] . '/>
					<input type="hidden" id="checked" name="checked" value=' . $row["action4_checked"] . '/>
					<input type="hidden" id="page" name="page" value=' . $page . '/> 
					<input type="hidden" id="level" name="level" value=' . $level . '/>
					<input type="hidden" id="actionNumber" name="actionNumber" value="4" /> 
					<button id="submit"'; 
						if ($row["action4_checked"] == 0) { 
							echo 'class="btn btn-warning btn-xs" name="submit" > <i class="fa fa-square-o fa-lg" aria-hidden="true"></i> ';
						} else { 
							echo 'class="btn btn-success btn-xs" name="submit" > <i class="fa fa-check-square-o fa-lg" aria-hidden="true"></i> ';
						} 
					echo '</button> <strong>' . $row["action4"] . '</strong>
				</form>
					<p>' . $row["action4_details1"] . '</p> 
					<p>' . $row["action4_details2"] . '</p> 
					<p>' . $row["action4_details3"] . '</p> 
					<p>' . $row["action4_details4"] . '</p> 
					<p>' . $row["action4_details5"] . '</p> 
					<p>' . $row["action4_details6"] . '</p>
					<p>' . $row["action4_details7"] . '</p> 
				';
					if(!empty($row["action5"])) { 
					echo '<form  method="post">
						<input type="hidden" id="task" name="task" value="' . $row["action5"] . '"/>
						<input type="hidden" id="row" name="row" value=' . $row["id"] . '/>
						<input type="hidden" id="checked" name="checked" value=' . $row["action5_checked"] . '/>
						<input type="hidden" id="page" name="page" value=' . $page . '/> 
						<input type="hidden" id="level" name="level" value=' . $level . '/>
						<input type="hidden" id="actionNumber" name="actionNumber" value="5" /> 
						<button id="submit"'; 
							if ($row["action5_checked"] == 0) { 
								echo 'class="btn btn-warning btn-xs" name="submit" > <i class="fa fa-square-o fa-lg" aria-hidden="true"></i> ';
							} else { 
								echo 'class="btn btn-success btn-xs" name="submit" > <i class="fa fa-check-square-o fa-lg" aria-hidden="true"></i> ';
							} 
						echo '</button> <strong>' . $row["action5"] . '</strong>
					</form>
						<p>' . $row["action5_details1"] . '</p> 
						<p>' . $row["action5_details2"] . '</p> 
						<p>' . $row["action5_details3"] . '</p> 
						<p>' . $row["action5_details4"] . '</p> 
					';
						if(!empty($row["action6"])) { 
						echo '<form  method="post">
							<input type="hidden" id="task" name="task" value="' . $row["action6"] . '"/>
							<input type="hidden" id="row" name="row" value=' . $row["id"] . '/>
							<input type="hidden" id="checked" name="checked" value=' . $row["action6_checked"] . '/>
							<input type="hidden" id="page" name="page" value=' . $page . '/> 
							<input type="hidden" id="level" name="level" value=' . $level . '/>
							<input type="hidden" id="actionNumber" name="actionNumber" value="6" /> 
							<button id="submit"'; 
								if ($row["action6_checked"] == 0) { 
									echo 'class="btn btn-warning btn-xs" name="submit" > <i class="fa fa-square-o fa-lg" aria-hidden="true"></i> ';
								} else { 
									echo 'class="btn btn-success btn-xs" name="submit" > <i class="fa fa-check-square-o fa-lg" aria-hidden="true"></i> ';
								} 
							echo '</button> <strong>' . $row["action6"] . '</strong>
						</form>
							<p>' . $row["action6_details1"] . '</p> 
							<p>' . $row["action6_details2"] . '</p> 
							<p>' . $row["action6_details3"] . '</p> 
							<p>' . $row["action6_details4"] . '</p> 
						';
							if(!empty($row["action7"])) { 
							echo '<form  method="post">
								<input type="hidden" id="task" name="task" value="' . $row["action7"] . '"/>
								<input type="hidden" id="row" name="row" value=' . $row["id"] . '/>
								<input type="hidden" id="checked" name="checked" value=' . $row["action7_checked"] . '/>
								<input type="hidden" id="page" name="page" value=' . $page . '/> 
								<input type="hidden" id="level" name="level" value=' . $level . '/>
								<input type="hidden" id="actionNumber" name="actionNumber" value="7" /> 
								<button id="submit"'; 
									if ($row["action7_checked"] == 0) { 
										echo 'class="btn btn-warning btn-xs" name="submit" > <i class="fa fa-square-o fa-lg" aria-hidden="true"></i> ';
									} else { 
										echo 'class="btn btn-success btn-xs" name="submit" > <i class="fa fa-check-square-o fa-lg" aria-hidden="true"></i> ';
									} 
								echo '</button> <strong>' . $row["action7"] . '</strong>
							</form>
								<p>' . $row["action7_details1"] . '</p> 
								<p>' . $row["action7_details2"] . '</p> 
								<p>' . $row["action7_details3"] . '</p> 
								<p>' . $row["action7_details4"] . '</p> 
							';
								if(!empty($row["action8"])) { 
								echo '<form  method="post">
									<input type="hidden" id="task" name="task" value="' . $row["action8"] . '"/>
									<input type="hidden" id="row" name="row" value=' . $row["id"] . '/>
									<input type="hidden" id="checked" name="checked" value=' . $row["action8_checked"] . '/>
									<input type="hidden" id="page" name="page" value=' . $page . '/> 
									<input type="hidden" id="level" name="level" value=' . $level . '/>
									<input type="hidden" id="actionNumber" name="actionNumber" value="8" /> 
									<button id="submit"'; 
										if ($row["action8_checked"] == 0) { 
											echo 'class="btn btn-warning btn-xs" name="submit" > <i class="fa fa-square-o fa-lg" aria-hidden="true"></i> ';
										} else { 
											echo 'class="btn btn-success btn-xs" name="submit" > <i class="fa fa-check-square-o fa-lg" aria-hidden="true"></i> ';
										} 
									echo '</button> <strong>' . $row["action8"] . '</strong>
								</form>
									<p>' . $row["action8_details1"] . '</p> 
									<p>' . $row["action8_details2"] . '</p> 
									<p>' . $row["action8_details3"] . '</p> 
									<p>' . $row["action8_details4"] . '</p> 
								';
									if(!empty($row["action9"])) { 
									echo '<form  method="post">
										<input type="hidden" id="task" name="task" value="' . $row["action9"] . '"/>
										<input type="hidden" id="row" name="row" value=' . $row["id"] . '/>
										<input type="hidden" id="checked" name="checked" value=' . $row["action9_checked"] . '/>
										<input type="hidden" id="page" name="page" value=' . $page . '/> 
										<input type="hidden" id="level" name="level" value=' . $level . '/>
										<input type="hidden" id="actionNumber" name="actionNumber" value="9" /> 
										<button id="submit"'; 
											if ($row["action9_checked"] == 0) { 
												echo 'class="btn btn-warning btn-xs" name="submit" > <i class="fa fa-square-o fa-lg" aria-hidden="true"></i> ';
											} else { 
												echo 'class="btn btn-success btn-xs" name="submit" > <i class="fa fa-check-square-o fa-lg" aria-hidden="true"></i> ';
											} 
										echo '</button> <strong>' . $row["action9"] . '</strong>
									</form>
										<p>' . $row["action9_details1"] . '</p> 
										<p>' . $row["action9_details2"] . '</p> 
										<p>' . $row["action9_details3"] . '</p> 
										<p>' . $row["action9_details4"] . '</p> 
									';
									} //close 9
								} //close 8
							} //close 7
						} //close 6
					} //close 5
				} //close 4
			}// close3
	} //close 2
	
	echo '</td>
			<td style= "list-style-type: none;">
				<p>' . $row["required1"] . '</p>  
				<p>' . $row["required2"] . '</p> 
				<p>' . $row["required3"] . '</p> 
				<p>' . $row["required4"] . '</p> 
				<p>' . $row["required5"] . '</p>
				<p>' . $row["required6"] . '</p> 
				<p>' . $row["required7"] . '</p>
			</td>
			<td style= "list-style-type: none;">
				<p>' . $row["resources1"] . '</p>  
				<p>' . $row["resources2"] . '</p> 
				<p>' . $row["resources3"] . '</p> 
				<p>' . $row["resources4"] . '</p> 
				<p>' . $row["resources5"] . '</p> 
				<p>' . $row["resources6"] . '</p> 
				<p>' . $row["resources7"] . '</p> 
				<p>' . $row["resources8"] . '</p> 
			</td>
			<td>
				<p><a href="http://tid-appsvr.llnl.gov/utr/dev/docs/' . $row["doc1"] . '" target="_blank" >' . $row["doc1"] . '</a></p>
				<p><a href="http://tid-appsvr.llnl.gov/utr/dev/docs/' . $row["doc2"] . '" target="_blank" >' . $row["doc2"] . '</a></p>
				<p><a href="http://tid-appsvr.llnl.gov/utr/dev/docs/' . $row["doc3"] . '" target="_blank" >' . $row["doc3"] . '</a></p>
				<p><a href="http://tid-appsvr.llnl.gov/utr/dev/docs/' . $row["doc4"] . '" target="_blank" >' . $row["doc4"] . '</a></p>
				<p><a href="http://tid-appsvr.llnl.gov/utr/dev/docs/' . $row["doc5"] . '" target="_blank" >' . $row["doc5"] . '</a></p>
				<p><a href="http://tid-appsvr.llnl.gov/utr/dev/docs/' . $row["doc6"] . '" target="_blank" >' . $row["doc6"] . '</a></p>
			</td> 
			<td>
				<div class="btn-group">
				  <a href="l2.php?id=' . $level . '&subid=edit&table=' . $page . '&row=' . $row["id"] . '" data-toggle="tooltip" title="Edit Row" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a><br><br>
				  <a href="l2.php?id=' . $level . '&subid=fileUpload&table=' . $page . '&row=' . $row["id"] . '" data-toggle="tooltip" title="Add a file"class="btn btn-system btn-sm"><i class="fa fa-download"></i></a><br><br>
				  <button type="button" onClick="delete_rec();" alt="delete" data-toggle="tooltip" title="Delete the Row" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>
				</div>
			</td> 
		</tr> <br>';

} //close while
echo '</tbody>
	</table>
	</div>               
	<br />
	<div class="row " id="invoice-footer">
		<div class="col-md-12">                
			<div class="clearfix"></div>
			<div class="invoice-buttons mr15 pt10">
				<a href="l2.php?id=' . $level . '&subid=add&table=' . $page . '&transit=0" class="btn btn-success pull-right" data-toggle="tooltip" title="ADD a Row"><i class="fa fa-plus"></i> Add</a>                             
          	</div>
     	</div>                               
    </div>            
	</div>          
</div>';

?>


		<!-- Transit Specific table begin-->
<?php
	$result2= transitTableQuery($page);

echo 
'<div class="panel-body" id="invoice-item" >                             
	<div id="TT" class="row table-responsive">
		<div class="col-md-12">
		<table class="display table table-hover table-bordered" id="tableTransit">
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
		<tr>';
		
	
	
		//Populate Table
while($row = mysqli_fetch_assoc($result2)) { 
echo '<td>
	  <dl>
		<dt>' .  $row["responsible1_header"]  . '</dt>
			<dd>' . $row["responsible1_details1"] . '</dd> 
			<dd>' . $row["responsible1_details2"] . '</dd>
		</dt>
	</dl>
	<dl>
		<dt>' . $row["responsible2_header"] . '</dt>
			<dd>' . $row["responsible2_details1"] . '</dd> 
			<dd>' . $row["responsible2_details2"] . '</dd>
		</dt>
	</dl>
	</td>
	<td>
		<p>' . $row["agency1"] . '</p>
		<p>' . $row["agency2"] . '</p>
		<p>' . $row["agency3"] . '</p>
		<p>' . $row["agency4"] . '</p>
		<p>' . $row["agency5"] . '</p>
	</td>
	<td> 
	<form  method="post" ;>
		<input type="hidden" id="task" name="task" value="' . $row["action1"] . '"/>
		<input type="hidden" id="row" name="row" value=' . $row["id"] . '/>
		<input type="hidden" id="checked" name="checked" value=' . $row["action1_checked"] . '/>
		<input type="hidden" id="page" name="page" value=' . $page . '/> 
		<input type="hidden" id="level" name="level" value=' . $level . '/>
		<input type="hidden" id="actionNumber" name="actionNumber" value="1" /> 
		<button id="submit"'; 
			if ($row["action1_checked"] == 0) { 
				echo 'class="btn btn-warning btn-xs" name="submit" > <i class="fa fa-square-o fa-lg" aria-hidden="true"></i> ';
			} else { 
				echo 'class="btn btn-success btn-xs" name="submit" > <i class="fa fa-check-square-o fa-lg" aria-hidden="true"></i> ';
			} 
		echo '</button> <strong>' . $row["action1"] . '</strong>
	</form>
		<p>' . $row["action1_details1"] . '</p> 
		<p>' . $row["action1_details2"] . '</p> 
		<p>' . $row["action1_details3"] . '</p> 
		<p>' . $row["action1_details4"] . '</p> 
		<p>' . $row["action1_details5"] . '</p> 
		<p>' . $row["action1_details6"] . '</p>
		<p>' . $row["action1_details7"] . '</p> 
		<p>' . $row["action1_details8"] . '</p> 
		<p>' . $row["action1_details9"] . '</p> 
		<p>' . $row["action1_details10"] . '</p> 
	';
	if(!empty($row["action2"])) { 
		echo '<form  method="post">
			<input type="hidden" id="task" name="task" value="' . $row["action2"] . '"/>
			<input type="hidden" id="row" name="row" value=' . $row["id"] . '/>
			<input type="hidden" id="checked" name="checked" value=' . $row["action2_checked"] . '/>
			<input type="hidden" id="page" name="page" value=' . $page . '/> 
			<input type="hidden" id="level" name="level" value=' . $level . '/>
			<input type="hidden" id="actionNumber" name="actionNumber" value="2" /> 
			<button id="submit"'; 
				if ($row["action2_checked"] == 0) { 
					echo 'class="btn btn-warning btn-xs" name="submit" > <i class="fa fa-square-o fa-lg" aria-hidden="true"></i> ';
				} else { 
					echo 'class="btn btn-success btn-xs" name="submit" > <i class="fa fa-check-square-o fa-lg" aria-hidden="true"></i> ';
				} 
			echo '</button> <strong>' . $row["action2"] . '</strong>
		</form>
			<p>' . $row["action2_details1"] . '</p> 
			<p>' . $row["action2_details2"] . '</p> 
			<p>' . $row["action2_details3"] . '</p> 
			<p>' . $row["action2_details4"] . '</p> 
			<p>' . $row["action2_details5"] . '</p> 
			<p>' . $row["action2_details6"] . '</p>
			<p>' . $row["action2_details7"] . '</p> 
			<p>' . $row["action2_details8"] . '</p> 
			<p>' . $row["action2_details9"] . '</p> 
			<p>' . $row["action2_details10"] . '</p> 
		';
			if(!empty($row["action3"])) { 
			echo '<form  method="post">
				<input type="hidden" id="task" name="task" value="' . $row["action3"] . '"/>
				<input type="hidden" id="row" name="row" value=' . $row["id"] . '/>
				<input type="hidden" id="checked" name="checked" value=' . $row["action3_checked"] . '/>
				<input type="hidden" id="page" name="page" value=' . $page . '/> 
				<input type="hidden" id="level" name="level" value=' . $level . '/>
				<input type="hidden" id="actionNumber" name="actionNumber" value="3" /> 
				<button id="submit"'; 
					if ($row["action3_checked"] == 0) { 
						echo 'class="btn btn-warning btn-xs" name="submit" > <i class="fa fa-square-o fa-lg" aria-hidden="true"></i> ';
					} else { 
						echo 'class="btn btn-success btn-xs" name="submit" > <i class="fa fa-check-square-o fa-lg" aria-hidden="true"></i> ';
					} 
				echo '</button> <strong>' . $row["action3"] . '</strong>
			</form>
				<p>' . $row["action3_details1"] . '</p> 
				<p>' . $row["action3_details2"] . '</p> 
				<p>' . $row["action3_details3"] . '</p> 
				<p>' . $row["action3_details4"] . '</p> 
				<p>' . $row["action3_details5"] . '</p> 
				<p>' . $row["action3_details6"] . '</p>
				<p>' . $row["action3_details7"] . '</p> 
			';
				if(!empty($row["action4"])) { 
				echo '<form  method="post">
					<input type="hidden" id="task" name="task" value="' . $row["action4"] . '"/>
					<input type="hidden" id="row" name="row" value=' . $row["id"] . '/>
					<input type="hidden" id="checked" name="checked" value=' . $row["action4_checked"] . '/>
					<input type="hidden" id="page" name="page" value=' . $page . '/> 
					<input type="hidden" id="level" name="level" value=' . $level . '/>
					<input type="hidden" id="actionNumber" name="actionNumber" value="4" /> 
					<button id="submit"'; 
						if ($row["action4_checked"] == 0) { 
							echo 'class="btn btn-warning btn-xs" name="submit" > <i class="fa fa-square-o fa-lg" aria-hidden="true"></i> ';
						} else { 
							echo 'class="btn btn-success btn-xs" name="submit" > <i class="fa fa-check-square-o fa-lg" aria-hidden="true"></i> ';
						} 
					echo '</button> <strong>' . $row["action4"] . '</strong>
				</form>
					<p>' . $row["action4_details1"] . '</p> 
					<p>' . $row["action4_details2"] . '</p> 
					<p>' . $row["action4_details3"] . '</p> 
					<p>' . $row["action4_details4"] . '</p> 
					<p>' . $row["action4_details5"] . '</p> 
					<p>' . $row["action4_details6"] . '</p>
					<p>' . $row["action4_details7"] . '</p> 
				';
					if(!empty($row["action5"])) { 
					echo '<form  method="post">
						<input type="hidden" id="task" name="task" value="' . $row["action5"] . '"/>
						<input type="hidden" id="row" name="row" value=' . $row["id"] . '/>
						<input type="hidden" id="checked" name="checked" value=' . $row["action5_checked"] . '/>
						<input type="hidden" id="page" name="page" value=' . $page . '/> 
						<input type="hidden" id="level" name="level" value=' . $level . '/>
						<input type="hidden" id="actionNumber" name="actionNumber" value="5" /> 
						<button id="submit"'; 
							if ($row["action5_checked"] == 0) { 
								echo 'class="btn btn-warning btn-xs" name="submit" > <i class="fa fa-square-o fa-lg" aria-hidden="true"></i> ';
							} else { 
								echo 'class="btn btn-success btn-xs" name="submit" > <i class="fa fa-check-square-o fa-lg" aria-hidden="true"></i> ';
							} 
						echo '</button> <strong>' . $row["action5"] . '</strong>
					</form>
						<p>' . $row["action5_details1"] . '</p> 
						<p>' . $row["action5_details2"] . '</p> 
						<p>' . $row["action5_details3"] . '</p> 
						<p>' . $row["action5_details4"] . '</p> 
					';
						if(!empty($row["action6"])) { 
						echo '<form  method="post">
							<input type="hidden" id="task" name="task" value="' . $row["action6"] . '"/>
							<input type="hidden" id="row" name="row" value=' . $row["id"] . '/>
							<input type="hidden" id="checked" name="checked" value=' . $row["action6_checked"] . '/>
							<input type="hidden" id="page" name="page" value=' . $page . '/> 
							<input type="hidden" id="level" name="level" value=' . $level . '/>
							<input type="hidden" id="actionNumber" name="actionNumber" value="6" /> 
							<button id="submit"'; 
								if ($row["action6_checked"] == 0) { 
									echo 'class="btn btn-warning btn-xs" name="submit" > <i class="fa fa-square-o fa-lg" aria-hidden="true"></i> ';
								} else { 
									echo 'class="btn btn-success btn-xs" name="submit" > <i class="fa fa-check-square-o fa-lg" aria-hidden="true"></i> ';
								} 
							echo '</button> <strong>' . $row["action6"] . '</strong>
						</form>
							<p>' . $row["action6_details1"] . '</p> 
							<p>' . $row["action6_details2"] . '</p> 
							<p>' . $row["action6_details3"] . '</p> 
							<p>' . $row["action6_details4"] . '</p> 
						';
							if(!empty($row["action7"])) { 
							echo '<form  method="post">
								<input type="hidden" id="task" name="task" value="' . $row["action7"] . '"/>
								<input type="hidden" id="row" name="row" value=' . $row["id"] . '/>
								<input type="hidden" id="checked" name="checked" value=' . $row["action7_checked"] . '/>
								<input type="hidden" id="page" name="page" value=' . $page . '/> 
								<input type="hidden" id="level" name="level" value=' . $level . '/>
								<input type="hidden" id="actionNumber" name="actionNumber" value="7" /> 
								<button id="submit"'; 
									if ($row["action7_checked"] == 0) { 
										echo 'class="btn btn-warning btn-xs" name="submit" > <i class="fa fa-square-o fa-lg" aria-hidden="true"></i> ';
									} else { 
										echo 'class="btn btn-success btn-xs" name="submit" > <i class="fa fa-check-square-o fa-lg" aria-hidden="true"></i> ';
									} 
								echo '</button> <strong>' . $row["action7"] . '</strong>
							</form>
								<p>' . $row["action7_details1"] . '</p> 
								<p>' . $row["action7_details2"] . '</p> 
								<p>' . $row["action7_details3"] . '</p> 
								<p>' . $row["action7_details4"] . '</p> 
							';
								if(!empty($row["action8"])) { 
								echo '<form  method="post">
									<input type="hidden" id="task" name="task" value="' . $row["action8"] . '"/>
									<input type="hidden" id="row" name="row" value=' . $row["id"] . '/>
									<input type="hidden" id="checked" name="checked" value=' . $row["action8_checked"] . '/>
									<input type="hidden" id="page" name="page" value=' . $page . '/> 
									<input type="hidden" id="level" name="level" value=' . $level . '/>
									<input type="hidden" id="actionNumber" name="actionNumber" value="8" /> 
									<button id="submit"'; 
										if ($row["action8_checked"] == 0) { 
											echo 'class="btn btn-warning btn-xs" name="submit" > <i class="fa fa-square-o fa-lg" aria-hidden="true"></i> ';
										} else { 
											echo 'class="btn btn-success btn-xs" name="submit" > <i class="fa fa-check-square-o fa-lg" aria-hidden="true"></i> ';
										} 
									echo '</button> <strong>' . $row["action8"] . '</strong>
								</form>
									<p>' . $row["action8_details1"] . '</p> 
									<p>' . $row["action8_details2"] . '</p> 
									<p>' . $row["action8_details3"] . '</p> 
									<p>' . $row["action8_details4"] . '</p> 
								';
									if(!empty($row["action9"])) { 
									echo '<form  method="post">
										<input type="hidden" id="task" name="task" value="' . $row["action9"] . '"/>
										<input type="hidden" id="row" name="row" value=' . $row["id"] . '/>
										<input type="hidden" id="checked" name="checked" value=' . $row["action9_checked"] . '/>
										<input type="hidden" id="page" name="page" value=' . $page . '/> 
										<input type="hidden" id="level" name="level" value=' . $level . '/>
										<input type="hidden" id="actionNumber" name="actionNumber" value="9" /> 
										<button id="submit"'; 
											if ($row["action9_checked"] == 0) { 
												echo 'class="btn btn-warning btn-xs" name="submit" > <i class="fa fa-square-o fa-lg" aria-hidden="true"></i> ';
											} else { 
												echo 'class="btn btn-success btn-xs" name="submit" > <i class="fa fa-check-square-o fa-lg" aria-hidden="true"></i> ';
											} 
										echo '</button> <strong>' . $row["action9"] . '</strong>
									</form>
										<p>' . $row["action9_details1"] . '</p> 
										<p>' . $row["action9_details2"] . '</p> 
										<p>' . $row["action9_details3"] . '</p> 
										<p>' . $row["action9_details4"] . '</p> 
									';
									} //close 9
								} //close 8
							} //close 7
						} //close 6
					} //close 5
				} //close 4
			}// close3
	} //close 2
	
	echo '</td>
			<td style= "list-style-type: none;">
				<p>' . $row["required1"] . '</p>  
				<p>' . $row["required2"] . '</p> 
				<p>' . $row["required3"] . '</p> 
				<p>' . $row["required4"] . '</p> 
				<p>' . $row["required5"] . '</p>
				<p>' . $row["required6"] . '</p> 
				<p>' . $row["required7"] . '</p>
			</td>
			<td style= "list-style-type: none;">
				<p>' . $row["resources1"] . '</p>  
				<p>' . $row["resources2"] . '</p> 
				<p>' . $row["resources3"] . '</p> 
				<p>' . $row["resources4"] . '</p> 
				<p>' . $row["resources5"] . '</p> 
				<p>' . $row["resources6"] . '</p> 
				<p>' . $row["resources7"] . '</p> 
				<p>' . $row["resources8"] . '</p> 
			</td>
			<td>
				<p><a href="http://tid-appsvr.llnl.gov/utr/dev/docs/' . $row["doc1"] . '" target="_blank" >' . $row["doc1"] . '</a></p>
				<p><a href="http://tid-appsvr.llnl.gov/utr/dev/docs/' . $row["doc2"] . '" target="_blank" >' . $row["doc2"] . '</a></p>
				<p><a href="http://tid-appsvr.llnl.gov/utr/dev/docs/' . $row["doc3"] . '" target="_blank" >' . $row["doc3"] . '</a></p>
				<p><a href="http://tid-appsvr.llnl.gov/utr/dev/docs/' . $row["doc4"] . '" target="_blank" >' . $row["doc4"] . '</a></p>
				<p><a href="http://tid-appsvr.llnl.gov/utr/dev/docs/' . $row["doc5"] . '" target="_blank" >' . $row["doc5"] . '</a></p>
				<p><a href="http://tid-appsvr.llnl.gov/utr/dev/docs/' . $row["doc6"] . '" target="_blank" >' . $row["doc6"] . '</a></p>
			</td> 
			<td>
				<div class="btn-group">
				  <a href="l2.php?id=' . $level . '&subid=edit&table=' . $page . '&row=' . $row["id"] . '" data-toggle="tooltip" title="Edit Row" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a><br><br>
				  <a href="l2.php?id=' . $level . '&subid=fileUpload&table=' . $page . '&row=' . $row["id"] . '" data-toggle="tooltip" title="Add a file"class="btn btn-system btn-sm"><i class="fa fa-download"></i></a><br><br>
				  <button type="button" onClick="delete_rec();" alt="delete" data-toggle="tooltip" title="Delete the Row" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>
				</div>
			</td> 
		</tr> <br>';

} //close while
echo 
'</tbody>
	</table> 
	</div>                
	<br />
	<div class="row" id="invoice-footer">
		<div class="col-md-12">                
			<div class="clearfix"></div>
			<div class="invoice-buttons mr15 pt10"> 
				<a href="l2.php?id=' . $level . '&subid=add&table=' . $page . '&transit=1" class="btn btn-success pull-right" data-toggle="tooltip" title="ADD a Row"><i class="fa fa-plus"></i> Add</a>                             
          	</div>
     	</div>                               
    </div>             
	</div>        
</div>';

?>
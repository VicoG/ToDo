<?php require "includes/db.php";?>
<?php require "includes/functions.php";?>

<!-- Begin: Page Footer -->

       <?php
	// Database query
		$queryProgress  = "SELECT * FROM progress_table ";
		$queryProgress .= "WHERE id = 1 ";
	
		$resultProgress = mysqli_query($conn, $queryProgress);
		//Test if there was a query error
		if(!$resultProgress) { ?>
			<script type="text/javascript">
				alert("Database Progress Bar query failed.");
			</script>
		<?php } 
 while($progressRow = mysqli_fetch_assoc($resultProgress)) { 
	$level200Progress= ($progressRow[currentLevel200] / $progressRow[level200]) * 100;
	$level300Progress= ($progressRow[currentLevel300] / $progressRow[level300]) * 100;
	$level400Progress= ($progressRow[currentLevel400] / $progressRow[level400]) * 100;
	$level500Progress= ($progressRow[currentLevel500] / $progressRow[level500]) * 100;
	$level600Progress= ($progressRow[currentLevel600] / $progressRow[level600]) * 100;
 

echo
	'<footer id="content-footer"  class="affix">
		<div class="col-xs-4 col-sm-1 ">
			<span>Progress:</span>
		</div>

		  <div class="col-xs-4 col-sm-2">
			<div class="progress progress-bar-xl">
			  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: ' . round($level200Progress) . '%;">
			  <span class="pull-left pl5 text-muted"> <i class="fa fa-truck"></i>  ' . round($level200Progress) . '%  First Response </span>
			  </div>
			</div>
		  </div>
				

		  <div class="col-xs-4 col-sm-2">
			<div class="progress progress-bar-xl">
			  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:' . round($level300Progress) . '%;">
			  <span class="pull-left pl5 text-muted"> <i class="fa fa-code-fork"></i>  ' . round($level300Progress) . '%  Characterization </span>
			  </div>
			</div>
		  </div>


		  <div class="col-xs-4 col-sm-2">
			<div class="progress progress-bar-xl">
			  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:' . round($level400Progress) . '%;">
			  	<span class="pull-left pl5 text-muted"> <i class="fa fa-exclamation-triangle"></i>  ' . round($level400Progress) . '%  Decontamination </p>
			  </div>
			</div>
		  </div>


		  <div class="col-xs-4 col-sm-2">
			<div class="progress progress-bar-xl">
			  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:' . round($level500Progress) . '%;">
			  <span class="pull-left pl5 text-muted"><i class="fa fa-building"></i>  ' . round($level500Progress) . '%  Clearance </span>
			  </div>
			</div>
		  </div>


		  <div class="col-xs-4 col-sm-2">
			<div class="progress progress-bar-xl">
			  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:' . round($level600Progress) . '%;">
			  <span class="pull-left pl5 text-muted"><i class="fa fa-wrench"></i>  ' . round($level600Progress) . '%  Re-occupancy </span>
			  </div>
			</div>
		  </div>
	  <div class="col-xs-4 col-sm-1 text-right">
		<a href="#content" class="footer-return-top">
		  <span class="fa fa-arrow-up"></span>
		</a>
	  </div>
</footer>'; 
 
 }?>

 
 
 
 
 
 
  <!-- End: Page Footer -->


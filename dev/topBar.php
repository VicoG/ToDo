<?php require "includes/db.php";?>
<?php require "includes/functions.php";?>
<?php		

$resultProgress= progressBarQuery();
 while($progressRow = mysqli_fetch_assoc($resultProgress)) { 
	$level200Progress= ($progressRow[currentLevel200] / $progressRow[level200]) * 100;
	$level300Progress= ($progressRow[currentLevel300] / $progressRow[level300]) * 100;
	$level400Progress= ($progressRow[currentLevel400] / $progressRow[level400]) * 100;
	$level500Progress= ($progressRow[currentLevel500] / $progressRow[level500]) * 100;
	$level600Progress= ($progressRow[currentLevel600] / $progressRow[level600]) * 100;
	
	
echo
    '<div id="topbar-dropmenu" class="alt"  style="background-color:#bfd4f3;">	 
	  
	  	<div class="topbar-menu row mt10 pt30">
			<div class="col-xs-4 col-sm-1 " style="visibility: hidden;">
			<p ><i class="fa fa-wrench"></i> Reoccupancy Progress</p>
			</div>
			<div class="col-xs-4 col-sm-2">
          		<h4 class="text-warning text-center"><i class="fa fa-truck"></i>
              	<span class="sidebar-title">First Response (200)</span></h4>
			</div>
			<div class="col-xs-4 col-sm-2">
			<h4 class="text-danger text-center"><i class="fa fa-code-fork"></i> Characterization (300)</h4>
			</div>
			<div class="col-xs-4 col-sm-2">
			<h4 class="text-danger text-center"><i class="fa fa-exclamation-triangle"></i> Decontamination (400) </h4>
			</div>
			<div class="col-xs-4 col-sm-2">
			<h4 class="text-danger text-center"><i class="fa fa-building"></i> Clearance (500)</h4>
			</div>
			<div class="col-xs-4 col-sm-2">
			<h4 class="text-success text-center"><i class="fa fa-wrench"></i> Re-occupancy (600)</h4>
			</div>
			
		</div>
        <div class="row">
			<div class="col-xs-4 col-sm-1" style="visibility: hidden;">
			<p ><i class="fa fa-wrench"></i> Reoccupancy Progress</p>
			</div>
		 
            	<!-- Progress 200 -->
		  <div class="col-xs-4 col-sm-2">
			<div class="progress progress-bar-xl">
			  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:' . round($level200Progress) . '%;">
			  </div>
			</div>
			<h4 class="text-warning text-center">' . round($level200Progress) . ' %</h4>
		  </div>
				

            	<!-- Progress 300 -->
		  <div class="col-xs-4 col-sm-2">
			<div class="progress progress-bar-xl">
			  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:' . round($level300Progress) . '%;">
			  </div>
			</div>
			<h4 class="text-danger text-center">' . round($level300Progress) . ' %</h4>
		  </div>


            	<!-- Progress 400 -->
		  <div class="col-xs-4 col-sm-2">
			<div class="progress progress-bar-xl">
			  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:' . round($level400Progress) . '%;">
			  </div>
			</div>
			<h4 class="text-danger text-center">' . round($level400Progress) . ' %</h4>
		  </div>


            	<!-- Progress 500 -->
		  <div class="col-xs-4 col-sm-2">
			<div class="progress progress-bar-xl">
			  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:' . round($level500Progress) . '%;">
			  </div>
			</div>
			<h4 class="text-danger text-center">' . round($level500Progress) . ' %</h4>
		  </div>


            	<!-- Progress 600 -->
		  <div class="col-xs-4 col-sm-2">
			<div class="progress progress-bar-xl">
			  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:' . round($level600Progress) . '%;">
			  </div>
			</div>
			<h4 class="text-success text-center">' . round($level600Progress) . ' %</h4>
		  </div>
        </div>
      </div>
	  
	  
      <header id="topbar" class="mt40 pt10">

		<div class="topbar-left">
		<ol class="breadcrumb">
			<li class="crumb-active">
			<span class="fa fa-code-fork"></span> Characterization</span></li>
			</ol>
		</div>
				
		<div class="topbar-right mr40 pr40">
		  <a id="progressBtn" class="topbar-menu-toggle btn btn-sm" data-toggle="button">Progress 
			  <span class="ad ad-wand"></span>
		  </a>
		</div>
		
	</header>';
	  } 
 ?>
	 
	  
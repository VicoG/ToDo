<?php require "includes/db.php";?>

<!-- Start: Sidebar Menu -->
		

       	<ul class="nav sidebar-menu ">
			<li class="sidebar-label pt20 "><span class="text-system ">Welcome <?php echo htmlentities($_SESSION["username"]); ?></span></li>
			
			<?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { 
			echo '<li><a href="manage_admins.php"><span class="fa fa-tachometer text-system" ></span><span class="sidebar-title text-system"> Administrator MENU </span></a></li>';
			 } ?>
          	<li class="sidebar-label pt20">Menu</li>
			<li class="active">
            <a href="index.php"><span class="glyphicon glyphicon-home"></span><span class="sidebar-title">Dashboard</span></a>
            </li>
			<li class="active">
            <a href="completedTasks.php">
              <span class="glyphicon glyphicon-book"></span>
              <span class="sidebar-title">Completed Tasks</span>
            </a>
            </li>

			<li class="active">
                <a href="documents.php"><span class="fa fa-files-o text-primary"></span><span class="sidebar-title" >Document Management</span></a>
            </li>
            <li class="active">
            	<a href="UTR_RRS_STRATEGY_FRAMEWORK_DRAFT_REVIEW_R10_RF.pptx" target="_blank"><span class="fa fa-link text-info"></span><span class="sidebar-title">Decision flowchart</span></a>
            </li>

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


          
          <li class="sidebar-label pt25 pb10"><span class="text-warning ">Response Progress</span></li>
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
		  
          <li class="sidebar-stat">
          	<a href="#projectOne" class="fs11">
            	<span class="fa fa-truck"></span>
              	<span class="sidebar-title text-muted">First Response (200)</span>
              	<span class="pull-right mr20 text-warning"><?php echo(round($level200Progress)); ?> %</span>
              	<div class="progress progress-bar-xs mh20 mb10">
                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo(round($level200Progress)); ?>%">
                </div>
              </div>
            </a>
          </li>
          
          <li class="sidebar-label pt25 pb10"><span class="text-danger ">Remediation Progress</span></li>

          <li class="sidebar-stat">
          	<a href="#projectOne" class="fs11">
            	<span class="fa fa-code-fork"></span>
              	<span class="sidebar-title text-muted"> Characterization (300)</span>
              	<span class="pull-right mr20 text-danger"><?php echo(round($level300Progress)); ?>%</span>
              	<div class="progress progress-bar-xs mh20 mb10">
                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo(round($level300Progress)); ?>%">
                </div>
              </div>
            </a>
          </li>
          <li class="sidebar-stat">
          	<a href="#projectOne" class="fs11">
            	<span class="fa fa-exclamation-triangle"></span>
              	<span class="sidebar-title text-muted">Decontamination (400)</span>
              	<span class="pull-right mr20 text-danger"><?php echo(round($level400Progress)); ?>%</span>
              	<div class="progress progress-bar-xs mh20 mb10">
                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo(round($level400Progress)); ?>%">
                </div>
              </div>
            </a>
          </li>
          <li class="sidebar-stat">
          	<a href="#projectOne" class="fs11">
            	<span class="fa fa-building"></span>
              	<span class="sidebar-title text-muted">Clearance (500)</span>
              	<span class="pull-right mr20 text-danger"><?php echo(round($level500Progress)); ?>%</span>
              	<div class="progress progress-bar-xs mh20 mb10">
                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo(round($level500Progress)); ?>%">
                </div>
              </div>
            </a>
          </li>

			
            
          <li class="sidebar-label pt25 pb10"><span class="text-success ">Restoration Progress</span></li>

          <li class="sidebar-stat">
          	<a href="#projectOne" class="fs11">
            	<span class="fa fa-wrench"></span>
              	<span class="sidebar-title text-muted">Restoration/Reoccupancy (600)</span>
              	<span class="pull-right mr20 text-success"><?php echo(round($level600Progress)); ?>%</span>
              	<div class="progress progress-bar-xs mh20 mb10">
                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo(round($level600Progress)); ?>%">
                </div>
              </div>
            </a>
          </li>
          <?php }?>
          







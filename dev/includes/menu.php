<?php require "includes/db.php";?>

<!-- Start: Sidebar Menu -->
		

       	<ul class="nav sidebar-menu">
			<li class="sidebar-label pt20 "><span class="text-system ">Welcome <?php echo htmlentities($_SESSION["username"]); ?></span></li>
			
			<?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { 
			echo '<li><a href="manage_admins.php"><span class="fa fa-tachometer text-system" ></span><span class="sidebar-title text-system"> Administrator MENU </span></a></li>';
			 } ?>
          	
			<li><a href="index.php"><span class="glyphicon glyphicon-home text-info"></span><span class="sidebar-title text-info">  Home</span></a></li>

			<li class="sidebar-label pt15">Decision Framework</li>
			<!-- Start: Notification Nav -->
			<?php
            	$menuOpen = $_GET['id'];
            	$active = $_GET['subid'];
			?>
            <li>
                <a class="accordion-toggle <?php echo ($menuOpen == '100' ? "menu-open" : ""); ?>" href="#">
                    <span class="fa fa-comments"></span>
                    <span class="sidebar-title">Notification (100)</span>
                    <span class="caret"></span>
                </a>
            	<ul class="nav sub-nav">              		                                                                                
					<li class="<?php echo ($active == '100' ? "active" : ""); ?>"><a href="l2.php?id=100&subid=100"><span class="sidebar-title">Emergency Center Incident (100)</span><span class="sidebar-title-tray"><img src="start.png" style="width:20px;" class="img-responsive" alt="Responsive image" /></span></a></li>
					<li class="<?php echo ($active == '101' ? "active" : ""); ?>"><a href="l2.php?id=100&subid=101"><span class="sidebar-title">suspected Release Identified (101)</span><span class="sidebar-title-tray"><img src="round_rec.png" style="width:20px;" class="img-responsive" alt="Responsive image" /></span></a></li>
					<li class="<?php echo ($active == '102' ? "active" : ""); ?>"><a href="l2.php?id=100&subid=102"><span class="sidebar-title">Appropriate Agencies Notified (102)</span><span class="sidebar-title-tray"><img src="action.png" style="width:20px;" class="img-responsive" alt="Responsive image" /></span></a></li>
					<li class="<?php echo ($active == '103' ? "active" : ""); ?>"><a href="l2.php?id=100&subid=103"><span class="sidebar-title">Alert Additional Resources (103)</span><span class="sidebar-title-tray"><img src="action.png" style="width:20px;" class="img-responsive" alt="Responsive image" /></span></a></li>
					<li class="<?php echo ($active == '104' ? "active" : ""); ?>"><a href="l2.php?id=100&subid=104"><span class="sidebar-title">No Threat (104)</span><span class="sidebar-title-tray"><img src="problem_resolved.png" style="width:20px;" class="img-responsive" alt="Responsive image" /></span></a></li>
					</ul>                
     		</li>  <!-- End: Notification Nav -->

            <!-- Start: First Response Nav -->
            
            <li>
                <a class="accordion-toggle <?php echo ($menuOpen == '200' ? "menu-open" : ""); ?>" href="#">
                    <span class="fa fa-truck"></span>
                    <span class="sidebar-title">First Response (200)</span>
                    <span class="caret"></span>
                </a>
            	<ul class="nav sub-nav">              		                                                                                
                    <li class="<?php echo ($active == '200' ? "active" : ""); ?>"><a href="l2.php?id=200&subid=200"><span class="sidebar-title">Initial Threat Assessment (200)</span><span class="sidebar-title-tray"><img src="action.png" style="width:20px;" class="img-responsive" alt="Responsive image" /></span></a></li>
                    <li class="<?php echo ($active == '201' ? "active" : ""); ?>"><a href="l2.php?id=200&subid=201"><span class="sidebar-title">Suspect Bioagent (201)</span><span class="sidebar-title-tray"><img src="question.png" style="width:20px;" class="img-responsive" alt="Responsive image" /></span></a></li>
                    <li class="<?php echo ($active == '202' ? "active" : ""); ?>"><a href="l2.php?id=200&subid=202"><span class="sidebar-title">No bioagent (202)</span><span class="sidebar-title-tray"><img src="problem_resolved.png" style="width:20px;" class="img-responsive" alt="Responsive image" /></span></a></li>
                    <li class="<?php echo ($active == '203' ? "active" : ""); ?>"><a href="l2.php?id=200&subid=203"><span class="sidebar-title">Additional HAZMAT Actions (203)</span><span class="sidebar-title-tray"><img src="question.png" style="width:20px;" class="img-responsive" alt="Responsive image" /></span></a></li>
                    <li class="<?php echo ($active == '204' ? "active" : ""); ?>"><a href="l2.php?id=200&subid=204"><span class="sidebar-title">Initial Control Actions (204)</span><span class="sidebar-title-tray"><img src="action.png" style="width:20px;" class="img-responsive" alt="Responsive image" /></span></a></li>
                    <li class="<?php echo ($active == '205' ? "active" : ""); ?>"><a href="l2.php?id=200&subid=205"><span class="sidebar-title">Initial Response Actions (205)</span><span class="sidebar-title-tray"><img src="action.png" style="width:20px;" class="img-responsive" alt="Responsive image" /></span></a></li>
                    <li class="<?php echo ($active == '206' ? "active" : ""); ?>"><a href="l2.php?id=200&subid=206"><span class="sidebar-title">Identify Agent/Concentration (206)</span><span class="sidebar-title-tray"><img src="action.png" style="width:20px;" class="img-responsive" alt="Responsive image" /></span></a></li>
                    <li class="<?php echo ($active == '207' ? "active" : ""); ?>"><a href="l2.php?id=200&subid=207"><span class="sidebar-title">Suspected Pathogen (207)</span><span class="sidebar-title-tray"><img src="question.png" style="width:20px;" class="img-responsive" alt="Responsive image" /></span></a></li>
                    <li class="<?php echo ($active == '208' ? "active" : ""); ?>"><a href="l2.php?id=200&subid=208"><span class="sidebar-title">Public Health Assessment (208)</span><span class="sidebar-title-tray"><img src="action.png" style="width:20px;" class="img-responsive" alt="Responsive image" /></span></a></li>
                    <li class="<?php echo ($active == '209' ? "active" : ""); ?>"><a href="l2.php?id=200&subid=209"><span class="sidebar-title">Agent confirmed and/or viable (209)</span><span class="sidebar-title-tray"><img src="question.png" style="width:20px;" class="img-responsive" alt="Responsive image" /></span></a></li>
                    <li class="<?php echo ($active == '210' ? "active" : ""); ?>"><a href="l2.php?id=200&subid=210"><span class="sidebar-title">Agent Persistent/Infectious (210)</span><span class="sidebar-title-tray"><img src="question.png" style="width:20px;" class="img-responsive" alt="Responsive image" /></span></a></li>
                    <li class="<?php echo ($active == '211' ? "active" : ""); ?>"><a href="l2.php?id=200&subid=211"><span class="sidebar-title">Risk Communication (211)</span><span class="sidebar-title-tray"><img src="round_rec.png" style="width:20px;" class="img-responsive" alt="Responsive image" /></span></a></li>
                    <li class="<?php echo ($active == '212' ? "active" : ""); ?>"><a href="l2.php?id=200&subid=212"><span class="sidebar-title">No threat (212)</span><span class="sidebar-title-tray"><img src="problem_resolved.png" style="width:20px;" class="img-responsive" alt="Responsive image" /></span></a></li>
                    <li class="<?php echo ($active == '213' ? "active" : ""); ?>"><a href="l2.php?id=200&subid=213"><span class="sidebar-title">Confirm Biotoxin (213)</span><span class="sidebar-title-tray"><img src="action.png" style="width:20px;" class="img-responsive" alt="Responsive image" /></span></a></li>
                    <li class="<?php echo ($active == '214' ? "active" : ""); ?>"><a href="l2.php?id=200&subid=214"><span class="sidebar-title">Concentration to cause Injury/Disease (214)</span><span class="sidebar-title-tray"><img src="question.png" style="width:20px;" class="img-responsive" alt="Responsive image" /></span></a></li>
                    <li class="<?php echo ($active == '215' ? "active" : ""); ?>"><a href="l2.php?id=200&subid=215"><span class="sidebar-title">Response/Operational Controls (215)</span><span class="sidebar-title-tray"><img src="action.png" style="width:20px;" class="img-responsive" alt="Responsive image" /></span></a></li>
                    <li class="<?php echo ($active == '216' ? "active" : ""); ?>"><a href="l2.php?id=200&subid=216"><span class="sidebar-title">Emergency Situation Stabilized (216)</span><span class="sidebar-title-tray"><img src="round_rec.png" style="width:20px;" class="img-responsive" alt="Responsive image" /></span></a></li>                         
            	</ul>                
     		</li>
			<!-- End: First Response Nav -->
            <!-- Start: Characterization Nav -->
            <li>
                <a class="accordion-toggle <?php echo ($menuOpen == '300' ? "menu-open" : ""); ?>" href="#">
                    <span class="fa fa-code-fork"></span>
                    <span class="sidebar-title">Characterization (300)</span>
                    <span class="caret"></span>
                </a>
            	<ul class="nav sub-nav">              		                                                                                
                    <li class="<?php echo ($active == '300' ? "active" : ""); ?>"><a href="l2.php?id=300&subid=300"><span class="sidebar-title">Rapid System Characterization (300)</span><span class="sidebar-title-tray"><img src="round_rec.png" style="width:20px;" class="img-responsive" alt="Responsive image" /></span></a></li>
                    <li class="<?php echo ($active == '301' ? "active" : ""); ?>"><a href="l2.php?id=300&subid=301"><span class="sidebar-title">Identify and Prioritize Area (301)</span><span class="sidebar-title-tray"><img src="action.png" style="width:20px;" class="img-responsive" alt="Responsive image" /></span></a></li>
                    <li class="<?php echo ($active == '302' ? "active" : ""); ?>"><a href="l2.php?id=300&subid=302"><span class="sidebar-title">Conduct Detailed Characterization (302)</span><span class="sidebar-title-tray"><img src="action.png" style="width:20px;" class="img-responsive" alt="Responsive image" /></span></a></li>
                    <li class="<?php echo ($active == '303' ? "active" : ""); ?>"><a href="l2.php?id=300&subid=303"><span class="sidebar-title">Determine Site Characterizations (303)</span><span class="sidebar-title-tray"><img src="action.png" style="width:20px;" class="img-responsive" alt="Responsive image" /></span></a></li>
                    <li class="<?php echo ($active == '304' ? "active" : ""); ?>"><a href="l2.php?id=300&subid=304"><span class="sidebar-title">Evaluate Initial Containment (304)</span><span class="sidebar-title-tray"><img src="action.png" style="width:20px;" class="img-responsive" alt="Responsive image" /></span></a></li>
                    <li class="<?php echo ($active == '305' ? "active" : ""); ?>"><a href="l2.php?id=300&subid=305"><span class="sidebar-title">Sampling and Analysis Strategies (305)</span><span class="sidebar-title-tray"><img src="action.png" style="width:20px;" class="img-responsive" alt="Responsive image" /></span></a></li>
                    <li class="<?php echo ($active == '306' ? "active" : ""); ?>"><a href="l2.php?id=300&subid=306"><span class="sidebar-title">Environmental Risk Assessment (306)</span><span class="sidebar-title-tray"><img src="action.png" style="width:20px;" class="img-responsive" alt="Responsive image" /></span></a></li>
                    <li class="<?php echo ($active == '307' ? "active" : ""); ?>"><a href="l2.php?id=300&subid=307"><span class="sidebar-title">Clear Goals Established (307)</span><span class="sidebar-title-tray"><img src="round_rec.png" style="width:20px;" class="img-responsive" alt="Responsive image" /></span></a></li>
                    <li class="<?php echo ($active == '308' ? "active" : ""); ?>"><a href="l2.php?id=300&subid=308"><span class="sidebar-title">Eliminate Human Health Impacts (308)</span><span class="sidebar-title-tray"><img src="question.png" style="width:20px;" class="img-responsive" alt="Responsive image" /></span></a></li>
                    <li class="<?php echo ($active == '309' ? "active" : ""); ?>"><a href="l2.php?id=300&subid=309"><span class="sidebar-title">Is there potential impact (309)</span><span class="sidebar-title-tray"><img src="question.png" style="width:20px;" class="img-responsive" alt="Responsive image" /></span></a></li>
                    <li class="<?php echo ($active == '310' ? "active" : ""); ?>"><a href="l2.php?id=300&subid=310"><span class="sidebar-title">Determine media affected (310)</span><span class="sidebar-title-tray"><img src="action.png" style="width:20px;" class="img-responsive" alt="Responsive image" /></span></a></li>
                    <li class="<?php echo ($active == '311' ? "active" : ""); ?>"><a href="l2.php?id=300&subid=311"><span class="sidebar-title">Unacceptable contamination (311)</span><span class="sidebar-title-tray"><img src="question.png" style="width:20px;" class="img-responsive" alt="Responsive image" /></span></a></li>
                    <li class="<?php echo ($active == '312' ? "active" : ""); ?>"><a href="l2.php?id=300&subid=312"><span class="sidebar-title">Are Stakeholder Needs Addressed (312)</span><span class="sidebar-title-tray"><img src="question.png" style="width:20px;" class="img-responsive" alt="Responsive image" /></span></a></li>
                    <li class="<?php echo ($active == '313' ? "active" : ""); ?>"><a href="l2.php?id=300&subid=313"><span class="sidebar-title">Address Environmental Concerns (313)</span><span class="sidebar-title-tray"><img src="question.png" style="width:20px;" class="img-responsive" alt="Responsive image" /></span></a></li>
                    <li class="<?php echo ($active == '314' ? "active" : ""); ?>"><a href="l2.php?id=300&subid=314"><span class="sidebar-title">Allow Re-entry and Operations (314)</span><span class="sidebar-title-tray"><img src="round_rec.png" style="width:20px;" class="img-responsive" alt="Responsive image" /></span></a></li>
                    <li class="<?php echo ($active == '315' ? "active" : ""); ?>"><a href="l2.php?id=300&subid=315"><span class="sidebar-title">Reassess Medical Options (315)</span><span class="sidebar-title-tray"><img src="action.png" style="width:20px;" class="img-responsive" alt="Responsive image" /></span></a></li>
                    <li class="<?php echo ($active == '316' ? "active" : ""); ?>"><a href="l2.php?id=300&subid=316"><span class="sidebar-title">Reassess Risk-Managment Options (316)</span><span class="sidebar-title-tray"><img src="action.png" style="width:20px;" class="img-responsive" alt="Responsive image" /></span></a></li>                         
            	                         
            	</ul>                
     		</li>
			<!-- End: Characterization Nav -->
            <!-- Start: Decontamination Nav -->
            <li>
                <a class="accordion-toggle <?php echo ($menuOpen == '400' ? "menu-open" : ""); ?>" href="#">
                    <span class="fa fa-exclamation-triangle"></span>
                    <span class="sidebar-title">Decontamination (400)</span>
                    <span class="caret"></span>
                </a>
				<ul class="nav sub-nav">              		                                                                                
                    <li class="<?php echo ($active == '400' ? "active" : ""); ?>"><a href="l2.php?id=400&subid=400"><span class="sidebar-title">Evaluate Decontamination Options (400)</span><span class="sidebar-title-tray"><img src="action.png" style="width:20px;" class="img-responsive" alt="Responsive image" /></span></a></li>
                    <li class="<?php echo ($active == '401' ? "active" : ""); ?>"><a href="l2.php?id=400&subid=401"><span class="sidebar-title">Decontaminate in Situ (401)</span><span class="sidebar-title-tray"><img src="question.png" style="width:20px;" class="img-responsive" alt="Responsive image" /></span></a></li>
                    <li class="<?php echo ($active == '402' ? "active" : ""); ?>"><a href="l2.php?id=400&subid=402"><span class="sidebar-title">Disposal of Items (402)</span><span class="sidebar-title-tray"><img src="question.png" style="width:20px;" class="img-responsive" alt="Responsive image" /></span></a></li>
                    <li class="<?php echo ($active == '403' ? "active" : ""); ?>"><a href="l2.php?id=400&subid=403"><span class="sidebar-title">Develop Decontamination Strategy (403)</span><span class="sidebar-title-tray"><img src="action.png" style="width:20px;" class="img-responsive" alt="Responsive image" /></span></a></li>
                    <li class="<?php echo ($active == '404' ? "active" : ""); ?>"><a href="l2.php?id=400&subid=404"><span class="sidebar-title">Determine Requirements (404)</span><span class="sidebar-title-tray"><img src="action.png" style="width:20px;" class="img-responsive" alt="Responsive image" /></span></a></li>
                    <li class="<?php echo ($active == '405' ? "active" : ""); ?>"><a href="l2.php?id=400&subid=405"><span class="sidebar-title">Treatment and Disposal Site (405)</span><span class="sidebar-title-tray"><img src="action.png" style="width:20px;" class="img-responsive" alt="Responsive image" /></span></a></li>
                    <li class="<?php echo ($active == '406' ? "active" : ""); ?>"><a href="l2.php?id=400&subid=406"><span class="sidebar-title">Remediation Action Plan (406)</span><span class="sidebar-title-tray"><img src="action.png" style="width:20px;" class="img-responsive" alt="Responsive image" /></span></a></li>
                    <li class="<?php echo ($active == '407' ? "active" : ""); ?>"><a href="l2.php?id=400&subid=407"><span class="sidebar-title">Conduct Decontamination (407)</span><span class="sidebar-title-tray"><img src="action.png" style="width:20px;" class="img-responsive" alt="Responsive image" /></span></a></li>
                    <li class="<?php echo ($active == '408' ? "active" : ""); ?>"><a href="l2.php?id=400&subid=408"><span class="sidebar-title">Verification Criteria (408)</span><span class="sidebar-title-tray"><img src="question.png" style="width:20px;" class="img-responsive" alt="Responsive image" /></span></a></li>
                               
            	</ul>                
     		</li><!-- End: Decontamination Nav -->

            <!-- Start: Clearance Nav -->
            <li>
                <a class="accordion-toggle <?php echo ($menuOpen == '500' ? "menu-open" : ""); ?>" href="#">
                    <span class="fa fa-building"></span>
                    <span class="sidebar-title">Clearance (500)</span>
                    <span class="caret"></span>
                </a>
            	<ul class="nav sub-nav">              		                                                                                
                    <li class="<?php echo ($active == '500' ? "active" : ""); ?>"><a href="l2.php?id=500&subid=500"><span class="sidebar-title">Final Risk Assessment (500)</span><span class="sidebar-title-tray"><img src="action.png" style="width:20px;" class="img-responsive" alt="Responsive image" /></span></a></li>
                    <li class="<?php echo ($active == '501' ? "active" : ""); ?>"><a href="l2.php?id=500&subid=501"><span class="sidebar-title">Clearance Goals Met (501)</span><span class="sidebar-title-tray"><img src="question.png" style="width:20px;" class="img-responsive" alt="Responsive image" /></span></a></li>
                    <li class="<?php echo ($active == '502' ? "active" : ""); ?>"><a href="l2.php?id=500&subid=502"><span class="sidebar-title">Environmental Monitoring Actions (502)</span><span class="sidebar-title-tray"><img src="action.png" style="width:20px;" class="img-responsive" alt="Responsive image" /></span></a></li>
                    <li class="<?php echo ($active == '503' ? "active" : ""); ?>"><a href="l2.php?id=500&subid=503"><span class="sidebar-title">Regulatory Needs Addressed (503)</span><span class="sidebar-title-tray"><img src="question.png" style="width:20px;" class="img-responsive" alt="Responsive image" /></span></a></li>
                    <li class="<?php echo ($active == '504' ? "active" : ""); ?>"><a href="l2.php?id=500&subid=504"><span class="sidebar-title">Long Term Issues Addressed (504)</span><span class="sidebar-title-tray"><img src="round_rec.png" style="width:20px;" class="img-responsive" alt="Responsive image" /></span></a></li>
                    <li class="<?php echo ($active == '505' ? "active" : ""); ?>"><a href="l2.php?id=500&subid=505"><span class="sidebar-title">Resume Operations (505)</span><span class="sidebar-title-tray"><img src="round_rec.png" style="width:20px;" class="img-responsive" alt="Responsive image" /></span></a></li>
                    <li class="<?php echo ($active == '506' ? "active" : ""); ?>"><a href="l2.php?id=500&subid=506"><span class="sidebar-title">EEC Recommendation (506)</span><span class="sidebar-title-tray"><img src="round_rec.png" style="width:20px;" class="img-responsive" alt="Responsive image" /></span></a></li>
                    <li class="<?php echo ($active == '507' ? "active" : ""); ?>"><a href="l2.php?id=500&subid=507"><span class="sidebar-title">Additional Decontamination (507)</span><span class="sidebar-title-tray"><img src="question.png" style="width:20px;" class="img-responsive" alt="Responsive image" /></span></a></li>
                    <li class="<?php echo ($active == '508' ? "active" : ""); ?>"><a href="l2.php?id=500&subid=508"><span class="sidebar-title">Modify Clearance Goals (508)</span><span class="sidebar-title-tray"><img src="question.png" style="width:20px;" class="img-responsive" alt="Responsive image" /></span></a></li>
                               
            	</ul>              
     		</li><!-- End: Clearance Nav -->

            <!-- Start: Restoration/Reoccupancy Nav -->
            <li>
                <a class="accordion-toggle <?php echo ($menuOpen == '600' ? "menu-open" : ""); ?>" href="#">
                    <span class="fa fa-wrench"></span>
                    <span class="sidebar-title">Reoccupancy (600)</span>
                    <span class="caret"></span>
                </a>
            	<ul class="nav sub-nav">              		                                                                                
					<li class="<?php echo ($active == '600' ? "active" : ""); ?>"><a href="l2.php?id=600&subid=600"><span class="sidebar-title">Implement Recovery Plans (600)</span><span class="sidebar-title-tray"><img src="action.png" style="width:20px;" class="img-responsive" alt="Responsive image" /></span></a></li>
					<li class="<?php echo ($active == '601' ? "active" : ""); ?>"><a href="l2.php?id=600&subid=601"><span class="sidebar-title">Conduct Renovations/ Enhancements (601)</span><span class="sidebar-title-tray"><img src="action.png" style="width:20px;" class="img-responsive" alt="Responsive image" /></span></a></li>
					<li class="<?php echo ($active == '602' ? "active" : ""); ?>"><a href="l2.php?id=600&subid=602"><span class="sidebar-title">Reoccupancy Criteria Met (602)</span><span class="sidebar-title-tray"><img src="question.png" style="width:20px;" class="img-responsive" alt="Responsive image" /></span></a></li>
					<li class="<?php echo ($active == '603' ? "active" : ""); ?>"><a href="l2.php?id=600&subid=603"><span class="sidebar-title">Phased Restart (603)</span><span class="sidebar-title-tray"><img src="action.png" style="width:20px;" class="img-responsive" alt="Responsive image" /></span></a></li>
					<li class="<?php echo ($active == '604' ? "active" : ""); ?>"><a href="l2.php?id=600&subid=604"><span class="sidebar-title">Continue Monitoring (604)</span><span class="sidebar-title-tray"><img src="action.png" style="width:20px;" class="img-responsive" alt="Responsive image" /></span></a></li>
					<li class="<?php echo ($active == '605' ? "active" : ""); ?>"><a href="l2.php?id=600&subid=605"><span class="sidebar-title">Recovery Complete (605)</span><span class="sidebar-title-tray"><img src="problem_resolved.png" style="width:20px;" class="img-responsive" alt="Responsive image" /></span></a></li>
            	</ul>                
     		</li>
			<!-- End: Restoration/Reoccupancy Nav -->
            
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

          
          <li class="sidebar-label pt25 pb10">Response Progress</li>

		  
          <li class="sidebar-stat">
          	<a href="#projectOne" class="fs11">
            	<span class="fa fa-truck"></span>
              	<span class="sidebar-title text-muted">First Response (200)</span>
              	<span class="pull-right mr20 text-muted"><?php echo(round($level200Progress)); ?> %</span>
              	<div class="progress progress-bar-xs mh20 mb10">
                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo(round($level200Progress)); ?>%">
                </div>
              </div>
            </a>
          </li>
          
          <li class="sidebar-label pt25 pb10">Remediation Progress</li>

          <li class="sidebar-stat">
          	<a href="#projectOne" class="fs11">
            	<span class="fa fa-code-fork"></span>
              	<span class="sidebar-title text-muted"> Characterization (300)</span>
              	<span class="pull-right mr20 text-muted"><?php echo(round($level300Progress)); ?>%</span>
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
              	<span class="pull-right mr20 text-muted"><?php echo(round($level400Progress)); ?>%</span>
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
              	<span class="pull-right mr20 text-muted"><?php echo(round($level500Progress)); ?>%</span>
              	<div class="progress progress-bar-xs mh20 mb10">
                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo(round($level500Progress)); ?>%">
                </div>
              </div>
            </a>
          </li>

			
            
          <li class="sidebar-label pt25 pb10">Restoration Progress</li>

          <li class="sidebar-stat">
          	<a href="#projectOne" class="fs11">
            	<span class="fa fa-wrench"></span>
              	<span class="sidebar-title text-muted">Restoration/Reoccupancy (600)</span>
              	<span class="pull-right mr20 text-muted"><?php echo(round($level600Progress)); ?>%</span>
              	<div class="progress progress-bar-xs mh20 mb10">
                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo(round($level600Progress)); ?>%">
                </div>
              </div>
            </a>
          </li>
          <?php }?>
          







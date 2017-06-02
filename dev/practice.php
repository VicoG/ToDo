<?php ob_start() ?>

<!DOCTYPE html>

<html>



<head>

  <!-- Meta, title, CSS, favicons, etc. -->

  <meta charset="utf-8">

  <title>UTR</title>

  <meta name="keywords" content="HTML5 Bootstrap 3 Admin Template UI Theme" />

  <meta name="description" content="AbsoluteAdmin - A Responsive HTML5 Admin UI Framework">

  <meta name="author" content="AbsoluteAdmin">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">



	<!-- Font CSS (Via CDN) -->
	<link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700'>
	<link rel="stylesheet" type="text/css" href="vendor/plugins/magnific/magnific-popup.css">
	
	<!-- FullCalendar Plugin CSS -->
	<link rel="stylesheet" type="text/css" href="vendor/plugins/fullcalendar/fullcalendar.min.css">
	
	<!-- Dropzone CSS -->
	<link rel="stylesheet" href="vendor/plugins/dropzone/css/dropzone.css">
	
	<!-- Theme CSS -->
	<link rel="stylesheet" type="text/css" href="assets/skin/default_skin/css/theme.css">
	
	<!-- Admin Forms CSS -->
	<link rel="stylesheet" type="text/css" href="assets/admin-tools/admin-forms/css/admin-forms.min.css">
	
	<link rel="stylesheet" type="text/css" href="assets/mods.css">
	<link rel="stylesheet" type="text/css" media="print" href="assets/printMods.css">
	
	<!-- JQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
	
	<!-- Image Resizer -->
	<script src="vendor/plugins/image-map-resizer-master/js/imageMapResizer.min.js"></script>
	
	
	
  <!-- Favicon -->

 <!-- <link rel="shortcut icon" href="assets/img/favicon.ico">-->



  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->

  <!--[if lt IE 9]>

  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>

  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>

<![endif]-->


</head>



<body class="sb-l-o sb-r-c">

<?php include "includes/db.php" ?>

  <!-- Start: Main -->

  <div id="main">



    <!-- Start: Header -->

    <header class="navbar navbar-fixed-top navbar-shadow">

      <div class="navbar-branding">

        <a class="navbar-brand" href="dashboard.html">

          <b>RAPID:</b> UTR <sub>v2.0</sub>

        </a>

        <span id="toggle_sidemenu_l" class="ad ad-lines"></span>

      </div>

      <ul class="nav navbar-nav navbar-left">

        <li class="dropdown menu-merge hidden-xs">

          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Navigation

            <span class="caret caret-tp"></span>

          </a>
            <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
			<li class="dropdown-submenu">
				<a tabindex="-1" href="#">
                    <span class="fa fa-comments"></span>
                    <span class="sidebar-title">Notification (100)</span>
                </a>
				  <ul class="dropdown-menu">
					<li><a role="menuitem" tabindex="-1" href="l2.php?id=100&subid=100"><span class="sidebar-title-tray"><img src="start.png" style="width:20px; display:inline-block;" class="img-responsive" alt="Responsive image" /></span><span class="sidebar-title">  Emergency Center Incident (100)</span></a></li>
					<li><a role="menuitem" tabindex="-1" href="l2.php?id=100&subid=101"><span class="sidebar-title"> Suspected Release Identified (101)</span></a></li>
					<li><a role="menuitem" tabindex="-1" href="l2.php?id=100&subid=102"><span class="sidebar-title">Appropriate Agencies Notified (102)</span></a></li>
					<li><a role="menuitem" tabindex="-1" href="l2.php?id=100&subid=103"><span class="sidebar-title">Alert Additional Resources (103)</span></a></li>
					<li><a role="menuitem" tabindex="-1" href="l2.php?id=100&subid=104"><span class="sidebar-title">No Threat (104)</span></a></li>
				  </ul>
            </li>
		    <li class="dropdown-submenu">
				<a tabindex="-1" href="#">
                    <span class="fa fa-truck"></span>
                    <span class="sidebar-title">First Response (200)</span>
                </a>
				  <ul class="dropdown-menu" >
				    <li role="presentation"><a href="l2.php?id=200&subid=200"><span class="sidebar-title">Initial Threat Assessment (200)</span></a></li>
                    <li role="presentation"><a href="l2.php?id=200&subid=201"><span class="sidebar-title">Suspect Bioagent (201)</span></a></li>
                    <li role="presentation"><a href="l2.php?id=200&subid=202"><span class="sidebar-title">No bioagent (202)</span></a></li>
                    <li role="presentation"><a href="l2.php?id=200&subid=203"><span class="sidebar-title">Additional HAZMAT Actions (203)</span></a></li>
                    <li role="presentation"><a href="l2.php?id=200&subid=204"><span class="sidebar-title">Initial Control Actions (204)</span></a></li>
                    <li role="presentation"><a href="l2.php?id=200&subid=205"><span class="sidebar-title">Initial Response Actions (205)</span></a></li>
                    <li role="presentation"><a href="l2.php?id=200&subid=206"><span class="sidebar-title">Identify Agent/Concentration (206)</span></a></li>
                    <li role="presentation"><a href="l2.php?id=200&subid=207"><span class="sidebar-title">Suspected Pathogen (207)</span></a></li>
                    <li role="presentation"><a href="l2.php?id=200&subid=208"><span class="sidebar-title">Public Health Assessment (208)</span></a></li>
                    <li role="presentation"><a href="l2.php?id=200&subid=209"><span class="sidebar-title">Agent confirmed and/or viable (209)</span></a></li>
                    <li role="presentation"><a href="l2.php?id=200&subid=210"><span class="sidebar-title">Agent Persistent/Infectious (210)</span></a></li>
                    <li role="presentation"><a href="l2.php?id=200&subid=211"><span class="sidebar-title">Risk Communication (211)</span></a></li>
                    <li role="presentation"><a href="l2.php?id=200&subid=212"><span class="sidebar-title">No threat (212)</span></a></li>
                    <li role="presentation"><a href="l2.php?id=200&subid=213"><span class="sidebar-title">Confirm Biotoxin (213)</span></a></li>
                    <li role="presentation"><a href="l2.php?id=200&subid=214"><span class="sidebar-title">Concentration to cause Injury/Disease (214)</span></a></li>
                    <li role="presentation"><a href="l2.php?id=200&subid=215"><span class="sidebar-title">Response/Operational Controls (215)</span></a></li>
                    <li role="presentation"><a href="l2.php?id=200&subid=216"><span class="sidebar-title">Emergency Situation Stabilized (216)</span></a></li>  
				  </ul>
            </li>
			<li class="dropdown-submenu">
				<a tabindex="-1" href="#">
                    <span class="fa fa-code-fork"></span>
                    <span class="sidebar-title">Characterization (300)</span>
                </a>
				  <ul class="dropdown-menu">
				    <li role="presentation"><a href="l2.php?id=300&subid=300"><span class="sidebar-title">Rapid System Characterization (300)</span></a></li>
                    <li role="presentation"><a href="l2.php?id=300&subid=301"><span class="sidebar-title">Identify and Prioritize Area (301)</span></a></li>
                    <li role="presentation"><a href="l2.php?id=300&subid=302"><span class="sidebar-title">Conduct Detailed Characterization (302)</span></a></li>
                    <li role="presentation"><a href="l2.php?id=300&subid=303"><span class="sidebar-title">Determine Site Characterizations (303)</span></a></li>
                    <li role="presentation"><a href="l2.php?id=300&subid=304"><span class="sidebar-title">Evaluate Initial Containment (304)</span></a></li>
                    <li role="presentation"><a href="l2.php?id=300&subid=305"><span class="sidebar-title">Sampling and Analysis Strategies (305)</span></a></li>
                    <li role="presentation"><a href="l2.php?id=300&subid=306"><span class="sidebar-title">Environmental Risk Assessment (306)</span></a></li>
                    <li role="presentation"><a href="l2.php?id=300&subid=307"><span class="sidebar-title">Clear Goals Established (307)</span></a></li>
                    <li role="presentation"><a href="l2.php?id=300&subid=308"><span class="sidebar-title">Eliminate Human Health Impacts (308)</span></a></li>
                    <li role="presentation"><a href="l2.php?id=300&subid=309"><span class="sidebar-title">Is there potential impact (309)</span></a></li>
                    <li role="presentation"><a href="l2.php?id=300&subid=310"><span class="sidebar-title">Determine media affected (310)</span></a></li>
                    <li role="presentation"><a href="l2.php?id=300&subid=311"><span class="sidebar-title">Unacceptable contamination (311)</span></a></li>
                    <li role="presentation"><a href="l2.php?id=300&subid=312"><span class="sidebar-title">Are Stakeholder Needs Addressed (312)</span></a></li>
                    <li role="presentation"><a href="l2.php?id=300&subid=313"><span class="sidebar-title">Address Environmental Concerns (313)</span></a></li>
                    <li role="presentation"><a href="l2.php?id=300&subid=314"><span class="sidebar-title">Allow Re-entry and Operations (314)</span></a></li>
                    <li role="presentation"><a href="l2.php?id=300&subid=315"><span class="sidebar-title">Reassess Medical Options (315)</span></a></li>
                    <li role="presentation"><a href="l2.php?id=300&subid=316"><span class="sidebar-title">Reassess Risk-Managment Options (316)</span></a></li>  
				  </ul>
            </li>
            <li class="dropdown-submenu">
				<a tabindex="-1" href="#">
                    <span class="fa fa-exclamation-triangle"></span>
                    <span class="sidebar-title">Decontamination (400)</span>
                </a>
				  <ul class="dropdown-menu">
				  <li role="presentation"><a href="l2.php?id=400&subid=400"><span class="sidebar-title">Evaluate Decontamination Options (400)</span></a></li>
                    <li role="presentation"><a href="l2.php?id=400&subid=401"><span class="sidebar-title">Decontaminate in Situ (401)</span></a></li>
                    <li role="presentation"><a href="l2.php?id=400&subid=402"><span class="sidebar-title">Disposal of Items (402)</span></a></li>
                    <li role="presentation"><a href="l2.php?id=400&subid=403"><span class="sidebar-title">Develop Decontamination Strategy (403)</span></a></li>
                    <li role="presentation"><a href="l2.php?id=400&subid=404"><span class="sidebar-title">Determine Requirements (404)</span></a></li>
                    <li role="presentation"><a href="l2.php?id=400&subid=405"><span class="sidebar-title">Treatment and Disposal Site (405)</span></a></li>
                    <li role="presentation"><a href="l2.php?id=400&subid=406"><span class="sidebar-title">Remediation Action Plan (406)</span></a></li>
                    <li role="presentation"><a href="l2.php?id=400&subid=407"><span class="sidebar-title">Conduct Decontamination (407)</span></a></li>
                    <li role="presentation"><a href="l2.php?id=400&subid=408"><span class="sidebar-title">Verification Criteria (408)</span></a></li>
				  </ul>
            </li>
            <li class="dropdown-submenu">
				<a tabindex="-1" href="#">
                    <span class="fa fa-building"></span>
                    <span class="sidebar-title">Clearance (500)</span>
                </a>
				  <ul class="dropdown-menu" >
				    <li role="presentation"><a href="l2.php?id=500&subid=500"><span class="sidebar-title">Final Risk Assessment (500)</span></a></li>
                    <li role="presentation"><a href="l2.php?id=500&subid=501"><span class="sidebar-title">Clearance Goals Met (501)</span></a></li>
                    <li role="presentation"><a href="l2.php?id=500&subid=502"><span class="sidebar-title">Environmental Monitoring Actions (502)</span></a></li>
                    <li role="presentation"><a href="l2.php?id=500&subid=503"><span class="sidebar-title">Regulatory Needs Addressed (503)</span></a></li>
                    <li role="presentation"><a href="l2.php?id=500&subid=504"><span class="sidebar-title">Long Term Issues Addressed (504)</span></a></li>
                    <li role="presentation"><a href="l2.php?id=500&subid=505"><span class="sidebar-title">Resume Operations (505)</span></a></li>
                    <li role="presentation"><a href="l2.php?id=500&subid=506"><span class="sidebar-title">EEC Recommendation (506)</span></a></li>
                    <li role="presentation"><a href="l2.php?id=500&subid=507"><span class="sidebar-title">Additional Decontamination (507)</span></a></li>
                    <li role="presentation"><a href="l2.php?id=500&subid=508"><span class="sidebar-title">Modify Clearance Goals (508)</span></a></li>
				  </ul>
            </li>
			<li class="dropdown-submenu">
				<a tabindex="-1" href="#">
                    <span class="fa fa-wrench"></span>
                    <span class="sidebar-title">Reoccupancy (600)</span>
                </a>
				  <ul class="dropdown-menu" >
				    <li role="presentation"><a href="l2.php?id=600&subid=600"><span class="sidebar-title">Implement Recovery Plans (600)</span></a></li>
					<li role="presentation"><a href="l2.php?id=600&subid=601"><span class="sidebar-title">Conduct Renovations/ Enhancements (601)</span></a></li>
					<li role="presentation"><a href="l2.php?id=600&subid=602"><span class="sidebar-title">Reoccupancy Criteria Met (602)</span></a></li>
					<li role="presentation"><a href="l2.php?id=600&subid=603"><span class="sidebar-title">Phased Restart (603)</span></a></li>
					<li role="presentation"><a href="l2.php?id=600&subid=604"><span class="sidebar-title">Continue Monitoring (604)</span></a></li>
					<li role="presentation"><a href="l2.php?id=600&subid=605"><span class="sidebar-title">Recovery Complete (605)</span></a></li>
			  </ul>
          </li>
	   </ul>
    </li>
</ul>
<!-- Document Management Dropdown -->
 <ul class="nav navbar-nav navbar-left">
	<li class="dropdown menu-merge hidden-xs">
	  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Document Management
		<span class="caret caret-tp"></span>
	  </a>
		<ul class="dropdown-menu" role="menu" >
			<li role="presentation" >
            <a href="completedTasks.php">
              <span class="text-primary"><i class="glyphicon glyphicon-book"></i> Completed Tasks</span>
            </a>
            </li>

			<li role="presentation">
                <a href="documents.php"> <span class="text-primary"><i class="fa fa-files-o"></i> Document Management</span></a>
            </li> 
            <li role="presentation" >
            	<a href="UTR_RRS_STRATEGY_FRAMEWORK_DRAFT_REVIEW_R10_RF.pptx" target="_blank"><span class="text-primary"><i class="fa fa-link"></i> Decision Flowchart</span></a>
            </li>
		</ul>
	</li>
</ul>
  <ul class="nav navbar-nav navbar-right">



	<li class="dropdown menu-merge">
	  <a href="#" class="dropdown-toggle fw600 p15" data-toggle="dropdown">
		<span class="text-system ">Welcome <?php echo htmlentities($_SESSION["username"]); ?> Steve D. </span>
		<span class="caret caret-tp hidden-xs"></span>
	  </a>
	  <ul class="dropdown-menu list-group dropdown-persist w250" role="menu">
		<li class="list-group-item">
			<?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { 
				echo '<li><a href="manage_admins.php"><span class="fa fa-tachometer text-system" ></span><span class="sidebar-title text-system"> Administrator MENU </span></a></li>';
			 } ?>
		</li>
		<li class="dropdown-footer">
		  <a href="#" class="">
		  <span class="fa fa-power-off pr5"></span> Logout </a>
		</li>
	  </ul>
	</li>
  </ul>
</header><!-- End: Header -->

    

    <!-- Start: Left Decsion Framework Sidebar -->
<aside id="sidebar_left" class="nano nano-light affix sidebar-light"> <!-- Start: Sidebar Left Content -->
<div class="sidebar-left-content nano-content" style="background-color:#7eace7;">

	<ul class="nav sidebar-menu mr15">
	<li class="sidebar-label">
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
        </div> </li> 
		
	<li class="sidebar-label text-center ">
		<div>
			<button id="toggleKey" type="button" class="btn btn-link text-muted"><i class="fa fa-arrow-up" aria-hidden="true"></i> Hide/ Show Key Strategy <i class="fa fa-arrow-down" aria-hidden="true"></i></button>
		</div>
	</li>
	
	<li class="sidebar-label" id="key">	      
     <div class="panel panel-primary">
        <div class="panel-heading">
            <span class="panel-title">Key RRS Strategy Objectives (301)</span>                    
        </div>
        <div class="panel-body text-muted">
            <p> <strong>1.</strong> Prioritize critical transit system infrastructure required to maintain or restore limited operations</p>
            <p> <strong>2.</strong> Determine potential for partial restart of non-contaminated portion of system</p>
            <p> <strong>3.</strong> Ensure isolation of contaminated areas from areas targeted for restart or continuance of operations</p> 
            <br />
        </div>
    </div></li>
	
	<li class="sidebar-label text-center">
		<div>
			<button id="toggle" type="button" class="btn btn-link text-muted"><i class="fa fa-arrow-up" aria-hidden="true"></i> Hide/ Show Sub-Steps <i class="fa fa-arrow-down" aria-hidden="true"></i></button>
		</div>
	</li>
	
	<li class="sidebar-label" >
	<div id="nav-spy"><!-- Collapse section -->
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
				<button href="l2.php?id=400&subid=400" class="btn btn-small btn-primary pull-right" type="button">To 400</button>                                                             
            </div>
		</div>
							
		<div class="panel panel-tile text-primary br-b bw5 br-primary-light">
            <div class="panel-body">                
                <p><strong>301-7</strong><span class="text-muted"> Gather/collect existing information from first response phase (sampling, epidemiological, modeling, etc.)</span></p>
				<button href="l2.php?id=300&subid=302" class="btn btn-small btn-primary pull-right" type="button">To 302</button>                                
            </div>
		</div>
		 	
		<div class="panel panel-tile text-primary br-b bw5 br-primary-light">
            <div class="panel-body">                
                <p><strong>301-8</strong><span class="text-muted"> Develop early-release clearance goals and plans for non-contaminated areas. </span></p>
				<button href="l2.php?id=500&subid=500" class="btn btn-small btn-primary pull-right" type="button">To 500</button>                              
            </div>
		</div>
	   </div> <!-- END Collapse section -->	
	  </li> 
	  

	  <li class="sidebar-label">			   
      <div class="panel panel-primary" id="p7" data-panel-color="panel-info">
        <div class="panel-heading">
            <span class="panel-title">Key RRS Strategy Objectives (300)</span>                    
        </div>
        <div class="panel-body text-muted">
            <p> <strong>1.</strong> Rapid system characterization</p>
            <p> <strong>2.</strong> Identification of contaminated and non-contaminated areas</p>
            <p> <strong>3.</strong> Establishment of clearance goals</p> 
            <p> <strong>4.</strong> Prioritized clearance sampling for phased return to service in non-contaminated areas</p> 
            <p> <strong>5.</strong> Characterization of contaminiated areas to support decontamination decisions</p>
			<p> <strong>6.</strong> Public Health to recommend potential medical options for TA workforce</p>  
            <br />
        </div>
    </div></li>

	<!--Legend-->
	<li class="sidebar-label">    
    <div class="panel panel-primary panel-border top" id="p7" data-panel-color="panel-info">
        <div class="panel-heading">
            <span class="panel-title"> Legend</span>                    
        </div>
        <div class="panel-body">                        
            <div class="legend-icons">
                <ul class="list-unstyled text-muted">
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
	</li>
  </ul>   <!-- End: Sidebar Left Menu List -->
          
	  <!-- Start: Sidebar Collapse Button -->

	  <div class="sidebar-toggle-mini">
		<a href="#">
		  <span class="fa fa-sign-out"></span>
		</a>
	  </div><!-- End: Sidebar Collapse Button -->
  </div> <!-- End: Sidebar Left Content -->
</aside>


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
	?>

	
	 <!-- Start: Topbar-Dropdown -->

      <section id="content_wrapper"><!-- Start: Content-Wrapper -->

      <div id="topbar-dropmenu" class="alt"  style="background-color:#bfd4f3;">	 <!-- Start: Topbar-Dropdown -->
	  
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
			  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo(round($level200Progress)); ?>%;">
			  </div>
			</div>
			<h4 class="text-warning text-center"><?php echo(round($level200Progress)); ?> %</h4>
		  </div>
				

            	<!-- Progress 300 -->
		  <div class="col-xs-4 col-sm-2">
			<div class="progress progress-bar-xl">
			  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo(round($level300Progress)); ?>%;">
			  </div>
			</div>
			<h4 class="text-danger text-center"><?php echo(round($level300Progress)); ?> %</h4>
		  </div>


            	<!-- Progress 400 -->
		  <div class="col-xs-4 col-sm-2">
			<div class="progress progress-bar-xl">
			  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo(round($level400Progress)); ?>%;">
			  </div>
			</div>
			<h4 class="text-danger text-center"><?php echo(round($level400Progress)); ?> %</h4>
		  </div>


            	<!-- Progress 500 -->
		  <div class="col-xs-4 col-sm-2">
			<div class="progress progress-bar-xl">
			  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo(round($level500Progress)); ?>%;">
			  </div>
			</div>
			<h4 class="text-danger text-center"><?php echo(round($level500Progress)); ?> %</h4>
		  </div>


            	<!-- Progress 600 -->
		  <div class="col-xs-4 col-sm-2">
			<div class="progress progress-bar-xl">
			  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo(round($level600Progress)); ?>%;">
			  </div>
			</div>
			<h4 class="text-success text-center"><?php echo(round($level600Progress)); ?> %</h4>
		  </div>
		<?php }?>

        </div>
      </div><!-- End: Topbar-Dropdown -->


      <!-- Start: Topbar -->

<header id="topbar" class="alt">

<div class="topbar-left">
<ol class="breadcrumb">
	<li class="crumb-active">
	<span class="fa fa-code-fork"></span> Characterization</span></li>
	</ol>
</div>
		
<div class="topbar-right">
  <a href="#" class="topbar-menu-toggle btn btn-sm" data-toggle="button">Progress 
	  <span class="ad ad-wand"></span>
  </a>
</div>

</header> <!-- End: Topbar -->

      <!-- Begin: Content -->
      <section id="content" class="animated fadeIn">

        	<div id="show"></div> 

      </section><!-- End: Content -->

    </section>


</div><!-- End: Main -->


<footer id="content-footer" class="affix">   <!-- Begin: Page Footer -->

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
	?>
	
		
		 <div class="col-xs-4 col-sm-1 ">
			<span>Progress:</span>
		</div>
            	<!-- Progress 200 -->
		  <div class="col-xs-4 col-sm-2">
			<div class="progress progress-bar-xl">
			  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo(round($level200Progress)); ?>%;">
			  <span class="pull-left pl5 text-muted"> <i class="fa fa-truck"></i> <?php echo(round($level200Progress)); ?> %  First Response </span>
			  </div>
			</div>
		  </div>
				

            	<!-- Progress 300 -->
		  <div class="col-xs-4 col-sm-2">
			<div class="progress progress-bar-xl">
			  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo(round($level300Progress)); ?>%;">
			  <span class="pull-left pl5 text-muted"> <i class="fa fa-code-fork"></i> <?php echo(round($level300Progress)); ?> %  Characterization </span>
			  </div>
			</div>
		  </div>


            	<!-- Progress 400 -->
		  <div class="col-xs-4 col-sm-2">
			<div class="progress progress-bar-xl">
			  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo(round($level400Progress)); ?>%;">
			  	<span class="pull-left pl5 text-muted"> <i class="fa fa-exclamation-triangle"></i> <?php echo(round($level400Progress)); ?> %  Decontamination </p>
			  </div>
			</div>
		  </div>


            	<!-- Progress 500 -->
		  <div class="col-xs-4 col-sm-2">
			<div class="progress progress-bar-xl">
			  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo(round($level500Progress)); ?>%;">
			  <span class="pull-left pl5 text-muted"><i class="fa fa-building"></i> <?php echo(round($level500Progress)); ?> %  Clearance </span>
			  </div>
			</div>
		  </div>


            	<!-- Progress 600 -->
		  <div class="col-xs-4 col-sm-2">
			<div class="progress progress-bar-xl">
			  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo(round($level600Progress)); ?>%;">
			  <span class="pull-left pl5 text-mutes"><i class="fa fa-wrench"></i> <?php echo(round($level600Progress)); ?> %  Re-occupancy </span>
			  </div>
			</div>
		  </div>
		<?php }?>
	  <div class="col-xs-4 col-sm-1 text-right">
		<a href="#content" class="footer-return-top">
		  <span class="fa fa-arrow-up"></span>
		</a>
	  </div>


	<div class="row">
	  <div class="col-md-11 text-left">
		<span class="footer-legal">© 2016 LLNL</span><br><br>
	</div>
	
	  

	</div>
</footer>      <!-- End: Page Footer -->

<script type="text/javascript">
function loadPage(){
	$("#show").load("data.php?level=300&page=301");
	console.log('show');
}
	
	loadPage();
	
	$(document).ready(function(){
		
		$(document).on('submit','form' ,function(){
			alert( "Data Loaded: ");
			$.post("completed.php", $(this).serialize(), function(){
				loadPage();
						});
			return false;
		});
	
		$("#toggle").click(function(){
			$("#nav-spy").toggle(1000);
		});
		$("#toggleKey").click(function(){
			$("#key").toggle(1000);
		});
		
		$('#print').on('click',function(){
			printData();
		})
					
		$('#printTransit').on('click',function(){
			printData2();
		})

	});

</script>


  <!-- BEGIN: PAGE SCRIPTS -->



	<!-- jQuery -->
	<script src="vendor/jquery/jquery-2.2.3.js"></script>
	<script src="vendor/jquery/jquery_ui/jquery-ui.min.js"></script>
	
	<!-- Dropzone Plugin -->
	<script src="vendor/plugins/dropzone/dropzone.min.js"></script>
	
	<!-- HighCharts Plugin -->
	<script src="vendor/plugins/highcharts/highcharts.js"></script>
	
	<!-- JvectorMap Plugin + US Map (more maps in plugin/assets folder) -->
	<script src="vendor/plugins/jvectormap/jquery.jvectormap.min.js"></script>
	<script src="vendor/plugins/jvectormap/assets/jquery-jvectormap-us-lcc-en.js"></script> 
	
	<!-- FullCalendar Plugin + moment Dependency -->
	<script src="vendor/plugins/fullcalendar/lib/moment.min.js"></script>
	<script src="vendor/plugins/fullcalendar/fullcalendar.min.js"></script>
	
	<!-- Theme Javascript -->
	<script src="assets/js/utility/utility.js"></script>
	<script src="assets/js/demo/demo.js"></script>
	<script src="assets/js/main.js"></script>
	<script src="assets/js/jquery.PrintArea.js"></script>
	
	<!-- Widget Javascript -->
	<script src="assets/js/demo/widgets.js"></script>
	
	<!-- Magnific Popup core CSS file -->
	<link rel="stylesheet" href="vendor/plugins/magnific/magnific-popup.css">
	
	<!-- Magnific Popup core JS file -->
	<script src="vendor/plugins/magnific/jquery.magnific-popup.js"></script>

 
 <script type="text/javascript">
  jQuery(document).ready(function() {

    "use strict";

    // Init Demo JS  

    Demo.init();

    // Init Theme Core    

    Core.init();

    // Dropzone autoattaches to "dropzone" class.
    // Configure Dropzone options
    Dropzone.options.dropZone = {
      paramName: "file", // The name that will be used to transfer the file
      maxFilesize: 0, // MB

      addRemoveLinks: true,
      dictDefaultMessage: '<i class="fa fa-cloud-upload"></i> \
         <span class="main-text"><b>Drop Files</b> to upload</span> <br /> \
         <span class="sub-text">(or click)</span> \
        ',
      dictResponseError: 'Server not Configured'
    };

    Dropzone.options.dropZone2 = {
      paramName: "file", // The name that will be used to transfer the file
      maxFilesize: 0, // MB

      addRemoveLinks: true,
      dictDefaultMessage: '<i class="fa fa-cloud-upload"></i> \
         <span class="main-text"><b>Drop Files</b> to upload</span> <br /> \
         <span class="sub-text">(or click)</span> \
        ',
      dictResponseError: 'Server not Configured'
    };

    // DEMO CODE - creates mock uploads upon pageload
    setTimeout(function() {
      var Drop = $('#dropZone2');
      Drop.addClass('dz-started dz-demo');

      setTimeout(function() {
        $('.example-preview').each(function(i, e) {
          var This = $(e);

          var thumbOut = setTimeout(function() {
            Drop.append(This);
            This.addClass('animated fadeInRight').removeClass('hidden');
          }, i * 135);

        });
      }, 750);

    }, 800);

    // Demo code  
    $('.example-preview').on('click', 'a.dz-remove', function() {
      $(this).parent('.example-preview').remove();
    });
	
    // Form Skin Switcher
	$('#s100').on('click', function() 
	{
      
      $.magnificPopup.open({
        removalDelay: 500, //delay removal by X to allow out-animation,
        items: {
          src: '#modal-image1'
        },
        // overflowY: 'hidden', // 
        callbacks: {
          beforeOpen: function(e) {
            var Animation = 'mfp-zoomIn';
            this.st.mainClass = Animation;
          }
        },
        midClick: true // allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source.
      });

    });
    $('#s200').on('click', function() 
	{
      
      $.magnificPopup.open({
        removalDelay: 500, //delay removal by X to allow out-animation,
        items: {
          src: '#modal-image2'
        },
        // overflowY: 'hidden', // 
        callbacks: {
          beforeOpen: function(e) {
            var Animation = 'mfp-zoomIn';
            this.st.mainClass = Animation;
          }
        },
        midClick: true // allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source.
      });

    });
	$('#s300').on('click', function() 
		{
		  
		  $.magnificPopup.open({
			removalDelay: 500, //delay removal by X to allow out-animation,
			items: {
			  src: '#modal-image3'
			},
			// overflowY: 'hidden', // 
			callbacks: {
			  beforeOpen: function(e) {
				var Animation = 'mfp-zoomIn';
				this.st.mainClass = Animation;
			  }
			},
			midClick: true // allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source.
		  });
	
		});
	$('#s400').on('click', function() 
	{
      
      $.magnificPopup.open({
        removalDelay: 500, //delay removal by X to allow out-animation,
        items: {
          src: '#modal-image4'
        },
        // overflowY: 'hidden', // 
        callbacks: {
          beforeOpen: function(e) {
            var Animation = 'mfp-zoomIn';
            this.st.mainClass = Animation;
          }
        },
        midClick: true // allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source.
      });

    });
	$('#s500').on('click', function() 
	{
      
      $.magnificPopup.open({
        removalDelay: 500, //delay removal by X to allow out-animation,
        items: {
          src: '#modal-image5'
        },
        // overflowY: 'hidden', // 
        callbacks: {
          beforeOpen: function(e) {
            var Animation = 'mfp-zoomIn';
            this.st.mainClass = Animation;
          }
        },
        midClick: true // allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source.
      });

    });
	$('#s600').on('click', function() 
	{
      
      $.magnificPopup.open({
        removalDelay: 500, //delay removal by X to allow out-animation,
        items: {
          src: '#modal-image6'
        },
        // overflowY: 'hidden', // 
        callbacks: {
          beforeOpen: function(e) {
            var Animation = 'mfp-zoomIn';
            this.st.mainClass = Animation;
          }
        },
        midClick: true // allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source.
      });
	 

    });



    // Init Widget Demo JS

    // demoHighCharts.init();



    // Because we are using Admin Panels we use the OnFinish 

    // callback to activate the demoWidgets. It's smoother if

    // we let the panels be moved and organized before 

    // filling them with content from various plugins



    // Init plugins used on this page

    // HighCharts, JvectorMap, Admin Panels



    // Init Admin Panels on widgets inside the ".admin-panels" container

    $('.admin-panels').adminpanel({

      grid: '.admin-grid',

      draggable: true,

      preserveGrid: true,

      // mobile: true,

      onStart: function() {

        // Do something before AdminPanels runs

      },

      onFinish: function() {

        $('.admin-panels').addClass('animated fadeIn').removeClass('fade-onload');



        // Init the rest of the plugins now that the panels

        // have had a chance to be moved and organized.

        // It's less taxing to organize empty panels

        demoHighCharts.init();

        runVectorMaps(); // function below

      },

      onSave: function() {

        $(window).trigger('resize');

      }

    });





    // Init plugins for ".calendar-widget"

    // plugins: FullCalendar

    //

    $('#calendar-widget').fullCalendar({

      // contentHeight: 397,

      editable: true,

      events: [{

          title: 'Sony Meeting',

          start: '2015-05-1',

          end: '2015-05-3',

          className: 'fc-event-success',

        }, {

          title: 'Conference',

          start: '2015-05-11',

          end: '2015-05-13',

          className: 'fc-event-warning'

        }, {

          title: 'Lunch Testing',

          start: '2015-05-21',

          end: '2015-05-23',

          className: 'fc-event-primary'

        },

      ],

      eventRender: function(event, element) {

        // create event tooltip using bootstrap tooltips

        $(element).attr("data-original-title", event.title);

        $(element).tooltip({

          container: 'body',

          delay: {

            "show": 100,

            "hide": 200

          }

        });

        // create a tooltip auto close timer  

        $(element).on('show.bs.tooltip', function() {

          var autoClose = setTimeout(function() {

            $('.tooltip').fadeOut();

          }, 3500);

        });

      }

    });





    // Init plugins for ".task-widget"

    // plugins: Custom Functions + jQuery Sortable

    //

    var taskWidget = $('div.task-widget');

    var taskItems = taskWidget.find('li.task-item');

    var currentItems = taskWidget.find('ul.task-current');

    var completedItems = taskWidget.find('ul.task-completed');



    // Init jQuery Sortable on Task Widget

    taskWidget.sortable({

      items: taskItems, // only init sortable on list items (not labels)

      handle: '.task-menu',

      axis: 'y',

      connectWith: ".task-list",

      update: function( event, ui ) {

        var Item = ui.item;

        var ParentList = Item.parent();



        // If item is already checked move it to "current items list"

        if (ParentList.hasClass('task-current')) {

            Item.removeClass('item-checked').find('input[type="checkbox"]').prop('checked', false);

        }

        if (ParentList.hasClass('task-completed')) {

            Item.addClass('item-checked').find('input[type="checkbox"]').prop('checked', true);

        }



      }

    });



    // Custom Functions to handle/assign list filter behavior

    taskItems.on('click', function(e) {

      e.preventDefault();

      var This = $(this);

      var Target = $(e.target);



      if (Target.is('.task-menu') && Target.parents('.task-completed').length) {

        This.remove();

        return;

      }



      if (Target.parents('.task-handle').length) {

		      // If item is already checked move it to "current items list"

		      if (This.hasClass('item-checked')) {

		        This.removeClass('item-checked').find('input[type="checkbox"]').prop('checked', false);

		      }

		      // Otherwise move it to the "completed items list"

		      else {

		        This.addClass('item-checked').find('input[type="checkbox"]').prop('checked', true);

		      }

      }



    });





    var highColors = [bgSystem, bgSuccess, bgWarning, bgPrimary];



    // Chart data

    var seriesData = [{

      name: 'Phones',

      data: [5.0, 9, 17, 22, 19, 11.5, 5.2, 9.5, 11.3, 15.3, 19.9, 24.6]

    }, {

      name: 'Notebooks',

      data: [2.9, 3.2, 4.7, 5.5, 8.9, 12.2, 17.0, 16.6, 14.2, 10.3, 6.6, 4.8]

    }, {

      name: 'Desktops',

      data: [15, 19, 22.7, 29.3, 22.0, 17.0, 23.8, 19.1, 22.1, 14.1, 11.6, 7.5]

    }, {

      name: 'Music Players',

      data: [11, 6, 5, 15, 17.0, 22.0, 30.8, 24.1, 14.1, 11.1, 9.6, 6.5]

    }];



    var ecomChart = $('#ecommerce_chart1');

    if (ecomChart.length) {

      ecomChart.highcharts({

        credits: false,

        colors: highColors,

        chart: {

          backgroundColor: 'transparent',

          className: '',

          type: 'line',

          zoomType: 'x',

          panning: true,

          panKey: 'shift',

          marginTop: 45,

          marginRight: 1,

        },

        title: {

          text: null

        },

        xAxis: {

          gridLineColor: '#EEE',

          lineColor: '#EEE',

          tickColor: '#EEE',

          categories: ['Jan', 'Feb', 'Mar', 'Apr',

            'May', 'Jun', 'Jul', 'Aug',

            'Sep', 'Oct', 'Nov', 'Dec'

          ]

        },

        yAxis: {

          min: 0,

          tickInterval: 5,

          gridLineColor: '#EEE',

          title: {

            text: null,

          }

        },

        plotOptions: {

          spline: {

            lineWidth: 3,

          },

          area: {

            fillOpacity: 0.2

          }

        },

        legend: {

          enabled: true,

          floating: false,

          align: 'right',

          verticalAlign: 'top',

          x: -15

        },

        series: seriesData

      });

    }



    // Widget VectorMap

    function runVectorMaps() {



      // Jvector Map Plugin

      var runJvectorMap = function() {

        // Data set

        var mapData = [900, 700, 350, 500];

        // Init Jvector Map

        $('#WidgetMap').vectorMap({

          map: 'us_lcc_en',

          //regionsSelectable: true,

          backgroundColor: 'transparent',

          series: {

            markers: [{

              attribute: 'r',

              scale: [3, 7],

              values: mapData

            }]

          },

          regionStyle: {

            initial: {

              fill: '#E8E8E8'

            },

            hover: {

              "fill-opacity": 0.3

            }

          },

          markers: [{

            latLng: [37.78, -122.41],

            name: 'San Francisco,CA'

          }, {

            latLng: [36.73, -103.98],

            name: 'Texas,TX'

          }, {

            latLng: [38.62, -90.19],

            name: 'St. Louis,MO'

          }, {

            latLng: [40.67, -73.94],

            name: 'New York City,NY'

          }],

          markerStyle: {

            initial: {

              fill: '#a288d5',

              stroke: '#b49ae0',

              "fill-opacity": 1,

              "stroke-width": 10,

              "stroke-opacity": 0.3,

              r: 3

            },

            hover: {

              stroke: 'black',

              "stroke-width": 2

            },

            selected: {

              fill: 'blue'

            },

            selectedHover: {}

          },

        });

        // Manual code to alter the Vector map plugin to 

        // allow for individual coloring of countries

        var states = ['US-CA', 'US-TX', 'US-MO',

          'US-NY'

        ];

        var colors = [bgInfo, bgPrimaryLr, bgSuccessLr, bgWarningLr];

        var colors2 = [bgInfo, bgPrimary, bgSuccess, bgWarning];

        $.each(states, function(i, e) {

          $("#WidgetMap path[data-code=" + e + "]").css({

            fill: colors[i]

          });

        });

        $('#WidgetMap').find('.jvectormap-marker')

          .each(function(i, e) {

            $(e).css({

              fill: colors2[i],

              stroke: colors2[i]

            });

          });

      }



      if ($('#WidgetMap').length) {

        runJvectorMap();

      }

    }



  });

  </script>

  <!-- END: PAGE SCRIPTS -->

	<?php imageMapResize(); ?>


</body>



</html>


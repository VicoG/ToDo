<?php ob_start(); ?>
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

  <!-- FullCalendar Plugin CSS -->

  <link rel="stylesheet" type="text/css" href="public/style/fullcalendar/fullcalendar.min.css">

  <!-- Theme CSS -->

  <link rel="stylesheet" type="text/css" href="assets/skin/default_skin/css/theme.css">

  <!-- Admin Forms CSS -->

  <link rel="stylesheet" type="text/css" href="assets/admin-tools/admin-forms/css/admin-forms.min.css">
  
   <link rel="stylesheet" type="text/css" href="assets/mods.css">

</head>

<body class="dashboard-page">

  <div id="main">

    <!-- Start: Header -->

	<?php require_once "includes/session.php"; ?>
	<?php require_once "includes/functions.php"; ?>
	<?php require_once "includes/db.php"; ?>

	<?php confirm_logged_in(); ?>
	<?php layoutContext(); ?>

       <?php
// Database query
	$warningQuery  = "SELECT * FROM alert ";
	$warningQuery .= "WHERE alert_complete=0 ";

	$warningResult = mysqli_query($conn, $warningQuery);
	//Test if there was a query error
	//if(!$warningResult) {
		//die("Database header query failed.");
	//}
	$warningRow = mysqli_fetch_assoc($warningResult);
?>
	

    <!-- Start: Header -->

    <header class="navbar navbar-fixed-top navbar-shadow">
      <div class="navbar-branding">
        <a class="navbar-brand" href="index.php">
          <b>RAPID:</b> UTR <sub>v2.0</sub>
        </a>
      </div>

      <ul class="nav navbar-nav navbar-left">

        <li class="dropdown menu-merge hidden-xs">

          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Navigation

            <span class="caret caret-tp"></span>

          </a>
            <ul class="dropdown-menu multi-level" role="menu" >
			<li class="dropdown-submenu">
				<a tabindex="-1" href="#">
                    <span class="fa fa-comments text-warning"></span>
                    <span class="sidebar-title text-warning"> Notification (100)</span>
                </a>
				  <ul class="dropdown-menu">
					<li><a role="menuitem" tabindex="-1" href="l2.php?id=100&subid=100"><span class="sidebar-title-tray"><img src="assets/images/start.png" style="width:20px; display:inline-block;" class="img-responsive" alt="Responsive image" /></span><span class="sidebar-title text-warning">  Emergency Center Incident (100)</span></a></li>
					<li><a role="menuitem" tabindex="-1" href="l2.php?id=100&subid=101"><span class="sidebar-title-tray"><img src="assets/images/round_rec.png" style="width:20px; display:inline-block;" class="img-responsive" alt="Responsive image" /></span><span class="sidebar-title text-warning"> Suspected Release Identified (101)</span></a></li>
					<li><a role="menuitem" tabindex="-1" href="l2.php?id=100&subid=102"><span class="sidebar-title-tray"><img src="assets/images/action.png" style="width:20px; display:inline-block;" class="img-responsive" alt="Responsive image" /></span><span class="sidebar-title text-warning"> Appropriate Agencies Notified (102)</span></a></li>
					<li><a role="menuitem" tabindex="-1" href="l2.php?id=100&subid=103"><span class="sidebar-title-tray"><img src="assets/images/action.png" style="width:20px; display:inline-block;" class="img-responsive" alt="Responsive image" /></span><span class="sidebar-title text-warning"> Alert Additional Resources (103)</span></a></li>
					<li><a role="menuitem" tabindex="-1" href="l2.php?id=100&subid=104"><span class="sidebar-title-tray"><img src="assets/images/problem_resolved.png" style="width:20px; display:inline-block;" class="img-responsive" alt="Responsive image" /></span><span class="sidebar-title text-warning"> No Threat (104)</span></a></li>
				  </ul>
            </li>
		    <li class="dropdown-submenu">
				<a tabindex="-1" href="#">
                    <span class="fa fa-truck text-warning"></span>
                    <span class="sidebar-title text-warning"> First Response (200)</span>
                </a>
				  <ul class="dropdown-menu" >
				    <li role="presentation"><a href="l2.php?id=200&subid=200"><span class="sidebar-title-tray"><img src="assets/images/action.png" style="width:20px; display:inline-block;" class="img-responsive" alt="Responsive image" /></span><span class="sidebar-title text-warning"> Initial Threat Assessment (200)</span></a></li>
                    <li role="presentation"><a href="l2.php?id=200&subid=201"><span class="sidebar-title-tray"><img src="assets/images/question.png" style="width:20px; display:inline-block;" class="img-responsive" alt="Responsive image" /></span><span class="sidebar-title text-warning"> Suspect Bioagent (201)</span></a></li>
                    <li role="presentation"><a href="l2.php?id=200&subid=202"><span class="sidebar-title-tray"><img src="assets/images/problem_resolved.png" style="width:20px; display:inline-block;" class="img-responsive" alt="Responsive image" /></span><span class="sidebar-title text-warning"> No bioagent (202)</span></a></li>
                    <li role="presentation"><a href="l2.php?id=200&subid=203"><span class="sidebar-title-tray"><img src="assets/images/question.png" style="width:20px; display:inline-block;" class="img-responsive" alt="Responsive image" /></span><span class="sidebar-title text-warning"> Additional HAZMAT Actions (203)</span></a></li>
                    <li role="presentation"><a href="l2.php?id=200&subid=204"><span class="sidebar-title-tray"><img src="assets/images/action.png" style="width:20px; display:inline-block;" class="img-responsive" alt="Responsive image" /></span><span class="sidebar-title text-warning"> Initial Control Actions (204)</span></a></li>
                    <li role="presentation"><a href="l2.php?id=200&subid=205"><span class="sidebar-title-tray"><img src="assets/images/action.png" style="width:20px; display:inline-block;" class="img-responsive" alt="Responsive image" /></span><span class="sidebar-title text-warning"> Initial Response Actions (205)</span></a></li>
                    <li role="presentation"><a href="l2.php?id=200&subid=206"><span class="sidebar-title-tray"><img src="assets/images/action.png" style="width:20px; display:inline-block;" class="img-responsive" alt="Responsive image" /></span><span class="sidebar-title text-warning"> Identify Agent/Concentration (206)</span></a></li>
                    <li role="presentation"><a href="l2.php?id=200&subid=207"><span class="sidebar-title-tray"><img src="assets/images/question.png" style="width:20px; display:inline-block;" class="img-responsive" alt="Responsive image" /></span><span class="sidebar-title text-warning"> Suspected Pathogen (207)</span></a></li>
                    <li role="presentation"><a href="l2.php?id=200&subid=208"><span class="sidebar-title-tray"><img src="assets/images/action.png" style="width:20px; display:inline-block;" class="img-responsive" alt="Responsive image" /></span><span class="sidebar-title text-warning"> Public Health Assessment (208)</span></a></li>
                    <li role="presentation"><a href="l2.php?id=200&subid=209"><span class="sidebar-title-tray"><img src="assets/images/question.png" style="width:20px; display:inline-block;" class="img-responsive" alt="Responsive image" /></span><span class="sidebar-title text-warning"> Agent confirmed and/or viable (209)</span></a></li>
                    <li role="presentation"><a href="l2.php?id=200&subid=210"><span class="sidebar-title-tray"><img src="assets/images/question.png" style="width:20px; display:inline-block;" class="img-responsive" alt="Responsive image" /></span><span class="sidebar-title text-warning"> Agent Persistent/Infectious (210)</span></a></li>
                    <li role="presentation"><a href="l2.php?id=200&subid=211"><span class="sidebar-title-tray"><img src="assets/images/round_rec.png" style="width:20px; display:inline-block;" class="img-responsive" alt="Responsive image" /></span><span class="sidebar-title text-warning"> Risk Communication (211)</span></a></li>
                    <li role="presentation"><a href="l2.php?id=200&subid=212"><span class="sidebar-title-tray"><img src="assets/images/problem_resolved.png" style="width:20px; display:inline-block;" class="img-responsive" alt="Responsive image" /></span><span class="sidebar-title text-warning"> No threat (212)</span></a></li>
                    <li role="presentation"><a href="l2.php?id=200&subid=213"><span class="sidebar-title-tray"><img src="assets/images/action.png" style="width:20px; display:inline-block;" class="img-responsive" alt="Responsive image" /></span><span class="sidebar-title text-warning"> Confirm Biotoxin (213)</span></a></li>
                    <li role="presentation"><a href="l2.php?id=200&subid=214"><span class="sidebar-title-tray"><img src="assets/images/question.png" style="width:20px; display:inline-block;" class="img-responsive" alt="Responsive image" /></span><span class="sidebar-title text-warning"> Concentration to cause Injury/Disease (214)</span></a></li>
                    <li role="presentation"><a href="l2.php?id=200&subid=215"><span class="sidebar-title-tray"><img src="assets/images/action.png" style="width:20px; display:inline-block;" class="img-responsive" alt="Responsive image" /></span><span class="sidebar-title text-warning"> Response/Operational Controls (215)</span></a></li>
                    <li role="presentation"><a href="l2.php?id=200&subid=216"><span class="sidebar-title-tray"><img src="assets/images/round_rec.png" style="width:20px; display:inline-block;" class="img-responsive" alt="Responsive image" /></span><span class="sidebar-title text-warning"> Emergency Situation Stabilized (216)</span></a></li>  
				  </ul>
            </li>
			<li class="dropdown-submenu">
				<a tabindex="-1" href="#">
                    <span class="fa fa-code-fork text-danger"></span>
                    <span class="sidebar-title text-danger"> Characterization (300)</span>
                </a>
				  <ul class="dropdown-menu">
				    <li role="presentation"><a href="l2.php?id=300&subid=300"><span class="sidebar-title-tray"><img src="assets/images/round_rec.png" style="width:20px; display:inline-block;" class="img-responsive" alt="Responsive image" /></span><span class="sidebar-title text-danger"> Rapid System Characterization (300)</span></a></li>
                    <li role="presentation"><a href="l2.php?id=300&subid=301"><span class="sidebar-title-tray"><img src="assets/images/action.png" style="width:20px; display:inline-block;" class="img-responsive" alt="Responsive image" /></span><span class="sidebar-title text-danger"> Identify and Prioritize Area (301)</span></a></li>
                    <li role="presentation"><a href="l2.php?id=300&subid=302"><span class="sidebar-title-tray"><img src="assets/images/action.png" style="width:20px; display:inline-block;" class="img-responsive" alt="Responsive image" /></span><span class="sidebar-title text-danger"> Conduct Detailed Characterization (302)</span></a></li>
                    <li role="presentation"><a href="l2.php?id=300&subid=303"><span class="sidebar-title-tray"><img src="assets/images/action.png" style="width:20px; display:inline-block;" class="img-responsive" alt="Responsive image" /></span><span class="sidebar-title text-danger"> Determine Site Characterizations (303)</span></a></li>
                    <li role="presentation"><a href="l2.php?id=300&subid=304"><span class="sidebar-title-tray"><img src="assets/images/action.png" style="width:20px; display:inline-block;" class="img-responsive" alt="Responsive image" /></span><span class="sidebar-title text-danger"> Evaluate Initial Containment (304)</span></a></li>
                    <li role="presentation"><a href="l2.php?id=300&subid=305"><span class="sidebar-title-tray"><img src="assets/images/action.png" style="width:20px; display:inline-block;" class="img-responsive" alt="Responsive image" /></span><span class="sidebar-title text-danger"> Sampling and Analysis Strategies (305)</span></a></li>
                    <li role="presentation"><a href="l2.php?id=300&subid=306"><span class="sidebar-title-tray"><img src="assets/images/action.png" style="width:20px; display:inline-block;" class="img-responsive" alt="Responsive image" /></span><span class="sidebar-title text-danger"> Environmental Risk Assessment (306)</span></a></li>
                    <li role="presentation"><a href="l2.php?id=300&subid=307"><span class="sidebar-title-tray"><img src="assets/images/round_rec.png" style="width:20px; display:inline-block;" class="img-responsive" alt="Responsive image" /></span><span class="sidebar-title text-danger"> Clear Goals Established (307)</span></a></li>
                    <li role="presentation"><a href="l2.php?id=300&subid=308"><span class="sidebar-title-tray"><img src="assets/images/question.png" style="width:20px; display:inline-block;" class="img-responsive" alt="Responsive image" /></span><span class="sidebar-title text-danger"> Eliminate Human Health Impacts (308)</span></a></li>
                    <li role="presentation"><a href="l2.php?id=300&subid=309"><span class="sidebar-title-tray"><img src="assets/images/question.png" style="width:20px; display:inline-block;" class="img-responsive" alt="Responsive image" /></span><span class="sidebar-title text-danger"> Is there potential impact (309)</span></a></li>
                    <li role="presentation"><a href="l2.php?id=300&subid=310"><span class="sidebar-title-tray"><img src="assets/images/action.png" style="width:20px; display:inline-block;" class="img-responsive" alt="Responsive image" /></span><span class="sidebar-title text-danger"> Determine media affected (310)</span></a></li>
                    <li role="presentation"><a href="l2.php?id=300&subid=311"><span class="sidebar-title-tray"><img src="assets/images/question.png" style="width:20px; display:inline-block;" class="img-responsive" alt="Responsive image" /></span><span class="sidebar-title text-danger"> Unacceptable contamination (311)</span></a></li>
                    <li role="presentation"><a href="l2.php?id=300&subid=312"><span class="sidebar-title-tray"><img src="assets/images/question.png" style="width:20px; display:inline-block;" class="img-responsive" alt="Responsive image" /></span><span class="sidebar-title text-danger"> Are Stakeholder Needs Addressed (312)</span></a></li>
                    <li role="presentation"><a href="l2.php?id=300&subid=313"><span class="sidebar-title-tray"><img src="assets/images/question.png" style="width:20px; display:inline-block;" class="img-responsive" alt="Responsive image" /></span><span class="sidebar-title text-danger"> Address Environmental Concerns (313)</span></a></li>
                    <li role="presentation"><a href="l2.php?id=300&subid=314"><span class="sidebar-title-tray"><img src="assets/images/round_rec.png" style="width:20px; display:inline-block;" class="img-responsive" alt="Responsive image" /></span><span class="sidebar-title text-danger"> Allow Re-entry and Operations (314)</span></a></li>
                    <li role="presentation"><a href="l2.php?id=300&subid=315"><span class="sidebar-title-tray"><img src="assets/images/action.png" style="width:20px; display:inline-block;" class="img-responsive" alt="Responsive image" /></span><span class="sidebar-title text-danger"> Reassess Medical Options (315)</span></a></li>
                    <li role="presentation"><a href="l2.php?id=300&subid=316"><span class="sidebar-title-tray"><img src="assets/images/action.png" style="width:20px; display:inline-block;" class="img-responsive" alt="Responsive image" /></span><span class="sidebar-title text-danger"> Reassess Risk-Managment Options (316)</span></a></li>  
				  </ul>
            </li>
            <li class="dropdown-submenu">
				<a tabindex="-1" href="#">
                    <span class="fa fa-exclamation-triangle text-danger"></span>
                    <span class="sidebar-title text-danger"> Decontamination (400)</span>
                </a>
				  <ul class="dropdown-menu">
				  <li role="presentation"><a href="l2.php?id=400&subid=400"><span class="sidebar-title-tray"><img src="assets/images/action.png" style="width:20px; display:inline-block;" class="img-responsive" alt="Responsive image" /></span><span class="sidebar-title text-danger"> Evaluate Decontamination Options (400)</span></a></li>
                    <li role="presentation"><a href="l2.php?id=400&subid=401"><span class="sidebar-title-tray"><img src="assets/images/question.png" style="width:20px; display:inline-block;" class="img-responsive" alt="Responsive image" /></span><span class="sidebar-title text-danger"> Decontaminate in Situ (401)</span></a></li>
                    <li role="presentation"><a href="l2.php?id=400&subid=402"><span class="sidebar-title-tray"><img src="assets/images/question.png" style="width:20px; display:inline-block;" class="img-responsive" alt="Responsive image" /></span><span class="sidebar-title text-danger"> Disposal of Items (402)</span></a></li>
                    <li role="presentation"><a href="l2.php?id=400&subid=403"><span class="sidebar-title-tray"><img src="assets/images/action.png" style="width:20px; display:inline-block;" class="img-responsive" alt="Responsive image" /></span><span class="sidebar-title text-danger"> Develop Decontamination Strategy (403)</span></a></li>
                    <li role="presentation"><a href="l2.php?id=400&subid=404"><span class="sidebar-title-tray"><img src="assets/images/action.png" style="width:20px; display:inline-block;" class="img-responsive" alt="Responsive image" /></span><span class="sidebar-title text-danger"> Determine Requirements (404)</span></a></li>
                    <li role="presentation"><a href="l2.php?id=400&subid=405"><span class="sidebar-title-tray"><img src="assets/images/action.png" style="width:20px; display:inline-block;" class="img-responsive" alt="Responsive image" /></span><span class="sidebar-title text-danger"> Treatment and Disposal Site (405)</span></a></li>
                    <li role="presentation"><a href="l2.php?id=400&subid=406"><span class="sidebar-title-tray"><img src="assets/images/action.png" style="width:20px; display:inline-block;" class="img-responsive" alt="Responsive image" /></span><span class="sidebar-title text-danger"> Remediation Action Plan (406)</span></a></li>
                    <li role="presentation"><a href="l2.php?id=400&subid=407"><span class="sidebar-title-tray"><img src="assets/images/action.png" style="width:20px; display:inline-block;" class="img-responsive" alt="Responsive image" /></span><span class="sidebar-title text-danger"> Conduct Decontamination (407)</span></a></li>
                    <li role="presentation"><a href="l2.php?id=400&subid=408"><span class="sidebar-title-tray"><img src="assets/images/question.png" style="width:20px; display:inline-block;" class="img-responsive" alt="Responsive image" /></span><span class="sidebar-title text-danger"> Verification Criteria (408)</span></a></li>
				  </ul>
            </li>
            <li class="dropdown-submenu">
				<a tabindex="-1" href="#">
                    <span class="fa fa-building text-danger"></span>
                    <span class="sidebar-title text-danger"> Clearance (500)</span>
                </a>
				  <ul class="dropdown-menu" >
				    <li role="presentation"><a href="l2.php?id=500&subid=500"><span class="sidebar-title-tray"><img src="assets/images/action.png" style="width:20px; display:inline-block;" class="img-responsive" alt="Responsive image" /></span><span class="sidebar-title text-danger"> Final Risk Assessment (500)</span></a></li>
                    <li role="presentation"><a href="l2.php?id=500&subid=501"><span class="sidebar-title-tray"><img src="assets/images/question.png" style="width:20px; display:inline-block;" class="img-responsive" alt="Responsive image" /></span><span class="sidebar-title text-danger"> Clearance Goals Met (501)</span></a></li>
                    <li role="presentation"><a href="l2.php?id=500&subid=502"><span class="sidebar-title-tray"><img src="assets/images/action.png" style="width:20px; display:inline-block;" class="img-responsive" alt="Responsive image" /></span><span class="sidebar-title text-danger"> Environmental Monitoring Actions (502)</span></a></li>
                    <li role="presentation"><a href="l2.php?id=500&subid=503"><span class="sidebar-title-tray"><img src="assets/images/question.png" style="width:20px; display:inline-block;" class="img-responsive" alt="Responsive image" /></span><span class="sidebar-title text-danger"> Regulatory Needs Addressed (503)</span></a></li>
                    <li role="presentation"><a href="l2.php?id=500&subid=504"><span class="sidebar-title-tray"><img src="assets/images/round_rec.png" style="width:20px; display:inline-block;" class="img-responsive" alt="Responsive image" /></span><span class="sidebar-title text-danger"> Long Term Issues Addressed (504)</span></a></li>
                    <li role="presentation"><a href="l2.php?id=500&subid=505"><span class="sidebar-title-tray"><img src="assets/images/round_rec.png" style="width:20px; display:inline-block;" class="img-responsive" alt="Responsive image" /></span><span class="sidebar-title text-danger"> Resume Operations (505)</span></a></li>
                    <li role="presentation"><a href="l2.php?id=500&subid=506"><span class="sidebar-title-tray"><img src="assets/images/round_rec.png" style="width:20px; display:inline-block;" class="img-responsive" alt="Responsive image" /></span><span class="sidebar-title text-danger"> EEC Recommendation (506)</span></a></li>
                    <li role="presentation"><a href="l2.php?id=500&subid=507"><span class="sidebar-title-tray"><img src="assets/images/question.png" style="width:20px; display:inline-block;" class="img-responsive" alt="Responsive image" /></span><span class="sidebar-title text-danger"> Additional Decontamination (507)</span></a></li>
                    <li role="presentation"><a href="l2.php?id=500&subid=508"><span class="sidebar-title-tray"><img src="assets/images/question.png" style="width:20px; display:inline-block;" class="img-responsive" alt="Responsive image" /></span><span class="sidebar-title text-danger"> Modify Clearance Goals (508)</span></a></li>
				  </ul>
            </li>
			<li class="dropdown-submenu">
				<a tabindex="-1" href="#">
                    <span class="fa fa-wrench text-success"></span>
                    <span class="sidebar-title text-success">Reoccupancy (600)</span>
                </a>
				  <ul class="dropdown-menu" >
				    <li role="presentation"><a href="l2.php?id=600&subid=600"><span class="sidebar-title-tray"><img src="assets/images/action.png" style="width:20px; display:inline-block;" class="img-responsive" alt="Responsive image" /></span><span class="sidebar-title text-success"> Implement Recovery Plans (600)</span></a></li>
					<li role="presentation"><a href="l2.php?id=600&subid=601"><span class="sidebar-title-tray"><img src="assets/images/action.png" style="width:20px; display:inline-block;" class="img-responsive" alt="Responsive image" /></span><span class="sidebar-title text-success"> Conduct Renovations/ Enhancements (601)</span></a></li>
					<li role="presentation"><a href="l2.php?id=600&subid=602"><span class="sidebar-title-tray"><img src="assets/images/question.png" style="width:20px; display:inline-block;" class="img-responsive" alt="Responsive image" /></span><span class="sidebar-title text-success"> Reoccupancy Criteria Met (602)</span></a></li>
					<li role="presentation"><a href="l2.php?id=600&subid=603"><span class="sidebar-title-tray"><img src="assets/images/action.png" style="width:20px; display:inline-block;" class="img-responsive" alt="Responsive image" /></span><span class="sidebar-title text-success"> Phased Restart (603)</span></a></li>
					<li role="presentation"><a href="l2.php?id=600&subid=604"><span class="sidebar-title-tray"><img src="assets/images/action.png" style="width:20px; display:inline-block;" class="img-responsive" alt="Responsive image" /></span><span class="sidebar-title text-success"> Continue Monitoring (604)</span></a></li>
					<li role="presentation"><a href="l2.php?id=600&subid=605"><span class="sidebar-title-tray"><img src="assets/images/problem_resolved.png" style="width:20px; display:inline-block;" class="img-responsive" alt="Responsive image" /></span><span class="sidebar-title text-success"> Recovery Complete (605)</span></a></li>
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
     <li >
	  <?php
	  	if ($warningResult && mysqli_num_rows($warningResult) > 0) {
		  if ($warningRow[alert_complete] ==0) { 
			$_SESSION["alertID"] = $warningRow["id"];
		  ?>
			<h2 class="text-danger pull-right" style="margin-right:.5em;">
				
				  <em> Active Alert </em> <small style="color:#EC6F5A;"> <?php echo $warningRow["incident_name"]; ?> </small>
				 <i class="fa fa-exclamation-triangle text-danger" aria-hidden="true">  </i> <small style="color:#85D27A;">
				 <?php if($warningRow[training] ==1){ echo "Training Exercise"; } ?> </small>
			</h2>		
		<?php
			  }
			}?>
	</li>

	<li class="dropdown menu-merge">
	  <a href="#" class="dropdown-toggle fw600 pt25" data-toggle="dropdown" >
		<span class="text-system ">  Welcome <?php echo htmlentities($_SESSION["username"]); ?></span>
		<span class="caret caret-tp hidden-xs"></span>
	  </a>
	  <ul class="dropdown-menu list-group dropdown-persist w250" role="menu">
		<li class="list-group-item">
			<?php if($_SESSION["b"]==0 && $_SESSION["b"]!= NULL) { 
				echo '<li><a href="manage_admins.php"><span class="fa fa-tachometer text-system pl20" ></span><span class="sidebar-title text-system pl10"> Administrator MENU </span></a></li>';
			 } ?>
		</li>
		<li class="dropdown-footer">
		  <a href="utr-logout.php">
		  <span class="fa fa-power-off pr5"></span> Logout </a>
		</li>
	  </ul>
	</li>
  </ul>
	  
</header><!-- End: Header -->

      <!-- Begin: Content -->
      <section id="content" class="table-layout animated fadeIn">
		 <div class="tray tray-center">
			
			
			 <div class="row mt40 pt40">                                        	
                <div class="col-md-6 col-md-offset-5 "> 
				<?php
					  $admin = find_users_by_id($_GET["id"]);
					  
					  if (!$admin) {
						// admin ID was missing or invalid or 
						//admin couldn't be found in database
						redirectTo("manage_admins.php");
					  }
					?>
					
					<?php 
					if (isset($_POST['submit'])) {
					  // Process the form
					  
					  // validations
					  $required_fields = array("username", "password");
					  validate_presences($required_fields);
					  
					  $fields_with_max_lengths = array("username" => 25);
					  validate_max_lengths($fields_with_max_lengths);
					  
					  if (empty($errors)) {
						
						// Perform Update
					
						$id = $admin["id"];
						$username = mysql_check($_POST["username"]);
						$hashed_password = password_encrypt($_POST["password"]);
					  
						$query  = "UPDATE users SET ";
						$query .= "name = '{$username}', ";
						$query .= "password = '{$hashed_password}' ";
						$query .= "WHERE id = {$id} ";
						$query .= "LIMIT 1";
						$result = mysqli_query($conn, $query);
					
						if ($result && mysqli_affected_rows($conn) == 1) {
						  // Success
						  $_SESSION["message"] = "Admin/ User updated.";
						  redirectTo("manage_admins.php");
						} else {
						  // Failure
						  $_SESSION["message"] = "Admin/ User update failed.";
						}
					  
					  }
					} else {
					  // This is probably a GET request
					  
					} // end: if (isset($_POST['submit']))
					
					?>
					
					<?php //$layout_context = "admin"; ?>					
					<?php //echo message(); ?>
					<?php echo form_errors($errors); ?>
					
					<h2>Edit Admin: <?php echo htmlentities($admin["name"]); ?></h2>
					<form action="edit_admin.php?id=<?php echo urlencode($admin["id"]); ?>" method="post">
					  <p>Username:
						<input type="text" name="username" value="<?php echo htmlentities($admin["name"]); ?>" />
					  </p>
					  <p>Password:
						<input type="password" name="password" value="" />
					  </p>
					  <input class="btn btn-xs btn-success" type="submit" name="submit" value="Edit Admin/ User" />
					</form>
					<br />
					<a href="manage_admins.php">Cancel</a>
			  </div>
		  </div>
		</div>      
      </section>

      <!-- End: Content -->



      <!-- Begin: Page Footer -->

      <footer id="content-footer" class="affix">

        <div class="row">

          <div class="col-md-6">

            <span class="footer-legal">© 2015 LLNL</span>

          </div>

          <div class="col-md-6 text-right">
           
            <a href="#content" class="footer-return-top">

              <span class="fa fa-arrow-up"></span>

            </a>

          </div>

        </div>

      </footer>

      <!-- End: Page Footer -->

    </section>

    <!-- End: Content-Wrapper -->


  </div>

  <!-- End: Main -->

<!-- BEGIN: PAGE SCRIPTS -->
  <!-- jQuery -->

  <script src="vendor/jquery/jquery-1.11.1.min.js"></script>
  <script src="vendor/jquery/jquery_ui/jquery-ui.min.js"></script>
  <script src="assets/js/demo/widgets.js"></script>
  
   <!-- HighCharts Plugin -->

  <script src="vendor/plugins/highcharts/highcharts.js"></script>
    <!-- Theme Javascript -->

  <script src="assets/js/utility/utility.js"></script>
  <script src="assets/js/demo/demo.js"></script>
  <script src="assets/js/main.js"></script>

  <!-- Widget Javascript -->

  <script src="assets/js/demo/widgets.js"></script>  

<script type="text/javascript">
  
  jQuery(document).ready(function() {

    "use strict";

    // Init Demo JS  

    Demo.init();

    // Init Theme Core    

    Core.init();

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
	
	   // Init plugins for ".task-widget"

    // plugins: Custom Functions + jQuery Sortable

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

 });// end document ready function
</script>
</body>
</html>

  
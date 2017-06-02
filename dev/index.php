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
	<link rel="stylesheet" type="text/css"  media="all" href="assets/admin-tools/admin-forms/css/admin-forms.min.css">
	<link rel="stylesheet" type="text/css" href="assets/mods.css">

</head>

<body class="dashboard-page">

<?php require_once "includes/session.php"; ?>
<?php require_once "includes/functions.php"; ?>
<?php require_once "includes/db.php"; ?>
	
  <div id="main">
  
	       <?php
// Database query
	$warningQuery  = "SELECT * FROM alert ";
	$warningQuery .= "WHERE alert_complete=0 ";

	$warningResult = mysqli_query($conn, $warningQuery);
	//Test if there was a query error
	if(!$warningResult) { ?>
	<script type="text/javascript">
		alert("Database header query failed.");
	</script>
<?php	}
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
                    <span class="sidebar-title text-success"> Reoccupancy (600)</span>
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



      <section id="content" class="table-layout animated fadeIn">
		 <div class="tray tray-center mt40 pt40">
			<div class="panel invoice-panel">
                <div class="panel-body p20">            
                	<div class="row ">                                        	
                        <div class="col-md-6 col-md-offset-3 holder-style-yellow">                                            
                            <div class="row">                                                   
                                <div class="col-md-12">							                           	
                                    <div class="alert alert-warning">                            
                                        <h1><span class="fa fa-comments"></span><a href="l2.php?id=100&subid=100" style="color:#ffffff;"> Notification (100)</a></h1>                            		                                                       
                                    </div>                                                            
                                </div>
                            </div>                                                            
                            <div class="row">                                        	
                                <div class="col-md-12 arrowcenter">                        							                           	
                                    <i class="fa fa-arrow-down fa-lg"></i>                                                            
                                </div>
                            </div> 
                            <div class="row">                                        	
                                <div class="col-md-12">

                                    <div class="alert alert-warning">                            
                                        <h1><span class="fa fa-truck"></span><a href="l2.php?id=200&subid=200" style="color:#ffffff;"> First Response (200)</a></h1>                           		                                                       
                                    </div>                                                                    
                                </div>
                            </div>                 	                    
                    	</div>
                    </div>   
                    <div class="row">                                        	
                        <div class="col-md-12 arrowcenter">                        							                           	
                            <i class="fa fa-arrow-down fa-lg"></i>                                                            
                        </div>
                    </div> 
                    <div class="row">                                        	
                        <div class="col-md-8 col-md-offset-2 holder-style-red">                                            
                            <div class="row">                                                   
                                <div class="col-md-12">							                           	
                                    <div class="alert alert-danger">                            
                                        <h1><span class="fa fa-code-fork"></span><a href="l2.php?id=300&subid=300" style="color:#ffffff;"> Characterization (300)</a></h1>                            		                                                       
                                    </div>                                                            
                                </div>
                            </div>                             
                            <div class="row">                                        	                                
                                <div class="col-md-6">                                                                                        
                                    <div class="arrowcenter">                        							                           	
                                   		<i class="fa fa-arrow-down fa-lg"></i>                                                            
                                	</div>                                                                                                  
                                </div>
                                <div class="col-md-6">                                                                                        
                                    <div class="arrowcenter">                        							                           	
                                    	<i class="fa fa-arrow-down fa-lg"></i>                                                            
                                	</div>                                                                  
                                </div>
                            </div> 
                            <div class="row">                                        	                                
                                <div class="col-md-6">                                                                                        
                                    <div class="alert alert-danger">                            
                                        <h1><span class="fa fa-exclamation-triangle"></span><a href="l2.php?id=400&subid=400" style="color:#ffffff;"> Decontamination (400)</a></h1>                            		                                                       
                                    </div>                                                                    
                                </div>
                                <div class="col-md-1">                                                                                        
                                    <div class="arrowcenter">                        							                           	
                                   		<i class="fa fa-arrow-right fa-lg"></i>                                                            
                                	</div>                                                                                                  
                                </div>
                                <div class="col-md-5">                                                                                        
                                    <div class="alert alert-danger">                            
                                        <h1><span class="fa fa-building"></span><a href="l2.php?id=500&subid=500" style="color:#ffffff;"> Clearance (500)</a></h1>                            		                                                       
                                    </div>                                                                    
                                </div>
                            </div>                                                                                                                                                                                       	                    
                    	</div>
                    </div>   
                    <div class="row">                                        	
                        <div class="col-md-8 col-md-offset-2">    
                            <div class="col-md-5 col-md-offset-7 arrowcenter">                        							                           	
                                <i class="fa fa-arrow-down fa-lg"></i>                                                            
                            </div>
                      	</div>
                    </div> 
                    <div class="row">                                        	
                        <div class="col-md-6 col-md-offset-3 holder-style-green">                                            
                            <div class="row">                                                   
                                <div class="col-md-12">							                           	
                                    <div class="alert alert-success">                            
                                        <h1><span class="fa fa-wrench"></span><a href="l2.php?id=600&subid=600" style="color:#ffffff;"> Restoration/Reoccupancy (600)</a></h1>                            		                                                       
                                    </div>                                                            
                                </div>
                            </div>                                                                                                                                                                                                                               	                    
                    	</div>
                    </div>                                                                                                                                               
             	
                
                	<div class="row">                                        	
                        <div class="col-md-6 col-md-offset-3">       
                            <div class="alert alert-default mb30 mt50">               
                                <h2 class="mt5">Note!</h2>
                                <h3>
                                    Steps can proceed in parallel, are iterative and multiple areas or facilities can be addressed independently or simultaneously
                                </h3>                                
                            </div>
                        </div>
                    </div>
                    
                </div>                
        	</div>			
		</div>        
    </section> <!-- End: Content-Wrapper -->
  </div><!-- End: Main -->

  <!-- BEGIN: PAGE SCRIPTS -->
	
	<!-- jQuery -->
  <script src="vendor/jquery/jquery-1.11.1.min.js"></script>
  <script src="vendor/jquery/jquery_ui/jquery-ui.min.js"></script>

  <!-- Theme Javascript -->
  <script src="assets/js/utility/utility.js"></script>
  <script src="assets/js/demo/demo.js"></script>
  <script src="assets/js/main.js"></script>


  <!-- Widget Javascript -->
  <script src="assets/js/demo/widgets.js"></script>


  <script type="text/javascript">

  jQuery(document).ready(function() {

    "use strict";

    Demo.init(); // Init Demo JS 

    Core.init(); // Init Theme Core 



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



</body>



</html>


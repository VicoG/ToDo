<!-- Start: Left Decsion Framework Sidebar -->
<aside id="sidebar_left" class="nano nano-light affix sidebar-light"> <!-- Start: Sidebar Left Content -->
  <div class="sidebar-left-content nano-content" style="background-color:#7eace7;">
  <ul class="nav sidebar-menu mr15">
	<li class="sidebar-label">
	  <div class="panel panel-tile text-primary br-b bw5 br-primary-light mt40">
            <div class="panel-body pl20 p5">                
			 <img src="assets/images/problem_resolved.png" alt="PR" class="img-responsive pull-right" />
			<h2 class="mt15 lh15">
				<b>104</b>
			</h2>
			<h5 class="text-muted mt20">Notification</h5>
		</div>                          
	  </div>         
    </li>
	<li class="sidebar-label">                               
    <div class="panel panel-primary" id="p7" data-panel-color="panel-info">
        <div class="panel-heading">
            <span class="panel-title">Key RRS Strategy Objectives (100)</span>                    
        </div>
        <div class="panel-body">
            <p> <strong>1.</strong> TA EOC Activated</p>
            <p> <strong>2.</strong> Initial Notifications Made</p>
            <p> <strong>3.</strong> Suspected Site ID's</p> 
            <p> <strong>4.</strong> Intergrated Information Management Initiated</p> 
            <br />
        </div>
    </div>
	</li>
	<li class="sidebar-label">
    <div class="panel panel-primary" id="p7" data-panel-color="panel-info">
        <div class="panel-heading">
            <span class="panel-title"> Key RRS Strategy Objectives </span>                    
        </div>
        <div class="panel-body">
            <p> <strong>1.</strong> Stand-up Transit Agency Emergency Operations Center </p>
            <p> <strong>2.</strong> Initiate Integrated Information Management </p>
        </div>
    </div>     
 	</li>    
 	<!--Legend-->
	<li class="sidebar-label">    
    <div class="panel panel-primary panel-border top" data-panel-color="panel-info">
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
  </div> <!-- End: Sidebar Left Content -->
</aside>
       
<section id="content_wrapper"><!-- Start: Content-Wrapper -->

<header id="topbar" class="mt40 pt10">
	<div class="topbar-left">
	<ol class="breadcrumb">
		<li class="crumb-active">
		<h4 class="text-warning"><i class="fa fa-comments"></i> Emergency Center Identifies Incident </h4></li>
		</ol>
	</div>
</header> 
 
<div class="panel-body  p20" id="invoice-item">            
	<div class="row">
		<div class="col-md-4">
			 <img src="assets/images/done.png" class="img-responsive pl30" alt="Responsive image" />
		</div>
		<div class="col-md-8 ">
		<form method="post" action="l2.php?id=100&subid=endAlert" class="form-horizontal" role="form">
			<h2  class="text-success">Stand Down Alert?</h2>
			<button type="submit" name="submit" class="btn btn-success btn-lg" onclick="return confirm('The threat has been resolved?');">Stand Down</button><br><br>
			<p class="text-warning"> By pressing Stand Down you are deactivating and resetting the system. All completed actions will be marked incomplete and the Alert will be marked as complete. </p>
		</form>
		</div>            
	</div>  
</div>
            
	
<?php include"includes/footer.php"; ?>



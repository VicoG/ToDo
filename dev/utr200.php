<!-- Start: Left Decsion Framework Sidebar -->
<aside id="sidebar_left" class="nano nano-light affix sidebar-light"> <!-- Start: Sidebar Left Content -->
  <div class="sidebar-left-content nano-content" style="background-color:#7eace7;">
  <ul class="nav sidebar-menu mr15">
	<li class="sidebar-label">
	  <div class="panel panel-tile text-primary br-b bw5 br-primary-light mt40">
            <div class="panel-body pl20 p5">                
                 <img src="assets/images/action.png" alt="A" class="img-responsive pull-right" />
                <h2 class="mt15 lh15">
                    <b>200</b>
                </h2>
                <h5 class="text-muted mt20">Threat Assessment</h5>
            </div>
            <div class="panel-footer bg-white br-t br-light p12">
                <p>
                	Conduct initial threat assessment, and perform:                
                </p>                        
                <ul>
                	<li>General hazard analysis/site safety</li>
                    <li>Preliminary Hazmat response</li>
                    <li>Initial control measures</li>
                    <li>Rapid intelligence/data gathering</li>
                    <li>Risk communication strategy</li>
                </ul>                
                <a href="l2.php?id=200&subid=201" class="btn btn-primary pull-right mb15 mt15">Next</a>  
            </div>                    
        </div>        
	</li>
	<li class="sidebar-label">                                 
     <div class="panel panel-primary" id="p7" data-panel-color="panel-info">
        <div class="panel-heading">
            <span class="panel-title">Key RRS Strategy Objectives (200)</span>                    
        </div>
        <div class="panel-body">
            <p> <strong>1.</strong> Perform initial assessment of impact to system operations</p>
            <p> <strong>2.</strong> Evacuate system as needed</p>
            <p> <strong>3.</strong> Determine if and how system will be shutdown</p> 
            <p> <strong>4.</strong> Emergency situation stabilized</p> 
            <p> <strong>5.</strong> Initiate Return to Service Guidance/Plan if available</p> 
            <br />
            <p>
            	Note: Use Protective Action Recommendations (PARs)
            </p>
        </div>
    </div>
	</li>
	<li class="sidebar-label">   
    <div class="panel panel-primary panel-border top" data-panel-color="panel-info">
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
	</li>
  </ul>   <!-- End: Sidebar Left Menu List -->
  </div> <!-- End: Sidebar Left Content -->
</aside>
       
<section id="content_wrapper" ><!-- Start: Content-Wrapper -->

<!--  Content -->

<span id="show" ></span> 
<span id="showProgressBar" ></span>



<script type="text/javascript">
function loadPage(){
	$("#show").load("data.php?level=200&page=204",
		function(){
			$('#tableResponder').DataTable({
				"columnDefs": [
					{ "orderable": false, "targets": 6 },
					{ "orderable": false, "targets": 4 },
					{ "orderable": false, "targets": 5 }
				],
				dom: 'Bfrtip',
				buttons: [
					'print'
				]
			});
			
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
			});
			// show/hide Tables
			$("#toggleResponder").click(function(){
				$("#TR").toggle(1000);
			});
			$("#toggleTransit").click(function(){
				$("#TT").toggle(1000);
			});
		}
	);
}

loadPage();

$(document).ready(function(){
	
	loadFooter();
	loadDataTables();

	$(document).on('submit','form' ,function(){
		$.post("completed.php", $(this).serialize(), function(){
		loadPage();
		loadFooter();
	});
	
	return false;
	});
	
}); //close document.ready

</script>


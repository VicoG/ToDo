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


  <!-- Start: Main -->

<?php include "includes/db.php"; ?> <!-- Include Database -->
<?php include "includes/functions.php"; ?><!-- Include Functions -->
<?php include "includes/session.php"; ?><!-- Include Sessions -->

<div id="main">

<?php include "includes/header.php"; ?><!-- Include Header -->


<div id="skin-toolbox">
    <div class="panel">
      <div class="panel-heading">
        <span class="panel-icon">
          <i class="fa fa-sitemap text-primary"></i>
        </span>
        <span class="panel-title"> Decision Diagrams</span>
      </div>
      <div class="panel-body pn">
		<a href="#" id="s100" class="btn btn-primary btn-block pb10 pt10">100 Series</a>
        <a href="#" id="s200" class="btn btn-primary btn-block pb10 pt10">200 Series</a>
        <a href="#" id="s300" class="btn btn-primary btn-block pb10 pt10">300 Series</a>
        <a href="#" id="s400" class="btn btn-primary btn-block pb10 pt10">400 Series</a>
        <a href="#" id="s500" class="btn btn-primary btn-block pb10 pt10">500 Series</a>
        <a href="#" id="s600" class="btn btn-primary btn-block pb10 pt10">600 Series</a>
        
      </div>
    </div>
  </div>

      <!-- Begin: Content -->
		<section id="content" class="animated fadeIn">
			<?php

				if($_GET['subid'] == "add")
				{
					include "utr-add.php";
				}
				elseif($_GET['subid'] == "edit")
				{
					include "utr-edit.php";
				}
				elseif($_GET['subid'] == "logout")
				{
					include "utr-logout.php";
				}
				elseif($_GET['subid'] == "addAlert")
				{
					include "utr-addAlert.php";
				}
				elseif($_GET['subid'] == "endAlert")
				{
					include "utr-endAlert.php";
				}
				elseif($_GET['subid'] == "fileUpload")
				{
					include "utr-fileUpload.php";
				}
				else
				{
					include "utr" . $_GET['subid'] . ".php";
				}
			?>	
        

		</section>

      <!-- End: Content -->

	<!-- Image popup -->
        <div id="modal-image1" class="popup-basic popup-lg mfp-with-anim mfp-hide">
          <img src="assets/images/level100FlowChart.png" usemap="#level100">
		  <map name="level100" id="level100">
			<area shape="circle" coords="342,84, 41" href="l2.php?id=100&amp;subid=100" alt="" />
			<area shape="rect" coords="266,245,425,284" href="l2.php?id=100&amp;subid=103" alt="" />
			<area shape="rect" coords="266,186,421,233" href="l2.php?id=100&amp;subid=102" alt="" />
			<area shape="rect" coords="274,132,413,171" href="l2.php?id=100&amp;subid=101" alt="" />
		</map>
        </div>
		<div id="modal-image2" class="popup-basic popup-lg mfp-with-anim mfp-hide">
			<img src="assets/images/level200FlowChart.png" usemap="#level200" >
			<map name="level200" id="level200">
				<area shape="poly" coords="405,527,353,577,405,629,457,578" href="l2.php?id=200&amp;subid=214" alt="" />
				<area shape="poly" coords="579,455,527,503,578,555,631,504" href="l2.php?id=200&amp;subid=210" alt="" />
				<area shape="poly" coords="580,340,525,391,579,445,633,392" href="l2.php?id=200&amp;subid=209" alt="" />
				<area shape="poly" coords="403,238,351,294,403,345,457,293" href="l2.php?id=200&amp;subid=207" alt="" />
				<area shape="poly" coords="337,32,285,86,338,137,387,87" href="l2.php?id=200&amp;subid=201" alt="" />
				<area shape="poly" coords="219,31,164,85,217,139,271,87" href="l2.php?id=200&amp;subid=203" alt="" />
				<area shape="circle" coords="579,765, 49" href="l2.php?id=200&amp;subid=212" alt="" />
				<area shape="circle" coords="333,212, 52" href="l2.php?id=200&amp;subid=202" alt="" />
				<area shape="rect" coords="512,636,649,685" href="l2.php?id=200&amp;subid=211" alt="" />
				<area shape="rect" coords="337,768,470,803" href="l2.php?id=200&amp;subid=216" alt="" />
				<area shape="rect" coords="319,644,490,751" href="l2.php?id=200&amp;subid=215" alt="" />
				<area shape="rect" coords="337,429,470,469" href="l2.php?id=200&amp;subid=213" alt="" />
				<area shape="rect" coords="512,259,642,322" href="l2.php?id=200&amp;subid=208" alt="" />
				<area shape="rect" coords="177,264,258,322" href="l2.php?id=200&amp;subid=206" alt="" />
				<area shape="rect" coords="20,222,154,367" href="l2.php?id=200&amp;subid=205" alt="" />
				<area shape="rect" coords="20,139,154,198" href="l2.php?id=200&amp;subid=204" alt="" />
				<area shape="rect" coords="398,44,615,125" href="l2.php?id=200&amp;subid=200" alt="" />
			</map>
        </div>
		<div id="modal-image3" class="popup-basic popup-lg mfp-with-anim mfp-hide">
          <img src="assets/images/level300FlowChart.png" usemap="#level300">
		  <map name="level300" id="level300">
			<area shape="poly" coords="340,657,291,715,341,769,396,715" href="l2.php?id=300&amp;subid=313" alt="" />
			<area shape="poly" coords="221,659,166,715,222,771,278,716" href="l2.php?id=300&amp;subid=311" alt="" />
			<area shape="poly" coords="84,659,29,715,85,771,139,715" href="l2.php?id=300&amp;subid=312" alt="" />
			<area shape="poly" coords="470,591,415,647,471,701,527,645" href="l2.php?id=300&amp;subid=308" alt="" />
			<area shape="poly" coords="219,438,168,493,221,548,279,495" href="l2.php?id=300&amp;subid=309" alt="" />
			<area shape="rect" coords="541,757,647,835" href="l2.php?id=300&amp;subid=316" alt="" />
			<area shape="rect" coords="424,761,531,835" href="l2.php?id=300&amp;subid=315" alt="" />
			<area shape="rect" coords="35,820,167,863" href="l2.php?id=300&amp;subid=314" alt="" />
			<area shape="rect" coords="87,564,350,641" href="l2.php?id=300&amp;subid=310" alt="" />
			<area shape="rect" coords="405,542,541,574" href="l2.php?id=300&amp;subid=307" alt="" />
			<area shape="rect" coords="400,480,541,525" href="l2.php?id=300&amp;subid=306" alt="" />
			<area shape="rect" coords="375,432,567,464" href="l2.php?id=300&amp;subid=305" alt="" />
			<area shape="rect" coords="372,383,567,416" href="l2.php?id=300&amp;subid=304" alt="" />
			<area shape="rect" coords="280,270,657,371" href="l2.php?id=300&amp;subid=303" alt="" />
			<area shape="rect" coords="304,136,628,253" href="l2.php?id=300&amp;subid=302" alt="" />
			<area shape="rect" coords="372,86,567,127" href="l2.php?id=300&amp;subid=301" alt="" />
			<area shape="rect" coords="400,25,541,73" href="l2.php?id=300&amp;subid=300" alt="" />
		</map>
        </div>
		<div id="modal-image4" class="popup-basic popup-lg mfp-with-anim mfp-hide">
          <img  src="assets/images/level400FlowChart.png" usemap="#level400">
		  <map name="level400" id="level400">
			<area shape="poly" coords="365,459,313,512,366,563,420,513" href="l2.php?id=400&amp;subid=408" alt="" />
			<area shape="poly" coords="365,117,311,167,365,217,417,169" href="l2.php?id=400&amp;subid=401" alt="" />
			<area shape="poly" coords="221,113,169,167,223,219,273,167" href="l2.php?id=400&amp;subid=402" alt="" />
			<area shape="rect" coords="288,408,441,449" href="l2.php?id=400&amp;subid=407" alt="" />
			<area shape="rect" coords="288,326,441,394" href="l2.php?id=400&amp;subid=406" alt="" />
			<area shape="rect" coords="448,246,603,316" href="l2.php?id=400&amp;subid=403" alt="" />
			<area shape="rect" coords="288,246,441,313" href="l2.php?id=400&amp;subid=404" alt="" />
			<area shape="rect" coords="54,246,205,316" href="l2.php?id=400&amp;subid=405" alt="" />
			<area shape="rect" coords="288,50,441,105" href="l2.php?id=400&amp;subid=400" alt="" />
		</map>
        </div>
		<div id="modal-image5" class="popup-basic popup-lg mfp-with-anim mfp-hide">
          <img src="assets/images/level500FlowChart.png" usemap="#level500">
		  <map name="level500" id="level500">
			<area shape="rect" coords="207,250,360,293" href="l2.php?id=500&amp;subid=502" alt="" />
			<area shape="rect" coords="80,406,208,458" href="l2.php?id=500&amp;subid=505" alt="" />
			<area shape="rect" coords="80,332,207,387" href="l2.php?id=500&amp;subid=504" alt="" />
			<area shape="rect" coords="80,164,207,207" href="l2.php?id=500&amp;subid=506" alt="" />
			<area shape="rect" coords="208,42,360,86" href="l2.php?id=500&amp;subid=500" alt="" />
			<area shape="poly" coords="285,307,228,360,283,411,342,359" href="l2.php?id=500&amp;subid=503" alt="" />
			<area shape="poly" coords="571,132,517,184,571,238,623,185" href="l2.php?id=500&amp;subid=506" alt="" />
			<area shape="poly" coords="447,132,393,185,447,237,500,185" href="l2.php?id=500&amp;subid=507" alt="" />
			<area shape="poly" coords="284,131,229,186,284,241,338,187" href="l2.php?id=500&amp;subid=501" alt="" />
		</map>
        </div>
		<div id="modal-image6" class="popup-basic popup-lg mfp-with-anim mfp-hide">
          <img src="assets/images/level600FlowChart.png" usemap="#level600">
		  <map name="level600" id="level600">
			<area shape="poly" coords="472,21,417,79,478,133,535,79" href="l2.php?id=600&amp;subid=602" alt="" />
			<area shape="circle" coords="566,324, 50" href="l2.php?id=600&amp;subid=605" alt="" />
			<area shape="rect" coords="492,208,646,260" href="l2.php?id=600&amp;subid=604" alt="" />
			<area shape="rect" coords="492,143,646,199" href="l2.php?id=600&amp;subid=603" alt="" />
			<area shape="rect" coords="246,52,390,107" href="l2.php?id=600&amp;subid=601" alt="" />
			<area shape="rect" coords="70,52,214,107" href="l2.php?id=600&amp;subid=600" alt="" />
		</map>
        </div>

    </section><!-- End: Content-Wrapper -->

  </div><!-- End: Main -->



  <!-- BEGIN: PAGE SCRIPTS -->



	<!-- jQuery -->
	<script src="vendor/jquery/jquery-2.2.3.js"></script>
	<script src="vendor/jquery/jquery_ui/jquery-ui.min.js"></script>
	
	<!-- Dropzone Plugin -->
	<script src="vendor/plugins/dropzone/dropzone.min.js"></script>
	
	<!-- HighCharts Plugin -->
	<script src="vendor/plugins/highcharts/highcharts.js"></script>
	
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
	
	<!-- Tables Filter-->
	<script src="vendor/TableFilter/multifilter.min.js"></script>
<!-- Data Tables -->
 <link rel="stylesheet" type="text/css" href="vendor/DataTables/datatables.min.css"/>
 <script type="text/javascript" src="vendor/DataTables/dataTables.min.js"></script>
 <!--<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css"/> 
  <link rel="stylesheet" type="text/css" href=" https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css"/> -->


 <script type="text/javascript">
 

  jQuery(document).ready(function() {

    "use strict";

    Demo.init();   // Init Demo JS  

    Core.init();// Init Theme Core  
	
	$("#toggle").click(function(){
		$("#nav-spy").toggle(1000);
	});
	$("#toggleKey").click(function(){
		$("#key").toggle(1000);
	});
		// show/hide Tables
	$("#toggleResponder").click(function(){
		$("#TR").toggle(1000);
	});
	$("#toggleTransit").click(function(){
		$("#TT").toggle(1000);
	});
	
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


  });

  </script>

  <!-- END: PAGE SCRIPTS -->

	<?php imageMapResize(); ?>


</body>



</html>


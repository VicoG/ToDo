<?php
	//phpinfo();
?>

		
                    	                    	
 <!--Main content Area-->          
 
 
		<!--Show dynamic generated html-->
		
		 
		<div id="show"></div> 
		
				
 
<script type="text/javascript">
function loadPage(){
	$("#show").load("data.php?level=200&page=200");
		}
function loadDataTables(){

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
}


	
	loadPage();
	//loadDataTables();
	//Refresh loadPage(); function after 10000 milliseconds
	//setInterval(loadPage(),3000);
	$(document).ready(function(){
		loadDataTables();
		
		
		$(document).on('submit','form' ,function(){
			$.post("completed.php", $(this).serialize(), function(){
				$("#show").load("data.php?level=200&page=200",
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
				}
				);
				
			});
			
			return false;
			
		});
	
	
		$('#print').on('click',function(){
			printData();
		})
					
		$('#printTransit').on('click',function(){
			printData2();
		})
		
		
		

		/*$('form').submit(function(){
			$.post("completed.php", $(this).serialize(), function(){
				loadPage();	
		});
			
			return false;
		})
		
		$('button').click(function(){
			alert('button');
		});
		
		$(document).on('click','#show' ,function(){
			alert( "Data Loaded: ");
			loadPage();
			return false;
		});
			
		$("#submit").click(function(){
			$.post("completed.php", 
			{
				task: $("#task").val(),
				row: $("#row").val(),
				checked: $("#checked").val(),
				actionNumber: $("#actionNumber").val(),
				level: $("#level").val(), 
				page: $("#page").val() 
			} ,
				function( data ) {
				  var xmlhttp = new XMLHttpRequest();
					xmlhttp.onreadystatechange = function() {
						if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
							document.getElementById("show").innerHTML = xmlhttp.responseText;
						}
					};
					xmlhttp.open("GET", "data.php", true);
					xmlhttp.send();
				  alert( "Data Loaded: ");
				}
			);
			return false;
		});*/
		
		/*function loadPage(){
 	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (xhttp.readyState == 4 && xhttp.status == 200) {
			document.getElementById("show").innerHTML = xhttp.responseText;
		}
	};
	xhttp.open("POST", "data.php", true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("page=301");
	}
	
	function updateCompleted(){
		$('form').submit(function(){
			$.post("completed.php", $(this).serialize(), function(){
		});
			
			return false;
		});
	};*/

		
	});

</script>




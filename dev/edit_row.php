<?php require "includes/db.php";
	//echo "DB connected";
?>
<?php include "includes/functions.php"; ?>


<?php 

if (isset($_POST['submit'])) {
		//echo "in first if"; 
		
	$row= (int) $_POST["row"];
	$level= (int) $_POST["level"];
	$page= (int) $_POST["page"];

	$responsible1_header= mysql_check($_POST["responsible1_header"]); 
	$responsible1_details1= mysql_check($_POST["responsible1_details1"]);  
	$responsible1_details2= mysql_check($_POST["responsible1_details2"]);
	
	$responsible2_header= mysql_check($_POST["responsible2_header"]); 
	$responsible2_details1= mysql_check($_POST["responsible2_details1"]);  
	$responsible2_details2= mysql_check($_POST["responsible2_details2"]);
	
	$agency1= mysql_check($_POST["agency1"]);
	$agency2= mysql_check($_POST["agency2"]); 
	$agency3= mysql_check($_POST["agency3"]); 
	$agency4= mysql_check($_POST["agency4"]);
	$agency5= mysql_check($_POST["agency5"]);
	
	
	$action1= mysql_check($_POST["action1"]);
	$action1_details1= mysql_check($_POST["action1_details1"]); 
	$action1_details2= mysql_check($_POST["action1_details2"]);
	$action1_details3= mysql_check($_POST["action1_details3"]);
	$action1_details4= mysql_check($_POST["action1_details4"]);
	$action1_details5= mysql_check($_POST["action1_details5"]); 
	$action1_details6= mysql_check($_POST["action1_details6"]);
	$action1_details7= mysql_check($_POST["action1_details7"]);
	$action1_details8= mysql_check($_POST["action1_details8"]);
	$action1_details9= mysql_check($_POST["action1_details9"]); 
	$action1_details10= mysql_check($_POST["action1_details10"]);
	
	$action2= mysql_check($_POST["action2"]);
	$action2_details1= mysql_check($_POST["action2_details1"]); 
	$action2_details2= mysql_check($_POST["action2_details2"]);
	$action2_details3= mysql_check($_POST["action2_details3"]);
	$action2_details4= mysql_check($_POST["action2_details4"]);
	$action2_details5= mysql_check($_POST["action2_details5"]); 
	$action2_details6= mysql_check($_POST["action2_details6"]);
	$action2_details7= mysql_check($_POST["action2_details7"]);
	$action2_details8= mysql_check($_POST["action2_details8"]); 
	$action2_details9= mysql_check($_POST["action2_details9"]); 
	$action2_details10= mysql_check($_POST["action2_details10"]);
	
	$action3= mysql_check($_POST["action3"]);
	$action3_details1= mysql_check($_POST["action3_details1"]); 
	$action3_details2= mysql_check($_POST["action3_details2"]);
	$action3_details3= mysql_check($_POST["action3_details3"]);
	$action3_details4= mysql_check($_POST["action3_details4"]);
	$action3_details5= mysql_check($_POST["action3_details5"]); 
	$action3_details6= mysql_check($_POST["action3_details6"]);
	$action3_details7= mysql_check($_POST["action3_details7"]); 
	
	$action4= mysql_check($_POST["action4"]);
	$action4_details1= mysql_check($_POST["action4_details1"]); 
	$action4_details2= mysql_check($_POST["action4_details2"]);
	$action4_details3= mysql_check($_POST["action4_details3"]);
	$action4_details4= mysql_check($_POST["action4_details4"]);
	$action4_details5= mysql_check($_POST["action4_details5"]);
	$action4_details6= mysql_check($_POST["action4_details6"]);
	$action4_details7= mysql_check($_POST["action4_details7"]);
	 
	$action5= mysql_check($_POST["action5"]);
	$action5_details1= mysql_check($_POST["action5_details1"]); 
	$action5_details2= mysql_check($_POST["action5_details2"]);
	$action5_details3= mysql_check($_POST["action5_details3"]);
	$action5_details4= mysql_check($_POST["action5_details4"]);
	 
	$action6= mysql_check($_POST["action6"]);
	$action6_details1= mysql_check($_POST["action6_details1"]); 
	$action6_details2= mysql_check($_POST["action6_details2"]);
	$action6_details3= mysql_check($_POST["action6_details3"]);
	$action6_details4= mysql_check($_POST["action6_details4"]); 
	
	$action7= mysql_check($_POST["action7"]);
	$action7_details1= mysql_check($_POST["action7_details1"]); 
	$action7_details2= mysql_check($_POST["action7_details2"]);
	$action7_details3= mysql_check($_POST["action7_details3"]);
	$action7_details4= mysql_check($_POST["action7_details4"]);
	
	$action8= mysql_check($_POST["action8"]);
	$action8_details1= mysql_check($_POST["action8_details1"]); 
	$action8_details2= mysql_check($_POST["action8_details2"]);
	$action8_details3= mysql_check($_POST["action8_details3"]);
	$action8_details4= mysql_check($_POST["action8_details4"]);
	
	$action9= mysql_check($_POST["action9"]);
	$action9_details1= mysql_check($_POST["action9_details1"]); 
	$action9_details2= mysql_check($_POST["action9_details2"]);
	$action9_details3= mysql_check($_POST["action9_details3"]);
	$action9_details4= mysql_check($_POST["action9_details4"]);
  
	$required1= mysql_check($_POST["required1"]);
	$required2= mysql_check($_POST["required2"]); 
	$required3= mysql_check($_POST["required3"]); 
	$required4= mysql_check($_POST["required4"]);
	$required5= mysql_check($_POST["required5"]);
	$required6= mysql_check($_POST["required6"]);
	$required7= mysql_check($_POST["required7"]); 
	
	$resources1= mysql_check($_POST["resources1"]);
	$resources2= mysql_check($_POST["resources2"]);
	$resources3= mysql_check($_POST["resources3"]);
	$resources4= mysql_check($_POST["resources4"]);
	$resources5= mysql_check($_POST["resources5"]);
	$resources6= mysql_check($_POST["resources6"]);
	$resources7= mysql_check($_POST["resources7"]);
	$resources8= mysql_check($_POST["resources8"]);
				
	// Process the form
	$query  = "UPDATE main_table SET ";
	$query .= "responsible1_header= '{$responsible1_header}', ";
	$query .= "responsible1_details1= '{$responsible1_details1}', ";  
	$query .= "responsible1_details2= '{$responsible1_details2}', ";
	
	$query .= "responsible2_header= '{$responsible2_header}', "; 
	$query .= "responsible2_details1= '{$responsible2_details1}', ";  
	$query .= "responsible2_details2= '{$responsible2_details2}', ";
	
	$query .= "agency1= '{$agency1}', ";
	$query .= "agency2= '{$agency2}', "; 
	$query .= "agency3= '{$agency3}', "; 
	$query .= "agency4= '{$agency4}', ";
	$query .= "agency5= '{$agency5}', ";
	
	$query .= "action1= '{$action1}', ";
	$query .= "action1_details1= '{$action1_details1}', "; 
	$query .= "action1_details2= '{$action1_details2}', ";
	$query .= "action1_details3= '{$action1_details3}', ";
	$query .= "action1_details4= '{$action1_details4}', ";
	$query .= "action1_details5= '{$action1_details5}', ";
	$query .= "action1_details6= '{$action1_details6}', ";
	$query .= "action1_details7= '{$action1_details7}', ";
	$query .= "action1_details8= '{$action1_details8}', "; 
	$query .= "action1_details9= '{$action1_details9}', ";
	$query .= "action1_details10= '{$action1_details10}', "; 
	
	$query .= "action2= '{$action2}', ";
	$query .= "action2_details1= '{$action2_details1}', "; 
	$query .= "action2_details2= '{$action2_details2}', ";
	$query .= "action2_details3= '{$action2_details3}', ";
	$query .= "action2_details4= '{$action2_details4}', ";
	$query .= "action2_details5= '{$action2_details5}', "; 
	$query .= "action2_details6= '{$action2_details6}', ";
	$query .= "action2_details7= '{$action2_details7}', ";
	$query .= "action2_details8= '{$action2_details8}', ";
	$query .= "action2_details9= '{$action2_details9}', "; 
	$query .= "action2_details10= '{$action2_details10}', ";
	 
	
	$query .= "action3= '{$action3}', ";
	$query .= "action3_details1= '{$action3_details1}', "; 
	$query .= "action3_details2= '{$action3_details2}', ";
	$query .= "action3_details3= '{$action3_details3}', ";
	$query .= "action3_details4= '{$action3_details4}', ";
	$query .= "action3_details5= '{$action3_details5}', ";
	$query .= "action3_details6= '{$action3_details6}', ";
	$query .= "action3_details7= '{$action3_details7}', ";  
	
	$query .= "action4= '{$action4}', ";
	$query .= "action4_details1= '{$action4_details1}', "; 
	$query .= "action4_details2= '{$action4_details2}', ";
	$query .= "action4_details3= '{$action4_details3}', ";
	$query .= "action4_details4= '{$action4_details4}', "; 
	$query .= "action4_details5= '{$action4_details5}', ";
	$query .= "action4_details6= '{$action4_details6}', ";
	$query .= "action4_details7= '{$action4_details7}', ";
	 
	$query .= "action5= '{$action5}', ";
	$query .= "action5_details1= '{$action5_details1}', "; 
	$query .= "action5_details2= '{$action5_details2}', ";
	$query .= "action5_details3= '{$action5_details3}', ";
	$query .= "action5_details4= '{$action5_details4}', ";
	 
	$query .= "action6= '{$action6}', ";
	$query .= "action6_details1= '{$action6_details1}', "; 
	$query .= "action6_details2= '{$action6_details2}', ";
	$query .= "action6_details3= '{$action6_details3}', ";
	$query .= "action6_details4= '{$action6_details4}', "; 
	
	$query .= "action7= '{$action7}', ";
	$query .= "action7_details1= '{$action7_details1}', "; 
	$query .= "action7_details2= '{$action7_details2}', ";
	$query .= "action7_details3= '{$action7_details3}', ";
	$query .= "action7_details4= '{$action7_details4}', ";
	
	$query .= "action8= '{$action8}', ";
	$query .= "action8_details1= '{$action8_details1}', "; 
	$query .= "action8_details2= '{$action8_details2}', ";
	$query .= "action8_details3= '{$action8_details3}', ";
	$query .= "action8_details4= '{$action8_details4}', ";
	
	$query .= "action9= '{$action9}', ";
	$query .= "action9_details1= '{$action9_details1}', "; 
	$query .= "action9_details2= '{$action9_details2}', ";
	$query .= "action9_details3= '{$action9_details3}', ";
	$query .= "action9_details4= '{$action9_details4}', ";
  
	$query .= "required1= '{$required1}', ";
	$query .= "required2= '{$required2}', "; 
	$query .= "required3= '{$required3}', "; 
	$query .= "required4= '{$required4}', ";
	$query .= "required5= '{$required5}', ";
	$query .= "required6= '{$required6}', ";
	$query .= "required7= '{$required7}', ";  
	
	$query .= "resources1= '{$resources1}', ";
	$query .= "resources2= '{$resources2}', ";
	$query .= "resources3= '{$resources3}', ";
	$query .= "resources4= '{$resources4}', ";
	$query .= "resources5= '{$resources5}', ";
	$query .= "resources6= '{$resources6}', ";
	$query .= "resources7= '{$resources7}', ";
	$query .= "resources8= '{$resources8}' ";
					
	$query .= "WHERE id = {$row} ";
	$query .= "LIMIT 1";
	
	$result = mysqli_query($conn, $query);
	
	if($result && mysqli_affected_rows($conn) ==1) {
			//Success
			header("Location: l2.php?id=" . $level. "&subid=" . $page); 
			
		} else {
			//Failure
			// $message = "Subject pdate failed";
			header("Location: l2.php?id=" . $level. "&subid=edit"); 

		}
	//closing else statement
	} else {
		//If not a submit
		header("Location: index.php"); 
	}
	
?>
   
   
<?php
	if (isset($conn)) { mysqli_close($conn); }
?>













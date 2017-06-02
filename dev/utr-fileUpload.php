<?php require "includes/db.php"; ?>
<?php


$level = $_GET['id'];//level of progress ie 200. 300 etc
$row = (int)$_GET[row]; // id number of row selected
$table = $_GET['table']; // page number or subid ie 301, 204 etc


$max = 4194304;
$message = "";
if (isset($_POST['upload'])) {
	
	$level= (int)$_POST[id];
	$table= (int)$_POST[subid];
	$row= (int)$_POST[row];
	$destination = __DIR__ . '/docs/';
	
	if ($_FILES['filename']['error'] == 0) {
		$result = move_uploaded_file($_FILES['filename']['tmp_name'], $destination . $_FILES['filename']['name']);
		if ($result) {
			$doc= mysql_check($_FILES['filename']['name']);
			$queryDocs = "SELECT doc1, doc2, doc3, doc4, doc5, doc6 FROM main_table WHERE id = $row";
				
			$DocResult = mysqli_query($conn, $queryDocs);
			$data = mysqli_fetch_assoc($DocResult);
			//Test if there was a query error
			if(!$DocResult) {?>
			<script>
				alert("Doc Query failed.");
			</script> <?php
	  		}
			// Load file to proper place				
			if (empty($data['doc1'])){
				$queryUpdate = "UPDATE main_table SET doc1= '$doc' WHERE id= $row LIMIT 1";
				$message = $_FILES['filename']['name'] . ' was uploaded successfully. Yay';
			} elseif (empty($data['doc2'])){
				$queryUpdate = "UPDATE main_table SET doc2= '$doc' WHERE id= $row LIMIT 1";
				$message = $_FILES['filename']['name'] . ' was uploaded successfully.';
			} elseif (empty($data['doc3'])){
				$queryUpdate = "UPDATE main_table SET doc3= '$doc' WHERE id= $row LIMIT 1";
				$message = $_FILES['filename']['name'] . ' was uploaded successfully.';
			} elseif (empty($data['doc4'])){
				$queryUpdate = "UPDATE main_table SET doc4= '$doc' WHERE id= $row LIMIT 1";
				$message = $_FILES['filename']['name'] . ' was uploaded successfully.';
			} elseif (empty($data['doc5'])){
				$queryUpdate = "UPDATE main_table SET doc5= '$doc' WHERE id= $row LIMIT 1";
				$message = $_FILES['filename']['name'] . ' was uploaded successfully.';
			} elseif (empty($data['doc6'])){
				$queryUpdate = "UPDATE main_table SET doc6= '$doc' WHERE id= $row LIMIT 1";
				$message = $_FILES['filename']['name'] . ' was uploaded successfully.';
			} else {
				$message = 'You can only load six(6) files to a row.';
			}
			
			$Updateresult = mysqli_query($conn, $queryUpdate);

			if($Updateresult && mysqli_affected_rows($conn) ==1) {
				header("Location: l2.php?id=" . $level . "&subid=" . $table); 
			}
		} else {
			$message = 'There was a problem uploading ' . $_FILES['filename']['name'];
		}
	} else {
		switch ($_FILES['filename']['error']) {
			case 2:
				$message = $_FILES['filename']['name'] . ' is too big to upload. Max size is 4 MB.';
				break;
			case 4:
				$message = 'No file selected.';
				break;
			default:
				$message = 'Sorry, there was a problem uploading ' . $_FILES['filename']['name'];
				break;
		}
	}
}
?>



<div class="tray tray-center mt35 pt10">         
	<div class="panel invoice-panel">
    	<div class="panel-heading">
        	<span class="panel-title ">
            <span class="fa fa-pencil-square"></span> Add a File <?php echo $table; ?></span>
           	<div class="panel-header-menu pull-right mr10">              
            	<a href="l2.php?id=<?php echo $level; ?>&subid=<?php echo $table; ?>" class="btn btn-default btn-sm"><i class="fa fa-arrow-left pr5"></i> Back</a>                       
          	</div>
        </div>
  		<div class="panel-body " id="invoice-item" style="padding-left:10em">            

		  <!-- Begin Form -->                           
			<h2> Upload File </h2>
			
			<?php 
			if ($message != "") {
				echo "<p>$message</p>";
			}
			?>
			<form action="l2.php?id=$level&subid=fileUpload" method="post" enctype="multipart/form-data">
			<p class="text-system">
			<input type="hidden" name="MAX_FILE_SIZE" value="<?php echo $max ?>">
			<input type="hidden" name="id" value="<?php echo $level ?>">
			<input type="hidden" name="subid" value="<?php echo $table ?>">
			<input type="hidden" name="row" value="<?php echo $row ?>">
			<label  for="filename"> Select File:</label>
			<input  type="file" name="filename" id="filename" >
			</p>
			
			<div class="btn-group" role="group" >
			<button class="btn btn-warning btn-sm" type="reset" value="Reset">Reset</button>
			<input class="btn btn-system btn-sm" type="submit" name="upload" value="Upload File">
			</div>
			</form>
			<!-- End Form-->   
         </div>                   
   	</div>         
</div>




<?php
	if (isset($conn)) { mysqli_close($conn); }
?>





























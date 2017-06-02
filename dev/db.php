<?php
$servername = "tid-websvrprd.llnl.gov";
$username = "distefano3";
$password = "avalon22";
$db = "utrDatabase";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?> 

<!-- for PHP 5.5<= 

$user = 'root';
$password = 'root';
$db = 'inventory';
$host = 'localhost';
$port = 3306;

$link = mysql_connect(
   "$host:$port", 
   $user, 
   $password
);
$db_selected = mysql_select_db(
   $db, 
   $link
); -->

<!-- for PHP 5.5>

$user = 'root';
$password = 'root';
$db = 'inventory';
$host = 'localhost';
$port = 3306;

$link = mysqli_init();
$success = mysqli_real_connect(
   $link, 
   $host, 
   $user, 
   $password, 
   $db,
   $port
); -->


<?php
//2. Database query
	$query = "SELECT * FROM 	subjects";
	$query .= "WHERE visible = 1 ";
	$query .= "ORDER BY position ASAC";
	
	$result = my_sqli_query($connection, $query);
	//Test if there was a query error
	if(!$result) {
		die("Database query failed.");
	}
?>

<div id="main">
	<div id="navigation">
    	<ul>
			<?php
            //3. Use return data (if any)
                while($subject = mysqli_fetch_row($result)){
                    //output data from each row
                    var_dump($row);
                    echo "hr />";
                }
           ?>
           <li>
           	<?php 
				echo $subject["menu_name"] . " (" .$subject["id"] . "0";
			?>
            </li>
          </ul>
    </div>
    <?php
    //4. Release returned data
        mysqli_free_result($result);
    ?>  
</div>

<?php
	//5. Close database connection
	mysqli_close($connection);
?>

// Database Query
<?php
	function findTableData($tableID){
		global $conn;
		
		$safeTableID = mysqli_real_escape_string($conn, $tableID);
				
		$query = "SELECT * ";
		$query .= "FROM table ";
		$query .= "WHERE page = {$safeTableID} ";
		$tableSet = mysqli_query($conn, $query);
		confirm_query($tableSet);
		if($tableData = mysqli_fetch_assoc($tableSet)) {
			return $tableData;
		} else {
			return null;
		}
	}
?>

// call function

 <?php $currentTable = findTableData(200); ?>
 <?php echo $currentTable["tableSet"]; ?>
	
	
	
<tr>
<?php	
		//Populate Table
	while ($tableData) { ?>
	<td> <?php echo $tableData["responsible"]; ?> </td>
	<td> <?php	echo["agency"]; ?> </td>
	<td> 	
        <div class="checkbox-custom checkbox-success mb5">
            <input id="utr_204_5" type="checkbox">
        </div>  
	</td>
	<td> <?php	echo["keyActions"]; ?> </td>
	<td> <?php	echo["dataRequired"]; ?> </td>
	<td> <?php	echo["information"]; ?> </td>
	<td> <?php	echo["resources"]; ?> </td>
	<?php 
		}
	 ?>
</tr>		
		
<?php
	// Edit
		include('config.php');
		if(isset($_GET['id']))
		{
		$id=$_GET['id'];
		if(isset($_POST['submit']))
		{
		$name=$_POST['name'];
		$age=$_POST['age'];
		$query3=mysql_query("update addd set name='$name', age='$age' where id='$id'");
		if($query3)
		{
		header('location:list.php');
		}
		}
		$query1=mysql_query("select * from addd where id='$id'");
		$query2=mysql_fetch_array($query1);
		?>
		<form method="post" action="">
		Name:<input type="text" name="name" value="<?php echo $query2['name']; ?>" /><br />
		Age:<input type="text" name="age" value="<?php echo $query2['age']; ?>" /><br /><br />
		<br />
		<input type="submit" name="submit" value="update" />
		</form>
		<?php
		}
?>	

<?php
//delete
	include('config.php');
	if(isset($_GET['id']))
	{
	$id=$_GET['id'];
	$query1=mysql_query("delete from addd where id='$id'");
	if($query1)
	{
	header('location:list.php');
	}
	}
?>




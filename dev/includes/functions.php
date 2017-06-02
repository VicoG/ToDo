<?php ob_start() ?>

<?php
function redirectTo($location) {
	//Need to be at top of page,nothing b4 the php tag, no white spaces, nothing
	header("Location: " . $location);
	exit();
}

	include "includes/db.php";
	
	$errors = array();

// brings up responder table
function responderTableQuery($page){
	global $conn;
	$query  = "SELECT * FROM main_table ";
	$query .= "WHERE transit=0 AND page= $page";

	$result = mysqli_query($conn, $query);
	//Test if there was a query error
	if(!$result) { ?>
		<script>
			function myFunction() {
				alert("Database query failed.");
			}
		</script>
	<?php }
	return $result; 
}

// brings up transit specif table
function transitTableQuery($page){
	global $conn;
	$query2 =  "SELECT * FROM 	main_table ";
	$query2 .= "WHERE transit = 1 AND page= $page";
	
	$result2 = mysqli_query($conn, $query2);
	//Test if there was a query error
	if(!$result2) {?>
		<script>
			function myFunction() {
				alert("Database query failed.");
			}
		</script>
	<?php } 	
	return $result2;
}

function progressBarQuery(){
	global $conn;
	$queryProgress  = "SELECT * FROM progress_table ";
	$queryProgress .= "WHERE id = 1 ";

	$resultProgress = mysqli_query($conn, $queryProgress);
	//Test if there was a query error
	if(!$resultProgress) { ?>
		<script type="text/javascript">
			alert("Database Progress Bar query failed.");
		</script>
	<?php } 
	return $resultProgress;
}
	
	//Checks for and prevents SQL injections
	function mysql_check($string) {
		global $conn;
		
		$escaped_string = mysqli_real_escape_string($conn, $string);
		return $escaped_string;
	}
	
	function form_errors($errors=array()) {
		$output = "";
		if (!empty($errors)) {
		  $output .= "<div class=\"error\">";
		  $output .= "Please fix the following errors:";
		  $output .= "<ul>";
		  foreach ($errors as $key => $error) {
		    $output .= "<li>";
				$output .= htmlentities($error);
				$output .= "</li>";
		  }
		  $output .= "</ul>";
		  $output .= "</div>";
		}
		return $output;
	}
	
	function findUsers() {
		global $conn;
		
		$query  = "SELECT * ";
		$query .= "FROM users ";
		$query .= "ORDER BY name ASC";
		$usersFound = mysqli_query($conn, $query);
		confirm_query($usersFound);
		return $usersFound;
	}
	
	function find_users_by_id($userID) {
		global $conn;
		
		$safe_userID = mysqli_real_escape_string($conn, $userID);
		
		$query  = "SELECT * ";
		$query .= "FROM users ";
		$query .= "WHERE id = {$safe_userID} ";
		$query .= "LIMIT 1";
		$usersFound = mysqli_query($conn, $query);
		confirm_query($usersFound);
		if($user = mysqli_fetch_assoc($usersFound)) {
			return $user;
		} else {
			return null;
		}
	}
	
	function findUserByName($username) {
		global $conn;
		
		$safeUserName = mysqli_real_escape_string($conn, $username);
		
		$query  = "SELECT * ";
		$query .= "FROM users ";
		$query .= "WHERE name = '{$safeUserName}' ";
		$query .= "LIMIT 1";
		$admin_set = mysqli_query($conn, $query);
		confirm_query($admin_set);
		if($user = mysqli_fetch_assoc($admin_set)) {
			return $user;
		} else {
			return null;
		}
	}

	// confirm if query was successful
	function confirm_query($result_set) {
		if (!$result_set) {
			die("Database query failed.");
		}
	}
	//validations
	function fieldname_as_text($fieldname) {
	  $fieldname = str_replace("_", " ", $fieldname);
	  $fieldname = ucfirst($fieldname);
	  return $fieldname;
	}
	
	function has_presence($value) {
		return isset($value) && $value !== "";
	}
	
	function validate_presences($required_fields) {
	  global $errors;
	  foreach($required_fields as $field) {
		$value = trim($_POST[$field]);
		if (!has_presence($value)) {
			$errors[$field] = fieldname_as_text($field) . " can't be blank";
		}
	  }
	}
	
	// max length
	function has_max_length($value, $max) {
		return strlen($value) <= $max;
	}
	
	function validate_max_lengths($fields_with_max_lengths) {
		global $errors;
		// Expects an assoc. array
		foreach($fields_with_max_lengths as $field => $max) {
			$value = trim($_POST[$field]);
		  if (!has_max_length($value, $max)) {
			$errors[$field] = fieldname_as_text($field) . " is too long";
		  }
		}
	}
	
	// * inclusion in a set
	function has_inclusion_in($value, $set) {
		return in_array($value, $set);
	}

	//Password Functions
	function password_encrypt($password) {
		$hash_format = "$2y$10$";   // Tells PHP to use Blowfish with a "cost" of 10
		  $salt_length = 22; 					// Blowfish salts should be 22-characters or more
		  $salt = generate_salt($salt_length);
		  $format_and_salt = $hash_format . $salt;
		  $hash = crypt($password, $format_and_salt);
			return $hash;
	}
	
	function generate_salt($length) {
	  // Not 100% unique, not 100% random, but good enough for a salt
	  // MD5 returns 32 characters
	  $unique_random_string = md5(uniqid(mt_rand(), true));
		// Valid characters for a salt are [a-zA-Z0-9./]
	  $base64_string = base64_encode($unique_random_string);
		// But not '+' which is valid in base64 encoding ie removes the +
	  $modified_base64_string = str_replace('+', '.', $base64_string);
		// Truncate string to the correct length
	  $salt = substr($modified_base64_string, 0, $length);
	  
		return $salt;
	}
	
	function password_check($password, $existing_hash) {
		// existing hash contains format and salt at start
	  $hash = crypt($password, $existing_hash);
	  if ($hash === $existing_hash) {
	    return true;
	  } else {
	    return false;
	  }
	}
	//Login Functions
	function attempt_login($username, $password) {
		$admin = findUserByName($username);
		if ($admin) {
			// found admin, now check password
			if (password_check($password, $admin["password"])) {
				// password matches
				return $admin;
			} else {
				// password does not match
				return false;
			}
		} else {
			// admin not found
			return false;
		}
	}

	function logged_in() {
		return isset($_SESSION['admin_id']);
	}
	
	function confirm_logged_in() {
		if (!logged_in()) {
			header ("Location: login.php");
		}
	}
	
	function layoutContext() {
		if(!$_SESSION["b"]==0) {
			header ("Location: l2.php?id=100&subid=logout");
		}
	}

?>

<script type="text/javascript">

/*function printData()
	{
	var container = $(this).attr('rel');
	$('#' + "printTable").printArea();
		return false;
	}
	
function printData2()
	{
   var container = $(this).attr('rel');
	$('#' + "printTransitTable").printArea();
		return false;
	}
function printData3()
	{
   var container = $(this).attr('rel');
	$('#' + "printTable2").printArea();
		return false;
	}*/

function loadFooter(){
	$("#showProgressBar").load("progressFooter.php");
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

		
</script>





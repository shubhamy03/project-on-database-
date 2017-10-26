<?php 
if ($_POST['submit'] == 'Submit'){ 
	$userid = $_POST['userid']; 
	$email = $_POST['email']; 
	$quali = $_POST['quali'];
	$phone = $_POST['phone'];
	if($userid){ 
		$link = @mysql_connect('localhost','2015257', 'sumit@1506'); 
		if(!$link) { 
			die('Failed to connect to server: ' . mysql_error()); 
		} 
		$db = mysql_select_db('vec2'); 
		if(!$db) { 
			die("Unable to select database"); 
		} 
		$query1="SELECT teacher_id
        FROM user_teacher";
		$result1 = mysql_query($query1);
		$row1 = mysql_fetch_array($result1);
		if($userid == $row1['teacher_id']){ 
			$count = 2; 
		} 
		else{
			echo '<center>Incorrect Username!!!<center>'; 
			exit(); 
		}
		
		$update = "UPDATE user_teacher 
		SET teacher_email = '$email',teacher_phone = '$phone',teacher_qualification='$quali'
		WHERE teacher_id = '$userid'"; 
		$results = mysql_query($update); 
		if($results == FALSE) 
		echo mysql_error() . '<br>'; 
		else 
		echo "profile updated successfully"; 
	
} 
}
?>
		
		
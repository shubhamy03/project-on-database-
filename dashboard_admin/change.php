<?php 
if ($_POST['submit'] == 'Submit'){ 
	$userid = $_POST['userid']; 
	$opassword = $_POST['opassword']; 
	$npassword = $_POST['npassword'];
	if($userid && $opassword){ 
		$link = @mysql_connect('localhost','2015257', 'sumit@1506'); 
		if(!$link) { 
			die('Failed to connect to server: ' . mysql_error()); 
		} 
		$db = mysql_select_db('vec2'); 
		if(!$db) { 
			die("Unable to select database"); 
		} 
		$query1="SELECT teacher_id,teacher_password
        FROM user_teacher";
		$result1 = mysql_query($query1);
		$row1 = mysql_fetch_array($result1);
		if($userid == $row1['teacher_id'] && $opassword == $row1['teacher_password'] ){ 
			$count = 2; 
		} 
		else{
			echo '<center>Incorrect Username or Password !!!<center>'; 
			exit(); 
		}
		
		$update = "UPDATE user_teacher SET teacher_password = '$npassword' WHERE teacher_id = '$userid'"; 
		$results = mysql_query($update); 
		if($results == FALSE) 
		echo mysql_error() . '<br>'; 
		else 
		echo "password changed successfully"; 
	
} 
}
?>
		
		
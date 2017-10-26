<?php 
if ($_POST['submit'] == 'Submit'){ 
	$userid = $_POST['userid']; 
	$opassword = $_POST['opassword']; 
	$npassword = $_POST['npassword'];
	if($userid && $opassword){ 
		$link=new mysqli('localhost','root','','vec2');
		if(!$link) { 
			die('Failed to connect to server: ' . mysql_error()); 
		} 
		
		$query1="SELECT student_id,student_password
        FROM user_student";
		$result1 = $link->query($query1);
        $row1=$result1->fetch_assoc();
		
		if($userid == $row1['student_id'] && $opassword == $row1['student_password'] ){ 
			$count = 2; 
		} 
		else{
			echo '<center>Incorrect Username or Password !!!<center>'; 
			exit(); 
		}
		
		$update = "UPDATE user_student SET student_password = '$npassword' WHERE student_id = '$userid'"; 
		$results = $link->query($update);
		if($results == FALSE) 
		echo mysql_error() . '<br>'; 
		else 
		echo "password changed successfully"; 
	
} 
}
?>
		
		
<?php 
if ($_POST['submit'] == 'Submit'){ 
	$userid = $_POST['userid']; 
	$email = $_POST['email']; 
	$phone = $_POST['phone'];
	if($userid){ 
		$link=new mysqli('localhost','root','','vec2');
		if(!$link) { 
			die('Failed to connect to server: ' . mysql_error()); 
		} 
        
		$query1="SELECT student_id
        FROM user_student";
		$result1 =$link->query($query1);
		$row1 = $result1->fetch_assoc();
		if($userid == $row1['student_id']){ 
			$count = 2; 
		} 
		else{
			echo '<center>Incorrect Username!!!<center>'; 
			exit(); 
		}
		
		$update = "UPDATE user_student
		SET student_email = '$email',student_phone = '$phone'
		WHERE student_id = '$userid'"; 
		$results = $link->query($update);
		if($results == FALSE) 
		echo mysql_error() . '<br>'; 
		else 
		echo "profile updated successfully"; 
	
} 
}
?>
		
		
<?php 
if ($_POST['submit'] == 'Submit'){ 
	$userid = $_POST['userid']; 
	$email = $_POST['email']; 
	$quali = $_POST['quali'];
	$phone = $_POST['phone'];
	if($userid){ 
		$link=new mysqli('localhost','root','','vec2');
		if(!$link) { 
			die('Failed to connect to server: ' . mysql_error()); 
		} 
        
		$query1="SELECT teacher_id
        FROM user_teacher";
		$result1 =$link->query($query1);
		$row1 = $result1->fetch_assoc();
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
		$results = $link->query($update);
		if($results == FALSE) 
		echo mysql_error() . '<br>'; 
		else 
		echo "profile updated successfully"; 
	
} 
}
?>
		
		
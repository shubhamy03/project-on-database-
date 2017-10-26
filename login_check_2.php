<?php 
if ($_POST['submit'] == 'Login'){ 
	$username = $_POST['username']; 
	$password = $_POST['password']; 
	if($username && $password){ 
		$link = new mysqli('localhost','root','','vec2');
		if(!$link) { 
			die('Failed to connect to server: ' . mysql_error()); 
		} 
		
		//create query for login
		$query1="SELECT student_id,student_password
        FROM user_student";
		$result1 = $link->query($query1);
		$row1 = $result1->num_rows;
		
		$query2="SELECT teacher_id,teacher_password
        FROM user_teacher";
		$result2 = mysql_query($query2);
		$row2 = mysql_fetch_array($result2);
		
		if($username == $row1['student_id'] && $password == $row1['student_password'] ){ 
			$count = 1; 
		} 
		
		elseif($username == $row2['teacher_id'] && $password == $row2['teacher_password'] ){ 
			$count = 2; 
		} 
		else{
			echo '<center>Incorrect Username or Password !!!<center>'; 
			exit(); 
		}
		
		
		if($count == 1){
			session_start();
			$_SESSION['IS_AUTHENTICATED'] = 1; 
			$_SESSION['USER_ID'] = $username; 
			header('location:verified.php'); 
		} 
		elseif($count == 2){
			session_start();
			$_SESSION['IS_AUTHENTICATED'] = 1; 
			$_SESSION['USER_ID'] = $username; 
			header('location:teacher_page.php'); 
		} 
		else{ 
			
			echo '<center>Incorrect Username or Password !!!<center>'; 
			exit(); 
		} 
	}
	else{ 
	echo '<center>Username or Password missing!!</center>'; 
	exit(); 
	} 
} 
else{ 
exit(); 
} 
?>

		
		
		
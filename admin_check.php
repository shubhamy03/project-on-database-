<?php 
if ($_POST['login'] == 'LOGIN'){ 
	$login = $_POST['username']; 
	$password = $_POST['password']; 
	if($login && $password){ 
	 $db=new mysqli('localhost','root','','vec2');
        if(mysqli_connect_error()){
            echo "could not connect to database";
            exit;
        }
		$query1="SELECT admin_id,admin_password
        FROM admin";
		$result1 =$db->query($query1);
		
		if($result1) 
		{
            $num_row=$result1->num_rows;
            for($i=1;$i<=$num_row;$i++)
            {   $row=$result1->fetch_assoc();
				if($login == $row['admin_id'] && $password == $row['admin_password'] ){ 
					$count1 = 1; }
			}
		}
		if($count1==1)
		{
		}
		else{
			echo '<center>Incorrect Username or Password !!!<center>'; 
			exit(); 
		}
		
		
		if($count1 == 1){
			session_start();
			$_SESSION['IS_AUTHENTICATED'] = 1; 
			$_SESSION['USER_ID'] = $login; 
             $_SESSION['name']='Admin';
			echo "sucessful";
			header('location:dashboard_teacher/dashboard_teacher.php'); 
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

		
		
		
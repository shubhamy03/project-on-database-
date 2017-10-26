<?php 
if ($_POST['submit'] == 'Login'){ 
	$login = $_POST['username']; 
	$password = $_POST['password']; 
	if($login && $password){ 
	 $db=new mysqli('localhost','root','','vec2');
        if(mysqli_connect_error()){
            echo "could not connect to database";
            exit;
        }
		$query1="SELECT student_id,student_password,student_name
        FROM user_student";
		$result1 =$db->query($query1);
		$student_name='';
		$query2="SELECT teacher_id,teacher_password,teacher_name
        FROM user_teacher";
		$result2 =$db->query($query2);
		$teacher_name='';
		if($result1) 
		{
            $num_row=$result1->num_rows;
            for($i=1;$i<=$num_row;$i++)
            {   $row=$result1->fetch_assoc();
				if($login == $row['student_id'] && $password == $row['student_password'] ){
                    $student_name=$row['student_name'];
					$count1 = 1; }
			}
		} 
		if($result2) 
		{
            $num_row=$result2->num_rows;
            for($i=1;$i<=$num_row;$i++)
            {   $row=$result2->fetch_assoc();
                if($login == $row['teacher_id'] && $password == $row['teacher_password'] ){ 
                $teacher_name=$row['teacher_name'];
				$count2 = 2;}
			}
		}
		if($count1==1 || $count2==2)
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
            $_SESSION['name']=$student_name;
			header('location:after_st_login.php'); 
		} 
		elseif($count2 == 2){
			session_start();
			$_SESSION['IS_AUTHENTICATED'] = 1; 
			$_SESSION['USER_ID'] = $username; 
            $_SESSION['name']=$teacher_name;
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

		
		
		
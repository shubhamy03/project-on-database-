<?php 

if($_POST['signup'])
{
	$db=new mysqli('localhost','root','','vec2');
        if(mysqli_connect_error()){
            echo "could not connect to database";
            exit;
        }
        else
        {	
        	$uname = $_POST['user_name']; 
        	$fname = $_POST['fname'];
        	$password = $_POST['password'];
        	$usermail = $_POST['usermail'];
        	$userphn = $_POST['userphn'];    
             $query1="INSERT INTO user_student(student_id, student_name, student_password, student_email, student_phone, student_ranking) VALUES ('$uname', '$fname', '$password', '$usermail', '$userphn', NULL)";
            
             $result1=$db->query($query1);
            ?>
<html>
<head>
    <script src="jquery-3.2.0.min.js"></script>
    <link href="after_st_login.css" rel="stylesheet" type="text/css" media="all" />
<style>
</style>
    <link rel="stylesheet" type="text/css" href="upppernav/h.css">
</head>
<body style="margin-top:0px;">
    <header class="header_nav">
            <div class="l1_nav">
                <span id="li1" class="li_nav1"><b class="h4_nav">Virtual Exam</b></span>
                <span class="li_nav2">Home</span>
                <span class="li_nav3">About</span>
                <span class="li_nav4">Exam</span>
            </div>
            <div class="l2_nav">
                <span class="li_nav5">Log in</span>
                <span class="li_nav6">Sign Up</span>
                <span class="li_nav7">My profile</span>
            </div>
        </header>
        <div>  <?php
        		if(!$result1)
        		{
        			echo "Dear";
        			?>
        			</br>
        			<?php
        			echo $_POST['fname'];
        			echo " ,you have successfully registered ";

        		}
        		else
        		{
        			echo " Some data not entered or invalid data entered";
        		}

        }

 }
 else
        	{
        		echo "no submit button pressed";
        	}
  $db->close();
      ?>
        </div>
</body>        
</html> 
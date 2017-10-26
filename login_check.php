<?php 

if($_POST['submit']=='submit')
{
    $login=$_POST['username'];
    $password = $_POST['password']; 
    
    if($login && $password){ 
    
        $db=new mysqli('localhost','root','','vec2');
        if(mysqli_connect_error()){
            echo "could not connect to database";
            exit;
        }
        //echo "successful";
        $query1="SELECT student_id,student_password
        FROM user_student";
        
        $result1=$db->query($query1);
        
        $query2="SELECT teacher_id,teacher_password
        FROM user_teacher";
        
        $query3="SELECT * FROM question";
        $result2=$db->query($query2);
        
        $result3=$db->query($query3);
        
        
        $num_result1=$result1->num_rows;
        $num_result2=$result2->num_rows;
        $num_result3=$result3->num_rows;
        
        echo $num_result1." ".$num_result2." ".$num_result3."<br /> ";
        
        if($num_result1==0)
        {
            echo "not found is student table";
        }
        if($num_result1!=0)
        {
            echo "found is student table";
        }
        else { 
            if(($num_result2==0))  {
                echo "not found is teacher table";
            }
            else if($num_result2!=0) 
                {echo "found in teacher table";
                }
        }
        echo "<br />";
            for($i=0;$i<$num_result3;$i++){
                $row=$result3->fetch_assoc();
                echo " ".$row['question_id']."<br /> ";
                
            }
       $result3->free();
        $db->close();
        //include("after_st_login.php");
        //echo "shubham";
    }
    else{
        echo "please write login and password";
    }
}
//echo "shubham";

?>
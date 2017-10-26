<?php 
            session_start();
			
             $login=$_SESSION['USER_ID'];
            $user_name=$_SESSION['name'];
            
?>
<html>
<head>
      <script src="jquery-3.2.0.min.js"></script>
    <link rel="stylesheet" type="text/css" href="upppernav/h.css">
</head>
<style>
.bt1,.text_area {
    width:15%;
    margin-top: 0px;
    margin-left: 4%;
   
    height: 7%;
    background-color: #ebebe0; 
    border-bottom-color: #f5f5f0;
    color: black;
    padding: 15px 32px;
    text-align: left;
    text-decoration: none;
    
    font-size: 16px;
    cursor: pointer;
    font-weight: 600;
     box-shadow: 0px 0px 8px 0px rgba(0, 30, 255,0.33);
}
.bt1:hover {
    background-color: #4d4d33;
    color: white;
}
</style>
<body style="margin-top:0px;">
    <header class="header_nav">
            <div class="l1_nav">
                <span id="li1" class="li_nav1"><b class="h4_nav">Virtual Exam</b></span>
                <span class="li_nav2"><a href="after_st_login.php">Home</a></span>
                <span class="li_nav3">About</span>
                <span class="li_nav4">Exam</span>
            </div>
            <div class="l2_nav">
                <span class="li_nav5"><?php echo $user_name;?></span>
                <span class="li_nav6"><a href="dashboard_student/dashboard_student.php">My Dashboard</a></span>
                <span class="li_nav7"><a href="logout.php">Logout</a></span>
            </div>
        </header>
<div style="background:#F5F5F5;margin-top:10px;">
    <?php 
        
        include("image_slider.php");
        image_slider_1();
    ?>
   </div>
	<br/>
   <input type ="submit" class="bt1" value="According to User id" id="bt_1">
	<input type ="submit" class="bt1" value="According to Top Ranker " id="bt_2">
	
    
    <br/><br/>
   
    <div class="search_result" style="margin-left:50px;" >
    
            <form name="search_user" method="post" action="search_admin.php">
            <b style="margin-left:50px;"> Enter the USER ID :</b>     
            <input type ="text" class="text_area" name="user_id">
            <input type ="submit" class="bt1" value="OK" style="width:6%;" id="search_res" name="submit_ser">
            </form>
   
<?php
       
        $user_id=$_POST['user_id'];
        $link2=new mysqli('localhost','root','','vec2');
        
        if(mysqli_connect_error()){ 
            echo "unable to connect to localhost";
            }
        
        $query2="SELECT * FROM `user_student` WHERE `student_id` = '$user_id'";
        $results2=$link2->query($query2);
        if(!$results2) 
		  echo '<HR>Error in Searching to database <br><B> of User ID '.$user_id."</B> "; 
		else 
        {
			//echo 'Showing total no. of student - '.
            $link2->affected_rows; 
            $num_row2=$results2->num_rows;
           
            //$row1=mysqli_fetch_row($results);
            echo "<br />";
            for($i=1;$i<=$num_row2;$i++)
            {   $row=$results2->fetch_assoc();
                echo "<hr>";
                echo "<b> Serial No. : ".$i."</b><br/><b>Student ID: </b>".$row['student_id']." <br/><b>Student Name : </b>".$row['student_name']."<br/>
                <b>Student Ranking </b>".$row['student_ranking']."</td>"
                ."<br/><b>Student Email </b>".$row['student_email'];
                 echo "</tr><hr>";
             
            }
        }
    $link2->close();
?>
    </div>
        
	<div class="top_ranker" style="display:none;">
	<input type ="submit" class="bt1" value="Gate EC " >
	<input type ="submit" class="bt1" value="Gate CS " id="res_cs">
	<input type ="submit" class="bt1" value="Gate ME " id="res_me" >
	<input type ="submit" class="bt1" value="JEE " id="res_jee">
	</div>
    
    <div id="gate_cs" style="margin-left:50px;display:none;">
        <?php
        
        $link3=new mysqli('localhost','root','','vec2');
        
        if(mysqli_connect_error()){ 
            echo "unable to connect to localhost";
            }
        
        $query3="SELECT * FROM user_student,student_gives where user_student.student_id=student_gives.student_id AND student_gives.exam_name='GATE CS' ORDER BY `user_student`.`student_ranking` ASC";
        $results3=$link3->query($query3);
        if(!$results3) 
		  echo '<HR>Error in Searching to database <br><B> of User ID '.$user_id."</B> "; 
		else 
        {
			//echo 'Showing total no. of student - '.
            $link3->affected_rows; 
            $num_row3=$results3->num_rows;
           
            //$row1=mysqli_fetch_row($results);
            echo "<br />";
            for($i=1;$i<=$num_row3;$i++)
            {   $row=$results3->fetch_assoc();
                echo "<hr>";
                echo "<b> Serial No. : ".$i."</b><br/><b>Student ID: </b>".$row['student_id']." <br/><b>Student Name : </b>".$row['student_name']."<br/>
                <b>Student Ranking </b>".$row['student_ranking']."</td>"
                ."<br/><b>Student Email </b>".$row['student_email'];
                 echo "</tr><hr>";
             
            }
        }
    $link3->close();
            
        
        ?>
    </div>
    <div id="gate_me" style="margin-left:50px;display:none;">
        <?php
        
        $link4=new mysqli('localhost','root','','vec2');
        
        if(mysqli_connect_error()){ 
            echo "unable to connect to localhost";
            }
        
        $query4="SELECT * FROM user_student,student_gives where user_student.student_id=student_gives.student_id AND student_gives.exam_name='GATE ME' ORDER BY `user_student`.`student_ranking` ASC";
        $results4=$link4->query($query4);
        if(!$results4) 
		  echo '<HR>Error in Searching to database <br><B> of User ID '.$user_id."</B> "; 
		else 
        {
			//echo 'Showing total no. of student - '.
            $link4->affected_rows; 
            $num_row4=$results4->num_rows;
           
            //$row1=mysqli_fetch_row($results);
            echo "<br />";
            for($i=1;$i<=$num_row4;$i++)
            {   $row=$results4->fetch_assoc();
                echo "<hr>";
                echo "<b> Serial No. : ".$i."</b><br/><b>Student ID: </b>".$row['student_id']." <br/><b>Student Name : </b>".$row['student_name']."<br/>
                <b>Student Ranking </b>".$row['student_ranking']."</td>"
                ."<br/><b>Student Email </b>".$row['student_email'];
                 echo "</tr><hr>";
             
            }
        }
    $link4->close();
            
        
        ?>
    </div>
    <div id="jee" style="margin-left:50px;display:none;">
        <?php
        
        $link5=new mysqli('localhost','root','','vec2');
        
        if(mysqli_connect_error()){ 
            echo "unable to connect to localhost";
            }
        
        $query5="SELECT * FROM user_student,student_gives where user_student.student_id=student_gives.student_id AND student_gives.exam_name='JEE' ORDER BY `user_student`.`student_ranking` ASC";
        $results5=$link5->query($query5);
        if(!$results5) 
		  echo '<HR>Error in Searching to database <br><B> of User ID '.$user_id."</B> "; 
		else 
        {
			//echo 'Showing total no. of student - '.
            $link5->affected_rows; 
            $num_row5=$results5->num_rows;
           
            //$row1=mysqli_fetch_row($results);
            echo "<br />";
            for($i=1;$i<=$num_row5;$i++)
            {   $row=$results5->fetch_assoc();
                echo "<hr>";
                echo "<b> Serial No. : ".$i."</b><br/><b>Student ID: </b>".$row['student_id']." <br/><b>Student Name : </b>".$row['student_name']."<br/>
                <b>Student Ranking </b>".$row['student_ranking']."</td>"
                ."<br/><b>Student Email </b>".$row['student_email'];
                 echo "</tr><hr>";
             
            }
        }
    $link5->close();
            
        
        ?>
    </div>
    
    
    
	<script>
		$(document).ready(function()
        {   
            $("#bt_1").click(function(){
                 $(".search_result").show();
                 $(".top_ranker").hide();
                 $("#gate_cs").hide();
                 $("#gate_cs").hide();
                $("#gate_me").hide();
                $("#jee").hide();
                
            })
            $("#bt_2").click(function(){
                $(".top_ranker").show();
                 $(".alpha").hide();
                 $(".search_result").hide();
                $("#gate_cs").hide();
                $("#gate_me").hide();
                $("#jee").hide();
            })
            $("#search_res").click(function(){
                $(".search_result").show();
                $(".top_ranker").hide();
                $(".alpha").hide();
                $("#gate_cs").hide();
                $("#gate_me").hide();
                $("#jee").hide();
                
            })
            $("#res_cs").click(function(){
                $(".search_result").hide();
                $(".top_ranker").hide();
                $(".alpha").hide();
                 $(".search_result").hide();
                $("#gate_cs").show();
                $("#gate_me").hide();
                $("#jee").hide();
                
            })
            $("#res_me").click(function(){
                $(".search_result").hide();
                $(".top_ranker").hide();
                $(".alpha").hide();
                 $(".search_result").hide();
                $("#gate_cs").hide();
                $("#gate_me").show();
                $("#jee").hide();
            })
            $("#res_jee").click(function(){
                $(".search_result").hide();
                $(".top_ranker").hide();
                $(".alpha").hide();
                 $(".search_result").hide();
                $("#gate_cs").hide();
                $("#gate_me").hide();
                $("#jee").show();
            })
        });
	</script>
    <br><br><br><br><br><br>
</body>
    <?php 
    include("footer - Copy.php");
    //include("upper_nav.php");
    //footer_stu();
    ?>
</html> 
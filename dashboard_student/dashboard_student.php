<?php 
            session_start();
			
             $login=$_SESSION['USER_ID'];
            $user_name=$_SESSION['name'];
            
?>
<html>
<head>
    <script src="jquery-3.2.0.min.js"></script>
     <link href="after_st_login.css" rel="stylesheet" type="text/css" media="all" />

    
    <link rel="stylesheet" type="text/css" href="upppernav/h.css">
</head>
<body style="margin-top:0px;">
    <header class="header_nav">
            <div class="l1_nav">
                <span id="li1" class="li_nav1"><b class="h4_nav">Virtual Exam</b></span>
                <span class="li_nav2"><a href="../after_st_login.php">Home</a></span>
                <span class="li_nav3">About</span>
                <span class="li_nav4">Exam</span>
            </div>
            <div class="l2_nav">
                <span class="li_nav5"style="color:red;"><b style="margin-left:0px;"><?php echo "Welcome ".$user_name;?></b></span>
                
                <span class="li_nav7"><a href="logout.php">Logout</a></span>
            </div>
        </header>
    
    <div style="background:#F5F5F5;margin-top:10px;">
    <?php 
        
        include("image_slider.php");
        image_slider_1();
    ?>
   </div>
    

<div class="main">
<div class="main2">
    <div class="slide">
        <ul>
            <li><input type ="button" class="bt1" value="Your Past Result" id="bt_1"></li>
            <li> <input type ="button" class="bt1" value="Change Password" id="bt_2_2"></li>
            <li> <input type ="button"  class="bt1" value="Your Strength and Weakness" id="bt_3"></li>
            <li><input type ="button" class="bt1" value="Edit Biodata" id="bt_4"></li>
            <li><input type ="button" class="bt1" value="Enquiry" id="bt_5"></li>
        </ul>
    </div>

    <div class="bt11">
        <div class="btn_1" style="background:#ffffe6;
                                  width:102%;height:109%;">
            <table border="1" width="100%">
                <b><tr><td>S.no</td>
                    <td>Exam</td>
                    <td>Set number</td>
                    <td>Score</td>
                    </tr>
                </b>
        <?php
            $link3=new mysqli('localhost','root','','vec2');
            if(mysqli_connect_error()){ 
                echo "unable to connect to localhost";
            }
            $query3="SELECT * FROM student_gives WHERE student_gives.student_id ='$login'";
                
            $results3=$link3->query($query3);
            if(!$results3) 
		      echo '<HR>Error in Searching to database <br><B> of User ID '.$login."</B> "; 
		  else 
            {   
            $num_row3=$results3->num_rows;
          
            for($i=1;$i<=$num_row3;$i++)
            {   $row=$results3->fetch_assoc();
                echo "<tr>";
                echo "<b><td>".$i."</td></b>
                      <b><td>".$row['exam_name']."</td></b><br/>
                      <b><td>".$row['set_number']." </b></td>
                      <b><td>".$row['score']."</b></td>";
                 echo "</tr>";
            }
        }
    $link3->close();
       ?>
                
               
            </table>  
        
        </div>
        
        
    </div>

    <div class="bt21">
         <div class="btn_1" style="background:#ffffe6;
                                  width:102%;height:100%;">
            Change your password
            <form action="change.php" method="post">
            <p style="margin-top:5%;">
            Enter your User ID :<input type="text" placeholder="User ID" name="userid" maxlength="9" > </p>
            <p style="margin-top:5%;">
            Enter your current password :<input type="text" placeholder="Current Password" name="opassword" maxlength="9" > </p>
            <p style="margin-top:5%;">Enter your new password :<input type="text" placeholder="New Password" name="npassword" maxlength="9" ></p>
             <input type="Submit"  name="submit" value="Submit" id="pass_sub"style="border-radius:10px;width:10%;height:10%;margin-left:50%;">
                </form>
             <script>
                 $("#pass_sub").click(function(){
                 $(".check_pass").show();
                 
                 })
             </script>
             <p class="check_pass" style="display:none;">Successfully save password ! ..</p>
        </div>
    </div>
    <div class="bt31">
         <div class="btn_1" style="background:#ffffe6;
                                  width:102%;height:108%;">
           Strength and weakness in Different Subject
             </br></br>
        
     
             <div id="strength_cont_1" style="width:99%;height:90%;background:white;overflow:scroll;">
               <table border="1" width="100%">  
    <?php
      $link4=new mysqli('localhost','root','','vec2');
        if(mysqli_connect_error()){ 
            echo "unable to connect to localhost";}
        
        $query4="SELECT * FROM student_gives WHERE student_gives.student_id='$login'";
        $results4=$link4->query($query4);
        if(!$results4) 
		  echo '<HR>Error in Searching to database <br><B> of User ID '.$user_id."</B> "; 
		else 
        {   $link4->affected_rows; 
            $num_row4=$results4->num_rows;
         
            for($i=1;$i<=$num_row4;$i++)
            {   $row=$results4->fetch_assoc();
               
                echo "<b> Exam Name : ".$row['exam_name']."</br>Score : ".$row['score']."</br>Set Number :".$row['set_number']."</b></br>";
                    
                 $query5="SELECT * FROM student_response WHERE student_response.student_id='$login'";
                 $results5=$link4->query($query5);
                 $num_row5=$results5->num_rows;
                for($j=1;$j<=$num_row5;$j++)
                { $row5=$results5->fetch_assoc();
                   
                       $level=($row5['level']/5)*100;
                     echo "<tr>
                                <td width=25%><b>".$row5['subject']."</b</td>
                                 <td width=50%><div style=width:".$level."%;background:green;height:20px;></div></td>
                    <td width=25%>".$level." %</td>
                    </tr>";
                }
                
             
            }
        }
    $link4->close();
            
        
        ?>
                 
                
                 
              
                </table><br /><br />
            </div>
        </div>
    </div>
    <div class="bt41">
        <div class="btn_1" style="background:#ffffe6;
                                  width:102%;height:108%;">
           <h3> Edit your Biodata</h3>
            
			<form action="edit.php" method="post" >
				<label for="userid">Enter tour User-id</label><br>
				<input type="text" id="userid" name="userid"><br>
				<label for="email">Edit your Email-id</label><br>
				<input type="text" id="email" name="email"><br>
				<label for="phone">Edit your Phone-Number</label><br>
				<input type="text" id="phone" name="phone"><br>
				<input type="submit" name="submit" value="Submit">
			</form>
        
        </div>
    </div>
    <div class="bt51">
        <div class="btn_1" style="background:#ffffe6;
                                  width:102%;height:108%;">
         <h3> Enquiry</h3>
        <form action="" method="post">
			<textarea name="message" rows="10" cols="30"></textarea>
  <br>
			<input type="submit" name="submit" value="Submit">
        </form>
        
        </div>
    </div>

    </div>
<div class="right_nav">
    <div class="right_nav_inside">
        <div class="upper" style="background:#389438;height:60px;">
            <center>
                <img src="activity_area_img.png" style="border-radius:50%;display: inline-block;margin-top:10px;"
                     height="40px" width="40px">
                <p style="color:white;display: inline-block;;font-size:30px;margin-top:0px;"><b>Activity Area</b></p>
            </center>
        </div>
        <div class="activity_text" style="width:auto;height:320px;
                                          background:#ffffe6;" >
            <center><p style="font-size:25px;margin-top:0px;font-family: sans-serif;">Hello,<b> <?php  echo $user_name; ?></b><br />
                Welcome to Virtual Exam Control.</p>
            <hr style="width:70%;color:#e6e6e6;">
               <p style="font-family: Tahoma, Arial, sans-serif;"> Click here to see current Topper<br /> </p>
            <hr style="width:70%;color:#e6e6e6;">
                <ul>
                    <li><div class="browser"><center><a href="../search_admin.php">Browser</a></center></div></li>
                    <li><div class="search"><center><a href="../search_admin.php">Search</a></center></div></li>
                </ul>
            </center>
        </div>
    </div>
    </div>
</div>
    <script>
$(document).ready(function()
{
$("#bt_1").click(function(){
   $(".bt11").show();
   $(".bt21").hide();
   $(".bt31").hide();
   $(".bt41").hide();
   $(".bt51").hide();
})
$("#bt_2_2").click(function(){
   $(".bt11").hide();
   $(".bt21").show();
   $(".bt31").hide();
   $(".bt41").hide();
   $(".bt51").hide();
})
$("#bt_3").click(function(){
   $(".bt11").hide();
   $(".bt21").hide();
   $(".bt31").show();
   $(".bt41").hide();
   $(".bt51").hide();
})
$("#bt_4").click(function(){
   $(".bt11").hide();
   $(".bt21").hide();
   $(".bt31").hide();
   $(".bt41").show();
   $(".bt51").hide();
})
$("#bt_5").click(function(){
   $(".bt11").hide();
   $(".bt21").hide();
   $(".bt31").hide();
   $(".bt41").hide();
   $(".bt51").show();
})

});

</script>
<?php 
    include("footer - Copy.php");
    //include("upper_nav.php");
    //footer_stu();
    ?>
   
</body>
</html>


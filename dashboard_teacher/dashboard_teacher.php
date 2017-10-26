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
                <span class="li_nav2"><a href="dashboard_teacher.php">Home</a></span>
                <span class="li_nav3">About</span>
                <span class="li_nav4">Exam</span>
            </div>
            <div class="l2_nav">
                <span class="li_nav5"><?php echo "Welcome ".$user_name;?></span>
                
                <span class="li_nav7"><a href="../logout.php">Logout</a></span>
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
            <li><input type ="button" class="bt1" value="Upload Questions" id="bt_1"></li>
            <li> <input type ="button" class="bt1" value="Change Password" id="bt_2_2"></li>
            
            <li><input type ="button" class="bt1" value="Edit Biodata" id="bt_4"></li>
            <li><input type ="button" class="bt1" value="Enquiry" id="bt_5"></li>
        </ul>
    </div>

    <div class="bt11">
        <div class="btn_1" style="background:#f2f2f2;
                                  width:102%;height:100%;">
            <a href="teacher_page.php">Click to go Upload Question Panel</a>
        
        </div>
        
        
    </div>

    <div class="bt21">
         <div class="btn_1" style="background:#f2f2f2;
                                  width:102%;height:100%;">
			<div style="margin-left:25%;">
           <h3> Change your password</h3><br><br>
            <form action="change.php" method="post">
    <label for="userid">Enter your User ID</label><br>
    <input type="text" id="userid" name="userid"><br>
    <label for="cpassword">Enter your current password</label><br>
    <input type="password" id="cpassword" name="opassword"><br>
	<label for="npassword">Enter your new password</label><br>
    <input type="password" id="npassword" name="npassword"><br>
    <input type="submit" name="submit" value="Submit">
  </form></div>
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
        <!--<span><input type="button" value="Previous" style="border-radius:10px;width:10%;height:10%;margin-left:75%;" id="strn_pre">
        <input type="button" value="Next" style="border-radius:10px;width:10%;height:10%;" id="strn_next"></span>
-->
             <div id="strength_cont_1" style="width:99%;height:90%;background:white;overflow:scroll;">
                <b> Exam_name1 Set_number1</b><br /><br />
                 
                <table border="1" width="100%">
                <tr><td width="25%"><b>Computer Network</b></td>
                    <td width="50%"><div style="width:70%;background:green;height:20px;"></div></td>
                    <td width="25%">80%</td>
                    </tr>
                <tr><td width="25%"><b>Computer Network</b></td>
                    <td width="50%"><div style="width:70%;background:green;height:20px;"></div></td>
                    <td width="25%">80%</td>
                    </tr>
                <tr><td width="25%"><b>Computer Network</b></td>
                    <td width="50%"><div style="width:70%;background:green;height:20px;"></div></td>
                    <td width="25%">80%</td>
                    </tr>
                </table>
                <br /><br />
             
                <b> Exam_name2 Set_number2</b><br /><br />
                 
                <table border="1" width="100%">
                <tr><td width="25%"><b>Computer Network</b></td>
                    <td width="50%"><div style="width:70%;background:green;height:20px;"></div></td>
                    <td width="25%">80%</td>
                    </tr>
                <tr><td width="25%"><b>Computer Network</b></td>
                    <td width="50%"><div style="width:70%;background:green;height:20px;"></div></td>
                    <td width="25%">80%</td>
                    </tr>
                <tr><td width="25%"><b>Computer Network</b></td>
                    <td width="50%"><div style="width:70%;background:green;height:20px;"></div></td>
                    <td width="25%">80%</td>
                    </tr>
                </table><br /><br />
            
             
                <b> Exam_name3 Set_number3</b><br /><br />
                 
                <table border="1" width="100%">
                <tr><td width="25%"><b>Computer Network</b></td>
                    <td width="50%"><div style="width:70%;background:green;height:20px;"></div></td>
                    <td width="25%">80%</td>
                    </tr>
                <tr><td width="25%"><b>Computer Network</b></td>
                    <td width="50%"><div style="width:70%;background:green;height:20px;"></div></td>
                    <td width="25%">80%</td>
                    </tr>
                <tr><td width="25%"><b>Computer Network</b></td>
                    <td width="50%"><div style="width:70%;background:green;height:20px;"></div></td>
                    <td width="25%">80%</td>
                    </tr>
                </table><br /><br />
           
             
                <b> Exam_name4 Set_number4</b><br /><br />
                 
                <table border="1" width="100%">
                <tr><td width="25%"><b>Computer Network</b></td>
                    <td width="50%"><div style="width:70%;background:green;height:20px;"></div></td>
                    <td width="25%">80%</td>
                    </tr>
                <tr><td width="25%"><b>Computer Network</b></td>
                    <td width="50%"><div style="width:70%;background:green;height:20px;"></div></td>
                    <td width="25%">80%</td>
                    </tr>
                <tr><td width="25%"><b>Computer Network</b></td>
                    <td width="50%"><div style="width:70%;background:green;height:20px;"></div></td>
                    <td width="25%">80%</td>
                    </tr>
                </table><br /><br />
            </div>
        </div>
    </div>
    <div class="bt41">
        <div class="btn_1" style="background:#f2f2f2;
                                  width:102%;height:108%;">
           <div style="margin-left:25%;">
           <h3> Edit your Biodata</h3>
            
			<form action="edit.php" method="post" >
				<label for="userid">Enter tour User-id</label><br>
				<input type="text" id="userid" name="userid"><br>
				<label for="email">Edit your Email-id</label><br>
				<input type="text" id="email" name="email"><br>
				<label for="phone">Edit your Phone-Number</label><br>
				<input type="text" id="phone" name="phone"><br>
				<label for="quali">Edit your Qualification</label><br>
				<input type="text" id="quali" name="quali"><br>
				<input type="submit" name="submit" value="Submit">
			</form>
  

  </div>
        
        </div>
    </div>
   <div class="bt51">
        <div class="btn_1" style="background:#f2f2f2;>
                                  width:102%;height:108%;">
        <div style="margin-left:25%;">
           <h3> Enquiry</h3>
            
			<form action="" method="post">
			<textarea name="message" rows="10" cols="30"></textarea>
  <br>
			<input type="submit" name="submit" value="Submit">
        </form>
        </div>
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
               <p style="font-family: Tahoma, Arial, sans-serif;"> Click here to see current Topper</p>
            <hr style="width:70%;color:#e6e6e6;">
                <ul>
                    <li><div class="browser"><center><a href="../search_admin_copy.php">Browser</a></center></div></li>
                    <li><div class="search"><center><a href="../search_admin_copy.php">Search</a></center></div></li>
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


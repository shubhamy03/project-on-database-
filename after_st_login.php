<?php 
            session_start();
			
             $login=$_SESSION['USER_ID'];
            $user_name=$_SESSION['name'];
            
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
                <span class="li_nav2"><a href="after_st_login.php">Home</a></span>
                <span class="li_nav3">About</span>
                <span class="li_nav4">Exam</span>
            </div>
            <div class="l2_nav">
                <span class="li_nav5" style="color:red;"><b><?php echo $user_name;?></b></span>
                <span class="li_nav6"><a href="dashboard_student/dashboard_student.php">My Dashboard</a></span>
                <span class="li_nav7"><a href="logout.php">Logout</a></span>
            </div>
        </header>
    
    
    
    <style>
    
.d1
{
	height:100%;
	width:100%;
	background: white;
	opacity: 0.9;
	position: absolute;
	margin-top: 55px;
	display: none;
}
.d2
{
	height:600px;
	opacity: 0.9;
	width:100%;
	background: none;
	position: absolute;
	margin-top: 55px;
	display: none;
	text-align: center;
}
.dleft
{
	height:500px;
	width:50%;
	float:left;
}

.dright
{
	height:500px;
	width:50%;
	float:left;
}

.d1 .dleft form,.dright form
{
	
	align-items: center;
	margin: 0px 0px;
	padding: 20px 20px;
	height:100%;
	width:100%;
	text-align: center;

}
.d1 .dleft form input,.dright form input
{
	margin: 20px 250px;
	background: white;
	color:#02c7ff;
	height: 20px;
	width: 200px;
	border:none;
	border-radius: 5px;
	
}
.d1 .dleft form #sub,.dright form #sub
{
	background-color: #02c7ff;
	border-collapse: collapse;
	margin: 10px 20px;
	height: 30px;
	text-align: center;
	padding: 2px 20px;
	width: 300px;
	color: white;
	border-radius: 10px;
}
.d1 .dleft form h1,.dright form h1 
{
	color: #02c7ff;
	margin-top: 100px
}
.d2 form
{
	text-align: center;
	margin-top: 10px;
	background: white;
	width: 60%;
	margin-left: 250px;
	box-shadow: 2px 2px 10px silver;
	border-radius: 20px;
	border:1px #00ff15 solid;
}

.d2 form table td input
{
	height:50px;
	width:250px;
	border-radius: 50px;
	background: none;
	border:1px #00ff15 solid;
	color:#00ff15;
	font-size: 20px;
	text-align: center;
}
.d2 form table
{
	height:500px;
	width:100%;
	
}
.d2 form table #txt
{
	color:red;
	font-size: 20px;
	opacity: 0.5;
}
.d2 form table td .res
{
	background: red;
	color: white;
	border:none;
	box-shadow: 4px 4px 15px silver;
	height: 30px;
	width:270px;
	font-size: 15px;
}
.d2 form table td .reg
{
	background: #00ff15;
	color: white;
	border:none;
	box-shadow: 4px 4px 15px silver;
	height: 30px;
	width:270px;
	font-size: 15px;
}
.d2 form h1
{
	margin-top:0px;
	color:#00ff15;
	border-radius: 20px;
	border: 1px solid #00ff15;
}

    
    
    
    </style>
    <script>
$(document).ready(function()
{
	$(".li_nav5").click(function(){
  		 $(".d1").show();
  		 $(".d2").hide();
   
					})
	$(".li_nav6").click(function(){
  		 $(".d2").show();
  		 $(".d1").hide();
   
					})
    $(".close").click(function(){
  		 $(".d1").hide();
  		 $(".d2").hide();
   
					})
	});

</script>
    
    
    
    
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
            <li><input type ="button" class="bt1" value="About VEC " id="bt_1"></li>
            <li> <input type ="button" class="bt1" value="Practice Resource Type" id="bt_2_2"></li>
            <li> <input type ="button"  class="bt1" value="Contact Us" id="bt_3"></li>
            <li><input type ="button" class="bt1" value="News And Events" id="bt_4"></li>
            <li><input type ="button" class="bt1" value="Achievements" id="bt_5"></li>
        </ul>
    </div>

    <div class="bt11">
        <table>
            <tr>
                <td>
                    <div class="flip">
                        <div class="back">
                         <p style="text-align:center;
                                   margin-top:80px;
                                   color:white;
                                   font-size:25px;">
                             Click here to know us ..</p>
                        </div>
                        <div class="front">
                            <center>
                        <img src="about_vec/about%20us.jpg" style=" border-radius: 50%; margin-top:20px;" width="100px" height="100">
                            <p style="text-align:center;color:white;font-size:25px;">ABOUT US</p>
                                </center>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="flip">
                        <div class="back"><p style="text-align:center;
                                   margin-top:80px;
                                   color:white;
                                   font-size:25px;">
                             Click here to know our Target ..</p></div>
                        <div class="front"> <center>
                        <img src="about_vec/aim.jpg" style=" border-radius: 50%; margin-top:20px;" width="100px" height="100">
                            <p style="text-align:center;color:white;font-size:25px;">AIM</p>
                                </center></div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="flip">
                       
                        <div class="back"><p style="text-align:center;
                                   margin-top:80px;
                                   color:white;
                                   font-size:25px;">
                             Click here to know our History ..</p></div>
                        <div class="front"> <center>
                        <img src="about_vec/our_history.png" style=" border-radius: 50%; margin-top:20px;" width="100px" height="100">
                            <p style="text-align:center;color:white;font-size:25px;">HISTORY</p>
                                </center></div>
                    </div>
                    
                   
                </td>
                <td>
                    <div class="flip">
                        <div class="back"><p style="text-align:center;
                                   margin-top:80px;
                                   color:white;
                                   font-size:25px;">
                             Click here to know our Team ..</p></div>
                        <div class="front"> <center>
                        <img src="about_vec/team.jpg" style=" border-radius: 50%; margin-top:20px;" width="100px" height="100">
                            <p style="text-align:center;color:white;font-size:25px;">TEAM</p>
                                </center></div>
                    </div>
                </td>
            </tr>
        </table>
    </div>

    <div class="bt21">
        <table>
            <tr>
                <td>
                    <div class="flip2">
                        <div class="back2"><p style="text-align:center;
                                   margin-top:80px;
                                   color:white;
                                   font-size:25px;">
                             <a href="./gate_page/gate_page.php" style="color:white;">We have more than 300 Question ..</a></p></div>
                        <div class="front2"> <center>
                        <img src="exam/cse1.png" style=" border-radius: 50%; margin-top:20px;" width="100px" height="100">
                            <p style="text-align:center;color:white;font-size:15px;">GATE Computer Science Engineering</p>
                                </center></div>
                        
                    </div>
                </td>
                <td>
                    <div class="flip2">
                        <div class="back2"><p style="text-align:center;
                                   margin-top:80px;
                                   color:white;
                                   font-size:25px;">
                            <a href="ece_gate/gate_page.php" style="color:white;">Click here to give Online Test ..</a></p></div>
                        <div class="front2"> <center>
                        <img src="exam/ece1.jpg" style=" border-radius: 50%; margin-top:20px;" width="100px" height="100">
                            <p style="text-align:center;color:white;font-size:15px;">GATE Electronic And Communication Engineering</p>
                                </center></div>
                    </div>
                </td>
                <td>
                    <div class="flip2">
                        <div class="back2"><p style="text-align:center;
                                   margin-top:80px;
                                   color:white;
                                   font-size:25px;">
                            <a href="me_gate/gate_page.php" style="color:white;"> Contains all types of question ..</a></p></div>
                        <div class="front2"> <center>
                        <img src="exam/me1.jpg" style=" border-radius: 50%; margin-top:20px;" width="100px" height="100">
                            <p style="text-align:center;color:white;font-size:15px;">GATE Mechanical Engineering</p>
                                </center></div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="flip2">
                        <div class="back2"><p style="text-align:center;
                                   margin-top:80px;
                                   color:white;
                                   font-size:25px;">
                            <a href="cat_php/cat_page.php" style="color:white;">   Are you ready for NEW CAT pattern..</a></p></div>
                        <div class="front2"> <center>
                        <img src="exam/cat1.jpg" style=" border-radius: 50%; margin-top:20px;" width="100px" height="100">
                            <p style="text-align:center;color:white;font-size:15px;">Common Admission Test</p>
                                </center></div>
                    </div>
                </td>
                <td>
                    <div class="flip2">
                        <div class="back2"><p style="text-align:center;
                                   margin-top:80px;
                                   color:white;
                                   font-size:25px;">
                            <a href="jee/jee_page.php" style="color:white;">  Having more than 500 question ..</a></p></div>
                        <div class="front2"> <center>
                        <img src="exam/jee1.png" style=" border-radius: 50%; margin-top:20px;" width="100px" height="100">
                            <p style="text-align:center;color:white;font-size:15px;">Joint Enterence Examination (2018)</p>
                                </center></div>
                    </div>
                </td>
                <td>
                    <div class="flip2">
                        <div class="back2"><p style="text-align:center;
                                   margin-top:80px;
                                   color:white;
                                   font-size:25px;">
                             PREPARE FOR IBPO/PO ..</p></div>
                        <div class="front2"> <center>
                        <img src="exam/banking.jpg" style=" border-radius: 50%; margin-top:20px;" width="100px" height="100">
                            <p style="text-align:center;color:white;font-size:15px;"> Institute of Banking Personnel Selection (IBPS) </p>
                                </center></div>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <div class="bt31">
        <table>
            <tr>
                <td>
                     <div class="flip">
                        <div class="back"><p style="text-align:center;
                                   margin-top:80px;
                                   color:white;
                                   font-size:25px;">
                             Contact us 24X7 ..</p></div>
                        <div class="front"> <center>
                        <img src="contact_us/contact_us.jpg" style=" border-radius: 50%; margin-top:20px;" width="100px" height="100">
                            <p style="text-align:center;color:white;font-size:20px;">Contact Us </p>
                                </center></div>
                    </div>
                </td>
                <td>
                     <div class="flip">
                        <div class="back"><p style="text-align:center;
                                   margin-top:80px;
                                   color:white;
                                   font-size:25px;">
                             We have 5K+ like on Fb ..</p></div>
                        <div class="front"> <center>
                        <img src="contact_us/follow_usjpg.jpg" style=" border-radius: 50%; margin-top:20px;" width="100px" height="100">
                            <p style="text-align:center;color:white;font-size:20px;">On Social Networking</p>
                                </center></div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                     <div class="flip">
                        <div class="back"><p style="text-align:center;
                                   margin-top:80px;
                                   color:white;
                                   font-size:25px;">
                             You can sent email anytime ..</p></div>
                        <div class="front"> <center>
                        <img src="contact_us/enquiry.jpg" style=" border-radius: 50%; margin-top:20px;" width="100px" height="100">
                            <p style="text-align:center;color:white;font-size:20px;">Enguiry</p>
                                </center></div>
                    </div>
                </td>
                <td>
                     <div class="flip">
                        <div class="back"><p style="text-align:center;
                                   margin-top:80px;
                                   color:white;
                                   font-size:25px;">
                              We have more than 200+ Teacher ..</p></div>
                        <div class="front"> <center>
                        <img src="contact_us/join_us.jpg" style=" border-radius: 50%; margin-top:20px;" width="100px" height="100">
                            <p style="text-align:center;color:white;font-size:20px;">Join Us</p>
                                </center></div>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <div class="bt41">
        <table>
            <tr>
                <td>
                    <div class="flip4">
                        <div class="back4"><p style="text-align:center;
                                   margin-top:80px;
                                   color:white;
                                   font-size:25px;">
                             We have conducted more than 50 workshop..</p></div>
                        <div class="front4"> <center>
                        <img src="workshop/1.JPG" style=" margin-top:5px;" width="290px" height="190">
                            <p style="text-align:center;color:white;font-size:25px;"></p>
                                </center></div>
                    </div>
                </td>
                <td>
                    <div class="flip4">
                        <div class="back4"><p style="text-align:center;
                                   margin-top:80px;
                                   color:white;
                                   font-size:25px;">
                             Click here to see the latest pattern ..</p></div>
                        <div class="front4"> <center>
                        <img src="workshop/2.JPG" style=" margin-top:5px;" width="290px" height="190">
                            <p style="text-align:center;color:white;font-size:25px;"></p>
                                </center></div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="flip4">
                        <div class="back4"><p style="text-align:center;
                                   margin-top:80px;
                                   color:white;
                                   font-size:25px;">
                             See what topper speak ..</p></div>
                        <div class="front4"> <center>
                        <img src="workshop/3.JPG" sstyle=" margin-top:5px;" width="290px" height="190">
                            <p style="text-align:center;color:white;font-size:25px;"></p>
                                </center></div>
                    </div>
                </td>
                <td>
                    <div class="flip4">
                        <div class="back4"><p style="text-align:center;
                                   margin-top:80px;
                                   color:white;
                                   font-size:25px;">
                             How to boost your knowledge ..</p></div>
                        <div class="front4"> <center>
                        <img src="workshop/4.JPG" style=" margin-top:5px;" width="290px" height="190">
                            <p style="text-align:center;color:white;font-size:25px;"></p>
                                </center></div>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <div class="bt51">
        <table>
            <tr>
                <td>
                    <div class="flip">
                        <div class="back">
                         <p style="text-align:center;
                                   margin-top:80px;
                                   color:white;
                                   font-size:25px;">
                             Topper in 2014 ..</p>
                        </div>
                        <div class="front">
                            <center>
                        <img src="achievement/2014.jpg" style=" border-radius: 50%; margin-top:20px;" width="100px" height="100">
                            <p style="text-align:center;color:white;font-size:25px;">2014</p>
                                </center>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="flip">
                        <div class="back">
                         <p style="text-align:center;
                                   margin-top:80px;
                                   color:white;
                                   font-size:25px;">
                             Topper in 2015 ..</p>
                        </div>
                        <div class="front">
                            <center>
                        <img src="achievement/2015.jpg" style=" border-radius: 50%; margin-top:20px;" width="100px" height="100">
                            <p style="text-align:center;color:white;font-size:25px;">2015</p>
                                </center>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="flip">
                        <div class="back">
                         <p style="text-align:center;
                                   margin-top:80px;
                                   color:white;
                                   font-size:25px;">
                             Topper in 2016 ..</p>
                        </div>
                        <div class="front">
                            <center>
                        <img src="achievement/2016.jpg" style=" border-radius: 50%; margin-top:20px;" width="100px" height="100">
                            <p style="text-align:center;color:white;font-size:25px;">2016</p>
                                </center>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="flip">
                        <div class="back">
                         <p style="text-align:center;
                                   margin-top:80px;
                                   color:white;
                                   font-size:25px;">
                             Topper in 2017 ..</p>
                        </div>
                        <div class="front">
                            <center>
                        <img src="achievement/2017.jpg" style=" border-radius: 50%; margin-top:20px;" width="100px" height="100">
                            <p style="text-align:center;color:white;font-size:25px;">2017</p>
                                </center>
                        </div>
                    </div>
                </td>
            </tr>
        </table>
    </div>

    
</div>
<div class="right_nav" >
    <div class="right_nav_inside">
       
 <div class="upper" style="background:#389438;height:60px;">
            <center>
                <img src="activity_area_img.png" style="border-radius:50%;display: inline-block;margin-top:10px;"
                     height="40px" width="40px">
                <p style="color:white;display: inline-block;;font-size:30px;margin-top:0px;"><b>Activity Area</b></p>
            </center>
        </div>
        <div class="activity_text" style="width:auto;height:320px;   background:#ffffe6;" >
            <center><p style="font-size:25px;margin-top:0px;font-family: sans-serif;">Hello,<b> 
            <?php  echo $user_name; ?></b><br />
                Welcome to Virtual Exam Control.</p>
            <hr style="width:70%;color:#e6e6e6;">
               <p style="font-family: Tahoma, Arial, sans-serif;"> Click here to see current Topper <br /> </p>
            <hr style="width:70%;color:#e6e6e6;">
                <ul>
                    <li><div class="browser"><center><a href="search_admin.php">Browser</a></center></div></li>
                    <li><div class="search"><center><a href="search_admin.php">Search</a></center></div></li>
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


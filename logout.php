<?php
session_start(); 
session_unset(); 
session_destroy(); 
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="homepage/hstyle.css">
    <link rel="stylesheet" type="text/css" href="upppernav/homepage_h.css">
     <link href="after_st_login.css" rel="stylesheet" type="text/css" media="all" />
    </head>
    
<style>
p{
color:white;
text-align:center;
}
p.sansserif {
    font-family: Arial, Helvetica, sans-serif;
}
</style>
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

.para
{
	font-size: 13px;
	text-align: center;
	opacity: 0.7;
	color:white;
	border-bottom-right-radius: 70px;
	border-top-left-radius: 70px;
	padding: 2px 10px;
	background: #02c7ff;


}
.para:hover
{
	color:#02c7ff;
	background: white;

	transition: 1s;
	
	border-bottom: 2px solid #02c7ff;
}
.inp
{
	margin-top: 0px;
}
#r1,#r2,#r3
{
	color:#02c7ff;
	background:white;
	font-size: 20px;
}
  
    </style>   
<body style="margin-top:0px;">
   
        <header class="header_nav">
            <div class="l1_nav">
                <span id="li1" class="li_nav1"><b class="h4_nav">Virtual Exam</b></span>
                <span class="li_nav2"><a href="homepage_new.php">Home</a></span>
                <span class="li_nav3">About</span>
                <span class="li_nav4">Exam</span>
            </div>
            <div class="l2_nav">
                <span class="li_nav5">Log in</span>
                <span class="li_nav6">Sign Up</span>
                
            </div>
        </header>
   

  <div style="background:#F5F5F5;margin-top:10px;">
    <?php 
        include("image_slider.php");
        image_slider_1();
    ?>
   </div>     
    <hr style="margin-top:20px;width:80%;">
<body>
<div style="background-color:#708090;color:white;padding:20px;">
<p class="sansserif"> You have successfully logged out !</p></div>
    <center></br>
    <a href="homepage_new.php">
<input type ="button" class="bt1" value="Click Here to Go Homepage" id="bt_1" style="width:30%;"></a>
    </center>
<script src="footer/jquery-3.2.0.min.js"></script>
<link href="footer/css/style.css" rel="stylesheet" type="text/css" media="all" />
    
	<div class="main" style="height:400px;margin-top:480px;" >
	
		
		<div class="content" style="position:absolute;height:400px;">
			<div class="footer-grids">
				<div class="footer one">
					<h3>More About Virtual Exam Control</h3>
					<p>Database project .</p>
					
					<div class="clear"></div>
				</div>
				<div class="footer two">
					<h3>Keep Connected</h3>
					<ul>
						<li><a class="fb" href="www.facebook.com"><i></i>Like us on Facebook</a></li>
						<li><a class="fb1" href="www.twitter.com"><i></i>Follow us on Twitter</a></li>
						<li><a class="fb2" href="www.google.com"><i></i>Add us on Google Plus</a></li>
						<li><a class="fb4" href="www.pinterest"><i></i>Follow us on Pinterest</a></li>
					</ul>
				</div>
				<div class="footer three">
					<h3>Contact Information</h3>
					<ul>
						<li>Hall Of Residence - 4 <span>PDPM IIITDM </span>Jabalpur</li>
						<li>9594939291  </li>
						<li><a href="mailto:info@example.com">@iiitdmj.ac.in</a> </li>
					</ul>
				</div>
				<div class="clear"></div>
			</div>
			<div class="copy-right-grids">
				<div class="copy-left">
						<center><p class="footer-gd" style="margin-left:300px; color:white;">Design By - <b style="font-size:20px;">Shubham Yadav, Surya Prakesh Mourya and Sumit Kumar </b>
                            </p></center>
				</div>
				<div class="copy-right">
					<ul>
                        <li><a href="#" id="information" >Information</a></li>
						<li><a href="#" id="policy">Privacy Policy</a></li>
						<li><a href="#" id="term">Terms & Conditions</a></li>
					</ul>
				</div>
				<div class="clear"></div>
			</div>
		</div>
	</div>	
            
 <div class="d1" style="positon:absolute;margin-top:-2000px;">
     <div ><img src="close.jpg" class="close" style="position:inline;border-radius: 50%;height:7%;width:3%;cursor: pointer;"></div>
<div class="dleft">
			<h1>
			STUDENT/TEACHER LOG IN
			</h1>
        <form name="myloginForm" method="post" action="login_check_3.php"> 
			<table>
				<tr><td><input type="text" name="username" placeholder="username" style="border:1px solid black;height:20%;width:40%;"></td></tr>
				<tr><td><input type="password" name="password" placeholder="password" style="border:1px solid black;height:20%;width:40%;"></td></tr>
				<tr><td><input id="sub" type="submit" name="submit" value="Login" style="margin-left:35%;"></td></tr>
			</table>
		</form></div>
     
     <div class="dright">	
   
			<h1 style="color:red;">
			ADMIN  LOG  IN
			</h1>
        <form name="myloginForm" method="post" action="admin_check.php">
			<table>
				<tr><td><input type="text" name="username" placeholder="username" style="border:1px solid black;height:20%;width:40%;"></td></tr>
				<tr><td><input type="password" name="password" placeholder="password" style="border:1px solid black;height:20%;width:40%;"></td></tr>
				<tr><td><input id="sub" type="submit" name="login" value="LOGIN" style="background-color: red;margin-left:35%;"></td></tr>
			</table>
		</form></div>
</div>
<div class="d2" style="positon:absolute;margin-top:-2000px;">
    <div ><img src="close.jpg" class="close" style="position:inline;border-radius: 50%;height:7%;width:3%;cursor: pointer;marign-top:25%;margin-left:55%;"></div>
	<form >
			<h1>
			Fill Up The Details!!
			</h1>
			<table>
				<tr><td><input type="text" name="fname" placeholder="First Name"></td><td><input type="text" name="lname" placeholder="Lastname"></td></tr>
				<tr><td><input type="password" name="password" placeholder="password"></td><td  id="txt">password must be of 9 digits</td></tr>
				<tr><td><input type="text" name="usermail" placeholder="E-Mail ID"></td></tr>
				<tr><td><input type="text" name="username" placeholder="+91##########"></td></tr>
				<tr><td><input id="sub" type="submit" name="refresh" value="Reset" class="res"></td><td><input id="sub" type="submit" name="signup" value="Register" class="reg"></td></tr>
			</table>
	</form >		
</div>

</html>
    
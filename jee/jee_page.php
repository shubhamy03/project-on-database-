<html>
<head>
     <link rel="stylesheet" type="text/css" href="h.css">  
<style>

.nav{
float:left;
margin:0px 20px 0px 70px;
}
.scroll{
}
.nav ul {
 list-style-type: none;
    margin: 0;
    padding: 0;
    width: 250px;
    background-color: #f1f1f1;

}

.nav li a {
    display: block;
    color: #000;
    padding: 8px 16px;
    text-decoration: none;
	color:#943126;
}
.nav li a:hover {
    background-color: #555;
    color:white;
}
div.scroll {
    background-color:white;
    width: 800px;
    height: 700px;
    overflow: scroll;
	float:left;
    margin-bottom: 70px;
}
.scroll h3{
background-color:#BDC3C7;
color:white;
padding:5px;
}
.bt1 {
    width:15%;
    margin-top: 0px;
    margin-left: 77%;
    position: absolute;
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
</head>
<body>
    <header><ul class="l1"><li class="li1"><h4>Virtual Exam</h4></li><li>Home</li><li>About</li><li>Exam</li></ul>
<ul class="l2"><li>Log in</li><li>Sign Up</li><li>My profile</li></ul></header>
    
    
    <div style="background:#F5F5F5;">
          <center><img src="image/jee5.png" style="margin-top:60px;margin-bottom:10px;display:inline;"width="30%">
        
              <img src="image/jee.png" style="margin-top:60px;margin-bottom:10px;display:inline;"width="30%">    
              
        <img src="image/jeesyllabus.png" style="margin-top:60px;margin-bottom:10px;display:inline;" width="30%">
              
        
        </center>
        <input type ="button" class="bt1" value="Give GATE ME TEST" id="bt_1" style="display:inline;">
    </div>
     <form name="question_paper" method="post" action="../question.php">
        <input type ="submit" class="bt1" name="exam_name" value="Give JEE TEST" id="bt_1" style="display:inline;">
    <?php
$setno=1;
$link=new mysqli('localhost','root','','vec2');
    if(mysqli_connect_error()){ 
        echo "unable to connect to localhost";
        }
    $query="SELECT number_of_set FROM `exam` WHERE exam_name='JEE';";
    $results=$link->query($query);
   
        {
            $num_row=$results->num_rows;
           
            //$row1=mysqli_fetch_row($results);
            $row=$results->fetch_assoc();
            $no_of_set=$row['number_of_set'];
           
        }
    $link->close();
?>
      
    <div class="set_no" style="display:inline; position: absolute;margin-left:80%;margin-top:5%;">
           <p><b>Select SET number</b></p> 
            <ul>
                <?php
                 for($i=1;$i<=$no_of_set;$i++)
                 { ?>
                     <li><input type="radio" name ="set_no" value="<?php echo $i;?>"> SET Number <?php echo $i;?></li>
                    <?php }
                ?>
            </ul>
        </div>
    </form>
    
    
    <div style="margin-top:10px;">
        <div class="nav">
            <ul>
                <li style="background-color:#02c7ff;color:white;font-   size:15px;padding:5px;margin:2px;">QUICK LINKS</li>
                <li><a href="#1">What is JEE</a></li>
                <li><a href="#2">Why JEE</a></li>
                <li><a href="#3">JEE Eligibility</a></li>
                <li><a href="#4">JEE Cut Off Marks</a></li>
                <li><a href="#5">JEE Exam Pattern</a></li>
                <li><a href="#6">JEE Exam Schedule</a></li>
                <li><a href="#7">Subject Specialization Priority</a></li>
                <li><a href="#8">Subjective Analysis</a></li>
                <li><a href="#9">Type of Questions</a></li>
                <li><a href="#10">How to Prepare for JEE</a></li>
                <li><a href="#12">JEE Toppers Speak</a></li>
            </ul>
        </div>
        <div class="scroll">
            <div id="1">
                <h3>What Is JEE</h3>
                <p>Joint Entrance Examination (JEE) is an all India common engineering entrance examination conducted for admission to various engineering colleges and courses all over the country. The test comprises of two stages - JEE Main and the JEE Advanced. The exams are of the objective pattern. JEE Advanced is regarded internationally as one of the most challenging engineering admission tests.</p>
            <p>In 2012, the government-run Central Board of Secondary Education (CBSE) that earlier conducted the AIEEE, announced this common examination that replaced the AIEEE and IIT-JEE. JEE consists of two parts, JEE Main and JEE Advanced. JEE-Main exam is for admission to National Institutes of Technology (NITs), Indian Institutes of Information Technology (IIITs), Centrally Funded Technical Institutes (CFTIs) while the JEE-Advanced is for admission to the elite Indian Institutes of Technology (IITs). Only the students selected in JEE Mains are eligible for appearing in JEE Advanced. Over 200,000 students are selected each year</P>
			</div>
            <br>
            <div id="2">
                <h3>Why JEE 2018?</h3>
                <p>There are some institutes like the Indian Institutes of Science Education and Research (IISERs), Rajiv Gandhi Institute of Petroleum Technology, and the Indian Institute of Science which use the score obtained in JEE Advanced as the basis for admission. These are not participating institutes of central IIT JEE Advanced counselling of which all IITs are the member. Any student who takes admission to IITs cannot appear for the JEE-Advanced exam in the next year, but the same is not the case with IISc, IISER, RGIPT and other institutes as these institutes only use JEE Advanced score for admission</p>
            </div>
            <div id="3">
                <h3>JEE ELIGIBILITY</h3>
                <p>Candidates who have passed 12th class or equivalent exam in 2015 or 2016 (not before 2015) are eligible to apply for this exam. If a candidate appears in 12th or equivalent class in 2017 are also eligible for JEE Main 2017. If candidates has appeared in 12th or equivalent exam in 2014 but did not cleared in 2014, but passed in 2015 are not eligible to apply.</P>
				<p>If a candidates qualify 12th exam in 2016 & appear for improvement in 2017 for one or few subjects, then top 20 percentile cut-off for 2016 will be considered. However, if a candidate writes all the subjects in 2017, then the best of the two performances will be considered. Candidates also note down that for the percentile system, total marks obtained in all the five subjects of marksheet are required for JEE Main and JEE Advanced.</p>
        </div>
            <div id="5">
                <h3>JEE Exam Pattern</h3>
                <p>JEE exam pattern in terms of topics and difficulty has been consistent over the years. It has not changed even after JEE main was introduced as a screening exam. Following is the pattern of the exams for each subject over the years:</p>
<ul>
<li>math exam, algebra is the most important topic (33% of overall marks), followed by differential calculus and coordinate geometry (16% each). Other topics like integral calculus, vector and 3D geometry and trigonometry (accounting for 8-14% of all marks)</li>
<li>As per the analysis of last four year question papers (2012-2015), most of the questions (44%) in math main exam can be considered easy. Medium difficulty questions were slightly less (36%) and very few truly difficult questions (10%).</li>
<li>For physics exam, mechanics is the most important topic (27% of overall marks), followed by modern physics (18%). Other topics have slightly less weight in terms of marks, with optics & wave optics and electromagnetism having share of around 15%. Topics like electrostatics & current electricity, thermodynamics and fluid mechanics have marginal importance.</li>
<li>As per the analysis of last four year question papers (2012-2015), most of the questions (44%) in physics main exam were considered of medium difficulty level. Easy questions were slightly less (35%) and truly difficult questions (21%). High percentage of difficult questions is contrast to math and chemistry exams.</li>
<li>For chemistry exam, all the three topics are all most equally important, with organic chemistry having slightly more weight (38%) than physical chemistry (32%) and inorganic chemistry (30%).</li>
</li>In terms of difficulty, chemistry exam paper is very much like math, with high reliance on easy questions (52%). In last four years, medium difficulty level questions had around 32% share, while only 16% questions were classified as truly difficult.</li>
</ul>           
		   </div>
            <div id="6">
                <h3> JEE Exam Schedule</h3>
                <p>Schedule will be announced soon</p>
            </div>
            <div id="7">
                <h3>Subject Specialization Priority</h3>
               <p>Now when you are preparing for competitive exams like JEE you should try to cover the entire syllabus throughly, because anything can be asked in the question paper. Any standard of questions might be present.

But if you go through the previous years question papers, you can device a strategy for yourself. Generally questions asked in the chemistry sections are relatively easier than the questions asked in the rest of the sections. So you should alwasys go for Chemistry first. There are not many calculations required in this part. Questions are very direct. Please dont skip any chapter in Chemistry while preparing as it is quite easy to score and also as it doesn't require much effort. If you are able to score high in chemistry, then you dont have to worry much about the rest. That again doesn't mean that you will not go through physics and maths well. Study each and every chapter of inorganic chemistry in a detailed manner. Stick to NCERT books for inorganic chemistry. For organic get the basic concepts right. Physical chem. is easy to score. It only requires proper practice.</p>
            </div>
 <div id="9">
 <h3>Type Of Questions</h3>
<ul>
<li>single correct choice question</li>
<li>multiple correct choice question</li.
<li>passage based question</li>
<li>integer type question</li></ul></div>
<div id="10">
<h3>How to prepare for jee</h3>
<p>WORK HARD</p>
</div>
</div>
</div>
    <?php
    include("footer - Copy.php");
    
    ?>
</body>
</html>
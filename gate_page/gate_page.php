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
          <center><img src="image/gate_cse_page.jpg" style="margin-top:60px;margin-bottom:10px;display:inline;"width="30%">
        
              <img src="image/gate_cse_page_image.jpg" style="margin-top:60px;margin-bottom:10px;display:inline;"width="30%">    
              
        <img src="image/syllabus_gate_cse_2017.jpg" style="margin-top:60px;margin-bottom:10px;display:inline;" width="30%">
              
        
        </center></div>
    
        <form name="question_paper" method="post" action="../question.php">
       
            
        <input type ="submit" class="bt1" name="exam_name" value="Give GATE CSE TEST" id="bt_1" style="display:inline;">
    
    
     <?php
$setno=1;
$link=new mysqli('localhost','root','','vec2');
    if(mysqli_connect_error()){ 
        echo "unable to connect to localhost";
        }
    $query="SELECT number_of_set FROM `exam` WHERE exam_name='GATE EC';";
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
                <li><a href="#1">What is GATE</a></li>
                <li><a href="#2">Why GATE</a></li>
                <li><a href="#3">GATE Eligibility</a></li>
                <li><a href="#4">GATE Cut Off Marks</a></li>
                <li><a href="#5">GATE Exam Pattern</a></li>
                <li><a href="#6">Gate Exam Schedule</a></li>
                <li><a href="#7">Subject Specialization Priority</a></li>
                <li><a href="#8">Subjective Analysis</a></li>
                <li><a href="#9">Type of Questions</a></li>
                <li><a href="#10">How to Prepare for GATE</a></li>
                <li><a href="#12">GATE Toppers Speak</a></li>
            </ul>
        </div>
        <div class="scroll">
            <div id="1">
                <h3>What Is GATE</h3>
                <p>The Graduate Aptitude Test in Engineering (GATE) is an All-India examination administered and conducted in eight zones across the country by the GATE Committee comprising of Faculty members from IISc, Bangalore and other seven IIT’s on behalf of the National Coordinating Board, Department of Education, Ministry of Human Resources Development. The GATE score/rank is used for admissions to Post Graduate Programmes (ME, M.Tech, MS, Direct Ph.D.) in institutes like IITs and IISc etc with financial assistance offered by MHRD. PSUs too use the GATE scores for recruiting candidates for various prestigious jobs with attractive remuneration.
                    In GATE examination, candidates can apply for only one of the 23 papers listed in the table given below. Candidates are expected to appear in a paper appropriate to the discipline of their qualifying degree. However, candidates are free to choose any paper according to their admission plan, keeping in mind the eligibility criteria of the institutions in which they wish to seek admission. For more details regarding the admission criteria in any particular institute, candidates are advised to refer to the websites of that particular institute.
                </p>
            </div>
            <br>
            <div id="2">
                <h3>Why GATE 2018?</h3>
                <p>GATE is considered to be the standard examination conducted not only for post graduation admissions but also to open the gates for lucrative opportunities in several public sector enterprises and research organizations. Based on the score achieved in GATE, admissions are offered in IITs, IISc, and NITs, and abundant opportunities for campus placements with salary packages ranging from Rs. 6 lakh to 30 lakh. Candidates on qualifying GATE, get a financial aid of 8000/- pm in the form of UGC scholarship.
                Students interested in management can swing in the management line by pursuing a PG Diploma of 2 years in Industrial Engineering. Some institutes in India also offer admissions in the post Graduate programmes on the basis of GATE score.
                </p>
            </div>
            <div id="3">
                <h3>GATE ELIGIBILITY</h3>
                <p>The eligibility to appear for GATE exam is as follows:</p>
                <ul style="none">>
                    <li>Bachelor's degree holders in Engineering/ Technology/ Architecture (4 years after 10+2) and those who are pursuing the final year of such program.</li>
                    <li>Bachelor's degree holders in Engineering/ Technology/ Architecture (Post-B.Sc./Post-Diploma) and those who are in the final year of such programs.</li<
                    <li>Master's degree holders in any branch of Science/ Mathematics/ Statistics/ Computer Applications or equivalent and those who are in the final year of such programs.</li>
                    <Li>Candidates in the second or higher year of the Four-year Integrated Master's degree programme (Post-B.Sc.) in Engineering/Technology.</li>
                    <li>Candidates in the fourth or higher year of Five-year Integrated Master's degree programme or Dual Degree programme in Engineering/Technology.</li>
                    <li>Candidates with qualifications obtained through examinations conducted by professional societies recognized by UPSC/AICTE (e.g. AMIE by Institute of Engineers (India); AMICE by Institute of Civil Engineers (India)) as equivalent to B.E. /B. Tech. Those who have completed section A or equivalent of such professional courses are also eligible.</li>
                </ul>
        </div>
            <div id="5">
                <h3>GATE Exam Pattern</h3>
                <h4>Multiple Choice Questions (MCQs)</h4>
                <p>These questions are objective in nature and each question will have choice of four answers, out of which the candidate has to mark the correct answer. Each question carries 1 or 2 marks questions in all the sections.</p>
                <h4>Numerical Answer Questions</h4>
                <p>There will be no choices available for these types of questions. A Numeric Answer question carries 1 or 2 marks questions in all sections. The answer for these questions is a real number to be entered by using mouse and virtual keypad displayed on the monitor. No negative marking for these questions.
                </p>
            </div>
            <div id="6">
                <h3> GATE Exam Schedule</h3>
                <p>Schedule will be announced soon</p>
            </div>
            <div id="7">
                <h3>Subject Specialization Priority</h3>
                <h5>Electronics & Telecommunication         Engineering</h5>
                <ul>
                    <li>VLSI Design Tool Technology</li>
                    <li>Integrated Electronics & Circuits</li>
                    <li>Micro Electronics</li>
                    <li>Microwave Engineering</li>
                    <li>Communication Engg</li>
                    <li>Telecommunication Technology & Management</li>
                    <li>Optoelectronics & Optical Communication</li>
                    <li>Nanotechnology</li>
                    <li>Digital Signal Processing</li>
                    <li>Control & Automation</li>
                </ul>
                <h5>Mechanical Engineering</h5>
                <ul>
                    <li>Design of Mechanical Equipment or Machine Design</li>
                    <li>Thermal Engineering</li>
                    <li>Manufacturing Sc1ience & Engineering</li>
                    <li>Production Engineering</li>
                    <li>Industrial Engineering</li>
                    <li>Material Science & management</li>
                </ul>
                <h5>Computer Science and Engineering & Information Technology</h5>
                <ul>
                    <li>Computer Science</li>
                    <li>Information Technology</li>
                    <li>Information Security</li>
                    <li>Software EngineeringM</li>
                    <li>Distributed Computing</li>
                    <li>Image Processing</li>
                    <li>Computer Systems and Hardware</li>
                    <li>Database and Information Systems</li>
                    <li>Programming languages</li>
                    <li>Computer Networks and Distributed Systems</li>
                    <li>Artificial Intelligence</li>
                    <li>Advanced Computing</li>
                </ul>
            </div>
 <div id="9">
 <h3>Type Of Questions</h3>
 <p>GATE 2017 Exam consists of Multiple Choice Questions and Numerical Type Questions in all papers & sections. Multiple Choice Questions will contain 4 options, of which only one is correct. For Numerical Type Questions a numerical value as the answer should be entered using mouse and virtual keyboard on the monitor. The following are type of Questions:
 </p>
 <p>a. Recall: These are based on facts, principles, formulae or laws of the discipline. The candidate is expected to be able to obtain the answer either from his/her memory directly or at most from a one-line computation.<br>
b. Comprehension: These questions will test the candidate's understanding of the basics of his/her field, by requiring him/her to draw simple conclusions from fundamental ideas.<br>
c. Application: In these questions, the candidate is expected to apply his/her knowledge either through computation or by logical reasoning.<br>
d. Analysis and Synthesis: These can be linked questions, where the answer to the first question of the pair is required in order to answer its successor. Or these can be common data questions, in which two questions share the same data but can be solved independently of one another.<br>
e. Common Data Questions: Multiple questions may be linked to a common data problem, passage and the like. Two or three questions can be formed from the given common data problem. Each question is independent and its solution obtainable from the above problem data/passage directly. (Answer of the previous question is not required to solve the next question). Each question under this group will carry two marks.<br>
f. Linked Answer Questions: These questions are of problem solving type. A problem statement is followed by two questions based on the problem statement. The two questions are designed such that the solution to the second question depends upon the answer to the first one. In other words, the first answer is an intermediate step in working out the second answer. Each question in such linked answer questions will carry two marks.<br>
</p></div>
<div id="10">
<h3>How to prepare for GATE </h3>
<ul>
<li>GATE examination consists only of multiple and numerical answer type questions, hence only correct answer fetches marks.</li>
<li>Practice previous year question papers and analyze the weak topics and concentrate more on those topics. Candidates must try to solve the papers in a given time limit to obtain an idea as to how many questions are solved within the allotted time.</li>
<li>Imrt equal emphasis on both theory and numerical problems. </li>
<li>Browse through the GATE syllabus for topics allotted more weightage and prepare them.</li>
<li>Group Study is an effective way to brush up knowledge about technical topics with fellow partners and also helps to explore new techniques and methods to better understand the topics.</li>
<li>Do not make wild guess as there is negative marking associated with the questions. </li>
<li>Prepare the list of important definitions, equations, derivations, theorems, laws in every subject.</li>
<li>Pay more attention while attempting linked and common data questions.</li>
</ul></div>
</div>
</div>
    <?php
    include("footer - Copy.php");
    
    ?>
</body>
</html>
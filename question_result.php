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
<body style="margin-top:0px;color: #5e235d;background: white; font-size: 15px;">
    <header class="header_nav">
            <div class="l1_nav">
                <span id="li1" class="li_nav1"><b class="h4_nav">Virtual Exam</b></span>
                <span class="li_nav2"><a href="../after_st_login.php">Home</a></span>
                <span class="li_nav3">About</span>
                <span class="li_nav4">Exam</span>
            </div>
            <div class="l2_nav">
                <span class="li_nav5" style="color:red;"><?php echo "Welcome <b>".$user_name."</b>";?></span>
                
                <span class="li_nav7"><a href="logout.php">Logout</a></span>
            </div>
        </header>
    
    
    

<?php
   
    $stu_id=$login;
    $exam_name=$_POST['exam_name'];
    $setno=$_POST['setno'];
    //$setno='2';
    //$exam_name='JEE';
    $stu_ans[1]=0;
    $stu_ans[2]=0;
    $stu_ans[3]=0;
    $stu_ans[4]=0;
    $stu_ans[5]=0;
    $stu_ans[6]=0;
    $stu_ans[7]=0;
    $stu_ans[8]=0;
    $stu_ans[9]=0;
    $stu_ans[10]=0;
    
    $stu_ans[1]=$_POST['answer1'];
    $stu_ans[2]=$_POST['answer2'];
    $stu_ans[3]=$_POST['answer3'];
    $stu_ans[4]=$_POST['answer4'];
    $stu_ans[5]=$_POST['answer5'];
    $stu_ans[6]=$_POST['answer6'];
    $stu_ans[7]=$_POST['answer7'];
    $stu_ans[8]=$_POST['answer8'];
    $stu_ans[9]=$_POST['answer9'];
    
    $total_att=0;
    $stu_tot_mark=0;
    $stu_mark=array('0','0','0','0','0','0','0','0','0','0','0');
    
    $link=new mysqli('localhost','root','','vec2');
    if(mysqli_connect_error()){ 
        echo "unable to connect to localhost";
        }
    $query="SELECT * FROM question,exam_has WHERE question.question_id=exam_has.question_id AND exam_has.set_number='$setno'AND exam_has.exam_name='$exam_name'";
    $results=$link->query($query);
    
    $qu_st_name="SELECT * FROM `user_student` WHERE `student_id` = '$stu_id'";
    $result_st_name=$link->query($qu_st_name);
    
    // $q_subject="SELECT question.question_id,question.question_description,question_comes_from.topic_name,question_comes_from.subject FROM question,question_comes_from,exam_has WHERE question.question_id=question_comes_from.question_id AND question.question_id=exam_has.question_id AND exam_has.exam_name='$exam_name' AND exam_has.set_number='$setno'";
    $q_subject="SELECT DISTINCT question_comes_from.subject FROM question,question_comes_from,exam_has WHERE question.question_id=question_comes_from.question_id AND question.question_id=exam_has.question_id AND exam_has.exam_name='$exam_name' AND exam_has.set_number='$setno'";
            
     $sub_res=$link->query($q_subject);
    
    if(!$results||!$result_st_name) 
			echo 'Error in insert to table <br>'; 
		else 
        {
			 
            $num_row=$results->num_rows;
            
            
            echo "<br />";
            for($i=1;$i<=$num_row;$i++)
            {   $row=$results->fetch_assoc();
                $q_id[$i][0]=$row['question_id'];
                $q_ans[$i]=$row['answer'];
                $q_hint[$i]=$row['question_hint'];
            
               // echo $q_ans[$i]."".$num_row." ";
                if(($stu_ans[$i]==1)||($stu_ans[$i]==2)||($stu_ans[$i]==3)||($stu_ans[$i]==4))
                {    $total_att++;
                    if($stu_ans[$i]==1)
                        $stu_ans[$i]='A';
                    if($stu_ans[$i]==2)
                        $stu_ans[$i]='B';
                    if($stu_ans[$i]==3)
                        $stu_ans[$i]='C';
                    if($stu_ans[$i]==4)
                        $stu_ans[$i]='D';
                }
             
                if($stu_ans[$i]==$q_ans[$i])
                { $stu_mark[$i]=3; 
                    $q_id[$i][0]=$stu_mark[$i];
         //echo $stu_ans[$i]."s ".$q_ans[$i]." ".$stu_mark[10]." ".$stu_ans[$i]." ".$q_ans[$i]." ".$i;
                }
                else if($stu_ans[$i]!=0)
                    $stu_mark[$i]=-1;
                $stu_tot_mark=$stu_tot_mark+$stu_mark[$i];
            } 
            
            if($num_row==10)
            { $stu_ans[10]=$_POST['answer10'];
                if(($stu_ans[10]==1)||($stu_ans[10]==2)||($stu_ans[10]==3)||($stu_ans[10]==4))
                { $total_att++;
                    if($stu_ans[10]==1)
                        $stu_ans[10]='A';
                    if($stu_ans[10]==2)
                        $stu_ans[10]='B';
                    if($stu_ans[10]==3)
                        $stu_ans[10]='C';
                    if($stu_ans[10]==4)
                        $stu_ans[10]='D';
                    if($stu_ans[10]==$q_ans[10])
                    { $stu_mark[10]=3;
                     //echo $stu_ans[10]." ".$q_ans[10]." ".$stu_mark[10];
                    }
                    else if($stu_ans[10]!=0)
                        $stu_mark[10]=-1;
                }
            }
           
            $row_name=$result_st_name->fetch_assoc();
            
            $st_name=$row_name['student_name'];
            echo "<hr width=80%;>";
            echo "<div style=text-align:center;color:white;font-size:30px;padding:10px;width:50%;background:#5e235d;border-radius:200px;margin-left:25%;><B>Student Name : </b>".$st_name."<br/>";
            echo "<B>Student ID : </b>".$stu_id."<br/>";
            echo "<B>Exam Name: </b>".$exam_name."<br/>";
            echo "<B>Set Number : </b>".$setno."<br/>";
            echo "</div><br/><hr width=80%;>";
            
            echo "<div style=margin-left:5%;text-align:center;font-size:20px;>";
            echo "<b>Number Of Question : </b>".$num_row."<br/>";
            echo "<b>Number Of Question Attempted: </b>".$total_att."<br/>";
            echo "</div><br/><br/>";
            
            
            echo "<table cellpadding=10 style=margin-left:20%;width:60%;border-collapse:collapse;text-align:center;>
                        <tr style='border-bottom:2px;'>
                            <td><b>S.No</b></td>
                            <td><b>Question number</b></td>
                            <td><b>Actual Answer</b></td>
                            <td><b>Yours Answer</b></td>
                            <td><b>Marks</b></td>
                            <!--<td><b>Hint</b></td>-->
                        <tr>";
            for($i=1;$i<=$num_row;$i++)
            {  
                 echo "<tr>
                            <td>".$i."</td>
                            <td>Q ".$i."</td>
                            <td>".$q_ans[$i]."</td>
                            <td>".$stu_ans[$i]."</td>
                            <td>".$stu_mark[$i]."</td>
                            <!--td overflow:scroll;>".$q_hint[$i]."</td>-->
                        <tr>";
            }
            echo "</table><br/><hr width=80%;>";
            
            echo "<b style=margin-left:20%;>Marks Obtain :</b>".$stu_tot_mark;
            echo "<br/><hr width=80%;><center><b>Subject Wise Analysic</b></center>";
            ?>
             <div style="text-align:center;">
            <?php
           
    
               
        if(!$sub_res) 
			echo 'Error in Fetching the Topic Name <br>'; 
        else 
        {
            $total_subject="SELECT COUNT(DISTINCT question_comes_from.subject) 
                            FROM question,question_comes_from,exam_has WHERE question.question_id=question_comes_from.question_id AND question.question_id=exam_has.question_id AND exam_has.exam_name='$exam_name'AND exam_has.set_number='$setno'";
            
            $total_sub=$link->query($total_subject);
            $row=$total_sub->fetch_assoc();
            
            $num_row_subject=$sub_res->num_rows;
            
            
            echo "<br />";
            echo "Total Subject are : ".$row['COUNT(DISTINCT question_comes_from.subject)']."<br/>";
            $to_sub=$row['COUNT(DISTINCT question_comes_from.subject)'];
            for($i=1;$i<=$to_sub;$i++)
            {   $row=$sub_res->fetch_assoc();
                echo "<b><br/>Subject ".$i." :</b> ".$row['subject']."<br/>";
                $row5=$row['subject'];
             
                $ques_in_subj="SELECT question.question_id
                                FROM question,exam_has,question_comes_from
                                WHERE question.question_id=exam_has.question_id AND question.question_id=question_comes_from.question_id AND exam_has.set_number='$setno' AND exam_has.exam_name='$exam_name' AND question_comes_from.subject='$row5'";
             
                $tot_ques_in_subj="SELECT COUNT(DISTINCT question.question_id )
                                FROM question,exam_has,question_comes_from WHERE question.question_id=exam_has.question_id AND question.question_id=question_comes_from.question_id AND exam_has.set_number='$setno' AND exam_has.exam_name='$exam_name' AND question_comes_from.subject='$row5'";
             
              $ques_in_total_sub=$link->query($ques_in_subj);
                
                $tot_ques_in_total_sub=$link->query($tot_ques_in_subj);
             
             $row6=$tot_ques_in_total_sub->fetch_assoc();
             $row6_1=$row6['COUNT(DISTINCT question.question_id )'];
             
             echo "Subject : ".$row['subject']."</br> Number of question : ".$row6_1." ";
             echo "<br/><b>Question Numbers are :</b> ";
             $right=0;
            $wrong=0;
             for($j=1;$j<=$row6_1;$j++)
             { 
                $row4=$ques_in_total_sub->fetch_assoc();
                if(substr($row4['question_id'], -1)==0)
                {   echo "  10  ,";
                   
                    
                }
                else 
                {    echo "    ".substr($row4['question_id'], -1)."     ,";
                }
                 for($z=1;$z<=$num_row;$z++)
                    { if($q_id[$z]==$row4['question_id'])
                        { if($q_id[$z][0]==3)
                            $right++;
                         else if($q_id[$z][0]==-1)
                             $wrong++;
                        }
                        
                    }
                 //if($stu_mark[])
             }
                
               echo "<br/>right answer : ".$right."<br/>wrong answer : ".$wrong."<br/>"; 
             
            }
            }
            
            
        }
    $link->close();
            
    
?><br/><br/>
    <center>
    <span style="color:gray;font-size:30px;">Click here to save your Record : </span>
        <form action="record_save.php" method="post" >
            <input type ="submit" class="bt1" value="Save Data" id="bt_1" style="width:20%;">
          
            <input type="" name="exam_name" value="<?php echo $exam_name;?>" style="display:none;">
            
            <input type="" name="setno" value="<?php echo $setno;?>" style="display:none;">
            
            <input type="" name="marks" value="<?php echo $stu_tot_mark;?>" style="display:none;">
            
           
        </form></center><br/><br/>
    
    
    <?php 
    include("footer - Copy.php");
    //include("upper_nav.php");
    //footer_stu();
    ?>
</body>    
</html>
<html>
<head>
<script src="jquery-3.2.0.min.js"></script>
</head>
<body>
<link rel="stylesheet" type="text/css" href="question_no.css">
<?php
$setno=$_POST['set_no'];
//$setno=1;
$exam_name=$_POST['exam_name'];

$exam_name=$_POST['exam_name'];
if($exam_name=='Give GATE CSE TEST')
    $exam_name='GATE CS';
else if($exam_name=='Give GATE ME TEST')
    $exam_name='GATE ME';
else if($exam_name=='Give JEE TEST')
    $exam_name='JEE';
else if($exam_name=='Give GATE EC TEST')
    $exam_name='GATE EC';
    
include('header_question.php');
include('question_content.php');
    
   
    $link=new mysqli('localhost','root','','vec2');
    if(mysqli_connect_error()){ 
        echo "unable to connect to localhost";
        }
    $query="SELECT * FROM question,exam_has WHERE question.question_id=exam_has.question_id AND exam_has.set_number='$setno'AND exam_has.exam_name='$exam_name'";
    $results=$link->query($query);
    if(!$results) 
			echo 'Error in insert to table <br>'; 
		else 
        {
			 
            $num_row=$results->num_rows;
           
            
            echo "<br />";
            for($i=1;$i<=$num_row;$i++)
            {   $row=$results->fetch_assoc();
                $q_id[$i]=$row['question_id'];
                $q_dec[$i]=$row['question_description'];
                $q_op[$i][0]=$row['option1'];
                $q_op[$i][1]=$row['option2'];
                $q_op[$i][2]=$row['option3'];
                $q_op[$i][3]=$row['option4'];
                $q_ans[$i]=$row['answer'];
            }
        }
    $link->close();
    
    $stu_ans=array('0','0','0','0','0','0','0','0','0','0');
    
    $q_no=1;
    $q_total=$num_row;
    $q_current=1;
    $q_current2='1';
    //$y=$exan_name;
     if($exam_name=='GATE CS')
       $y='GATE COMPUTER SCIENCE ENGINEERING';
    else if($exam_name=='GATE ME')
      $y='GATE MACHANICAL ENGINEERING';
    else if($exam_name=='JEE')
       $y='JOINT ENTRANCE EXAM';
    else if($exam_name=='GATE EC')
       $y='GATE EC ENGINEERING';
    
    $q_content="These numerical reasoning tests contain questions that test your knowledge of Ratios, Percentage Increase/Decrease, Cost and Sales Analysis, Rates and Trends, and Currency Conversions.
    Use a calculator. The tests are not negatively marked but accuracy is essential so try not to rush or guess. Practice makes perfect.";
    $ans='ans ';
    
    $q_current=1;
    $default_q=1;
  

    echo op($y);
?>
<div id="main2">
   <div ng-cloak ng-show="pat.started" class="container2">
	<div class="questions">
		<p ng-cloak ng-hide="pat.showAnswers">
			Question: <?php echo $q_current; ?> of <?php echo $q_total; ?></p>
		
		<ul>
            <li>
                <?php 
                    for($i=$q_no;$i<=$q_total;$i++)
                    { ?>
                        <input type="button" class="no_of_question" value="<?php echo $i;?>" style="margin-left: 18px;margin-top:8px;" id="<?php echo $i;?>"> 
                        
                      <?php
                    } echo "<br />";
                  
                ?>
			</li>
            
		</ul>
	</div>
   </div>
                  
    
    
<hr>        
                <?php for($i=1;$i<=$q_total;$i++)
            {?>
                <input type="" name="answer<?php echo $i;?>" value="<?php echo "0";?>" style="display:none;">
            <?php }?>
    
                 <div style="float:left;">
                <?php 
                    echo "<table border='1' cellpadding = '5' style='margin-left:30px;'>";
                    for($i=$q_no;$i<=$q_total;$i++)
                    { ?><tr>
                       <td><p style="margin-left: 68px;"><?php echo " ".$i." <br/>";?></p></td>
                       <td ><p id="ans<?php echo $i;?>" style="margin-left: 78px;"><?php echo "  <br/>";?></p></td>
                      </tr><?php
                    }echo "</table>";
                    
                ?>
                </div>
    <form name="search_user" method="post" action="question_result.php">         
    <div class="question_content" >
        <div class="button_nav">
            <div class="button_nav2">
               
                <input type="submit" name="xy" value=" SUBMIT  " class="but_pn"         style="margin-left:400px;" id="btn_next">
            </div>
        </div>
       
        <?php 
        for($o=$q_no;$o<=$q_total;$o++)
        { q_des($o,$o,$q_dec[$o],$q_op[$o]);
        ?><style type="text/css">
        .row<?php echo $o;?>{display: none;
        margin-left: 400px;}
        </style>
        <?php        
        
        }?>
        
        <div class="row">
           	    <h2>Question<?php echo " 1";?> </h2>
				<div class="question_no_content"> 
                    <p class="box2"><?php echo $$q_dec[1]; ?> </p>
                </div>
				<div class="answers">
				       <?php 
                        $i1=0;
                            for($i1;$i1<4;$i1++)
                            { ?>
                                <b>
                                    <input type="radio" id="op<?php echo $i1; ?>" value="<?php echo $i1+1;?>" style="margin-top:10px;" name="answer1" class="answer25" size="1">
                                    <?php echo $q_op[1][$i1];?><br />
                                  </b><?php
                            } ?>
                     </div>
            <script>$("#1").css("color","red");</script>
        </div>
    </div>
        <input type="" name="exam_name" value="<?php echo $exam_name;?>" style="display:none">
        <input type="" name="setno" value="<?php echo $setno;?>" style="display:none">
        
    </form>
</div>

     <script>
        $(document).ready(function(){
              {  
                   $("#op0").click(function(){
                       $("#ans1").text("a");
                   })
                   $("#op1").click(function(){
                       $("#ans1").text("b");
                   })
                   $("#op2").click(function(){
                       $("#ans1").text("c");
                   })
                   $("#op3").click(function(){
                       $("#ans1").text("d");
                   })
                 <?php  
                   for($q=1;$q<=$q_total;$q++)
                   {?>
                   $("#op0<?php echo $q;?>").click(function(){
                       $("#ans<?php echo $q;?>").text("a");
                   })
                   $("#op1<?php echo $q;?>").click(function(){
                       $("#ans<?php echo $q;?>").text("b");
                   })
                   $("#op2<?php echo $q;?>").click(function(){
                       $("#ans<?php echo $q;?>").text("c");
                   })
                   $("#op3<?php echo $q;?>").click(function(){
                       $("#ans<?php echo $q;?>").text("d");
                   })
                   <?php
                   }
                   ?>
                   
                   
                  $("#btn_next").click(function(){
                    var $x=1;
                    $(".row").hide(); 
                      <?php 
                  for($q=2;$q<=$q_total;$q++)
                  { ?>$(".row<?php echo $q;?>").hide();
                     <?php 
                  }?>
                     $(".row<?php 
                       $q_current2=$q_current2+'1';
                       echo $q_current2;?>").show();  
                  $("#<?php echo $q_current2+1;?>").css("color","red");
                  
              })  
                  
                $("#1").click(function(){
                  $(".row").hide(); $("#btn_sub").hide();
                  $("#btn_next").show();
                      <?php 
                  for($q=2;$q<=$q_total;$q++)
                  { ?>$(".row<?php echo $q;?>").hide();
                     <?php 
                  }?>
                     $(".row1").show();  
                  $("#1").css("color","red");
                  <?php $q_current2=1;?>
              })
               
              $("#2").click(function(){
                  $(".row").hide();$("#btn_sub").hide();
                  $("#btn_next").show();
                  <?php $q_current2=2;
                  for($q=1;$q<=$q_total;$q++)
                  { ?>$(".row<?php echo $q;?>").hide();
                     <?php 
                  }?>
                  $(".row2").show();
                  $("#2").css("color","red");
                  
                })
                
                $("#3").click(function(){
                  $("#3").css("color","red");
                    $(".row").hide();$("#btn_sub").hide();
                  $("#btn_next").show();
                  <?php 
                  for($q=1;$q<=$q_total;$q++)
                  { ?>$(".row<?php echo $q;?>").hide();
                     <?php 
                  }?>
                  $(".row3").show();<?php $q_current2=3;?>
                  
                })
                $("#4").click(function(){$("#4").css("color","red");
                  $(".row").hide();$("#btn_sub").hide();
                  $("#btn_next").show();
                  <?php 
                  for($q=1;$q<=$q_total;$q++)
                  { ?>$(".row<?php echo $q;?>").hide();
                     <?php 
                  }?>
                  $(".row4").show();
                   <?php $q_current2=4;?>
                })
                $("#5").click(function(){$("#5").css("color","red");
                    <?php $q_current2=4;?>
                  $(".row").hide();$("#btn_sub").hide();
                  $("#btn_next").show();
                  <?php 
                  for($q=1;$q<=$q_total;$q++)
                  { ?>$(".row<?php echo $q;?>").hide();
                     <?php 
                  }?>
                  $(".row5").show();
                  
                })
                $("#6").click(function(){$("#6").css("color","red");
                  $(".row").hide();$("#btn_sub").hide();
                  $("#btn_next").show();
                  <?php 
                  for($q=1;$q<=$q_total;$q++)
                  { ?>$(".row<?php echo $q;?>").hide();
                     <?php 
                  }?>
                  $(".row6").show();
                  <?php $q_current2=6;?>
                })
                $("#7").click(function(){$("#7").css("color","red");
                  $(".row").hide();$("#btn_sub").hide();
                  $("#btn_next").show();
                  <?php 
                  for($q=1;$q<=$q_total;$q++)
                  { ?>$(".row<?php echo $q;?>").hide();
                     <?php 
                  }?>
                  $(".row7").show();
                  <?php $q_current2=7;?>
                })
                $("#8").click(function(){$("#8").css("color","red");
                  $(".row").hide();$("#btn_sub").hide();
                  $("#btn_next").show();
                  <?php 
                  for($q=1;$q<=$q_total;$q++)
                  { ?>$(".row<?php echo $q;?>").hide();
                     <?php 
                  }?>
                  $(".row8").show();
                  <?php $q_current2=8;?>
                })
                $("#9").click(function(){$("#9").css("color","red");
                  $(".row").hide();$("#btn_sub").hide();
                  $("#btn_next").show();
                  <?php 
                  for($q=1;$q<=$q_total;$q++)
                  { ?>$(".row<?php echo $q;?>").hide();
                     <?php 
                  }?>
                  $(".row9").show();
                  <?php $q_current2=9;?>
                })
                $("#10").click(function(){$("#10").css("color","red");
                  $(".row").hide();$("#btn_sub").hide();
                  $("#btn_next").show();
                  <?php 
                  for($q=1;$q<=$q_total;$q++)
                  { ?>$(".row<?php echo $q;?>").hide();
                     <?php 
                  }?>
                  $(".row10").show();
                  <?php $q_current2=10;?>
                })
                $("#11").click(function(){$("#11").css("color","red");
                  $(".row").hide();$("#btn_sub").hide();
                  $("#btn_next").show();
                  <?php 
                  for($q=1;$q<=$q_total;$q++)
                  { ?>$(".row<?php echo $q;?>").hide();
                     <?php 
                  }?>
                  $(".row11").show();
                  <?php $q_current2=11;?>
                })
                $("#12").click(function(){$("#12").css("color","red");
                  $(".row").hide();$("#btn_sub").hide();
                  $("#btn_next").show();
                  <?php 
                  for($q=1;$q<=$q_total;$q++)
                  { ?>$(".row<?php echo $q;?>").hide();
                     <?php 
                  }?>
                  $(".row12").show();
                  <?php $q_current2=12;?>
                })
                $("#13").click(function(){$("#13").css("color","red");
                  $(".row").hide();$("#btn_sub").hide();
                  $("#btn_next").show();
                  <?php 
                  for($q=1;$q<=$q_total;$q++)
                  { ?>$(".row<?php echo $q;?>").hide();
                     <?php 
                  }?>
                  $(".row13").show();
                  <?php $q_current2=13;?>
                })
                $("#14").click(function(){$("#14").css("color","red");
                  $(".row").hide();$("#btn_sub").hide();
                  $("#btn_next").show();
                  <?php 
                  for($q=1;$q<=$q_total;$q++)
                  { ?>$(".row<?php echo $q;?>").hide();
                     <?php 
                  }?>
                  $(".row14").show();
                  <?php $q_current2=14;?>
                })
                $("#15").click(function(){$("#15").css("color","red");
                  $(".row").hide();$("#btn_sub").hide();
                  $("#btn_next").show();
                  <?php 
                  for($q=1;$q<=$q_total;$q++)
                  { ?>$(".row<?php echo $q;?>").hide();
                     <?php 
                  }?>
                  $(".row15").show();
                  <?php $q_current2=15;?>
                })
                $("#16").click(function(){$("#16").css("color","red");
                  $(".row").hide();$("#btn_sub").hide();
                  $("#btn_next").show();
                  <?php 
                  for($q=1;$q<=$q_total;$q++)
                  { ?>$(".row<?php echo $q;?>").hide();
                     <?php 
                  }?>
                  $(".row16").show();
                  <?php $q_current2=16;?>
                })
                $("#17").click(function(){$("#17").css("color","red");
                  $(".row").hide();$("#btn_sub").hide();
                  $("#btn_next").show();
                  <?php 
                  for($q=1;$q<=$q_total;$q++)
                  { ?>$(".row<?php echo $q;?>").hide();
                     <?php 
                  }?>
                  $(".row17").show();
                  <?php $q_current2=17;?>
                })
                $("#18").click(function(){$("#18").css("color","red");
                  $(".row").hide();$("#btn_sub").hide();
                  $("#btn_next").show();
                  <?php 
                  for($q=1;$q<=$q_total;$q++)
                  { ?>$(".row<?php echo $q;?>").hide();
                     <?php 
                  }?>
                  $(".row18").show();
                  <?php $q_current2=18;?>
                })
                $("#19").click(function(){$("#19").css("color","red");
                  $(".row").hide();$("#btn_sub").hide();
                  $("#btn_next").show();
                  <?php 
                  for($q=1;$q<=$q_total;$q++)
                  { ?>$(".row<?php echo $q;?>").hide();
                     <?php 
                  }?>
                  $(".row19").show();
                  <?php $q_current2=19;?>
                })
                $("#20").click(function(){$("#20").css("color","red");
                  $(".row").hide();$("#btn_sub").hide();
                  $("#btn_next").show();
                  <?php 
                  for($q=1;$q<=$q_total;$q++)
                  { ?>$(".row<?php echo $q;?>").hide();
                     <?php 
                  }?>
                  $(".row20").show();
                  <?php $q_current2=20;?>
                })
                $("#21").click(function(){$("#21").css("color","red");
                  $(".row").hide();$("#btn_sub").hide();
                  $("#btn_next").show();
                  <?php 
                  for($q=1;$q<=$q_total;$q++)
                  { ?>$(".row<?php echo $q;?>").hide();
                     <?php 
                  }?>
                  $(".row21").show();
                  <?php $q_current2=21;?>
                })
                $("#22").click(function(){$("#22").css("color","red");
                  $(".row").hide();$("#btn_sub").hide();
                  $("#btn_next").show();
                  <?php 
                  for($q=1;$q<=$q_total;$q++)
                  { ?>$(".row<?php echo $q;?>").hide();
                     <?php 
                  }?>
                  $(".row22").show();
                  <?php $q_current2=22;?>
                })
                $("#23").click(function(){$("#23").css("color","red");
                  $(".row").hide();$("#btn_sub").hide();
                  $("#btn_next").show();
                  <?php 
                  for($q=1;$q<=$q_total;$q++)
                  { ?>$(".row<?php echo $q;?>").hide();
                     <?php 
                  }?>
                  $(".row23").show();
                  <?php $q_current2=23;?>
                })
                $("#24").click(function(){$("#24").css("color","red");
                  $(".row").hide();$("#btn_sub").hide();
                  $("#btn_next").show();
                  <?php 
                  for($q=1;$q<=$q_total;$q++)
                  { ?>$(".row<?php echo $q;?>").hide();
                     <?php 
                  }?>
                  $(".row24").show();
                  <?php $q_current2=24;?>
                })
                $("#25").click(function(){$("#25").css("color","red");
                  $(".row").hide();$("#btn_sub").hide();
                  $("#btn_next").show();
                  <?php 
                  for($q=1;$q<=$q_total;$q++)
                  { ?>$(".row<?php echo $q;?>").hide();
                     <?php 
                  }?>
                  $(".row25").show();
                  <?php $q_current2=25;?>
                })
                $("#26").click(function(){$("#26").css("color","red");
                  $(".row").hide();$("#btn_sub").hide();
                  $("#btn_next").show();
                  <?php 
                  for($q=1;$q<=$q_total;$q++)
                  { ?>$(".row<?php echo $q;?>").hide();
                     <?php 
                  }?>
                  $(".row26").show();
                  <?php $q_current2=26;?>
                })
                $("#27").click(function(){$("#27").css("color","red");
                  $(".row").hide();
                   $("#btn_sub").hide();
                  $("#btn_next").show();                       
                  <?php 
                  for($q=1;$q<=$q_total;$q++)
                  { ?>$(".row<?php echo $q;?>").hide();
                     <?php 
                  }?>
                  $(".row27").show();
                  <?php $q_current2=27;?>
                })
                $("#28").click(function(){$("#28").css("color","red");
                  $(".row").hide();
                   $("#btn_sub").hide();
                  $("#btn_next").show();                       
                  <?php 
                  for($q=1;$q<=$q_total;$q++)
                  { ?>$(".row<?php echo $q;?>").hide();
                     <?php 
                  }?>
                  $(".row28").show();
                  <?php $q_current2=28;?>
                })
                $("#29").click(function(){$("#29").css("color","red");
                  $(".row").hide();
                 $("#btn_sub").hide();
                  $("#btn_next").show();                         
                  <?php 
                  for($q=1;$q<=$q_total;$q++)
                  { ?>$(".row<?php echo $q;?>").hide();
                     <?php 
                  }?>
                  $(".row29").show();
                  <?php $q_current2=29;?>
                })
                $("#30").click(function(){$("#30").css("color","red");
                  $(".row").hide();
                  <?php 
                  for($q=1;$q<=$q_total;$q++)
                  { ?>$(".row<?php echo $q;?>").hide();
                     <?php 
                  }?>
                  $(".row30").show();
                  <?php $q_current2=30;?>
                  $("#btn_sub").show();  
                $("#btn_next").hide(); 
                })
                
                
                    
              }
        });
     
    </script>
    
    
</body>
</html>
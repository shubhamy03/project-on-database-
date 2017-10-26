<?php 

function q_des($div1,$q_current,$q_content,$ans)
{

?>
<html>
    <body>
        <link rel="stylesheet" type="text/css" href="question_no.css">
<div class="row<?php echo $div1;?>">
           	    <h2>Question<?php echo " ".$q_current;?> </h2>
				<div class="question_no_content"> 
                    <p class="box2"><?php echo $q_content; ?> </p>
                </div>
				<div class="answers">
				    
                        <?php 
                        $i1=0;
                            for($i1;$i1<4;$i1++)
                            { ?>
                                <b><input type="radio" id="op<?php echo $i1.$div1; ?>" value="<?php echo $i1+1; ?>" style="margin-top:10px;" name="answer<?php echo $div1; ?>">
                                   <label for = " <?php echo "answer content".$i1;?>"> 
                                       <?php echo $ans[$i1];?><br /></label>
                                </b><?php
                            } 
                          
                            { ?> <p id="ans<?php echo $div1;?>" style="margin-left: 48px;margin-top:8px;display:inline-block;"></p>
                                <?php
                            }
                    
                    
                            ?>
                            
                    
                    </div>
</div>	
<script>
 .row<?php echo $div1;?>{margin-left: 400px;}
.row<?php echo $div1;?> question_no_content{
    margin-left: 400px; 
    width: 50%;
     display: block;
    
}
p.box2{
    height: 150px;
    width: 500px;
    position: absolute;
}
div.answers{
    font-size: 15px;
    margin-top: 30px;
    margin-left: 600px;
}
    

</script>
    </body>
</html>
<?php 
}
?>
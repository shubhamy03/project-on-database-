
<html>
<head>
<style>
textarea {
     padding: 12px 20px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    background-color: #f8f8f8;
    font-size: 16px;
    resize: none;  
}
.main{
margin-left:35%;}
body{
background-color:Lavender;}
input[type=submit], input[type=reset] {
    background-color: Salmon;
    border: none;
    color: white;
    padding: 16px 32px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
}
h1{
color:Salmon;
font-size:50px;}
h3{
	font-size:25px;
color:SandyBrown;}
h5{
color:RosyBrown;}
</style>
</head>
<body>
<center><h1>TEACHER  ZONE</h1>
<h3>UPLOAD QUESTION</H3></center>
<br>
<div class="main">
<form action="qupload.php" method="post">
<H5>QUESTION-ID</H5>
<textarea name="questionid" rows="1" cols="40"></textarea><br>
<h5>QUESTION-DESCRIPTION</h5>
<textarea name="questiondesc" rows="8" cols="40"></textarea><br>
<h5>OPTION 1</h5>
<textarea name="option1" rows="2" cols="40"></textarea><br>
<h5>OPTION 2</h5>
<textarea name="option2" rows="2" cols="40"></textarea><br>
<h5>OPTION 3</h5>
<textarea name="option3" rows="2" cols="40"></textarea><br>
<h5>OPTION 4</h5>
<textarea name="option4" rows="2" cols="40"></textarea><br>
<H5>ANSWER</H5>
<textarea name="answer" rows="1" cols="40"></textarea><br>
<h5>QUESTION-HINT</H5>
<textarea name="questionhint" rows="3" cols="40"></textarea><br><br>
<input type="reset" name="submit" value="Reset">
<input type="submit" name="submit" value="insert">
</form>
</div>
</body>
</html>


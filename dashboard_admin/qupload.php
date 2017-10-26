<?php
session_start(); 
if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1){ 
	echo 'WELCOME';; 
	if ($_POST['submit'] == 'insert'){
		$validationFlag = true; 
		if(!($_POST['questionid']))
		{ 
			echo 'All the fields marked as * are compulsary.<br>'; 
			$validationFlag = false; 
		} 
		else{ 
			$questionid = $_POST['questionid']; 
			$questiondesc = $_POST['questiondesc'];
			$option1 = $_POST['option1']; 
			$option2 = $_POST['option2'];
			$option3 = $_POST['option3']; 
			$option4 = $_POST['option4'];
			$questionhint = $_POST['questionhint']; 
			$answer = $_POST['answer'];
		}
		if($validationFlag){ 
			$link = @mysql_connect('localhost', '2015257', 'sumit@1506'); 
			if(!$link){ 
				die('Failed to connect to server: ' . mysql_error()); 
			} 
			$db = mysql_select_db('vec2'); 
			if(!$db){ 
				die("Unable to select database"); 
			} 
		$query = "INSERT INTO question (question_id,question_description,question_hint,answer,option1,option2,option3,option4) VALUES ('$questionid','$questiondesc','$questionhint','$answer','$option1','$option2','$option3','$option4')"; 
		$results = mysql_query($query); 
		if($results == FALSE) 
			echo mysql_error() . '<br>'; 
		else 
			echo 'Question uploaded successfully! '; 
		} 
	} 
}
else{ 
echo 'login again'; 
exit(); 
} 
?>




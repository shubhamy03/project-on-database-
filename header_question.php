<?php
  
    function op($x)
    {
?>    
<link rel="stylesheet" type="text/css" href="header_question.css">
<center>
 <header id="header">
		<div class="container">
			<div class="logo">
			<a href="logo.jpg"></a>
			</div>
			<div class="test-name">
				<h4><?php echo $x; ?></h4>
			</div>
            <b>
            <div class="clock" style=" color: #00BCDF;">
				    <span>Time remaining</span>                
                        <div class="timer-container" id="#run-the-timer" >
                            <span class="minute" style="display: inline-block;">10</span> : 
                            <span class="second" style="display: inline-block;">00</span>
                            <span class="timeout_message_show" style="display:none;">
                                We are Sorry, your time is up !</span>
                        </div>              
<script>
   
window.onload = function () {
    var fragmentTime;
    jQuery('.timeout_message_show').hide();
    var minutes = jQuery('span.minute').text();
    var seconds = jQuery('span.second').text();
    minutes = parseInt(minutes);
    seconds = parseInt(seconds);
        if (isNaN(minutes)) {
            minutes = 00;
        }
 
        if (isNaN(seconds)) {
            seconds = 00;
        }
 
        if (minutes == 60) {
            minutes = 59;
        }
 
        if (seconds == 60) {
            seconds = 59;
        }
 
    fragmentTime = (60 * minutes) + (seconds);
    displayMinute = document.querySelector('span.minute');
    displaySecond = document.querySelector('span.second');
    startTimer(fragmentTime, displayMinute, displaySecond);
 
};
    

function startTimer(duration, displayMinute, displaySecond) {
    var timer = duration, displayMinute, displaySecond;
    var timeIntervalID = setInterval(function () {
        minutes = parseInt(timer / 60, 10)
        seconds = parseInt(timer % 60, 10);
        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;
        displayMinute.textContent = minutes;
        displaySecond.textContent = seconds;
            if (--timer < 0) {
                    timer = 0;
                        if (timer == 0) {
                            clearInterval(timeIntervalID);
                               alert(jQuery('.timeout_message_show').text());
                            }
                }
    }, 1000);
}
   
</script>
                           <div class="minutes">
						          <span>minutes </span>
					       </div>
					       <div class="seconds">
						          <span> second</span>
					       </div>
				        </div>				
            </b>
        </div>
</header>
</center>
<?php
       
    }
?>
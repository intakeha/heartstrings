<!--This is a blade template that goes in email message to site administrator-->
<?php

$name = Input::get('name');
$email = Input::get ('email');
$message = Input::get ('message');
$date_time = date("F j, Y, g:i a");
$userIpAddress = Request::getClientIp();
?> 
 
<h4 style="color: green;">Here's a new information request from the HeartStrings Music website: </h4>
 
<div>
<b>Name:</b> <?php echo ($name); ?> <br>
<b>Email address:</b> <?php echo ($email);?> <br>
<b>Date:</b> <?php echo($date_time);?><br>
<b>User IP address:</b> <?php echo($userIpAddress);?><br>
</div>
<div>
<p> 
<b>Message:</b>
<?php echo ($message);?><p>
</div>
<?php
    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $Phone = $_POST['Phone'];
    $Message = $_POST['Message'];
    $from = 'From: website'; 
    $to = 'siddhantdua@hotmail.com'; 
    $subject = 'new website message';
    $human = $_POST['human'];
			
    $body = "From: $Name\n E-Mail: $Email\n Message:\n $Message";
				
    if ($_POST['send'] && $human == '4') {				 
        if (mail ($to, $subject, $body, $from)) { 
	    echo '<p>Your message has been sent!</p>';
	} else { 
	    echo '<p>Something went wrong, go back and try again!</p>'; 
	} 
    } else if ($_POST['send'] && $human != '4') {
	echo '<p>You answered the anti-spam question incorrectly!</p>';
    }
?>
<?php
     session_start();

    $name = $_POST['name'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $message = $_POST['comment'];
	
//$statusSent = $_POST['statusSent'];
	
    $from = 'From: Britts Site'; 
    $to = 'stacalkas_nomen@hotmail.com'; 
    $subject = 'Message from Britts Site';
			
    $body = "Name: $name\n Phone: $telephone\n E-Mail: $email\n Message:\n $message";

    // uncomment to test without vercode
    //mail ($to, $subject, $body, $from); 
				
    if ($_POST['submit'] && $_POST['vercode']==$_SESSION['vercode'] && $name != '' && $email != '' && $message != '') 
	{				 
        //$statusSent = 'Message, Sent';
		
		$mail_status = mail ($to, $subject, $body, $from); 
	}
	else 
	{ 
		//$statusSent = 'Message, was NOT Sent!!!'; 
	}
?>
<?php
if(isset($_POST['submit'])):
    if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])):
		//your secret key
        $secret = '6LfFPRcUAAAAAItAoWDOePpWpq4n_eBoIAOoN5sf';
		//get verify response data
        $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
        $responseData = json_decode($verifyResponse);

		$name = !empty($_POST['name'])?$_POST['name']:'';
		$email = !empty($_POST['email'])?$_POST['email']:'';
          $telephone = !empty($_POST['telephone'])?$_POST['telephone']:'';
          $message = !empty($_POST['message'])?$_POST['message']:'';
        if($responseData->success):
			//contact form
			$to = 'stacalkas_nomen@hotmail.com';
			$subject = 'From Britts site';
			$htmlContent = "
				<h1>Britts Site Contact Form</h1>
				<p><b>Name: </b>".$name."</p>
				<p><b>Email: </b>".$email."</p>
                <p><b>Telephone: </b>".$telephone."</p>
				<p><b>Message: </b>".$message."</p>
			";
			// set content-type when sending an html email
			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
			// More kinds of headers
			$headers .= 'From:'.$name.' <'.$email.'>' . "\r\n";
			//send the email
			@mail($to,$subject,$htmlContent,$headers);

            $succMsg = 'Your contact request have submitted successfully.';
			$name = '';
			$email = '';
			$message = '';
        else:
			$errMsg = 'Robot verification failed, please try again.';
               echo $errMsg;
        endif;
    else:
		 $errMsg = 'Please click on the reCAPTCHA box.';
           echo $errMsg;
    endif;
else:
    $errMsg = '';
    $succMsg = '';
	$name = '';
	$email = '';
	$message = '';
endif;
?>

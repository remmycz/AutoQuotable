<?
$name  = $_REQUEST["name"];
$email = $_REQUEST["email"];
$msg   = $_REQUEST["msg"];
$to    = "contact@autoquotable.com"; /* <= Change this Email ID to yours */
if (isset($email) && isset($name) && isset($msg)) {
    $subject = "$name sent you a message via Auto Quotable"; /* <= Change the Subject If you want */
		$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
$headers .= "From: ".$name." <".$email.">\r\n"."Reply-To: ".$email."\r\n" ;
$msg     = "From: $name<br/> Email: $email <br/>Message: $msg";
	
   $mail =  mail($to, $subject, $msg, $headers);
  if($mail)
	{
		echo 'sent';
	}

else
	{
		echo 'failed';
	}
}

?>
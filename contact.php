<?php
$error_msg = '';
$mymail = 'j.aleksandar2601@gmail.com';
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$msg = $_POST['msg'];

if (!preg_match(
    "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", 
    $email_address))
    {
        $error_msg = 'Invalid email adrress';
}
if(empty($error_msg)) {
    $to = $mymail;
    $headers = "From: $myemail\n";

    $headers .= "Reply-To: $email_address";
    
    mail($to,$subject,$msg,$headers);

}
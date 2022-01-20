<?php
require 'PHPMailer/PHPMailerAutoload.php';
$mail=new PHPMailer();
$mail->isSMTP();
$mail->Host='smtp.gmail.com';
$mail->SMTPAuth=true;
$mail->Username='vermapiyush1102@gmail.com';
$mail->Password='';
$mail->SMTPSecure='tls';
$mail->Port = 587;
$mail->setFrom('vermapiyush1102@gmail.com', 'Hello');
$mail->addReplyTo('vermapiyush1102@gmail.com', 'Hello');
$mail->addAddress("ece.190410155@silicon.ac.in");
$msg='Hey'."<div>"."Have A Good Day";
$mail->Subject = 'test mail';
$mail->msgHTML($msg);
if($mail->Send()){
    echo "MESSAGE HAS BEEN SENT SUCESSFULLY.";
} else{

    echo $res=$mail->ErrorInfo;
}
?>
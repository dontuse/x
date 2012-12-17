<?php
$to  = "cukune@gmail.com , cukuneuss@yandex.ru , dontusecascade@mail.ru" ;

$subject = "Birthday Reminders for August";

$message = file_get_contents('mail-separated.html');

$headers  = "Content-type: text/html; charset=utf-8 \r\n";
$headers .= "From: Birthday Reminder <birthday@example.com>\r\n"; 
$headers .= "Bcc: birthday-archive@example.com\r\n"; 

if(mail($to, $subject, $message, $headers)) {
    print "ok" ;
} else {
    print "error" ;
};
?>
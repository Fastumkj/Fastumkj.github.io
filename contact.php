<?php //storing name, email, and message
/* if (!empty($_POST)) {
    $name = $_POST["name"];
    $visitor_email = $_POST["email"];
    $message = $_POST["subject"];
    $to = 'kahjyun@hotmail.com';
    $email_from = 'fastumkj@hotmail.com';

    $email_subject = 'Message from your website!';

    //$email_body = "User Name: $name.\n".
    //"User Email: $visitor_email .\n"
    //"User Message: $message .\n";

    $email_body = "User Name:" . $name .
        "\n User Email:" . $visitor_email .
        "\n User Message:" . $message . "\n";


    $headers = "From: $email_from /r\n";
    $headers .= "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    $headers = "Reply To: $visitor_email \r\n";

    mail($to, $email_subject, $email_body, $headers);

    header("Location: contact.html");
} */

    // Get data from form 
    $name = $_POST['name'];
    $email= $_POST['email'];
    $message= $_POST['message'];
    
    $to = "kahjyun@hotmail.com";
    $subject = "This is the subject line";
    
    // The following text will be sent
    // Name = user entered name
    // Email = user entered email
    // Message = user entered message
    $txt ="Name = ". $name . "\r\n  Email = "
        . $email . "\r\n Message =" . $message;
    
    $headers = "From: noreply@demosite.com" . "\r\n" .
                "CC: somebodyelse@example.com";
    if($email != NULL) {
        mail($to, $subject, $txt, $headers);
    }
    
    // Redirect to
    header("Location:contact.html");

?> 



<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Connect</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>

<body>

<?php //storing name, email, and message
$name = $_POST["name"];
$visitor_email = $_POST["email"];
$message = $_POST["subject"];

$email_from = 'fastumkj@hotmail.com';

$email_subject = 'Message from your website!';

/*$email_body = "User Name: $name.\n".
                "User Email: $visitor_email .\n"
                    "User Message: $message .\n";*/

$email_body = "User Name:".$name.
"\n User Email:".$visitor_email.
"\n User Message:".$message."\n";
                    
$to = 'kahjyun@hotmail.com';

$headers = "From: $email_from /r\n";
$headers .= "MIME-Version: 1.0" . "\r\n"; $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

$headers = "Reply To: $visitor_email \r\n";

mail($to, $email_subject, $email_body, $headers);

header("Location: contact.html");
?>

<div class="mycontact">
      <h1>Let's Connect!</h1>
      <form id = "mycontact" method = "post" action="contact.php">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" placeholder="Your name..">
    
        <label for="country">Country</label>
        <select id="country" name="country">
          <option value="singapore">Singapore</option>
          <option value="others">Others</option>
        </select>

        
        <label for ="email">Email</label>
        <input email ="email" type="email" id="email" class="form" placeholder="Your Email:" required>
        <br>
        <label for="subject">Subject</label>
        <textarea id="subject" name="subject" placeholder="Write something.." ></textarea>
    
        <input type="submit" value="Submit">
      </form>
</div>

</body>
</html>
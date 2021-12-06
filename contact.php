<?php

$name = $_POST['name'];

$email_address = $_POST['email'];

$number = $_POST['number'];

$message = $_POST['message'];


//Validate first
if(empty($name)) 
{
    echo "Name is mandatory!";
    exit;
}

if(IsInjected($email_address))
{
    echo "Bad email value! Please enter a valid email";
    exit;
}

$email_from = 'anupbh57@gmail.com';//<== update the email address
$email_subject = "New message from $name";
$email_body = "You have received a message from $name \n \n".

" Here are the details:\n \n Name: $name \n ".

"Email: $email_address\n Contact Number: $number \n ".

"Message: $message \n" ;

    
$to = "anupbh57@gmail.com";//<== update the email address
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $email_address \r\n";
//Send the email!
mail($to,$email_subject,$email_body,$headers);
//done. redirect to thank-you page.
header('Location: thankyou.php?source=contact');


// Function to validate against any email injection attempts
function IsInjected($str)
{
  $injections = array('(\n+)',
              '(\r+)',
              '(\t+)',
              '(%0A+)',
              '(%0D+)',
              '(%08+)',
              '(%09+)'
              );
  $inject = join('|', $injections);
  $inject = "/$inject/i";
  if(preg_match($inject,$str))
    {
    return true;
  }
  else
    {
    return false;
  }
}
   
?> 
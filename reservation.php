<?php

$name = $_POST['d-name'];

$email_address = $_POST['d-email'];

$number = $_POST['d-number'];

$date = $_POST['d-date'];

$time = $_POST['d-time'];

$adults = $_POST['d-adults'];

$kids = $_POST['d-kids'];

//Validate first
if(empty($name)) 
{
    echo "Name and email are mandatory!";
    exit;
}

if(IsInjected($email_address))
{
    echo "Bad email value!";
    exit;
}

$email_from = 'anupbh57@gmail.com';//<== update the email address
$email_subject = "New booking request from $name";
$email_body = "You have received a reservation request from $name \n \n".

" Here are the details:\n \n Name: $name \n ".

"Email: $email_address\n Contact Number: $number \n ".

"Date: $date \n Time: $time \n ".

"Adults: $adults \n Kids: $kids" ;

    
$to = "anupbh57@gmail.com";//<== update the email address
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $email_address \r\n";
//Send the email!
mail($to,$email_subject,$email_body,$headers);
//done. redirect to thank-you page.
header('Location: thankyou.php?source=booking');


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
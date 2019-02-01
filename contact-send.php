<?php

$name = $_POST['name'];

$email = $_POST['email'];

$emaill = strlen($_POST['email']);

$phone = $_POST['phone'];

$loc = $_POST['location'];

$trigger = "0";


if (strtotime($_POST['time'])> strtotime('12:00 am'))
{
$time = date("g:i a", strtotime($_POST['time']));
}
else
{
$time = "";
}

if (strlen("1") > strlen($phone))
	{$trigger ++;}
else
	{$trigger= "15";}

if (strlen("1") > strlen($email))
	{$trigger ++;}
else
	{$trigger = "15";}



if (strtotime($_POST['date'])> strtotime('01-01-18'))
{
$date = date("d-m-Y", strtotime($_POST['date'])) ;
}
else
{
$date = "";
}

$people = $_POST['people'];
$about = $_POST['subject'];
$message = $_POST['message'];
$to = "iamjmitch1990@gmail.com";
$headers ="from: ".$email;
$subject = "New Website Enquiry From ".$name;

$body = "Hi Naomi, \n\nYou have a new website enquiry\n\nName: ".$name."\nEnquiry Type: ".$about."\nEmail: ".$email."\nPhone: ".$phone."\nDate Required: ".$date."\nTime Required: ".$time."\nLocation: ".$loc."\nNumber of people: ".$people."\nMessage:\n".$message;
echo $trigger;
if ($trigger == "2")
{
	header("Location: /oops");
	
	
}
else
{
mail ($to,$subject,$body,$headers);
header("Location: /message-sent");

}




;?>
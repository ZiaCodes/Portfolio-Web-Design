<?php 
if(isset($_POST['submit'])){
    $to = "syed.nlp00@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $subject = "ZiAhmedCodes.com Form";
    $subject2 = "Copy of your form submission";
    $message = "Name : " . $name . "\n\n" . $_POST['comments'];
    $message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['comments'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    header('Location: sentMail.html');
	exit;
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    }

?>
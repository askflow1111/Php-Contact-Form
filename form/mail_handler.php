<style>    
  body {
    display: flex;
  }
  .mail-sent {
    padding: 20px;
    color: white;
    background-color: #4caf50;
    display: flex;
    justify-content: center;
    align-self: center;
    width: 100%;
    font-weight: 800;
  }
</style>

<?php 
if(isset($_POST['submit'])){

    $to = "askflow1111@gmail.com"; 

    $from = $_POST['email'];

    $name = $_POST['name'];

    $subject = "Form submission";

    $subject2 = "Copy of your form submission";

    $message = "Name: " . $name .  "\n\n" . "Email:" . $from . "\n\n" . "Message: " . $_POST['message'];

    $message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;

    $headers2 = "From:" . $to;

    mail($to,$subject,$message,$headers);

    mail($from,$subject2,$message2,$headers2); 

    echo "<p class='mail-sent'>Mail Sent. Thank you " . $name . ", we will contact you shortly.</p>";
    }
?>
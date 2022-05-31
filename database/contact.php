<?php
  require_once "config.php";
if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    $sql = "INSERT INTO contact_info (name,email,subject,message) VALUES ('$name', '$email', '$subject', '$message')";

    if ($link->query($sql) === TRUE) {
        // echo "Submitted successfully";
        echo header ("location: ../index.html");
    } 
    else{
  echo "Error: " . $sql . "<br>" . $link->error;
    }

    $link->close();

}
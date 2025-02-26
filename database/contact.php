<?php
  require_once "config.php";
if(isset($_POST['submit']))
{
    $name = validate_input($_POST['name']);
    $email = validate_input($_POST['email']);
    $subject = validate_input($_POST['subject']);
    $message = validate_input($_POST['message']);
    
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


function validate_input($inputValue){
  $data = trim($inputValue);
  $data = htmlspecialchars($data);
  $data = real_escape_string($data);
  return $data;
}
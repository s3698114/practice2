<?php
// Code taken from W3Schools example https://www.w3schools.com/php/php_form_url_email.asp


// define variables and set to empty values
$nameErr = $emailErr = $passwordErr = $dobErr = "";
$name = $email = $password = $dob = "";

// required
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
      $nameErr = "Name is required";
    } else {
      $name = test_input($_POST["name"]);
    }
    
    if (empty($_POST["email"])) {
      $emailErr = "Email is required";
    } else {
      $email = test_input($_POST["email"]);
    }
      
    if (empty($_POST["password"])) {
      $website = "";
    } else {
      $website = test_input($_POST["password"]);
    }
  
    if (empty($_POST["dob"])) {
      $comment = "";
    } else {
      $comment = test_input($_POST["dob"]);
    }
    session_start();
    echo "Welcome " . $_SESSION['name'];
  }

// Code taken from codexworld https://www.codexworld.com/how-to/validate-password-strength-in-php/
$password = 'user-input-pass';

// Validate password strength
$letters = preg_match('@[a-zA-Z]@', $password);
$number    = preg_match('@[0-9]@', $password);
$specialChars = preg_match('@[^\w]@', $password);

if(!$letters || !$number || !$specialChars || strlen($password) < 6) {
    echo 'Password must consist of at least six characters that are a combination of letters, numbers and symbols @, #, $, %, !';
}else{
    echo 'Strong password.';
}

?>
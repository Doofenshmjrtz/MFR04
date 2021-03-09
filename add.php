<?php
require 'configDB.php';

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$check = $_POST['check'];
if ($check == true) {
    if (empty($fname) or empty($lname) or empty($email)) {
        echo "<span class = 'form-error'>Fill in all fields!</span>";
    } else if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        echo "<span class = 'form-error'>Enter valid Email!</span>";
    } else {
        echo "<span class = 'form-success'>User has been added successfully!</span>";
        $sql = 'INSERT INTO users(name,last_name,email) VALUES(:name, :last_name, :email)';
        $query = $pdo->prepare($sql);
        $query->execute(['name' => $fname, 'last_name' => $lname, 'email' => $email]);


        //sendmail
        $message = "$fname $lname - email: $email";
        $to = "test@developers-alliance.com";
        $from = "test@developers-alliance.com";
        $subject = "message";
        $headers = "From: $from\r\n Reply-to: $from\r\n Content-type: text/plain; charset=utf-8\r\n";
        mail($to, $subject, $message, $headers);
    }
}

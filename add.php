<?php
require 'configDB.php';

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];


if (empty($name) || empty($lname) || empty($email)) {
    echo "<span class='form-error'>Fill in all fields!</span>";
    $errorEmpty = true;
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "<span class='form-error'>Wright a valid eMail adress!</span>";
    $errorEmail = true;
} else {

    $sql = 'INSERT INTO users(name,last_name,email) VALUES(:name,:last_name, :email)';
    $query = $pdo->prepare($sql);
    $query->execute(['name' => $fname, 'last_name' => $lname, 'email' => $email]);

    echo "<span class='form-success'>New user has been added!</span>";
}

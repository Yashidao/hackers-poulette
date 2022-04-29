<?php

require "index.php";
require "date.php";

$name = $_POST['name'];
$lastname = $_POST['lastname'];
$gender = $_POST['gender'];
$mail = $_POST['mail'];
$country = $_POST ['country'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$create_at = createAt();

if (isset($name, $lastname, $gender, $mail, $country, $subject, $message)) {
    $sql = 'INSERT INTO contactus (name, lastname, gender, mail, country, subject, message, create_at) VALUES(:name, :lastname, :gender, :mail, :country, :subject, :message, :create_at)';
    $stmt = $db->prepare($sql);
    $stmt->execute(
        [
            'name' => $name,
            'lastname' => $lastname,
            'gender' => $gender,
            'mail' => $mail,
            'country' => $country,
            'subject' => $subject,
            'message' => $message,
            'create_at' => $create_at
        ]
    );

    header('Location:Hackers_Poulette/index.php');

}

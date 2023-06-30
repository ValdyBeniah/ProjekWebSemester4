<?php

//data dari form
$username = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['comments'];

// 1.
$k = new PDO("mysql:host=localhost;dbname=web", "root", "");

// 2.
$sql = "INSERT INTO contact (nama, email, subject, message)
        VALUES (?, ?, ?, ?)";

// 3.
$result = $k->prepare($sql);
$result->execute([$username, $email, $subject, $message]);

echo "Terima kasih sudah menghubungi kami!";
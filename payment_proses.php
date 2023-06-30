<?php
session_start();
$idu = $_SESSION['user_id'];
include 'config.php';
$notes = $_POST['notes'];
$datafile = $_FILES['file'];
$totalpayment = $_SESSION['total_payment'];

$k = new PDO("mysql:host=localhost;dbname=web", "root", "");

$ext = explode(".", $datafile['name']);
$ext = end($ext);
$ext = strtolower($ext);
$ext_boleh = ['jpg','jpeg','png'];

if(in_array($ext, $ext_boleh)){
    $sumber = $datafile['tmp_name'];
    $tujuan = 'payments/' . $datafile['name'];
    move_uploaded_file($sumber, $tujuan);

    $sql = "INSERT INTO payment (payment_date, payment_receipt, notes, id_user, payment_total) VALUES (?, ?, ?, ?, ?)";
    $result = $k->prepare($sql);
    $tgl = date('Y-m-d');
    //$_SESSION['_payment_date'] = $tgl;
    $result->execute([$tgl, $tujuan, $notes ,$idu, $totalpayment]);
    $conn->query("UPDATE orderprint SET 
		status='verified'
		WHERE id_user ='$idu' AND status='unverified'");

    echo "<script type='text/javascript'>alert('Payment Proses Recorded!');</script>";
    echo "<script>location='index.php';</script>";
}else{
    echo "<script type='text/javascript'>alert('File Type Not Supported!');</script>";
    echo "<script>location='payment_form.php';</script>";
}
?>
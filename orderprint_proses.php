<?php
session_start();
$idu = $_SESSION['user_id'];
include 'config.php';
$ukuran = $_POST['ukuran'];
$jenis = $_POST['jenis'];
$qty = $_POST['qty'];
$datafile = $_FILES['file'];

$k = new PDO("mysql:host=localhost;dbname=web", "root", "");

$ext = explode(".", $datafile['name']);
$ext = end($ext);
$ext = strtolower($ext);
$ext_boleh = ['jpg','jpeg','png'];

if(in_array($ext, $ext_boleh)){
    $sumber = $datafile['tmp_name'];
    $tujuan = 'orders/' . $datafile['name'];
    move_uploaded_file($sumber, $tujuan);

    $sql = "INSERT INTO orderprint (ukuran, jenis, qty, datafile, id_user, orderdate, status) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $tgl = date('Y-m-d');
    $stat = "unverified";
    
    $result = $k->prepare($sql);
    $result->execute([$ukuran, $jenis, $qty, $tujuan, $idu, $tgl, $stat]);
    echo "<script type='text/javascript'>alert('Order Recorded!');</script>";
    echo "<script>location='order_confirmation.php';</script>";
    
}else{
    echo "<script type='text/javascript'>alert('File Type Not Supported!');</script>";
    echo "<script>location='orderprint_form.php';</script>";
}
?>
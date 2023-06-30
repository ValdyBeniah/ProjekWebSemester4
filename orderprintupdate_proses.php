<?php
session_start();
$idu = $_SESSION['user_id'];
$ido = $_SESSION['ido'];
include 'config.php';
$ukuran = $_POST['ukuran'];
$jenis = $_POST['jenis'];
$qty = $_POST['qty'];
$datafile = $_FILES['file'];

$ext = explode(".", $datafile['name']);
$ext = end($ext);
$ext = strtolower($ext);
$ext_boleh = ['jpg','jpeg','png'];

if(in_array($ext, $ext_boleh)){
    $sumber = $datafile['tmp_name'];
    $tujuan = 'orders/' . $datafile['name'];
    move_uploaded_file($sumber, $tujuan);

    $tgl = date('Y-m-d');
    //$stat = "unverified";
    $conn->query("UPDATE orderprint SET 
    ukuran='$_POST[ukuran]',
    jenis='$_POST[jenis]',
    qty='$_POST[qty]',
    datafile='$tujuan',
    orderdate='$tgl'
    WHERE
    id_order='$ido'");

    echo "<script type='text/javascript'>alert('Order Recorded!');</script>";
    echo "<script>location='order_confirmation.php';</script>";

}else{
    echo "<script type='text/javascript'>alert('File Type Not Supported!');</script>";
    echo "<script>location='orderprintupdate_form.php';</script>";
}
?>
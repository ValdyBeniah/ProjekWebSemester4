<?php
    include "config.php";

    if(isset($_GET['kode'])){
    mysqli_query($conn,"delete from payment where id_payment='$_GET[kode]'");
    mysqli_query($conn,"delete from orderprint where id_order='$_GET[kode]'");
    mysqli_query($conn,"delete from contact where id='$_GET[kode]'");

    echo "Data berhasil dihapus";
    header('location:admin.php');
    }
    ?>
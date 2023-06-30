<?php
include 'config.php';
$conn->query("DELETE FROM orderprint WHERE id_order='$_GET[id]'");

echo "<script type='text/javascript'>alert('Order Removed!');</script>";
echo "<script>location='order_confirmation.php';</script>";
?>

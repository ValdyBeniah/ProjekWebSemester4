<?php
session_start();
if(!isset($_SESSION['user_id'])){
   header('location:login_form.php');
}
?>

<?php
function rupiah($angka){
	$rupiah = "Rp " . number_format($angka,2,',','.');
	return $rupiah;
}
?>

<link rel="stylesheet" href="style1.css"/>

<center><h1>PAYMENT CONFIRMATION</h1></center>
<center><h2>of</h2></center>
<center><h2><?php $totalpayment = $_SESSION['total_payment']; echo rupiah($totalpayment); ?></h2></center>
<div class="form-container">
<form action="payment_proses.php"
      method="post"
      enctype="multipart/form-data"  >

Please Upload Your Proof of Payment:
<input type="file" name="file"/><br/>
Notes:
<input type="text" name="notes"/><br/><br/>
<button type="submit" class="form-btn">Continue</button>

</form>
</div>
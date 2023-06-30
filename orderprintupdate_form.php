<?php
include 'config.php';
session_start();
if(!isset($_SESSION['user_id'])){
   header('location:login_form.php');
}
$hasil=$conn->query("SELECT * FROM orderprint WHERE id_order ='$_GET[id]'");
$row = $hasil->fetch_assoc();
$_SESSION['ido'] = $_GET['id'];
?>

<link rel="stylesheet" href="style1.css"/>
<center><h1>FORM UPDATE PRINT ORDER</h1></center>
<div class="form-container">
<form action="orderprintupdate_proses.php"
      method="post"
      enctype="multipart/form-data"  >
    

Upload File:
<input type="file" name="file"/><br/>
Paper Size:
<select name="ukuran">
  <option value="A0">A0 (841 x 1189 mm)</option>
  <option value="A1">A1 (594 x 841 mm)</option>
  <option value="A2">A2 (420 x 594 mm)</option>
  <option value="A3">A3 (297 x 420 mm)</option>
  <option value="A4">A4 (210 x 297 mm)</option>
</select><br/>
Print Type:
<select name="jenis">
  <option value="poster">Poster</option>
  <option value="stiker">Stiker</option>
  <option value="normal_warna">Brochure</option>
  <option value="normal_htmpth">Normal (Berwarna)</option>
</select><br/>
Print Quantity:
<input type="number" name="qty"/><br/><br/>
<button type="submit" class="form-btn" value="<?php echo $row['qty']?>">Continue</button>

</form>
</div>
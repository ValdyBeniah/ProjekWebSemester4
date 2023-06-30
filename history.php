<?php
session_start();
include 'config.php';
$idu = $_SESSION['user_id'];
?>

<style>
table {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid;
}

th, td {
  padding: 8px;
  border: 1px solid;
  text-align: center;
}

.button {
  background-color: #04AA6D;
  color: black;
}

tr:nth-child(even) {background-color: #f2f2f2;}
</style>


<?php
function rupiah($angka){
	$rupiah = "Rp " . number_format($angka,2,',','.');
	return $rupiah;
}
?>
<link rel="stylesheet" href="style1.css">
<center><h1>HISTORY - PRINT ORDER</h2></center>
<div style="overflow-x: auto;">
<table>
    <thead>
        <tr>
            <th>Order ID</th>
            <th>File</th>
            <th>Paper Size</th>
            <th>Print Type</th>
            <th>Print Quantity</th>
            <th>Date Order Added</th>
            <th>Price</th>
            <th>Status</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php $hsl=$conn->query("SELECT * FROM orderprint WHERE id_user ='$idu' AND status='verified'  ORDER BY DATE(orderdate)");?>
        <?php $totalprice = 0; while($row = $hsl->fetch_assoc()){?>
        <tr>
            <td><?php echo $row['id_order']?></td>
            <td>
                <img src="<?= $row['datafile'] ?>" height =200 weight =100 />
            </td>
            <td><?php echo $row['ukuran']?></td>
            <td><?php echo $row['jenis']?></td>
            <td><?php $q = $row['qty'];echo $q?></td>
            <td><?php echo $row['orderdate']?></td>
            <td><?php
                    if($row['ukuran']=="A0"){$u = 20000;}
                    if($row['ukuran']=="A1"){$u = 10000;}
                    if($row['ukuran']=="A2"){$u = 5000;}
                    if($row['ukuran']=="A3"){$u = 3000;}
                    if($row['ukuran']=="A4"){$u = 1000;}
                    if($row['jenis']=="poster"){$j = 5;}
                    if($row['jenis']=="stiker"){$j = 4;}
                    if($row['jenis']=="normal_warna"){$j = 3;}
                    if($row['jenis']=="normal_htmpth"){$j = 2;}
                    $price = ($q * $u *$j);
                    echo rupiah($price);
                    $totalprice = ($totalprice + $price);
                ?>
            </td> 
            <td>Paid</td>
            <td>
                <button style="height:25px; width:50px;"><a class="class-btn" href="delete_history.php?id=<?php echo $row['id_order'];?>">Delete</a></button>
            </td>
        </tr>
        <?php }?>
    </tbody>
</table>
</div><br/>
<button style="height:25px; width:50px;"><a href="index.php" class="class-btn">HOME</a></button> <button style="height:25px; width:150px;"><a href="orderprint_form.php" class="class-btn">ADD MORE PRINT</a></button>
<center><h2>Total Price: <?php echo rupiah($totalprice); ?></h2></center>

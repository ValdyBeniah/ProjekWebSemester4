<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <div id="wrapper">

        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Printerin Admin</div>
            </a>

            <hr class="sidebar-divider my-0">

            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="logout.php" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Log Out</span>
                </a>

        </ul>

        <div id="content-wrapper" class="d-flex flex-column">

            <div id="content">

                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                </nav>

                <div class="container-fluid">

                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>

                    <div class="">

                    <h5>Transaksi</h5>
                    <table border="1">
                        <tr>
                            <th>No</th>
                            <th>Ukuran </th>
                            <th>Jenis </th>
                            <th>Jumlah</th>
                            <th>Gambar</th>
                            <th>ID User</th>
                            <th>Tanggal</th>
                            <th>Status</th>
                            <th colspan="2">Tindakan</th>
                        </tr>

                        <?php
                            include "config.php";

                            $no=1;
                            $ambildata = mysqli_query($conn,"select * from orderprint");
                            while($tampil = mysqli_fetch_array($ambildata)){
                                echo "
                                <tr>
                                    <td>$no</td>
                                    <td>$tampil[ukuran]</td>
                                    <td>$tampil[jenis]</td>
                                    <td>$tampil[qty]</td>
                                    <td>$tampil[datafile]</td>
                                    <td>$tampil[id_user]</td>
                                    <td>$tampil[orderdate]</td>
                                    <td>$tampil[status]</td>
                                    <td><a href='delete_admin.php?kode=$tampil[id_order]'> Hapus </a></td>
                                <tr>";
                                $no++;
                            }
                            ?>
                            </table><br>

                            <h5>Payment</h5>
                            <table border="1">
                        <tr>
                            <th>No</th>
                            <th>Payment Date </th>
                            <th>Payment Receipt </th>
                            <th>Notes</th>
                            <th>ID User</th>
                            <th>Payment Total</th>
                            <th colspan="2">Tindakan</th>
                        </tr>

                        <?php
                            include "config.php";

                            $no=1;
                            $ambildata = mysqli_query($conn,"select * from payment");
                            while($tampil = mysqli_fetch_array($ambildata)){
                                echo "
                                <tr>
                                    <td>$no</td>
                                    <td>$tampil[payment_date]</td>
                                    <td>$tampil[payment_receipt]</td>
                                    <td>$tampil[notes]</td>
                                    <td>$tampil[id_user]</td>
                                    <td>$tampil[payment_total]</td>
                                    <td><a href='delete_admin.php?kode=$tampil[id_payment]'> Hapus </a></td>
                                <tr>";
                                $no++;
                            }
                            ?>
                            </table><br>

                            <h5>Contact</h5>
                            <table border="1">
                        <tr>
                            <th>No</th>
                            <th>Nama </th>
                            <th>Email </th>
                            <th>Subject </th>
                            <th>Message</th>
                            <th colspan="2">Tindakan</th>
                        </tr>

                        <?php
                            include "config.php";

                            $no=1;
                            $ambildata = mysqli_query($conn,"select * from contact");
                            while($tampil = mysqli_fetch_array($ambildata)){
                                echo "
                                <tr>
                                    <td>$no</td>
                                    <td>$tampil[nama]</td>
                                    <td>$tampil[email]</td>
                                    <td>$tampil[subject]</td>
                                    <td>$tampil[message]</td>
                                    <td><a href='delete_admin.php?kode=$tampil[id]'> Hapus </a></td>
                                <tr>";
                                $no++;
                            }
                            ?>
                            </table>
                    
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/sb-admin-2.min.js"></script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
<?php
include "include/connection.php";


session_start();

?>
<?php
if (!isset($_SESSION["username"])) {
?>
    <script type="text/javascript">
        window.location = "login.php";
    </script>
<?php
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="Smarthr - Bootstrap Admin Template">
    <meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
    <meta name="author" content="Dreamguys - Bootstrap Admin Template">
    <meta name="robots" content="noindex, nofollow">
    <title>Salary - HRMS admin template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">

    <!-- Lineawesome CSS -->
    <link rel="stylesheet" href="assets/css/line-awesome.min.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="css/style5.css">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
</head>

<body>
    <!-- Main Wrapper -->
    <div class="main-wrapper">

        <!-- Header -->


        <!-- /Sidebar -->

        <!-- Page Wrapper -->
        <div class="page-wrapper">

            <!-- Page Content -->
            <div class="content container-fluid">




                <!-- Page Header -->
                <div class="page-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="page-title">Payslip</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                                <li class="breadcrumb-item active">Payslip</li>
                            </ul>
                        </div>
                        <div class="col-auto float-right ml-auto">
                            <div class="btn-group btn-group-sm">

                                <button class="btn btn-white" onclick="func();"><i class="fa fa-print fa-lg"></i> Print</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Page Header -->

                <div class="row">
                    <?php


                    include "include/connection.php";

                    include "header.php";
                    include "top-left-menu.php";



                    $id = $_GET["id"];


                    ?>

                    <?php
                    $res = mysqli_query($link, "select * from salay where id=$id");
                    while ($row = mysqli_fetch_array($res)) {


                    ?>


                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="payslip-title">Payslip for the month <?php echo $row["month"] ?></h4>
                                    <div class="row">
                                        <div class="col-sm-6 m-b-20">
                                            <img src="sa.png" class="inv-logo" alt="">
                                            <ul class="list-unstyled mb-0">
                                                <li>G Plus </li>
                                                <li>Guwahati's formost media outlet</li>
                                                <li>Ulubari,Ghy</li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-6 m-b-20">
                                            <div class="invoice-details">
                                                <h3 class="text-uppercase">Payslip #<?php echo $id ?></h3>
                                                <ul class="list-unstyled">
                                                    <li>Salary Month:<span> <?php echo $row["month"] ?> </span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 m-b-20">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <h5 class="mb-0"><strong><?php echo $row["name"] ?></strong></h5>
                                                </li>
                                                <li><span><?php echo $row["role"] ?></span></li>
                                                <li>Employee ID:<?php echo $row["Em_id"] ?></li>
                                                <li>Joining Date:<?php echo $row["joining_date"] ?></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div>
                                                <h4 class="m-b-10"><strong>Earnings</strong></h4>
                                                <table class="table table-bordered">
                                                    <tbody>
                                                        <tr>
                                                            <td><strong>Basic Salary</strong> <span class="float-right"><?php echo $row["salary"] ?></span></td>
                                                        </tr>
                                                        <tr>
                                                            <td><strong>House Rent Allowance (H.R.A.)</strong> <span class="float-right">0</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td><strong>Conveyance</strong> <span class="float-right">0</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td><strong>Other Allowance</strong> <span class="float-right">0</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td><strong>Total Earnings</strong> <span class="float-right"><strong><?php echo $row["salary"] ?></strong></span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <!--                <div class="col-sm-6">
                                        <div>
                                            <h4 class="m-b-10"><strong>Deductions</strong></h4>
                                            <table class="table table-bordered">
                                                <tbody>
                                                    <tr>
                                                        <td><strong>Tax Deducted at Source (T.D.S.)</strong> <span class="float-right">$0</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Provident Fund</strong> <span class="float-right">$0</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>ESI</strong> <span class="float-right">$0</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Loan</strong> <span class="float-right">$300</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Total Deductions</strong> <span class="float-right"><strong>$59698</strong></span></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>-->
                                        <div class="col-sm-12">
                                            <p><strong>Net Salary:<?php echo $row["salary"] ?></strong></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    }


                    ?>
                </div>
            </div>
            <!-- /Page Content -->

        </div>
        <!-- /Page Wrapper -->

    </div>
    <!-- /Main Wrapper -->
    <script>
        function func() {
            window.print();
        }
    </script>


    <!-- jQuery -->
    <script src="assets/js/jquery-3.2.1.min.js"></script>

    <!-- Bootstrap Core JS -->
    <script src="assets/js/popper.min.js"></script>
    <script src="css/bootstrap.min.js"></script>

    <!-- Slimscroll JS -->
    <script src="assets/js/jquery.slimscroll.min.js"></script>

    <!-- Custom JS -->
    <script src="assets/js/app.js"></script>

</body>

</html>
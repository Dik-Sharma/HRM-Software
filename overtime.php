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

    <!-- Datatable CSS -->
    <link rel="stylesheet" href="assets/css/dataTables.bootstrap4.min.css">

    <!-- Select2 CSS -->
    <link rel="stylesheet" href="assets/css/select2.min.css">

    <!-- Datetimepicker CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">

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
        <?php


        include "header2.php";
        ?>
        <!-- /Sidebar -->

        <!-- Page Wrapper -->
        <div class="page-wrapper">

            <!-- Page Content -->
            <div class="content container-fluid">

                <!-- Page Header -->
                <div class="page-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="page-title">Overtime</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                                <li class="breadcrumb-item active">Overtime</li>
                            </ul>
                        </div>
                        <div class="col-auto float-right ml-auto">
                            <a href="add_overtime.php" class="btn add-btn" data-toggle="modal" data-target="#add_salary"><i class="fa fa-plus"></i>Add Overtime</a>
                        </div>
                    </div>
                </div>
                <!-- /Page Header -->



                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-striped custom-table datatable">
                                <thead>
                                    <tr>
                                        <th>Employee Name</th>
                                        <th>Employee ID</th>
                                        <th>OT Date</th>
                                        <th>OT Hours</th>
                                        <th>OT Types</th>
                                        <th>Discription</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $res = mysqli_query($link, "select * from overtime order by id asc");
                                    while ($row = mysqli_fetch_array($res)) {


                                    ?>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">

                                                    <a href="#"><?php echo $row['name'] ?> <span><?php echo $row['role'] ?></span></a>
                                                </h2>
                                            </td>
                                            <td><?php echo $row['Em_id'] ?></td>
                                            <td><?php echo $row['OT_date'] ?></td>
                                            <td><?php echo $row['OT_hours'] ?></td>
                                            <td><?php echo $row['OT_type'] ?>
                                            </td>
                                            <td><?php echo $row['description'] ?></td>

                                            <td><a href="delete_overtime.php?id=<?php echo $row["id"]; ?>" onclick="return confirm('Are you sure?')"><i class="fa fa-trash-o m-r-5"></i> Delete</a></td>
                        </div>
                        </td>
                        </tr>


                    <?php


                                    }


                    ?>








                    </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- /Delete Salary Modal -->

    </div>
    <!-- /Page Wrapper -->

    </div>
    <!-- /Main Wrapper -->

    <!-- jQuery -->
    <script src="assets/js/jquery-3.2.1.min.js"></script>

    <!-- Bootstrap Core JS -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Slimscroll JS -->
    <script src="assets/js/jquery.slimscroll.min.js"></script>

    <!-- Select2 JS -->
    <script src="assets/js/select2.min.js"></script>

    <!-- Datetimepicker JS -->
    <script src="assets/js/moment.min.js"></script>
    <script src="assets/js/bootstrap-datetimepicker.min.js"></script>

    <!-- Datatable JS -->
    <script src="assets/js/jquery.dataTables.min.js"></script>
    <script src="assets/js/dataTables.bootstrap4.min.js"></script>

    <!-- Custom JS -->
    <script src="assets/js/app.js"></script>

</body>

</html>
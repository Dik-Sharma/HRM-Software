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
    <title>Projects - HRMS </title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">

    <!-- Lineawesome CSS -->
    <link rel="stylesheet" href="assets/css/line-awesome.min.css">

    <!-- Select2 CSS -->
    <link rel="stylesheet" href="assets/css/select2.min.css">

    <!-- Datetimepicker CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">

    <!-- Summernote CSS -->
    <link rel="stylesheet" href="assets/plugins/summernote/dist/summernote-bs4.css">

    <!-- Main CSS -->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
</head>
<?php
include "header2.php";
include "top-left-menu.php";
?>

<body>
    <!-- Main Wrapper -->
    <div class="main-wrapper" style="margin-top:100px;margin-left:260px;">

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
                            <h3 class="page-title">Projects</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="employees.php">Dashboard</a></li>
                                <li class="breadcrumb-item active">Projects</li>
                            </ul>
                        </div>
                        <div class="col-auto float-right ml-auto">
                            <a href="add_projects.php" class="btn add-btn" "><i class=" fa fa-plus"></i> Create Project</a>

                        </div>
                    </div>
                </div>
                <!-- /Page Header -->

                <!-- Search Filter -->

                <!-- Search Filter -->
                <!--
     
                    </div>
-->

                <?php
                $res = mysqli_query($link, "select * from projects order by id asc");
                while ($row = mysqli_fetch_array($res)) {


                ?>

                    <div class="col-lg-4 col-sm-12 col-md-4 col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="dropdown dropdown-action profile-action">
                                    <a href="#" style="font-size:48px;font-weight:500 text-declaration:none; color:inherit;"><i class="material-icons"><?php echo $row['id'] ?></i></a>
                                    <div>
                                        <a class="dropdown-item" href="edit_proj.php?id=<?php echo $row["id"]; ?>" data-toggle="modal" data-target="#edit_project"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="delete_proj.php?id=<?php echo $row["id"]; ?>" data-toggle="modal" data-target="#delete_project" onclick="return confirm('Are you sure?')"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                    </div>
                                </div>
                                <h4 class="project-title"><a href="#" style="font-size: 48px;font-weight:500;text-declaration:none; color: inherit;"><?php echo $row['title'] ?></a></h4>
                                <small class="block text-ellipsis m-b-15">
                                    <span class="text-xs"><?php echo $row['tasks_open'] ?></span> <span class="text-muted">open tasks, </span>
                                    <span class="text-xs"><?php echo $row['task_complete'] ?></span> <span class="text-muted">tasks completed</span>
                                </small>
                                <p class="text-muted"><?php echo $row['descriptin'] ?>
                                </p>
                                <div class="pro-deadline m-b-15">
                                    <div class="sub-title">
                                        Deadline:
                                    </div>
                                    <div class="text-muted">
                                        <?php echo $row['deadline'] ?>
                                    </div>
                                </div>
                                <div class="project-members m-b-15">
                                    <div>Project Leader :</div>
                                    <ul class="team-members">
                                        <li>
                                            <?php echo $row['leader'] ?>
                                        </li>
                                    </ul>
                                </div>
                                <div class="project-members m-b-15">
                                    <div>Team :</div>
                                    <ul class="team-members">
                                        <li>
                                            <?php echo $row['member1'] ?>
                                        </li>
                                        <li>
                                            <?php echo $row['member2'] ?>
                                        </li>
                                        <li>
                                            <?php echo $row['member3'] ?>
                                        </li>
                                        <li>
                                            <?php echo $row['member4'] ?>
                                        </li>
                                        <li>
                                            <?php echo $row['member5'] ?>
                                        </li>
                                        <li>
                                            <?php echo $row['member6'] ?>
                                        </li>
                                        <li>
                                            <?php echo $row['member7'] ?>
                                        </li>
                                        <li>
                                            <?php echo $row['member8'] ?>
                                        </li>
                                        <li>
                                            <?php echo $row['member9'] ?>
                                        </li>
                                        <li>
                                            <?php echo $row['member10'] ?>
                                        </li>
                                    </ul>
                                </div>
                                <p class="m-b-5">Progress <span class="text-success float-right"><?php echo $row['progress'] ?></span></p>
                                <div class="progress progress-xs mb-0">
                                    <div class="progress-bar bg-success" role="progressbar" data-toggle="tooltip" title="<?php echo $row['progress'] ?>;" style="width:<?php echo $row['progress'] ?>;"></div>
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


    <script src="css/bootstrap.min.js"></script>

    <!-- Slimscroll JS -->


    <!-- Select2 JS -->
    <!-- Datetimepicker JS -->

    <!-- Summernote JS -->

</body>

</html>
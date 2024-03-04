<link rel="stylesheet" href="css/bootstrap.min.css">


<link rel="stylesheet" href="css/style.css">

<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>






<?php

include "include/connection.php";



$res = mysqli_query($link, "select * from admin ");
$row = mysqli_fetch_array($res);

?>

<div class="header">
    <div class="wrapper">
        <!-- Logo -->

        <div class="header-left">
            <a href="employees.php" class="logo">
                <img src="download.png" width="100" height="60" alt="">
            </a>
        </div>
        <!-- /Logo -->



        <!-- Header Title -->
        <div class="page-title-box">
            <h3> Welcome</h3>
        </div>
        <!-- /Header Title -->



        <!-- Header Menu -->

        <!-- /Header Menu -->


    </div>
    <!-- /Mobile Menu -->

</div>
<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title">
                    <span>Main</span>
                </li>
                <li class="submenu">
                    <a href="#"><i class="la la-dashboard"></i> <span> Dashboard</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="index.php">Admin Dashboard</a></li>
                        <li><a href="employee-dashboard.php">Employee Dashboard</a></li>
                    </ul>
                </li>

                <li class="menu-title">
                    <span>Employees</span>
                </li>
                <li class="submenu">

                    <ul style="display:block;">
                        <li><a href="employees.php">All Employees</a></li>
                        <li><a href="add_empl.php">Add Employees</a></li>
                        <li><a href="leaves.php">Leaves</a></li>
                        <li><a href="add_leaves.php">Add Employee Leave</a></li>
                        <li><a href="leads.php">Leads</a></li>
                        <li><a href="projects.php">Projects</a></li>


                        <li><a href="salary_payrool.php">Salary</a></li>
                        <!--   <li><a href="overtime.php">Overtime</a></li>
-->
                    </ul>
                </li>


            </ul>
            </li>
















            <li>
                <a href="logout.php"><i class="la la-power-off"></i> <span>Logout</span></a>
            </li>

            </ul>
        </div>
    </div>
</div>
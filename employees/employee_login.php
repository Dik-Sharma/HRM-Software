<?php
include "header_emp.php";
include "../include/connection.php";

session_start();
include "top-left-menu-emp.php";
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

<?php
if (isset($_SESSION["username"])) {
    $res = mysqli_query($link, "select * from employee where username='$_SESSION[username]'") or die(mysqli_error($link));
    $count = mysqli_num_rows($res);
    $row = mysqli_fetch_array($res);
    if ($row['lead'] == 'yes' || $row['lead'] == 'Yes' || $row['lead'] == 'YES' || $row['lead'] == 'YEs') {
?>
        <script type="text/javascript">
            window.location = "Lead_login.php";
        </script>
<?php
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="../css/style3.css">
</head>

<body>
    <div class="wrapper">
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Leave Details </h1>
                    </div>
                </div>
            </div>

        </div>

        <div class="content mt-3">
            <div class="animated fadeIn" style="margin-left: 180px; margin-top:40px">




                <div class="row" style="margin-right: 0px;">
                    <div class=" col-lg-12">
                        <div class="card">

                            <div class="card-body">
                                <table class="table table-striped custom-table datatable" style="width: 95%;">
                                    <tr>

                                        <th>Name</th>
                                        <th>Department</th>
                                        <th>Start Leave</th>
                                        <th>End Leave</th>
                                        <th>Reason</th>
                                        <th>No of days</th>
                                        <th>Action</th>
                                    </tr>

                                    <?php
                                    $res = mysqli_query($link, "select name,depatment,start_leave,end_leave,reason,noofdays,Action from leaves where username='$_SESSION[username]' ");
                                    while ($row = mysqli_fetch_array($res)) {
                                        echo "<tr>";
                                        echo "<td>";
                                        echo $row["name"];
                                        echo "</td>";

                                        echo "<td>";

                                        echo $row["depatment"];

                                        echo "</td>";

                                        echo "<td>";

                                        echo $row["start_leave"];

                                        echo "</td>";


                                        echo "<td>";

                                        echo $row["end_leave"];

                                        echo "</td>";


                                        echo "<td>";

                                        echo $row["reason"];

                                        echo "</td>";

                                        echo "<td>";

                                        echo $row["noofdays"];

                                        echo "<td>";
                                        echo $row["Action"];
                                        echo "</td>";

                                        echo "</tr>";
                                    }


                                    ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

        </div>
    </div>

</body>

</html>
<script></script>
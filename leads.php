<?php
include "header.php";
include "include/connection.php";


session_start();
include "top-left-menu.php";
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


$res = mysqli_query($link, "select * from employee");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/style3.css">
</head>

<body>
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Employee Details </h1>
                </div>
            </div>
        </div>

    </div>

    <div class="content mt-3">
        <div class="animated fadeIn">




            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <h1 style="font-size:large;"> Leads </h1>
                        <div class="card-body">
                            <table class="table table-striped custom-table datatable" style="width: 95%;">
                                <tr>
                                    <th>ID_No</th>
                                    <th>Name</th>
                                    <th>Department</th>
                                    <th>Designation</th>


                                </tr>


                                <?php
                                $res = mysqli_query($link, "select id,name,depatment,designation from employee where lead='YES' || lead = 'Yes' || lead='yes' order by id asc");
                                while ($row = mysqli_fetch_array($res)) {
                                    echo "<tr>";
                                    echo "<td>";
                                    echo $row["id"];
                                    echo "</td>";
                                    echo "<td>";
                                    echo $row["name"];
                                    echo "</td>";

                                    echo "<td>";

                                    echo $row["depatment"];

                                    echo "</td>";
                                    echo "<td>";

                                    echo $row["designation"];

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

</body>

</html>
<script></script>
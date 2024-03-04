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

                        <div class="card-body">
                            <div class="dropdown" style="margin-top: 4%;margin-left:90%; padding:1%;">
                                <button class="btn btn-primary">Filter </button>
                                <div class="dropdown-content" style="left:-50;">
                                    <a href="employees.php">Id</a>
                                    <a href="emp_filter1.php">Department</a>
                                    <a href="emp_filter2.php">Designation</a>
                                    <a href="emp_filter3.php">Lead</a>
                                </div>
                            </div>

                            <table class="table table-striped custom-table datatable" style="width: 95%;">
                                <tr>
                                    <th>ID_No</th>
                                    <th>Name</th>
                                    <th>Em_id</th>
                                    <th>Joining date</th>
                                    <th>department</th>
                                    <th>Designation</th>
                                    <th>Lead</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>


                                <?php
                                $res = mysqli_query($link, "select * from employee order by id asc");

                                while ($row = mysqli_fetch_array($res)) {
                                    echo "<tr>";
                                    echo "<td>";
                                    echo $row["id"];
                                    echo "</td>";
                                    echo "<td>";
                                    echo $row["name"];
                                    echo "</td>";
                                    echo "<td>";
                                    echo $row["Em_id"];
                                    echo "</td>";
                                    echo "<td>";

                                    echo $row["joining_date"];

                                    echo "</td>";
                                    echo "<td>";

                                    echo $row["depatment"];

                                    echo "</td>";
                                    echo "<td>";

                                    echo $row["designation"];
                                    echo "</td>";
                                    echo "<td>";
                                    echo $row["lead"];






                                    echo "</td>";

                                    echo "<td>";

                                ?>
                                    <a href="edit_empl.php?id=<?php echo $row["id"]; ?>">Edit</a>
                                    <?php

                                    echo "</td>";

                                    echo "<td>";

                                    ?>
                                    <a href="delete_empl.php?id=<?php echo $row["id"]; ?>" onclick="return confirm('Are you sure?')">Delete</a>

                                <?php

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
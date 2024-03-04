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




            <div class="row" style="margin-top: 5%;">
                <div class="col-lg-12">
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
                                    <th>Status</th>
                                    <th>Approve</th>
                                    <th>Reject</th>
                                    <th>Delete</th>


                                </tr>


                                <?php
                                $res = mysqli_query($link, "select * from leaves ");
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

                                    echo "</td>";


                                    echo "<td>";

                                    echo $row["Action"];

                                    echo "</td>";
                                    echo "<td>";
                                ?>
                                    <a href="update_leave.php?id=<?php echo $row["id"]; ?>"><button type=" submit" name="submit1" class="btn btn-success loginbtn">Approve</button></a>
                                    <?php
                                    echo "</td>";

                                    echo "<td>";
                                    ?>
                                    <a href="update_leave2.php?id=<?php echo $row["id"]; ?>"><button type=" submit" name="submit1" class="btn btn-success loginbtn" style="color: #fff; background-color:Maroon;
    border-color: WHITE;">Reject</button></a>
                                    <?php
                                    echo "</td>";




                                    echo "<td>";

                                    ?>
                                    <a href="delete_leave.php?id=<?php echo $row["id"]; ?>" onclick="return confirm('Are you sure?')">Delete</a>

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

<?php

if (isset($_POST["submit1"])) {


    mysqli_query($link, mysqli_query($link, "UPDATE projects SET title='$_POST[title]',tasks_open='$_POST[taskopen]',task_complete='$_POST[taskcomplete]',descriptin='$_POST[description]',deadline='$_POST[deadline]',leader='$_POST[leader]',member1='$_POST[member1]',member2='$_POST[member2]',member3='$_POST[member3]',member4='$_POST[member4]',member5='$_POST[member5]',member6='$_POST[member6]',member7='$_POST[member7]',member8='$_POST[member8]',member9='$_POST[member9]',member10='$_POST[member10]',progress='$_POST[progress]' WHERE id=$id")) or die(mysqli_error($link));
}
?>
<script type="text/javascript">
    alert {
        "Leave Approved"
    };
    window.location.href = window.location.href;
</script>
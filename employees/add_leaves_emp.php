<?php
include "../include/connection.php";
include "header_emp.php";
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
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="css/style4.css">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <div class="content mt-3">
        <div class="animated fadeIn">


            <div class="row" style="margin-right: 0px;">
                <div class="col-lg-12">
                    <div class="card">

                        <div class="card-body">

                            <form name="form1" action="" method="POST" enctype="multipart/form-data" style="margin-left: 200px;">
                                <div class="card-body">

                                    <div class="col-lg-12" style="margin-top: 16px;">
                                        <div class="card">
                                            <div class="form-group">

                                                <div class="card-body card-block">

                                                    <div class="form-group"><label for="company" class=" form-control-label">department</label>
                                                        <input type="text" name="depatment" required placeholder="department" class="form-control" oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);">

                                                        <div class="form-group"><label for="company" class=" form-control-label"> Start of leave</label>
                                                            <input type="date" name="startleave" required placeholder="Date" class="form-control">
                                                            <div class="form-group"><label for="company" class=" form-control-label"> End of Leave</label>
                                                                <input type="date" name="endleave" required placeholder="Date" class="form-control">
                                                                <div class="form-group"><label for="company" class=" form-control-label"> Reason</label>
                                                                    <input type="text" name="reason" placeholder="Reason" class="form-control" oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);">

                                                                    <input type="submit" name="submit1" value="Add details" class="btn btn-success">

                                                                </div>

                                                            </div>
                                                        </div>

                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>




</body>

</html>
<?php
if (isset($_POST["submit1"])) {
    $Requested = 'REQUESTED';
    $username = $_SESSION["username"];
    $res = mysqli_query($link, "select name from employee where username='$username'");
    $row = mysqli_fetch_array($res);
    $name = $row['name'];
    // input start and end date
    $start = new DateTime($_POST['startleave']);
    $end = new DateTime($_POST['endleave']);
    $days = $start->diff($end, true)->days;

    $sundays = intval($days / 7) + ($start->format('N') + $days % 7 >= 7);
    $saturdays = intval($days / 6) + ($start->format('N') + $days % 6 >= 6);
    $weekends = $sundays + $saturdays + 1;


    $start = strtotime($_POST['startleave']);
    $end = strtotime($_POST['endleave']);
    $days_between = ceil(abs($end - $start) / 86400);
    $days_between = 1 + $days_between - $weekends;
    mysqli_query($link, "insert into leaves values(NULL,'$name','$_POST[depatment]','$_POST[startleave]','$_POST[endleave]','$_POST[reason]','$days_between','$Requested','$username')") or die(mysqli_error($link));
}
?>
<script type="text/javascript">
    alert {
        "question added successfully"
    };
    window.location = 'employee_login.php';
</script>
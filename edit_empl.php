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

$id = $_GET["id"];
$name = '';
$Em_id = '';
$joiningdate = '';
$depatment = '';
$designation = '';
$lead = '';
$username = '';
$password = '';
$email = '';
$res = mysqli_query($link, "select * from employee where id=$id");
while ($row = mysqli_fetch_array($res)) {
    $name = $row["name"];
    $Em_id = $row["Em_id"];
    $joiningdate = $row["joining_date"];
    $depatment = $row["depatment"];
    $designation = $row["designation"];
    $lead = $row["lead"];
    $username = $row["username"];
    $password = $row["password"];
    $email = $row["email"];
}
?>
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">

            </div>
        </div>
    </div>

</div>

<div class="content mt-3">
    <div class="animated fadeIn">


        <div class="row" style="margin-left: 16%; margin-top: 5%;">
            <div class="col-lg-12">
                <div class="card">
                    <form name="form1" action="" method="POST" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="col-lg-12" ">
                                <div class=" card">
                                <div class="form-group">
                                    <div class="card-header"><strong>Update New Questions with text</strong></div>
                                    <div class="card-body card-block">
                                        <div class="form-group"><label for="company" class=" form-control-label"> Update Name</label>
                                            <input type="text" name="name" class="form-control" value="<?php echo $name ?>" oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);">
                                        </div>
                                        <div class="form-group"><label for="company" class=" form-control-label"> Update Em_id</label>
                                            <input type="number" name="Em_id" class="form-control" value="<?php echo $Em_id ?>">
                                        </div>
                                        <div class="form-group"><label for="company" class=" form-control-label"> Update joining Date</label>
                                            <input type="date" name="joiningdate" class="form-control" value="<?php echo $joiningdate ?>">
                                            <div class="form-group"><label for="company" class=" form-control-label"> Update Department</label>
                                                <input type="text" name="depatment" class="form-control" value="<?php echo $depatment ?>" oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);">
                                                <div class="form-group"><label for="company" class=" form-control-label">Update Designation </label>
                                                    <input type="text" name="designation" class="form-control" value="<?php echo $designation ?>" oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);">
                                                    <div class="form-group"><label for="company" class=" form-control-label"> Update Lead</label>
                                                        <input type="text" name="lead" class="form-control" value="<?php echo $lead ?>" oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);">
                                                        <div class="form-group"><label for="company" class=" form-control-label"> Update Username</label>
                                                            <input type="text" name="username" class="form-control" value="<?php echo $username ?>" oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);">
                                                            <div class="form-group"><label for="company" class=" form-control-label"> Update Password</label>
                                                                <input type="password" name="password" class="form-control" value="<?php echo $password ?>">
                                                                <div class="form-group"><label for="company" class=" form-control-label"> Update Email</label>
                                                                    <input type="email" name="email" class="form-control" value="<?php echo $email ?>" oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);">




                                                                    <input type="submit" name="submit1" value="Update Details" class="btn btn-success">

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
                    <!--/.col-->
                </div>
            </div>
        </div>
    </div>

    <?php
    if (isset($_POST["submit1"])) {
        mysqli_query($link, "UPDATE employee SET name='$_POST[name]',Em_id='$_POST[Em_id]',joining_date='$_POST[joiningdate]',depatment='$_POST[depatment]',designation='$_POST[designation]',lead='$_POST[lead]' WHERE id=$id");
    ?>
        <script type="text/javascript">
            window.location = "employees.php";
        </script>
    <?php
    }

    ?>
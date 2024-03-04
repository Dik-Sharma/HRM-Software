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
$email = '';
$joiningdate = '';
$role = '';
$salary = '';
$action = '';
$month = '';

$res = mysqli_query($link, "select * from salay where id=$id");
while ($row = mysqli_fetch_array($res)) {
    $name = $row['name'];
    $Em_id = $row['Em_id'];
    $email = $row['email'];
    $joiningdate = $row['joining_date'];
    $role = $row['role'];
    $salary = $row['salary'];
    $action = $row['action'];
    $month = $row['month'];
}
?>
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Update Salary Details</h1>
            </div>
        </div>
    </div>

</div>

<div class="content mt-3">
    <div class="animated fadeIn">


        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <form name="form1" action="" method="POST" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="col-lg-12" style="margin-top: 16px;">
                                <div class="card">
                                    <div class="form-group">
                                        <div class="card-header"><strong>Update Salary</strong></div>
                                        <div class="card-body card-block">
                                            <div class="form-group"><label for="company" class=" form-control-label"> Update Name</label>
                                                <input type="text" name="name" class="form-control" value="<?php echo $name ?>" oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);">
                                            </div>
                                            <div class="form-group"><label for="company" class=" form-control-label"> Update Emp_id</label>
                                                <input type="number" name="em_id" class="form-control" value="<?php echo $Em_id ?>">
                                                <div class="form-group"><label for="company" class=" form-control-label"> Update Email</label>
                                                    <input type="email" name="email" class="form-control" value="<?php echo $email ?>" oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);">
                                                    <div class="form-group"><label for="company" class=" form-control-label">Update joining date </label>
                                                        <input type="date" name="joiningdate" class="form-control" value="<?php echo $joiningdate ?>">

                                                        <div class="form-group"><label for="company" class=" form-control-label"> Update Role</label>
                                                            <input type="text" name="role" class="form-control" value="<?php echo $role ?>" oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);">

                                                            <div class="form-group"><label for="company" class=" form-control-label"> Update Salary</label>
                                                                <input type="number" name="salary" class="form-control" value="<?php echo $salary ?>">
                                                                <div class="form-group"><label for="company" class=" form-control-label"> Update Action</label>
                                                                    <input type="text" name="action" class="form-control" value="<?php echo $action ?>" oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);">

                                                                    <div class="form-group"><label for="company" class=" form-control-label">Update Month </label>
                                                                        <input type="date" name="month" class="form-control" value="<?php echo $month ?>">


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
</div>

<?php
if (isset($_POST["submit1"])) {
    mysqli_query($link, "UPDATE salay SET name='$_POST[name]',Em_id='$_POST[em_id]',email='$_POST[email]',joining_date='$_POST[joiningdate]',role='$_POST[role]',salary='$_POST[salary]',action='$_POST[action]',month='$_POST[month]' WHERE id=$id");
?>
    <script type="text/javascript">
        window.location = "salary_payrool.php";
    </script>
<?php
}

?>
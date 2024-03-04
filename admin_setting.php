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
$username = '';
$password = '';


$res = mysqli_query($link, "select * from admin where id=$id");
while ($row = mysqli_fetch_array($res)) {
    $username = $row['username'];
    $password = $row['password'];
}
?>
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Update Admin Details</h1>
            </div>
        </div>
    </div>

</div>

<div class="content mt-3">
    <div class="animated fadeIn">


        <div class="row">
            <div class=" col-lg-12">
                <div class="card">
                    <form name="form1" action="" method="POST" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class=" col-lg-12" style="margin-top: 46px;">
                                <div class="card">
                                    <div class="form-group">
                                        <div class="card-header"><strong>Update Admin details</strong></div>
                                        <div class="card-body card-block">
                                            <div class="form-group"><label for="company" class=" form-control-label"> Update Name</label>
                                                <input type="text" name="username" class="form-control" value="<?php echo $username ?>" oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);">
                                            </div>
                                            <div class="form-group"><label for="company" class=" form-control-label"> Update Password</label>
                                                <input type="password" name="password" class="form-control" value="<?php echo $password ?>">



                                                <input type="submit" name="submit1" value="Update Details" class="btn btn-success" onclick="return confirm('Are you sure?')">

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

<?php
if (isset($_POST["submit1"])) {
    mysqli_query($link, "UPDATE admin SET username='$_POST[username]',password='$_POST[password]' WHERE id=$id");
?>
    <script type="text/javascript">
        window.location = "index.php";
    </script>
<?php
}

?>
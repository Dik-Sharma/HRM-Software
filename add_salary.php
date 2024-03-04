<?php
include "include/connection.php";
include "header.php";
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


            <div class="row">
                <div class="col-lg-12">
                    <div class="card">

                        <div class="card-body">

                            <form name="form1" action="" method="POST" enctype="multipart/form-data">
                                <div class="card-body">

                                    <div class="col-lg-12" style="margin-top: 16px;">
                                        <div class="card">
                                            <div class="form-group">
                                                <div class="card-header"><strong>Add Salary details</strong></div>
                                                <div class="card-body card-block">
                                                    <div class="form-group"><label for="company" class=" form-control-label"> Name</label>
                                                        <input type="text" name="name" required placeholder="name" class="form-control" oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);">
                                                    </div>
                                                    <div class="form-group"><label for="company" class=" form-control-label"> Emp_id</label>
                                                        <input type="number" name="em_id" required placeholder="1000" class="form-control">
                                                        <div class="form-group"><label for="company" class=" form-control-label"> Email</label>
                                                            <input type="email" name="email" placeholder="Email" class="form-control" oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);">
                                                            <div class="form-group">
                                                                <div><label for="company" class=" form-control-label"> Joining date</label>
                                                                    <input type="date" name="joiningdate" required placeholder="DATE" class="form-control">
                                                                    <div><label for="company" class=" form-control-label"> Role</label>
                                                                        <input type="text" name="role" placeholder="Role/Designation" required class="form-control" oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);">
                                                                        <div><label for="company" class=" form-control-label">Salary DA and HRA added </label>
                                                                            <input type="number" name="salary" required placeholder="10000" class="form-control">
                                                                            <div><label for="company" class=" form-control-label"> Action</label>
                                                                                <input type="text" name="action" required placeholder="Given or cancelled or pending" value="pending" class="form-control" oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);">
                                                                                <div><label for="company" class=" form-control-label"> Slip Month</label>
                                                                                    <input type="date" name="month" required placeholder="DATE" class="form-control">
                                                                                </div><input type="submit" name="submit1" value="Add details" class="btn btn-success">

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
                                    </div>
                            </form>
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


    mysqli_query($link, "insert into salay values(NULL,'$_POST[name]','$_POST[em_id]','$_POST[email]','$_POST[joiningdate]','$_POST[role]','$_POST[salary]','$_POST[action]','$_POST[month]')") or die(mysqli_error($link));
}
?>
<script type="text/javascript">
    alert {
        "question added successfully"
    };
    window.location.href = window.location.href;
</script>
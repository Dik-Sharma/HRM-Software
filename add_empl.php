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

    <div class="wrapper">
        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row" style="margin-right: 0px;">
                    <div class="col-lg-12">
                        <div class="card">

                            <div class="card-body">

                                <form name="form1" action="" method="POST" enctype="multipart/form-data">
                                    <div class="card-body">

                                        <div class="col-lg-12" style="margin-top: 16px;">
                                            <div class="card">
                                                <div class="form-group">
                                                    <div class="card-header"><strong>Add New Employee details</strong></div>
                                                    <div class="card-body card-block">
                                                        <div class="form-group"><label for="company" class=" form-control-label"> Name</label>
                                                            <input type="text" name="name" required placeholder="Name" class="form-control" oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);">
                                                        </div>
                                                        <div class="form-group"><label for="company" class=" form-control-label"> Em_id</label>
                                                            <input type="number" name="Em_id" required placeholder="1000" class="form-control">
                                                        </div>
                                                        <div class="form-group"><label for="company" class=" form-control-label"> Date of joining</label>
                                                            <input type="date" name="dateofjoining" required placeholder="Date" class="form-control">
                                                            <div class="form-group"><label for="company" class=" form-control-label"> Departments</label>
                                                                <input type="text" name="department" required placeholder="department" class="form-control" oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);">
                                                                <div class="form-group"><label for="company" class=" form-control-label"> Designation</label>
                                                                    <input type="text" name="designation" placeholder="designation" class="form-control" oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);">
                                                                    <div class="form-group">
                                                                        <div><label for="company" class=" form-control-label"> Lead Of The Derpartment</label>
                                                                            <input type="text" name="lead" required placeholder="Yes or No" value="No" class="form-control" oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);">

                                                                        </div>
                                                                        <div><label for="company" class=" form-control-label">Username </label>
                                                                            <input type="text" name="username" required placeholder="Username" class="form-control" oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);">

                                                                        </div>
                                                                        <div><label for="company" class=" form-control-label"> Password</label>
                                                                            <input type="password" name="password" required placeholder="Password" class="form-control">

                                                                        </div>
                                                                        <div><label for="company" class=" form-control-label"> Email</label>
                                                                            <input type="email" name="email" required placeholder="Email" class="form-control" oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);">

                                                                        </div>



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
    </div>



</body>

</html>
<?php
if (isset($_POST["submit1"])) {


    mysqli_query($link, "insert into employee values(NULL,'$_POST[name]','$_POST[Em_id]','$_POST[dateofjoining]','$_POST[department]','$_POST[designation]','$_POST[lead]','$_POST[username]','$_POST[password]','$_POST[email]')") or die(mysqli_error($link));
}
?>
<script type="text/javascript">
    alert {
        "question added successfully"
    };
    window.location.href = window.location.href;
</script>
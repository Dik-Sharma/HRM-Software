<?php
include "../include/connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="../css/style4.css">
<link rel="stylesheet" href="../css/bootstrap.min.css">


<link rel="stylesheet" href="../css/style.css">

<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>



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
                                                <div class="card-header"><strong>Add User details</strong></div>
                                                <div class="card-body card-block">
                                                    <label>Name</label>
                                                    <input type="text" required name="name" class="form-control">



                                                    <label>Username</label>
                                                    <input type="text" required name="username" class="form-control">


                                                    <label>Password</label>
                                                    <input type="password" required name="password" class="form-control">

                                                    <label>Em_id</label>
                                                    <input type=" text" required name="Em_id" class="form-control">


                                                    <label>Email</label>
                                                    <input type="email" required name="email" class="form-control">

                                                    <label>Department</label>
                                                    <input type="text" required name="Department" class="form-control">


                                                    <div class="text-center">
                                                        <button type=" submit" name="submit1" class="btn btn-success loginbtn" style="margin-top: 20px;">Register</button>

                                                    </div>
                                                    <div class="text-center">



                                                        <div class="alert alert-success" id="success" style=" margin-top:10px; display:none; ">
                                                            <strong>Success!</strong> Account Registration successful.
                                                        </div>
                                                        <div class="alert alert-danger" id="failure" style="margin-top: 10px; display:none;">
                                                            <strong>Danger!</strong> This Username Already Exists.
                                                        </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a href="employee_login.php"><button class="btn btn-success btn" style="margin-top: -20px; margin-left:695px;  ">&nbsp;&nbsp;&nbsp;&nbsp; Login &nbsp;&nbsp;&nbsp;&nbsp;</button></a>

    <?php
    if (isset($_POST['submit1'])) {
        $res = mysqli_query($link, "select * from register where username='$_POST[username]'") or die(mysqli_error($link));
        $count = mysqli_num_rows($res);
        if ($count > 0) {
    ?>
            <script type="text/javascript">
                document.getElementById("success").style.display = "none";
                document.getElementById("failure").style.display = "block";
            </script>
        <?php
        } else {
            mysqli_query($link, "insert into register values(NULL,'$_POST[name]',
            '$_POST[username]','$_POST[password]','$_POST[Em_id]','$_POST[email]','$_POST[Department]')") or die(mysqli_error($link));
        ?>

            <script>
                window.location = "login.php";
            </script>
            <script type="text/javascript">
                document.getElementById("failure").style.display = "none";
                document.getElementById("success").style.display = "block";
            </script>
    <?php
        }
    }
    ?>

</body>

</html>
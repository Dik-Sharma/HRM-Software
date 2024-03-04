<?php


include "../include/connection.php";

session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="Smarthr - Bootstrap Admin Template">
    <meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
    <meta name="author" content="Dreamguys - Bootstrap Admin Template">
    <meta name="robots" content="noindex, nofollow">
    <title>Login admin page</title>

    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <link rel="stylesheet" href="../css/style5.css">


</head>

<body class="account-page">


    <div class="main-wrapper">
        <div class="account-content">
            <div class="container">

                <div class="account-logo">
                    <a href="login.php"><img src="../download.png" alt="Company Logo" style="border-radius: 8px;width: 120px;"></a>
                </div>
                <div class="account-box">
                    <div class="account-wrapper">
                        <h3 class="account-title">Employee Login</h3>
                        <form method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>User Name</label>
                                <input class="form-control" name="username" required type="text" oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);">
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label>Password</label>
                                    </div>
                                </div>
                                <input class="form-control" name="password" required type="password">
                            </div>

                            <div class="form-group text-center">
                                <button class="btn btn-primary account-btn" name="submit1" type="submit">Login</button>

                                <div class="alert alert-danger" id="failure" style="margin-top: 10px; display:none;">
                                    <strong>Does not Match</strong> Invalid Username or Password.
                                </div>
                            </div>

                        </form>
                        <!--<a href="register.php"><button class="btn btn-primary account-btn" style="margin-top: 35px;">Register</button></a>
-->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="assets/js/jquery-3.2.1.min.js"></script>

    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <script src="assets/js/app.js"></script>

</body>

</html>
<?php
if (isset($_POST["submit1"])) {
    $count = 0;

    $res = mysqli_query($link, "select * from employee where username='$_POST[username]' && password ='$_POST[password]'") or die(mysqli_error($link));
    $count = mysqli_num_rows($res);
    if ($count == 0) {
?>
        <script type="text/javascript">
            document.getElementById('failure').style.display = "block";
        </script>
    <?php
    } else {
        $_SESSION["username"] =  $_POST["username"];
    ?>
        <script type="text/javascript">
            window.location = "employee_login.php";
        </script>
<?php
    }
}
?>
<?php


include "include/connection.php";

session_start();

?>




<html>

<head>
    <title>HRMS </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="application/x-javascript">



    </script>

    <link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
    <link href="css/style9.css" rel='stylesheet' type='text/css' />


</head>

<body>
    <div id="first">

        <div class="main-wthree">
            <div class="container">
                <div class="sin-w3-agile">
                    <span style="color:white">

                        <h1 style="text-align: center;">Admin Login </h1>
                    </span>
                    <h2><a href="login.php"><img src="download.png" alt="Company Logo" style="width:200px"></a></h2>
                    <form action="" method="POST">
                        <div class="username">
                            <span class="username">Username:</span>
                            <input type="text" name="username" class="name" placeholder="Enter Username" oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);">
                            <div class="clearfix"></div>
                        </div>
                        <div class="password-agileits">
                            <span class="username">Password: <i class="fa fa-eye" aria-hidden="false" style="padding-left: 20px;"></i></span>
                            <input type="password" name="password" class="password" placeholder="Enter Password">

                            <div class="clearfix"></div>
                        </div>


                        <div class="login-w3">
                            <input type="submit" name="submit1" class="login" value="Log In">
                        </div>
                        <div class="alert alert-danger" id="failure" style="margin-top: 80px; display:none;">
                            <strong>Does not Match</strong> Invalid Username or Password.
                        </div>
                    </form>
                </div>

                <div class="clearfix"></div>

                <div class="footer">

                </div>
            </div>

            <script>

            </script>
        </div>
</body>

</html>

<?php

?>











<?php
if (isset($_POST["submit1"])) {
    $count = 0;

    $res = mysqli_query($link, "select * from admin where username='$_POST[username]' && password ='$_POST[password]'") or die(mysqli_error($link));
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
            window.location = "leaves.php";
        </script>
<?php
    }
}
?>
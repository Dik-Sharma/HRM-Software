<?php
include "../include/connection.php";
session_start();

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
include "header_emp.php";
include "top-left-menu-emp.php";
?>


<link rel="stylesheet" href="../css/bootstrap.min.css">


<!DOCTYPE html>
<htm lang="en">


    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
            div {
                margin-bottom: 15px;
                padding: 4px 12px;
            }

            .danger {
                background-color: #ffdddd;
                border-left: 6px solid #f44336;
            }

            .success {
                background-color: #ddffdd;
                border-left: 6px solid #04AA6D;
            }

            .info {
                background-color: #e7f3fe;
                border-left: 6px solid #2196F3;
            }


            .warning {
                background-color: #ffffcc;
                border-left: 6px solid #ffeb3b;
            }
        </style>



    </head>

    <body>

        <h2>Notes</h2>
        <div class="wrapper" style="margin-top: 3%; margin-left:15%;">

            <?php
            $ren = mysqli_query($link, "SELECT name from employee WHERE username= '" . $_SESSION['username'] . "'");
            $due = mysqli_fetch_array($ren);
            $don = $due["name"];
            $res = mysqli_query($link, "SELECT * from notes WHERE name ='$don' order by id desc");
            while ($row = mysqli_fetch_array($res)) {

            ?>


                <div class="<?php echo $row['type'] ?>">
                    <p><strong><?php echo $row['title'] ?></strong><br><?php echo $row['info'] ?></p>
                </div>

            <?php
            }
            ?>
        </div>
        <!--
        <div class="success">
            <p><strong>Success!</strong> Some text...</p>
        </div>

        <div class="info">
            <p><strong>Info!</strong> Some text...</p>
        </div>

        <div class="warning">
            <p><strong>Warning!</strong> Some text...</p>
        </div>
 -->
    </body>

    </html>
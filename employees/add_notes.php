<?php
include "../include/connection.php";
include "header_emp2.php";
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

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style4.css">
</head>

<body>




    <div class="content mt-3">
        <div class="animated fadeIn">

            <div class="wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">

                            <div class="card-body">

                                <form name="form1" action="" method="POST" enctype="multipart/form-data">
                                    <div class="card-body">

                                        <div class="col-lg-12" style="margin-top: 16px; margin-left:15%;">
                                            <div class="card">
                                                <div class="form-group">
                                                    <div class="card-header"><strong>Add New Notes details</strong></div>
                                                    <div class="card-body card-block">
                                                        <div><label for="company" class=" form-control-label"> Name</label>
                                                            <input type="text" name="name" required placeholder="Name" class="form-control" oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);">
                                                            <div class="form-group"><label for="company" class=" form-control-label"> Title</label>
                                                                <input type="text" name="title" required placeholder="title" class="form-control" oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);">
                                                            </div>

                                                            <div class="form-group">
                                                                <div><label for="company" class=" form-control-label"> Description</label>
                                                                    <input type="text" name="info" required placeholder="Description" class="form-control" oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);">
                                                                    <div><label for="company" class=" form-control-label" style="padding: 20px;">Type</label>
                                                                        <select name="select1" id="select1">
                                                                            <option value="success">Normal</option>
                                                                            <option value="danger">Immidiate</option>

                                                                            <option value="info">Information</option>
                                                                            <option value="Warning">Important</option>
                                                                        </select>



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
                </div>
            </div>
        </div>
    </div>

</body>

</html>
<?php
if (isset($_POST["submit1"])) {


    mysqli_query($link, "insert into notes values(NULL,'$_POST[name]','$_POST[title]','$_POST[info]','$_POST[select1]')") or die(mysqli_error($link));
}
?>
<script type="text/javascript">
    alert {
        "question added successfully"
    };
    window.location.href = window.location.href;
</script>



</body>

</html>
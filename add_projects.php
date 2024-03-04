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
                                                <div class="card-header"><strong>Add New Project details</strong></div>
                                                <div class="card-body card-block">
                                                    <div class="form-group"><label for="company" class=" form-control-label"> Title</label>
                                                        <input type="text" name="title" required placeholder="title" class="form-control" oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);">
                                                    </div>
                                                    <div class="form-group"><label for="company" class=" form-control-label"> Task open</label>
                                                        <input type="number" name="taskopen" required placeholder="0" class="form-control">
                                                        <div class="form-group"><label for="company" class=" form-control-label"> Task Completed</label>
                                                            <input type="number" name="taskcomplete" placeholder="All" class="form-control">
                                                            <div class="form-group">
                                                                <div><label for="company" class=" form-control-label"> Description</label>
                                                                    <input type="text" name="description" required placeholder="Description" class="form-control" oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);">
                                                                    <div><label for="company" class=" form-control-label"> Deadline</label>
                                                                        <input type="date" name="deadline" required class="form-control">
                                                                        <div><label for="company" class=" form-control-label">Leader </label>
                                                                            <input type="text" name="leader" required placeholder="Lead" class="form-control" oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);">
                                                                            <div><label for="company" class=" form-control-label"> Member 1</label>
                                                                                <input type="text" name="member1" required placeholder="Member1" class="form-control" oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);">


                                                                                <div><label for="company" class=" form-control-label"> Member 2</label>
                                                                                    <input type="text" name="member2" placeholder="Member2" class="form-control" oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);">
                                                                                    <div><label for="company" class=" form-control-label"> Member 3</label>
                                                                                        <input type="text" name="member3" placeholder="Member3" class="form-control" oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);">
                                                                                        <div><label for="company" class=" form-control-label"> Member 4</label>
                                                                                            <input type="text" name="member4" placeholder="Member4" class="form-control" oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);">
                                                                                            <div><label for="company" class=" form-control-label"> Member 5</label>
                                                                                                <input type="text" name="member5" placeholder="Member5" class="form-control" oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);">
                                                                                                <div><label for="company" class=" form-control-label"> Member 6</label>
                                                                                                    <input type="text" name="member6" placeholder="Member6" class="form-control" oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);">
                                                                                                    <div><label for="company" class=" form-control-label"> Member 7</label>
                                                                                                        <input type="text" name="member7" placeholder="Member7" class="form-control" oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);">
                                                                                                        <div><label for="company" class=" form-control-label"> Member 8</label>
                                                                                                            <input type="text" name="member8" placeholder="Member8" class="form-control" oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);">
                                                                                                            <div><label for="company" class=" form-control-label"> Member 9</label>
                                                                                                                <input type="text" name="member9" placeholder="Member9" class="form-control" oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);">
                                                                                                                <div><label for="company" class=" form-control-label"> Member 10</label>
                                                                                                                    <input type="text" name="member10" placeholder="Member10" class="form-control" oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);">


                                                                                                                    <div><label for="company" class=" form-control-label"> Progress</label>
                                                                                                                        <input type="text" name="progress" required placeholder="Write  with   %  like   '40%' " class="form-control">
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
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
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


    mysqli_query($link, "insert into projects values(NULL,'$_POST[title]','$_POST[taskopen]','$_POST[taskcomplete]','$_POST[description]','$_POST[deadline]','$_POST[leader]','$_POST[member1]','$_POST[member2]','$_POST[member3]','$_POST[member4]','$_POST[member5]','$_POST[member6]','$_POST[member7]','$_POST[member8]','$_POST[member9]','$_POST[member10]','$_POST[progress]')") or die(mysqli_error($link));
}
?>
<script type="text/javascript">
    alert {
        "question added successfully"
    };
    window.location.href = window.location.href;
</script>
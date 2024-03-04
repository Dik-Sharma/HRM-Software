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
$title = '';
$taskopen = '';
$taskcomplete = '';
$description = '';
$deadline = '';
$leader = '';
$member1 = '';
$member2 = '';
$member3 = '';
$member4 = '';
$member5 = '';
$member6 = '';
$member7 = '';
$member8 = '';
$member9 = '';
$member10 = '';
$progress = '';

$res = mysqli_query($link, "select * from projects where id=$id");
while ($row = mysqli_fetch_array($res)) {
    $title = $row["title"];
    $taskopen = $row["tasks_open"];
    $taskcomplete = $row["task_complete"];
    $description = $row["descriptin"];
    $deadline = $row["deadline"];
    $leader = $row["leader"];
    $member1 = $row["member1"];
    $member2 = $row["member2"];
    $member3 = $row["member3"];
    $member4 = $row["member4"];
    $member5 = $row["member5"];
    $member6 = $row["member6"];
    $member7 = $row["member7"];
    $member8 = $row["member8"];
    $member9 = $row["member9"];
    $member10 = $row["member10"];
    $progress = $row["progress"];
}
?>
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Update Project Details</h1>
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
                                        <div class="card-header"><strong>Update projects</strong></div>
                                        <div class="card-body card-block">
                                            <div class="form-group"><label for="company" class=" form-control-label"> Update title</label>
                                                <input type="text" name="title" class="form-control" value="<?php echo $title ?>" oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);">
                                            </div>
                                            <div class="form-group"><label for="company" class=" form-control-label"> Update Tasks open</label>
                                                <input type="text" name="taskopen" class="form-control" value="<?php echo $taskopen ?>" oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);">
                                                <div class="form-group"><label for="company" class=" form-control-label"> Update Task completed</label>
                                                    <input type="text" name="taskcomplete" class="form-control" value="<?php echo $taskcomplete ?>" oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);">
                                                    <div class="form-group"><label for="company" class=" form-control-label">Update description </label>
                                                        <input type="text" name="description" class="form-control" value="<?php echo $description ?>" oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);">

                                                        <div class="form-group"><label for="company" class=" form-control-label"> Update deadline</label>
                                                            <input type="date" name="taskopen" class="form-control" value="<?php echo $deadline ?>">

                                                            <div class="form-group"><label for="company" class=" form-control-label"> Update leader</label>
                                                                <input type="text" name="leader" class="form-control" value="<?php echo $leader ?>" oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);">
                                                                <div class="form-group"><label for="company" class=" form-control-label"> Update member 1</label>
                                                                    <input type="text" name="member1" class="form-control" value="<?php echo $member1 ?>" oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);">


                                                                    <div class="form-group"><label for="company" class=" form-control-label"> Update member </label>
                                                                        <input type="text" name="member2" class="form-control" value="<?php echo $member2 ?>" oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);">

                                                                        <div class="form-group"><label for="company" class=" form-control-label"> Update member </label>
                                                                            <input type="text" name="member3" class="form-control" value="<?php echo $member3 ?>" oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);">

                                                                            <div class="form-group"><label for="company" class=" form-control-label"> Update member </label>
                                                                                <input type="text" name="member4" class="form-control" value="<?php echo $member4 ?>" oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);">

                                                                                <div class="form-group"><label for="company" class=" form-control-label"> Update member </label>
                                                                                    <input type="text" name="member5" class="form-control" value="<?php echo $member5 ?>" oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);">

                                                                                    <div class="form-group"><label for="company" class=" form-control-label"> Update member </label>
                                                                                        <input type="text" name="member6" class="form-control" value="<?php echo $member6 ?>" oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);">

                                                                                        <div class="form-group"><label for="company" class=" form-control-label"> Update member </label>
                                                                                            <input type="text" name="member7" class="form-control" value="<?php echo $member7 ?>" oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);">

                                                                                            <div class="form-group"><label for="company" class=" form-control-label"> Update member </label>
                                                                                                <input type="text" name="member8" class="form-control" value="<?php echo $member8 ?>" oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);">

                                                                                                <div class="form-group"><label for="company" class=" form-control-label"> Update member </label>
                                                                                                    <input type="text" name="member9" class="form-control" value="<?php echo $member9 ?>" oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);">

                                                                                                    <div class="form-group"><label for="company" class=" form-control-label"> Update member </label>
                                                                                                        <input type="text" name="member10" class="form-control" value="<?php echo $member10 ?>" oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);">

                                                                                                        <div class="form-group"><label for="company" class=" form-control-label"> Update progress </label>
                                                                                                            <input type="text" name="progress" class="form-control" value="<?php echo $progress ?>">

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
</div>

<?php
if (isset($_POST["submit1"])) {
    mysqli_query($link, "UPDATE projects SET title='$_POST[title]',tasks_open='$_POST[taskopen]',task_complete='$_POST[taskcomplete]',descriptin='$_POST[description]',deadline='$_POST[deadline]',leader='$_POST[leader]',member1='$_POST[member1]',member2='$_POST[member2]',member3='$_POST[member3]',member4='$_POST[member4]',member5='$_POST[member5]',member6='$_POST[member6]',member7='$_POST[member7]',member8='$_POST[member8]',member9='$_POST[member9]',member10='$_POST[member10]',progress='$_POST[progress]' WHERE id=$id");
?>
    <script type="text/javascript">
        window.location = "projects.php";
    </script>
<?php
}

?>
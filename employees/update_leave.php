<?php
include "../include/connection.php";
$id = $_GET["id"];
$Requested = "APPROVED";
mysqli_query($link, "update leaves set Action='$Requested' where id=$id") or die(mysqli_error($link));
?>
<script type="text/javascript">
    window.location = "leaves.php";
</script>
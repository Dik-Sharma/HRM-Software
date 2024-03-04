<?php

include "../include/connection.php";

?>

<?php


$res = mysqli_query($link, "select * from employee where username='{$_SESSION['username']}'");
$row = mysqli_fetch_array($res);

?>


<!-- Header Menu -->
<ul class="nav user-menu" style="position: absolute;right:0;top:0 ;z-index:5000;">

    <li class=" nav-item dropdown has-arrow main-drop">

        <span class="user-img"><img src="../Untitled-1.png" alt="User Picture">

            <div class="dropdown-content">
                <a href="emp_setting.php?id=<?php echo $row["id"]; ?>"> Emp Settings</a>

                <a href="logout_emp.php"> Log Out</a>
            </div>
        </span>




    </li>
</ul>
<!-- /Header Menu -->
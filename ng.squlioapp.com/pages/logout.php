<?php
    session_start();
    //unset($_SESSION["USER_ADMIN_ID"]);
    unset($_SESSION["USER_ADMIN_ID"]);
    header("Location:../index.php");
?>
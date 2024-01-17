<?php
    $host = "localhost"; 
    $user = "adminsija";
    $password = "123";
    $dbname = "mysql";
    $secondarydbname = "data_";

    $konek=mysqli_connect($host, $user, $password, $secondarydbname);
?>
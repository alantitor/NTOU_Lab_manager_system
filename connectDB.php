<?php

function connect_to_DB() {
        $con = mysqli_connect("localhost", "root", "underworld001", "lab_control_center");
        //mysql_query("Set NAMES UTF8");
        //mysql_set_charset("utf8", $con);
        mysqli_query($con, "SET NAMES 'utf8'");


        if (mysqli_connect_errno()) {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
                return null;
        } else {
                //echo "Connect success.";
                return $con;
        }
}



?>

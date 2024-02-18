<?php

$con = mysqli_connect("localhost","root","","emp_data");
if(!$con){

    die('SQL Failed.'. mysqli_connect_error());
}

?>
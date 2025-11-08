<?php
//time zone
date_default_timezone_set('Asia/Tashkent');
//database connection
$con=mysqli_connect("localhost","root","password","bank");
if(mysqli_connect_errno()){
echo "Connection Fail".mysqli_connect_error();
}

  ?>

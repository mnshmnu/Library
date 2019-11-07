<?php
include('admin/pages/config.php');
date_default_timezone_set('Asia/Kolkata');
$DateTimein=date("Y-m-d H:i:s");
$query1 = mysqli_query($conn,"update log_student set datetime_out='".$DateTimein."' where datetime_out ='0000-00-00 00:00:00'");
$query2 = mysqli_query($conn,"update log_staff set datetime_out='".$DateTimein."' where datetime_out ='0000-00-00 00:00:00'");
?>
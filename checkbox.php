<?php 
$connection = mysqli_connect('localhost','root','','protrack');
$checkboxcount = $_POST['chkl'];
error_reporting(0);
$count = count($checkboxcount);

echo  '$count';
$data="INSERT   INTO   timesheet(no_task)   VALUES($count) ";
$result=mysqli_query($connection,$data);
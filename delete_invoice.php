<?php
session_start();
include_once('connect_db.php');
if(isset($_SESSION['username'])){
$id=$_SESSION['admin_id'];
$user=$_SESSION['username'];
}else{
header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/index.php");
exit();
}
$id=$_GET[invoice_no];
$sql="delete from invoice where invoice_no='$id'";
mysqli_query($conn,$sql);
//$rows=mysqli_fetch_assoc($result);
header("location:invoice.php");
?>



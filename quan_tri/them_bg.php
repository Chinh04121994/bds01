<?php
//include("kenoi_csdl.php");
require_once 'kenoi_csdl.php';
if (isset($_POST['SAVE'])) {
  $a = $_POST['hoten'];
  $b = $_POST['user'];
  $c = $_POST['pass'];
  $d = $_POST['email'];
  $e = $_POST['dienthoai'];

  //Chèn 1 bản ghi vào CSDL
  $sql = "INSERT INTO tai_khoan (hoten, email, sdt, user, pass) 
    VALUES ('$a', '$d', $e, '$b', '$c')";
  //echo $sql;exit;
  if (mysqli_query($conn, $sql)) {
    header("location: index.php");
  };
} 
   //echo $sql;exit;
   //include("include/xem.php");    

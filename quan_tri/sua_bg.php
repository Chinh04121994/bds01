<?php
require_once 'kenoi_csdl.php';
if (isset($_POST['SAVE'])) {
  $a = $_POST['hoten1'];
  $b = $_POST['user1'];
  $c = $_POST['pass1'];
  $d = $_POST['email1'];
  $e = $_POST['dienthoai1'];
  $id1 = $_POST['id1'];



  //cập nhật bản ghi vào CSDL
  $sql = "UPDATE tai_khoan SET hoten='$a', user='$b', pass='$c',
    email='$d',sdt='$e' WHERE id='$id1'";
  if (mysqli_query($conn, $sql)) {
    header("location: index.php");
  };
}

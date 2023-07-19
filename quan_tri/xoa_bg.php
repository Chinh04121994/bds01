<?php
require_once 'kenoi_csdl.php';
if (isset($_GET['tkid'])) {
    $sql1 = "DELETE FROM tai_khoan WHERE id=" . $_GET['tkid'];
    mysqli_query($conn, $sql1);
    header("location: index.php");
}
if (isset($_GET['mnid'])) {
    $sql1 = "DELETE FROM menu_cha WHERE id=" . $_GET['mnid'];
    mysqli_query($conn, $sql1);
    header("location: index.php?ttnd=2");
}
if (isset($_GET['mnconid'])) {
    $sql1 = "DELETE FROM menu_con WHERE id=" . $_GET['mnconid'];
    if (mysqli_query($conn, $sql1))
        header("location: index.php?ttnd=3");
    else echo ($sql1);
}
if (isset($_GET['mucid'])) {
    $sql1 = "DELETE FROM muc_cha WHERE id=" . $_GET['mucid'];
    mysqli_query($conn, $sql1);
    header("location: index.php?ttnd=4");
}
if (isset($_GET['mucconid'])) {
    $sql1 = "SELECT link_anh FROM muc_con WHERE id=" . $_GET['mucconid'];
    $kq = mysqli_query($conn, $sql1);
    $row = mysqli_fetch_assoc($kq);
    unlink($row['link_anh']);
    $sql1 = "DELETE FROM muc_con WHERE id=" . $_GET['mucconid'];
    mysqli_query($conn, $sql1);
    header("location: index.php?ttnd=5");
}

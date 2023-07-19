// get_user_detail.php

<?php
require_once 'kenoi_csdl.php';

if (isset($_POST['user_id'])) {
    $user_id = $_POST['user_id'];

    $query = "SELECT * FROM tai_khoan WHERE id = $user_id";
    $result = mysqli_query($conn, $query);

    if ($result) {
        $user_detail = mysqli_fetch_assoc($result);
        echo json_encode($user_detail);
    }
    else {
        echo 'error';
    }
}
else {
    echo 'error';
}
?>

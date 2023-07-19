<?php
if (isset($_POST['save_mn_cha'])) {
    $a = $_POST['ten_mnc'];
    $b = $_POST['ma_mnc'];
    $c = $_POST['lk_mnc'];
    require_once 'kenoi_csdl.php';
    $sql = "INSERT INTO menu_cha (ten_menucha,ma_menucha,lien_ket) VALUE ('$a','$b','$c')";
    echo ($sql);
    if (mysqli_query($conn, $sql)) {
        header("location:index.php?ttnd=2");
    } else {
        echo ("lỗi khi thêm");
    }
}

if (isset($_POST['edit'])) {
    $a = $_POST['ten_mnc1'];
    $b = $_POST['ma_mnc1'];
    $c = $_POST['lk_mnc1'];
    $id = $_POST['ided'];
    require_once 'kenoi_csdl.php';
    $sql = "UPDATE menu_cha SET ten_menucha ='$a', ma_menucha = '$b' ,lien_ket ='$c' WHERE id='$id'";
    if (mysqli_query($conn, $sql)) {
        header("location: index.php?ttnd=2");
    } else echo ($sql);
}
if (isset($_POST['save_mn_con'])) {
    $a = $_POST['ten_mnc1'];
    $b = $_POST['ma_mnc1'];
    $c = $_POST['lk_mnc1'];
    $d = $_POST['id_mnc1'];
    var_dump($_POST);
    require_once 'kenoi_csdl.php';
    $sql = "INSERT INTO menu_con (ten_menucon,ma_menucon,id_menucha,lien_ket) VALUE ('$a','$b','$d','$c')";
    echo ($sql);
    if (mysqli_query($conn, $sql)) {
        header("location:index.php?ttnd=3");
    } else {
        echo ("lỗi khi thêm");
    }
}
if (isset($_POST['edit_menucon'])) {
    $a = $_POST['ten_mnc2'];
    $b = $_POST['ma_mnc2'];
    $c = $_POST['lk_mnc2'];
    $d = $_POST['id_mnc1'];
    $id = $_POST['ided1'];
    require_once 'kenoi_csdl.php';
    $sql = "UPDATE menu_con SET ten_menucon ='$a', ma_menucon = '$b' ,lien_ket ='$c', id_menucha='$d' WHERE id='$id'";
    if (mysqli_query($conn, $sql)) {
        header("location: index.php?ttnd=3");
    } else echo ($sql);
}
if (isset($_POST['save_muc_cha'])) {
    $a = $_POST['ten_muccha'];
    $b = $_POST['ma_muccha'];
    $c = $_POST['lk_muccha'];
    require_once 'kenoi_csdl.php';
    $sql = "INSERT INTO muc_cha (ten_muccha,ma_muccha,lien_ket) VALUE ('$a','$b','$c')";
    //echo ($sql);
    if (mysqli_query($conn, $sql)) {
        header("location:index.php?ttnd=4");
    } else {
        echo ("lỗi khi thêm");
    }
}
if (isset($_POST['edit_muccha'])) {
    $a = $_POST['ten_mnc1'];
    $b = $_POST['ma_mnc1'];
    $c = $_POST['lk_mnc1'];
    $id = $_POST['ided'];
    require_once 'kenoi_csdl.php';
    $sql = "UPDATE muc_cha SET ten_muccha ='$a', ma_muccha = '$b' ,lien_ket ='$c' WHERE id='$id'";
    if (mysqli_query($conn, $sql)) {
        header("location: index.php?ttnd=4");
    } else echo ($sql);
}
if (isset($_POST['save_muc_con'])) {
    $a = $_POST['ten_mnc1'];
    $b = $_POST['ma_mnc1'];
    $c = $_POST['lk_mnc1'];
    $d = $_POST['id_mnc1'];
    //$e = $_POST['link_anh'];
    $f = $_POST['noi_dung'];
    $g = $_POST['dia_chi'];

    //---------------------Kiểm tra file ảnh----------------------------
    $upload = true;
    $dd = "../img/";
    $duoi = pathinfo($_FILES['link_anh']['name'], PATHINFO_EXTENSION);
    $target_file = $dd . uniqid() . '.' . $duoi;
    $kieu_file = array('png', 'jpg', 'jpeg', 'gif');
    if (!in_array(strtolower($duoi), $kieu_file)) {
        $upload = false;
        $loi = "Không đúng files";
    }
    $size_file = $_FILES['link_anh']['size'];
    if ($size_file > 2242880) {
        $upload = false;
        $loi = "Files quá lớn";
    }
    if (file_exists($target_file)) {
        $upload = false;
        $loi = "Files không đúng";
    }
    if ($upload) {
        move_uploaded_file($_FILES["link_anh"]["tmp_name"], $target_file);
        $e = $target_file;
    } else {
        echo $loi;
    }

    //-------------------xử lý sql----------------------


    require_once 'kenoi_csdl.php';
    $sql = "INSERT INTO muc_con (ten_muccon,ma_muccon,id_muccha,lien_ket,link_anh,noi_dung,vi_tri) VALUE ('$a','$b','$d','$c','$e','$f','$g')";
    echo ($sql);
    if (mysqli_query($conn, $sql)) {
        header("location:index.php?ttnd=5");
    } else {
        echo ("lỗi khi thêm");
    }
}
if (isset($_POST['edit_muccon'])) {
    var_dump($_FILES);
    $a = $_POST['ten_mnc2'];
    $b = $_POST['ma_mnc2'];
    $c = $_POST['lk_mnc2'];
    $d = $_POST['id_mnc1'];
    $e = $_POST['vi_tri'];
    //$h = $_POST['link_anh'];
    $g = $_POST['noi_dung'];
    $id = $_POST['ided1'];

    if (isset($_FILES) & $_FILES['link_anh']['name'] != "") {
        $upload = true;
        $dd = "../img/";
        $duoi = pathinfo($_FILES['link_anh']['name'], PATHINFO_EXTENSION);
        $target_file = $dd . uniqid() . '.' . $duoi;
        $kieu_file = array('png', 'jpg', 'jpeg', 'gif');
        if (!in_array(strtolower($duoi), $kieu_file)) {
            $upload = false;
            $loi = "Không đúng files";
        }
        $size_file = $_FILES['link_anh']['size'];
        if ($size_file > 2242880) {
            $upload = false;
            $loi = "Files quá lớn";
        }
        if (file_exists($target_file)) {
            $upload = false;
            $loi = "Files không đúng";
        }
        if ($upload) {
            move_uploaded_file($_FILES["link_anh"]["tmp_name"], $target_file);
            unlink($_POST['du_phong']);
            $f = $target_file;
        } else {
            echo $loi;
        }
    } else {
        $f = $_POST['du_phong'];
    }






    require_once 'kenoi_csdl.php';
    $sql = "UPDATE muc_con SET ten_muccon ='$a', ma_muccon = '$b' ,lien_ket ='$c', id_muccha='$d', vi_tri ='$e',link_anh='$f',noi_dung='$g' WHERE id='$id'";
    echo $sql;
    if (mysqli_query($conn, $sql)) {
        header("location: index.php?ttnd=5");
    } else echo ($sql);
}
if (isset($_POST['SAVE'])) {
    $a = $_POST['hoten'];
    $b = $_POST['user'];
    $c = $_POST['pass'];
    $d = $_POST['email'];
    $e = $_POST['dienthoai'];

    //Chèn 1 bản ghi vào CSDL
    require_once 'kenoi_csdl.php';
    $sql = "INSERT INTO tai_khoan (hoten, email, sdt, user, pass) 
      VALUES ('$a', '$d', $e, '$b', '$c')";
    //echo $sql;
    if (mysqli_query($conn, $sql)) {
        header("location: index.php");
    };
}
if (isset($_POST['save_banner'])) {
 var_dump($_FILES);
 $uploadedFiles = array();
    foreach ($_FILES['file']['tmp_name'] as $index => $tmpName) {
        
        $name = $_FILES['file']['name'][$index];
        //$duoi = $_FILES['file']['type'][$index];
        $size_file = $_FILES['file']['size'][$index];
        $loi = $_FILES['file']['error'][$index];
        //echo $name;
        // Kiểm tra và xử lý các tệp tại đây
        $upload = true;
        $dd = "../img/";
        $duoi = pathinfo($name, PATHINFO_EXTENSION);
        //echo $duoi;
        $target_file = $dd . uniqid() . '.' . $duoi;
        $kieu_file = array('png', 'jpg', 'jpeg', 'gif',);
        
        if (!in_array(strtolower($duoi), $kieu_file)) {
            $upload = false;
            $loi = "Không đúng files";
        }
        //$size_file = $_FILES['link_anh']['size'];
        if ($size_file > 2242880) {
            $upload = false;
            $loi = "Files quá lớn";
        }
        if (file_exists($target_file)) {
            $upload = false;
            $loi = "Files không đúng";
        }
        if ($upload) {
            move_uploaded_file($_FILES['file']['tmp_name'][$index], $target_file);
            echo $index;
            $uploadedFiles[] = $target_file;
        } else {
            echo $loi;
        }
    }
    
    require_once 'kenoi_csdl.php';
    $sql = "INSERT INTO banner(link_anh,du_phong) VALUES (";
    $values = array();
    foreach ($uploadedFiles as $file) {
        $values[] = "'$file'"; 
    }
    $sql .= implode(", ", $values);
    $sql .= ")";
    echo $sql;
    if (mysqli_query($conn, $sql)) {
        header("location:index.php?ttnd=6");
    } else {
        echo ("lỗi khi thêm");
    }
}
if(isset($_POST['edit_banner'])){
    $id = $_POST['idbn'];
    echo $id;
    var_dump($_FILES);
    $uploadedFiles = array();
    foreach ($_FILES['file']['tmp_name'] as $index => $tmpName) {
        if (isset($_FILES) & $_FILES['file']['name'][$index] != ""){
            $name = $_FILES['file']['name'][$index];
            //$duoi = $_FILES['file']['type'][$index];
            $size_file = $_FILES['file']['size'][$index];
            $loi = $_FILES['file']['error'][$index];
            //echo $name;
            // Kiểm tra và xử lý các tệp tại đây
            $upload = true;
            $dd = "../img/";
            $duoi = pathinfo($name, PATHINFO_EXTENSION);
            //echo $duoi;
            $target_file = $dd . uniqid() . '.' . $duoi;
            $kieu_file = array('png', 'jpg', 'jpeg', 'gif',);
            
            if (!in_array(strtolower($duoi), $kieu_file)) {
                $upload = false;
                $loi = "Không đúng files";
            }
            //$size_file = $_FILES['link_anh']['size'];
            if ($size_file > 2242880) {
                $upload = false;
                $loi = "Files quá lớn";
            }
            if (file_exists($target_file)) {
                $upload = false;
                $loi = "Files không đúng";
            }
            if ($upload) {
                move_uploaded_file($_FILES['file']['tmp_name'][$index], $target_file);
                unlink($_POST['du_phong'.$index+1]);
                echo $_POST['du_phong'.$index+1];
                $uploadedFiles[] = $target_file;
            } else {
                echo $loi;
            }
        }
        else{
            $uploadedFiles[] = $_POST['du_phong'.$index+1];
        }
    }
    $sql = "UPDATE banner SET ";
    $values = array();
    foreach ($uploadedFiles as $file) {
        $values[] = "'$file'"; 
    }
    require_once 'kenoi_csdl.php';
    $sql .= "link_anh =".$values[0].",";
    $sql .= "du_phong =".$values[1].' WHERE id='.$id;
    echo $sql;
    if (mysqli_query($conn, $sql)) {
        header("location:index.php?ttnd=6");
    } else {
        echo ("lỗi khi thêm");
    }
}

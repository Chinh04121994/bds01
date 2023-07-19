<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Quan tri trang web</title>
    <link rel="stylesheet" href="style.css">
    <style>
        *{box-sizing: border-box;}
        .can_le{padding: 6px; margin: 0px;}
        .can_icon{padding: 2px 6px;}
    </style>
</head>
<body>
    <div class="container-fluid">
        <?php    
        $id="";
          //include("kenoi_csdl.php"); 
          session_start();
                   if(isset($_GET['dangxuat']))
                     if($_GET['dangxuat']=="thoat")
                    session_unset();
              //----------------------
              //truy vẫn tên đăng nhập và pass để cho quyền truy cập 
              if(isset($_POST["DANGNHAP"]))
              { require_once 'kenoi_csdl.php';
                $u=$_POST["user"];
                $p=$_POST["pass"];
                $sql = "SELECT * FROM tai_khoan WHERE user = '$u' and pass = '$p'";
                $kq=mysqli_query($conn,$sql);
                //$kq=mysqli_query($conn,"SELECT * FROM tai_khoan Where user='$u' and pass='$p'");
                if(mysqli_num_rows($kq)>0)
                    {$row=mysqli_fetch_array($kq);
                    $_SESSION['quyentruynhap']=$row['user'];
                }
              }
              if(isset($_SESSION['quyentruynhap']))
              {?>
                <div class="thoat">
                    <a class="btn btn-info" style="padding: 5px 10px" href='index.php?dangxuat=thoat' style="color:white">
                    <span class='glyphicon glyphicon-log-in'></span> Thoát</a>
                </div>    
                <?php
                include("head_ql.php");
                include("body_ql.php");
                include("footer_ql.php");
          //include('edit_ql.php');
              }
              else
              {
                include("form_dn.php");
              }

         
          //$conn->close();
        ?>
    </div>    
</body>
</html>
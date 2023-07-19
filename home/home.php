<?php
    require_once 'kenoi_csdl.php';
    if(isset($_GET['nd'])){
        $sql1 ='SELECT * FROM muc_cha where ma_muccha = "'.$_GET['nd'].'"';
    }
    else{
        $sql1 ='SELECT * FROM muc_cha order by ma_muccha';
    }
        
    
    //echo $sql1;
    $kq1 = mysqli_query($conn,$sql1);
    while($row=mysqli_fetch_assoc($kq1)){
        switch($row['ma_muccha']){
            case "T1":?>
                    <div class="font-left l1">
                    <h2 class="font-tittel"><?php echo $row['ten_muccha'] ?></h2>
                    <div class="font-container">
                    <?php
                        $sql2 = 'SELECT * FROM muc_con WHERE id_muccha ='.$row['id'].' LIMIT 6 ';
                        $kq2 = mysqli_query($conn,$sql2);
                        while($row2=mysqli_fetch_assoc($kq2)){?>
                        <div class="item-left">
                            <img src="<?php echo $row2['link_anh']; ?>" alt="">
                            <a href="<?php echo $row2['lien_ket']?>" class="tittel-left"><?php echo $row2['ten_muccon']; ?></a>
                            <p class="location"><?php echo $row2['vi_tri'] ?></p>
                        </div>
                        <?php
                        }
                        
                        ?>
                    </div></div>
                    <?php
                    break;
            case "T2":
                    ?>
                    <div class="font-left l2">
                    <h2 class="font-tittel"><?php echo $row['ten_muccha'] ?></h2>
                    <div class="font-container">
                    <?php
                        $sql2 = 'SELECT * FROM muc_con WHERE id_muccha ='.$row['id'].'';
                        $kq2 = mysqli_query($conn,$sql2);
                        while($row2=mysqli_fetch_assoc($kq2)){?>
                        <div class="item-left">
                            <img src="<?php echo $row2['link_anh']; ?>" alt="">
                            <a href="<?php echo $row2['lien_ket']?>" class="tittel-left"><?php echo $row2['ten_muccon']; ?></a>
                            
                        </div>
                        <?php
                        }
                        ?>
                    </div></div>
                    <?php
                    break;
            case "T3":
                ?>
                    <div class="font-left l3">
                    <h2 class="font-tittel"><?php echo $row['ten_muccha'] ?></h2>
                    <div class="font-container">
                    <?php
                        $sql2 = 'SELECT * FROM muc_con WHERE id_muccha ='.$row['id'].'';
                        $kq2 = mysqli_query($conn,$sql2);
                        while($row2=mysqli_fetch_assoc($kq2)){?>
                        <div class="item-left-t2">
                            <div class="top">
                                <img src="<?php echo $row2['link_anh']; ?>" alt="">
                                <a href="<?php echo $row2['lien_ket']?>" class="tittel-left"><?php echo $row2['ten_muccon']; ?></a>
                            </div>
                            <p class="content"><?php echo $row2['noi_dung'] ?></p>
                        </div>
                        <?php
                        }
                        ?>
                </div></div>
                <?php
                break;
                case "T4":
                    ?>
                        <div class="font-left l3">
                        <h2 class="font-tittel"><?php echo $row['ten_muccha'] ?></h2>
                        <div class="font-container">
                        <?php
                            $sql2 = 'SELECT * FROM muc_con WHERE id_muccha ='.$row['id'].'';
                            $kq2 = mysqli_query($conn,$sql2);
                            while($row2=mysqli_fetch_assoc($kq2)){?>
                            <div class="item-left-t2">
                                <div class="top">
                                    <img src="<?php echo $row2['link_anh']; ?>" alt="">
                                    <a href="<?php echo $row2['lien_ket']?>" class="tittel-left"><?php echo $row2['ten_muccon']; ?></a>
                                </div>
                                <p class="content"><?php echo $row2['noi_dung'] ?></p>
                            </div>
                            <?php
                            }
                            ?>
                    </div></div>
                    <?php
                    break;

        }
    }
    ?>


    

<div class="main-right">
    <div class="font-right r1">
        <div class="font-right-tittel">
            <h2>
                tin tức mới nhất
            </h2>
        </div>
        <div class="khung">
            <div class="r1-container">
                <?php
                    $sql3 = 'SELECT * FROM muc_con';
                    $kq3 = mysqli_query($conn,$sql3);
                    while($row3=mysqli_fetch_assoc($kq3)){?>
                        <div class="item-right">
                            <img src="<?php echo $row3['link_anh']; ?>" alt="">

                            <a href="<?php echo $row3['lien_ket'];?>" class="r1-tittel"><?php echo $row3['ten_muccon'];?></a>
                        </div>
                    <?php } ?>

            </div>
        </div>

    </div>
    <div class="font-right r2">
        <div class="font-right-tittel">
            <h2>
                hỗ trợ khách hàng
            </h2>
        </div>
        <div class="r2-container">
            <div class="phone">
                <i><img src="uicons-regular-straight/svg/fi-rs-phone-call.svg" alt=""></i>
                <p>0123456789</p>
            </div>
            <div class="email">
                <i><img src="uicons-regular-straight/svg/fi-rs-mailbox.svg" alt=""></i>
                <p>vanchinh@gmail.com</p>
            </div>
        </div>
    </div>
    <div class="font-right-t2 r3">
        <div class="font-right-tittel">
            <h2>
                tìm kiếm phổ biến
            </h2>
        </div>
        <div class="r3-top_search">
            <a href="#">nhà thu nhập thấp</a>
        </div>
    </div>
    <div class="font-right-t2 r4">
        <div class="font-right-tittel">
            <h2>
                các giao dịch
            </h2>
        </div>
        <div class="r4-baner">
            <img src="/img/img-baner-2.jpg" alt="">
        </div>

    </div>
</div>

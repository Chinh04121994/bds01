<header class="header">

<div class="top-header">

    <div class="logo">
        <img src="https://bds01.mediawz.com/wp-content/uploads/2016/03/bds01.png" alt="#">
    </div>

    <div class="nav">
        <ul>
            <?php
            require_once 'kenoi_csdl.php';
            $sql1 = 'SELECT * FROM menu_cha';
            $kq1 = mysqli_query($conn, $sql1);
            while ($row1 = mysqli_fetch_assoc($kq1)) {
                echo '<li><a href=' . $row1['lien_ket'] . '>' . $row1['ten_menucha'] . '</a>';
                $sql2 = 'SELECT * FROM menu_con WHERE id_menucha =' . $row1['id'] . '';
                $kq2 = mysqli_query($conn, $sql2);
                if (mysqli_num_rows($kq2) > 0) {
                    echo '<ul class="nav-item">';
                    while ($row2 = mysqli_fetch_assoc($kq2)) {
                        echo '<li><a href=' . $row2['lien_ket'] . '>' . $row2['ten_menucon'] . '</a></li>';
                    }
                    echo '</ul>';
                }
                echo '</li>';
            }

            ?>
        </ul>

    </div>

</div>

<div class="bott-header">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <?php
        require_once 'kenoi_csdl.php';
        $sql1 = 'SELECT * FROM banner';
        $kq1 = mysqli_query($conn, $sql1);
        $count = mysqli_num_rows($kq1);
        echo '<ol class="carousel-indicators">';
        for($i = 0;$i<$count;$i++){
            if($i ==0){
                echo '<li data-target="#myCarousel" data-slide-to="'.$i.'" class="active"></li>';
            }
            else{
                echo '<li data-target="#myCarousel" data-slide-to="'.$i.'"></li>';
            }
        }
        echo '</ol>';
        echo '<div class="carousel-inner">';

        $active = true; // Biến để xác định item đầu tiên

        while ($row1 = mysqli_fetch_assoc($kq1)) {
            if ($active) {
                echo '<div class="item active">';
                $active = false; // Đánh dấu item đầu tiên đã được in ra
            } else {
                echo '<div class="item">';
            }

            echo '<img src="'.$row1['link_anh'].'" alt="'.$row1['du_phong'].'">';
            echo '</div>';
        }

        echo '</div>';

            
        


        ?>
    <!-- Indicators -->
    

    <!-- Wrapper for slides -->
    

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    </div>


</div>

</header>

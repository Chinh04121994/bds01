<?php
if (isset($_GET['ttnd'])) {
    switch ($_GET['ttnd']) {
        case "1":
            include('ql_tk.php');
            break;
        case "2":
            include('noidung_menu.php');
            include('sua_menu.php');
            break;
        case "3":
            include('noidung_menucon.php');
            include('sua_menu.php');
            break;
        case "4":
            include('noidung_muccha.php');
            include('sua_menu.php');
            break;
        case "5":
            include('noidung_muccon.php');
            include('sua_menu.php');
            break;
        case "6":
            include('noidung_banner.php');
            include('sua_menu.php');
            break;
    }
} else include('ql_tk.php');

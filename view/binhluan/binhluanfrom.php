<?php
session_start();
include "../../dao/pdo.php";
include "../../dao/binhluan.php";

if (isset($_SESSION['user'])) {
    $id = $_SESSION['user']['id'];
}
$ma_hh = $_REQUEST['mahh']; /// để đọc giá trị idpro tong phần truyền data của hàm load bên trang sp ct chỗ bình luân
$dsbl = loadAll_binhluan_home($ma_hh);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <div class="row mb">
        <div class="boxtitle">BÌNH LUẬN</div>
        <div class="boxcontent binhluan">
            <table>
                <?php
                foreach ($dsbl as $bl) {
                    extract($bl);
                    echo    '<tr><td>' . $noi_dung . '</td>';
                    echo    '<td>' . $ma_kh . '</td>';
                    echo    '<td>' . $ngay_bl . '</td></tr>';
                }
                ?>
            </table>
        </div>
        <?php
        if (isset($_SESSION['user'])) {
        ?>
            <div class="boxfooter binhluanfrom">
                <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
                    <input type="hidden" name="mahh" value="<?= $ma_hh ?>">
                    <input type="text" name="noidung" class="noidung">
                    <input type="submit" name="guibinhluan" value="Gửi bình luận" class="gbl">
                </form>
            </div>
        <?php
        } else {
        ?>
            <div class="boxfooter binhluanfrom">
                <p style="color: red;">Đăng nhập để thực hiện chức năng bình luận</p>
            </div>
        <?php } ?>
        <?php
        if (isset($_POST['guibinhluan']) && ($_POST['guibinhluan'])) {
            $noidung = $_POST['noidung'];
            $mahh = $_POST['mahh'];
            $id = $_SESSION['user']['id'];
            $ngay_bl = date('h:i:sa d/m/Y');
            insert_binhluan($noidung, $mahh, $id, $ngay_bl);
            header("location: " . $_SERVER['HTTP_REFERER']);
        }
        ?>
    </div>
</body>

</html>
<?php
session_start();
include "dao/pdo.php";
include "dao/hanghoa.php";
include "dao/loaihang.php";
include "dao/khachhang.php";
include "view/header.php";
include "global.php";

$spnew = loadAll_hanghoa_home();
$dsloai = loadAll_loai();
$dstop10 = loadAll_hanghoa_top10();

if ((isset($_GET['act'])) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
            // chức năng hiển thị danh sách sp theo danh mục và tìm kiếm sp theo tên sp và hiện ra những sp cùng tên sp đó
        case 'sp':
            if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) { //kiểm tra trường nhập có dữ liệu đc khách hàng nhập tìm kiếm hay ko
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }
            if (isset($_GET['idloai']) && ($_GET['idloai'] > 0)) {
                $maloai = $_GET['idloai'];
            } else {
                $maloai = 0;
            }
            $dssp = loadAll_hanghoa($kyw, $maloai);
            $tenloai = load_ten_loai($maloai); // lấy dữ liệu tên loại trong database lên 
            include "view/sanpham.php";
            break;
            //----------------------------------------------------

            // chức năng hiện thị sản phẩm chi tiết
        case 'spct':
            if (isset($_GET['idsp']) && ($_GET['idsp'] > 0)) {
                $onesp = loadOne_hanghoa($_GET['idsp']);
                extract($onesp);
                hang_hoa_tang_so_luot_xem($ma_hh);
                $sp_cung_loai = load_hanghoa_cung_loai($_GET['idsp'], $ma_loai);
                include "view/sanphamct.php";
            } else {
                include "view/home.php";
            }
            break;
            //----------------------------------------------------

            // chức năng đăng kí tài khoản khách hàng
        case 'dangki':
            if (isset($_POST['dangki']) && ($_POST['dangki'])) {
                $makh = $_POST['makh'];
                $pass = $_POST['pass'];
                $pass1 = $_POST['pass1'];
                $hoten = $_POST['hoten'];
                $hinh = $_FILES['hinh']['name'];
                $target_dir = "upload/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                // if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                //     //echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
                // } else {
                //     //echo "Sorry, there was an error uploading your file.";
                // }
                $email = $_POST['email'];
                //phần kiểm tra rỗng
                if ($makh == '') {
                    $loi['makh'] = 'Bạn chưa nhập Tên đăng nhập';
                }
                if ($pass == '') {
                    $loi1['pass'] = 'Bạn chưa nhập mật khẩu';
                }
                if ($pass1 == '') {
                    $loi2['pass1'] = 'Bạn chưa nhập mật khẩu';
                } else if ($pass1 != $pass) {
                    $loi2['pass1'] = 'Mật khẩu ko trùng nhau';
                }
                if ($hoten == '') {
                    $loi3['hoten'] = 'Bạn chưa nhập họ và tên khách hàng';
                }
                if ($hinh == '') {
                    $loi4['hinh'] = 'Bạn chưa nhập hình ảnh hàng hóa';
                }
                if ($email == '') {
                    $loi5['email'] = 'Bạn chưa nhập email khách hàng';
                }
                if ($makh && $pass && $pass1 && $hoten && $hinh && $email != '') {
                    insert_khachhang($makh, $pass, $hoten,  $hinh, $email);
                    $thongbao = "Đăng kí thành công mời bạn đăng nhập để thực hiện các chức năng bình luận và đặt hàng";
                }
            }
            include "view/taikhoan/dangki.php";
            break;
            //----------------------------------------------------

            // chức năng đăng nhập tài khoản khách hàng
        case 'dangnhap':
            if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
                $makh = $_POST['makh'];
                $pass = $_POST['pass'];
                //phần kiểm tra rỗng
                if ($makh == '') {
                    $loi['makh'] = 'Bạn chưa nhập Tên đăng nhập';
                }
                if ($pass == '') {
                    $loi1['pass'] = 'Bạn chưa nhập mật khẩu';
                }
                if ($makh && $pass != '') {
                    $ckeckuser = ckeckuser($makh, $pass);
                    if (is_array($ckeckuser)) {
                        $_SESSION['user'] = $ckeckuser;
                        header('location: index.php');
                    } else {
                        $thongbao = "Tài khoản không tồn tại. Vui lòng kiểm tra lại hoặc đăng ký tài khoản mới!";
                    }
                }
            }
            include "view/taikhoan/dangnhap.php";
            break;
            //----------------------------------------------------

            // chức năng cập nhật lại thông tin tài khoản khách hàng
        case 'edittk':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $makh = $_POST['makh'];
                $pass = $_POST['pass'];
                $hoten = $_POST['hoten'];
                $hinh = $_FILES['hinh']['name'];
                $target_dir = "upload/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                // if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                //     //echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
                // } else {
                //     //echo "Sorry, there was an error uploading your file.";
                // }
                $email = $_POST['email'];
                $id = $_POST['id'];
                update_tk_kh($id, $makh, $pass, $hoten, $hinh, $email);
                $_SESSION['user'] = ckeckuser($makh, $pass);
                header('location: index.php?act=edittk');
            }
            include "view/taikhoan/capnhattk.php";
            break;
            //----------------------------------------------------

            // chức năng quên mật khẩu và hiển thị mật khẩu của tài khoản khách hàng
        case 'quenmk':
            if (isset($_POST['quenmk']) && ($_POST['quenmk'])) {
                $makh = $_POST['makh'];
                $email = $_POST['email'];
                //phần kiểm tra rỗng
                if ($makh == '') {
                    $loi['makh'] = 'Bạn chưa nhập Tên đăng nhập';
                }
                if ($email == '') {
                    $loi1['email'] = 'Bạn chưa nhập email khách hàng';
                }
                if ($makh && $email != '') {
                    $checkpass = checkpass($makh, $email);
                    if (is_array($checkpass)) { // kiểm tra biến đó có phải một mảng hay ko
                        $thongbao = "Mật khẩu của bạn là: " . $checkpass['mat_khau'];
                    } else {
                        $thongbao = "Tên đăng nhập hoặc email không tồn tại!";
                    }
                }
            }
            include "view/taikhoan/quenmk.php";
            break;
            //----------------------------------------------------

            // chức năng đăng xuất tài khoản
        case 'thoat':
            session_unset();
            header('location: index.php');
            break;
            //----------------------------------------------------

            // chức năng  giới thiệu của trang chủ
        case 'gioithieu':
            include "view/gioithieu.php";
            break;
            //----------------------------------------------------

            // chức năng liên hệ của trang chủ
        case 'lienhe':
            include "view/lienhe.php";
            break;
            //----------------------------------------------------

            // chức năng góp ý của trang chủ
        case 'gopy':
            include "view/gopy.php";
            break;
            //----------------------------------------------------

            // chức năng hỏi đáp của trang chủ
        case 'hoidap':
            include "view/hoidap.php";
            break;
            //----------------------------------------------------

        default:
            include "view/home.php";
            break;
    }
} else {
    include "view/home.php";
}

include "view/footer.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body >
  
</body>

</html>
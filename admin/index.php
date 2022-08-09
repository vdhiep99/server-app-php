<?php
include "../dao/pdo.php";
include "../dao/loaihang.php";
include "../dao/khachhang.php";
include "../dao/hanghoa.php";
include "../dao/binhluan.php";
include "../dao/thongke.php";

include "header.php";
//controller

if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {

            //phần loại hàng hóa
            //phần chức năng thêm mới loài hàng
        case 'addloai':
            //kiểm tra xem người dùng có click vào nút add hay không
            if (isset($_POST['them'])) {
                $tenloai = $_POST['tenloai'];
                if ($tenloai == '') {
                    $loi['tenloai'] = 'Bạn chưa nhập tên loại hàng';
                }
                if ($tenloai != '') {
                    insert_loai($tenloai); // hàm thêm mới loại
                    $thongbao = "Thêm thành công";
                }
            }
            include "loaihang/add.php";
            break;

            //phần chức năng hiển thị danh sách loại hàng
        case 'listloai':
            $listloai = loadAll_loai(); //hàm laod tất cả loại hàng
            include "loaihang/list.php";
            break;

            //phần chức năng update loại hàng
        case 'sualoai':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $loai = loadOne_loai($_GET['id']); // hàm load 1 loại trong ds loại hàng
            }
            include "loaihang/update.php";
            break;

            //phần chức năng delete loại hàng
        case 'xoaloai':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_loai($_GET['id']); // hàm xóa loại hàng
            }
            $listloai = loadAll_loai(); //hàm laod tất cả loại hàng
            include "loaihang/list.php";
            break;

            // phần chức năng cập nhật loại hàng
        case 'updateloai':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $tenloai = $_POST['tenloai'];
                $id = $_POST['id'];
                update_loai($id, $tenloai); // hàm updata loại
                $thongbao = "Cập nhật thành công";
            }
            $listloai = loadAll_loai(); //hàm laod tất cả loại hàng
            include "loaihang/list.php";
            break;
            //-------------------------------------------------

            //phần chức năng hàng hóa
            //thêm mới hàng hóa
        case 'addhh':
            //kiểm tra xem người dùng có click vào nút add hay không
            if (isset($_POST['them']) && ($_POST['them'])) {
                $maloai = $_POST['maloai'];
                $tenhh = $_POST['tenhh'];
                $gia = $_POST['gia'];
                $giamgia = $_POST['giamgia'];
                $hinh = $_FILES['hinh']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                // if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                //     //echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
                // } else {
                //     //echo "Sorry, there was an error uploading your file.";
                // }
                $ngaynhap = date('d/m/Y');
                $mota = $_POST['mota'];
                $dacbiet = $_POST['dacbiet'];
                $so_luot_xem = $_POST['so_luot_xem'];
                //phần kiểm tra rỗng
                if ($tenhh == '') {
                    $loi['tenhh'] = 'Bạn chưa nhập tên hàng hóa';
                }
                if ($gia == '') {
                    $loi1['gia'] = 'Bạn chưa nhập giá hàng hóa';
                }
                if ($hinh == '') {
                    $loi2['hinh'] = 'Bạn chưa nhập hình ảnh hàng hóa';
                }
                if ($mota == '') {
                    $loi3['mota'] = 'Bạn chưa nhập mô tả hàng hóa';
                }
                if ($tenhh && $gia && $hinh && $mota != '') {
                    insert_hanghoa($tenhh, $gia, $giamgia, $hinh, $ngaynhap, $mota, $dacbiet, $so_luot_xem, $maloai); // hàm thêm mới loại
                    $thongbao = "Thêm thành công";
                }
            }
            $listloai = loadAll_loai();
            include "sanpham/add.php";
            break;

            //phần chức năng hiển thị danh sách loại hàng
        case 'listhh':
            if (isset($_POST['listok']) && ($_POST['listok'])) {
                $xyz = $_POST['xyz'];
                $maloai = $_POST['maloai'];
            } else {
                $xyz = "";
                $maloai = 0;
            }
            $listloai = loadAll_loai();
            $listhanghoa = loadAll_hanghoa($xyz, $maloai); //hàm laod tất cả loại hàng
            include "sanpham/list.php";
            break;

            //phần chức năng update sản phẩm trong bảng hàng hóa
        case 'suahanghoa':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $hanghoa = loadOne_hanghoa($_GET['id']); // hàm load 1 sản phẩm trong ds hàng hóa
            }
            $listloai = loadAll_loai();
            include "sanpham/update.php";
            break;

            //phần chức năng xóa sản phẩm
        case 'xoahanghoa':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_hanghoa($_GET['id']); // hàm xóa hàng hóa
            }
            $listhanghoa = loadAll_hanghoa("", 0); //hàm laod tất cả hàng hóa
            include "sanpham/list.php";
            break;

            // phần chức năng cập nhật sản phẩm
        case 'updatehh':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $id = $_POST['id'];
                $maloai = $_POST['maloai'];
                $tenhh = $_POST['tenhh'];
                $gia = $_POST['gia'];
                $giamgia = $_POST['giamgia'];
                $hinh = $_FILES['hinh']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                // if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                //     //echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
                // } else {
                //     //echo "Sorry, there was an error uploading your file.";
                // }
                $ngaynhap = $_POST['ngaynhap'];
                $mota = $_POST['mota'];
                $dacbiet = $_POST['dacbiet'];
                $so_luot_xem = $_POST['so_luot_xem'];
                update_hanghoa($id, $tenhh, $gia, $giamgia, $hinh, $ngaynhap, $mota, $dacbiet, $so_luot_xem, $maloai); // hàm updata loại
                $thongbao = "Cập nhật thành công";
            }
            $listloai = loadAll_loai(); //hàm laod tất cả loại hàng
            $listhanghoa = loadAll_hanghoa("", 0);
            include "sanpham/list.php"; //hàm laod tất cả hàng hóa
            break;
            //---------------------------------------------------

            //phần chức năng khách hàng
            //phần chức năng thêm mới khách hàng
        case 'addkh':
            //kiểm tra xem người dùng có click vào nút add hay không
            if (isset($_POST['them']) && ($_POST['them'])) {
                $makh = $_POST['makh'];
                $pass = $_POST['pass'];
                $pass1 = $_POST['pass1'];
                $hoten = $_POST['hoten'];
                $kichhoat = $_POST['kichhoat'];
                $hinh = $_FILES['hinh']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                // if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                //     //echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
                // } else {
                //     //echo "Sorry, there was an error uploading your file.";
                // }
                $email = $_POST['email'];
                $vaitro = $_POST['vaitro'];
                //phần kiểm tra rỗng
                if ($makh == '') {
                    $loi['makh'] = 'Bạn chưa nhập mã khách hàng';
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
                    insert_kh($makh, $pass, $hoten, $kichhoat,  $hinh, $email, $vaitro); // hàm thêm mới loại
                    $thongbao = "Thêm thành công";
                }
            }
            include "khachhang/add.php";
            break;

            //phần chức năng hiển thị danh sách khách hàng
        case 'listkh':
            $listkhachhang = loadAll_khachhang(); //hàm laod tất cả khách hàng
            include "khachhang/list.php";
            break;

            //phần chức năng sửa thông tin khách hàng
        case 'suakh':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $khachhang = loadone_khachhang($_GET['id']); // hàm load 1 khách hàng trong ds khách hàng
            }
            include "khachhang/update.php";
            break;

            //phần chức năng thêm mới khách hàng
        case 'updatekh':
            //kiểm tra xem người dùng có click vào nút add hay không
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {

                $pass = $_POST['pass'];
                $hoten = $_POST['hoten'];
                $kichhoat = $_POST['kichhoat'];
                $hinh = $_FILES['hinh']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                // if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                //     //echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
                // } else {
                //     //echo "Sorry, there was an error uploading your file.";
                // }
                $email = $_POST['email'];
                $vaitro = $_POST['vaitro'];
                $id = $_POST['id'];
                update_khachhang($id, $pass, $hoten, $kichhoat,  $hinh, $email, $vaitro); // hàm cập nhật thông tin khách hàng
            }
            $listkhachhang = loadAll_khachhang(); //hàm laod tất cả khách hàng
            include "khachhang/list.php";
            break;

            //phần chức năng delete khách hàng
        case 'xoakh':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_khachhang($_GET['id']); // hàm xóa khách hàng
            }
            $listkhachhang = loadAll_khachhang(); //hàm laod tất cả khách hàng
            include "khachhang/list.php";
            break;
            //---------------------------------------------------

            //phần chức năng bình luận
            //phần chức năng hiển thị danh sách bình luận
        case 'listbl':
            $listbl = loadAll_binhluan(0); //hàm laod tất cả khách hàng
            include "binhluan/list.php";
            break;

            //phần chức năng delete bình luận 
        case 'xoabl':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_bl($_GET['id']); // hàm xóa khách hàng
            }
            $listbl = loadAll_binhluan(0); //hàm laod tất cả khách hàng
            include "binhluan/list.php";
            break;
            //---------------------------------------------------

            //phần chức năng thông kế
            //phần chức năng hiển thị danh sách thông kê
        case 'listtk':
            $listthongke = loadAll_thongke(); //hàm laod tất cả khách hàng
            include "thongke/list.php";
            break;
            //phần chức năng hiển thị biêu đồ thông kê
        case 'bieudo':
            $listthongke = loadAll_thongke(); //hàm laod tất cả khách hàng
            include "thongke/bieudo.php";
            break;



            //---------------------------------------------------
        default:
            include "home.php";
            break;
    }
} else {
    include "home.php";
}


include "footer.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>
<?php

// hàm thêm mới sản phẩm vào bảng hàng hóa trong databasse
function insert_hanghoa($tenhh, $gia, $giamgia, $hinh, $ngaynhap, $mota, $dacbiet, $so_luot_xem,  $maloai)
{
    $sql = "insert into hang_hoa(ten_hh, don_gia, giam_gia, hinh,  ngay_nhap, mo_ta, dac_biet,so_luot_xem, ma_loai) value('$tenhh', '$gia', '$giamgia', '$hinh', '$ngaynhap', '$mota', '$dacbiet', '$so_luot_xem', '$maloai')";
    pdo_execute($sql);
}
//------------------------------------------------
// hàm xóa sản phẩm hàng trong databasse
function delete_hanghoa($id)
{
    $sql = "delete from hang_hoa where ma_hh=" . $id;
    pdo_execute($sql);
}
//------------------------------------------------
// hàm load tất cả danh sách hàng hóa trong database
function loadAll_hanghoa($xyz = "", $maloai = 0)
{
    $sql = "select * from hang_hoa where 1";
    if ($xyz != "") {
        $sql .= " and ten_hh like '%" . $xyz . "%'";
    }
    if ($maloai > 0) {
        $sql .= " and ma_loai='" . $maloai . "'";
    }

    $listhanghoa = pdo_query($sql);
    return $listhanghoa;
}
//------------------------------------------------
// hàm load tất cả danh sách hàng hóa trong database ra ngoài trang chủ 
function loadAll_hanghoa_home()
{
    $sql = "select * from hang_hoa where 1 order by ma_hh desc limit 0,9";
    $listhanghoa = pdo_query($sql);
    return $listhanghoa;
}
//------------------------------------------------
// hàm load 10 sản phẩm có số lượt xem ra ngoài trang chủ 
function loadAll_hanghoa_top10()
{
    $sql = "select * from hang_hoa where 1 order by so_luot_xem desc limit 0,10";
    $listhanghoa = pdo_query($sql);
    return $listhanghoa;
}
//------------------------------------------------
// hàm load sản phẩm theo tên danh mục trên dánh sách danh mục của trang chủ
function load_ten_loai($maloai)
{
    if ($maloai > 0) {
        $sql = "select * from loai where ma_loai=" . $maloai;
        $loai = pdo_query_one($sql);
        extract($loai);
        return $ten_loai;
    } else {
        return "";
    }
}
//------------------------------------------------
// hàm load một sản phẩm trong danh sách hàng hóa trong database
function loadOne_hanghoa($id)
{
    $sql = "select * from hang_hoa where ma_hh=" . $id;
    $hanghoa = pdo_query_one($sql);
    return $hanghoa;
}
//------------------------------------------------
// hàm load các sản phẩm cùng loại với 1 sp chi tiết trong danh sách hàng hóa trong database
function load_hanghoa_cung_loai($id, $ma_loai)
{
    $sql = "select * from hang_hoa where ma_loai=" . $ma_loai . " and ma_hh <>" . $id. " order by ma_loai desc limit 0,6";
    $listhanghoa = pdo_query($sql);
    return $listhanghoa;
}
//------------------------------------------------
// hàm update một sản phẩm trong danh sách hàng hóa trong database
function  update_hanghoa($id, $tenhh, $gia, $giamgia, $hinh, $ngaynhap, $mota, $dacbiet, $so_luot_xem, $maloai)
{
    if ($hinh != "") {
        $sql = "update hang_hoa set ten_hh='" . $tenhh . "', don_gia='" . $gia . "', giam_gia='" . $giamgia . "', hinh='" . $hinh . "',ngay_nhap='" . $ngaynhap . "',mo_ta='" . $mota . "',dac_biet='" . $dacbiet . "', so_luot_xem='" . $so_luot_xem . "', ma_loai='" . $maloai . "' where ma_hh=" . $id;
    } else {
        $sql = "update hang_hoa set ten_hh='" . $tenhh . "', don_gia='" . $gia . "', giam_gia='" . $giamgia . "', ngay_nhap='" . $ngaynhap . "',mo_ta='" . $mota . "',dac_biet='" . $dacbiet . "', so_luot_xem='" . $so_luot_xem . "', ma_loai='" . $maloai . "' where ma_hh=" . $id;
    }

    pdo_execute($sql);
}
function hang_hoa_tang_so_luot_xem($ma_hh){
    $sql = "UPDATE hang_hoa SET so_luot_xem = so_luot_xem + 1 WHERE ma_hh=?";
    pdo_execute($sql, $ma_hh);
}
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
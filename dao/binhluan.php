<?php
// hàm thêm mới vbình luận vào databasse
function insert_binhluan($noidung,$mahh,$id,$ngay_bl)
{
    $sql = "insert into binh_luan(noi_dung,ma_hh,id,ngay_bl) value('$noidung','$mahh','$id','$ngay_bl')";
    pdo_execute($sql);
}
//------------------------------------------------
// hàm load tất cả danh sách bình luận trong database ra trang chủ
function loadAll_binhluan_home($ma_hh)
{
    $sql = "select b.*, k.ma_kh, k.id from binh_luan b join khach_hang k on k.id=b.id where 1 ";
    if($ma_hh>0) $sql.= " and ma_hh='".$ma_hh."' ";
    $listbl = pdo_query($sql);
    return $listbl;
}
//------------------------------------------------
// hàm load tất cả danh sách bình luận trong database ra dsbl trong admin
function loadAll_binhluan()
{
    $sql = "select *, k.ma_kh, k.id, h.ten_hh from khach_hang k join binh_luan b on k.id=b.id join hang_hoa h on h.ma_hh=b.ma_hh where 1  order by ma_bl desc";
    $listbl = pdo_query($sql);
    return $listbl;
}
//------------------------------------------------
// hàm xóa bình luận trong databasse
function delete_bl($id)
{
    $sql = "delete from binh_luan where ma_bl=" . $id;
    pdo_execute($sql);
}
//------------------------------------------------

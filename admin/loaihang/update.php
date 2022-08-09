<?php
if (is_array($loai)) {
    extract($loai);
}
?>
<div class="hop">
    <div class="row">
        <div class="row frmtitle">
            <H1>CẬP NHẬT LOẠI HÀNG HÓA</H1>
        </div>
        <div class="row frmcontent">
            <form action="index.php?act=updateloai" method="post">
                <div class="row mb10">
                    Mã loại<br>
                    <input type="text" name="maloai" value="<?php if (isset($ma_loai) && ($ma_loai != "")) echo $ma_loai; ?>" disabled>
                </div>
                <div class="row mb10">
                    Tên loại<br>
                    <input type="text" name="tenloai" value="<?php if (isset($ten_loai) && ($ten_loai != "")) echo $ten_loai; ?>">
                </div>
                <div class="row mb10">
                    <input type="hidden" name="id" value="<?php if (isset($ma_loai) && ($ma_loai != "")) echo $ma_loai; ?>">
                    <input type="submit" name="capnhat" value="Cập nhật">
                    <input type="reset" value="Nhập lại">
                    <a href="index.php?act=listloai"><input type="button" value="Danh sách"></a>
                </div>

            </form>
        </div>
    </div>
</div>
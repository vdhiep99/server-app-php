<?php
if (is_array($hanghoa)) {
    extract($hanghoa);
    //extract là hàm trả về các biến trong mảng 
}
$hinhpath = "../upload/" . $hinh;
if (is_file($hinhpath)) {
    $hinh = "<img src='" . $hinhpath . "' height='100px' >";
} else {
    $hinh = "NO photo";
}
?>
<div class="hop">

    <div class="row">
        <div class="row frmtitle">
            <H1>CẬP NHẬT SẢN PHẨM</H1>
        </div>
        <div class="row frmcontent1">
            <form action="index.php?act=updatehh" method="post" enctype="multipart/form-data">
                <div class="row mb11">
                    Mã hàng hóa<br>
                    <input type="text" name="mahh" value="<?php if (isset($ma_hh) && ($ma_hh != "")) echo $ma_hh; ?>" disabled>
                </div>
                <div class="row mb11">
                    Tên hàng hóa<br>
                    <input type="text" name="tenhh" value="<?php if (isset($ten_hh) && ($ten_hh != "")) echo $ten_hh; ?>">
                </div>
                <div class="row mb11">
                    Đơn giá<br>
                    <input type="text" name="gia" value="<?php if (isset($don_gia) && ($don_gia != "")) echo $don_gia; ?>">
                </div>
                <div class="row mb11">
                    Giảm giá<br>
                    <input type="text" name="giamgia" value="<?php if (isset($giam_gia) && ($giam_gia != "")) echo $giam_gia; ?>">
                </div>
                <div class="row mb11">
                    Hình ảnh<br>
                    <div class="box">
                        <input type="file" name="hinh">
                        <p> <?= $hinh ?></p>
                    </div>
                </div>
                <div class="row mb11">
                    Loại hàng<br>
                    <select name="maloai" class="loai">
                        <option value="0" selected>Tất cả</option>
                        <?php
                        foreach ($listloai as $loai) {
                            // extract($loai);
                            if ($ma_loai == $loai['ma_loai']) {
                                echo '<option value="' . $loai['ma_loai'] . '" selected>' . $loai['ten_loai'] . '</option>';
                            } else {
                                echo '<option value="' . $loai['ma_loai'] . '">' . $loai['ten_loai'] . '</option>';
                            }
                        }
                        ?>
                    </select>
                </div>
                <div class="row mb11">
                    Hàng đặc biệt<br>
                    <div class="box">
                        <label><input name="dacbiet" value="0" type="radio" <?= $dac_biet ? '' : 'checked' ?>>Đặc biệt</label>
                        <label><input name="dacbiet" value="1" type="radio" <?= $dac_biet ? 'checked' : '' ?>>Bình thường</label>
                    </div>
                </div>
                <div class="row mb11">
                    Ngày nhập<br>
                    <input type="text" name="ngaynhap" value="<?= $ngay_nhap ?>">
                </div>
                <div class="row mb11">
                    Số lượt xem<br>
                    <input type="text" name="so_luot_xem" readonly value="<?= $so_luot_xem ?>">
                </div>
                <div class="row mb11">
                    Mô tả<br>
                    <textarea name="mota" cols="50" rows="10"><?= $mo_ta ?></textarea>
                </div>
                <div class="row mb11">
                    <input type="hidden" name="id" value="<?php if (isset($ma_hh) && ($ma_hh != "")) echo $ma_hh; ?>">
                    <input type="submit" name="capnhat" value="Cập nhật">
                    <input type="reset" value="Nhập lại">
                    <a href="index.php?act=listhh"><input type="button" value="Danh sách"></a>
                </div>

            </form>
        </div>
    </div>
</div>
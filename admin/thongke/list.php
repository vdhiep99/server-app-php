<div class="hop">
    <div class="row">
        <div class="row frmtitle">
            <H1>BẢNG THÔNG KẾ HÀNG HÓA TỪNG LOẠI</H1>
        </div>
        <div class="row frmcontent">
            <div class="row mb10 frmthongke">
                <table border="1">
                    <tr>
                        <th>LOẠI HÀNG</th>
                        <th>SỐ LƯỢNG</th>
                        <th>GIÁ CAO NHÂT</th>
                        <th>GIÁ THẤP NHÂT</th>
                        <th>GIÁ TRUNG BÌNH</th>
                    </tr>
                    <?php foreach ($listthongke as $thongke) {
                        extract($thongke);
                    ?>
                        <tr>
                            <td><?= $ten_loai ?></td>
                            <td><?= $so_luong ?></td>
                            <td><?= number_format($gia_max) ?> VNĐ</td>
                            <td><?= number_format($gia_min) ?> VNĐ</td>
                            <td><?= number_format($gia_avg) ?> VNĐ</td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
            <div class="row mb10">
                <a href="index.php?act=bieudo"><input type="button" value="Xem biểu đò"></a>
            </div>
        </div>
    </div>
</div>
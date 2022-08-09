<div class="hop">
    <div class="row">
        <div class="row frmtitle">
            <H1>DANH SÁCH BÌNH LUẬN</H1>
        </div>
        <div class="row frmcontent">
            <div class="row mb10 frmdsbl">
                <table border="1">
                    <tr>
                        <th>MÃ BÌNH LUẬN</th>
                        <th>KHÁCH Hàng</th>
                        <th>NỘI DUNG</th>
                        <th>HÀNG HÓA</th>
                        <th>NGÀY BÌNH LUẬN</th>
                        <th colspan="2">Action</th>
                    </tr>
                    <?php foreach ($listbl as $bl) {
                        extract($bl);
                        $xoabl = "index.php?act=xoabl&id=" . $ma_bl;
                    ?>
                        <tr>
                            <td><?= $ma_bl ?></td>
                            <td><?= $ma_kh ?> </td>
                            <td><?= $noi_dung ?></td>
                            <td><?= $ten_hh ?></td>
                            <td><?= $ngay_bl ?></td>
                            <td class="xoa1"> <a href="<?= $xoabl ?>"><button class="xoa">Xóa</button></a> </td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
</div>
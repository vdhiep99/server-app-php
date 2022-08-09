<div class="hop">
    <div class="row">
        <div class="row frmtitle">
            <H1>THÊM MỚI LOẠI HÀNG HÓA</H1>
        </div>
        <div class="row frmcontent">
            <b> <?php if (isset($thongbao) && ($thongbao != "")) echo $thongbao; ?></b>
            <form action="index.php?act=addloai" method="post">
                <div class="row mb10">
                    Mã loại<br>
                    <input type="text" name="maloai" disabled>
                </div>
                <div class="row mb10">
                    Tên loại<br>
                    <input type="text" name="tenloai">
                    <div class="loi"> <?php echo (isset($loi['tenloai'])) ? $loi['tenloai'] : ''; ?></div>
                </div>
                <div class="row mb10">
                    <input type="submit" name="them" value="Thêm mới">
                    <input type="reset" value="Nhập lại">
                    <a href="index.php?act=listloai"><input type="button" value="Danh sách"></a>
                </div>

            </form>
        </div>
    </div>
</div>
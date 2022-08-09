<div class="content">
    <div class="boxtrai">
        <div class="row mb">
            <?php
            extract($onesp);
            ?>
            <div class="boxtitle"><?= $ten_hh ?></div>
            <div class="row boxcontent">
                <?php
                $hinh = $img_path . $hinh;
                echo '  <div class="row mb ctsp"> <img src="' . $hinh . '" style="width: 230px;" height="255px" > </div>';
                echo '<p>MÃ HÀNG HÓA: ' . $ma_hh . '</p>';
                echo '<p>GIÁ: ' . number_format($don_gia) . 'VNĐ</p>';
                echo '<p>GIẢM GIÁ: ' . $giam_gia . '%</p>';
                echo '<p>MÔ TẢ: ' . $mo_ta . '</p>';
                ?>
            </div>
        </div>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
            $(document).ready(function() {
                $("#binhluan").load("view/binhluan/binhluanfrom.php", {
                    mahh: <?= $ma_hh ?>
                });

            });
        </script>
        <div class="row" id="binhluan">

        </div>

        <div class="row mb">
            <div class="boxtitle">SẢN PHẨM CÙNG LOẠI</div>
            <div class="row boxcungloai">
                <?php
                foreach ($sp_cung_loai as $sp_cung_loai) {
                    extract($sp_cung_loai);
                    $linksp = "index.php?act=spct&idsp=" . $ma_hh;
                    $hinh = $img_path . $hinh;
                    echo    '<div class="boxsp1">
                                <div class="img1"><a href="' . $linksp . '"><img src="' . $hinh . '" alt=""></a></div>
                                <p class="ten1"><a href="' . $linksp . '">' . $ten_hh . '</a></p>
                                <p class="gia1">' . number_format($don_gia) . ' VNĐ</p> 
                            </div>';
                }
                ?>
            </div>
        </div>
    </div>
    <!------------------------------------------------------------------------------------>
    <!-- box bên phải -->
    <div class="boxphai">
        <?php include "boxphai.php"; ?>
    </div>
</div>
<div class="content">
    <div class="boxtrai">
        <div class="row">
            <div class="banner">
                <div class="slideshow-container">
                    <div class="mySlides fade">
                        <a href="#"> <img src="view/images/anh1.jpg" width="720px" height="300px"></a>
                    </div>
                    <div class="mySlides fade">
                        <a href="#"> <img src="view/images/anh2.jpg" width="720px" height="300px"></a>
                    </div>
                    <div class="mySlides fade">
                        <a href="#"> <img src="view/images/anh3.jpg" width="720px" height="300px"></a>
                    </div>
                    <div class="mySlides fade">
                        <a href="#"> <img src="view/images/anh4.jpg" width="720px" height="300px"></a>
                    </div>
                    <div class="mySlides fade">
                        <a href="#"> <img src="view/images/anh5.jpg" width="720px" height="300px"></a>
                    </div>
                    <div class="mySlides fade">
                        <a href="#"> <img src="view/images/anh6.jpg" width="720px" height="300px"></a>
                    </div>
                    <div class="mySlides fade">
                        <a href="#"></a> <img src="view/images/anh7.jpg" width="720px" height="300px"></a>
                    </div>
                    <div class="mySlides fade">
                        <a href="#"> <img src="view/images/anh8.jpg" width="720px" height="300px"></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <!--box các sản phẩm -->
            <?php
            foreach ($spnew as $hanghoa) {
                extract($hanghoa); //extract là hàm trả về các biến trong mảng spnew
                $linksp = "index.php?act=spct&idsp=" . $ma_hh;
                $hinh = $img_path . $hinh;
                echo    '<div class="boxsp">
                            <div class="img"><a href="' . $linksp . '"><img src="' . $hinh . '" alt=""></a></div>
                            <p class="ten"><a href="' . $linksp . '">' . $ten_hh . '</a></p>
                            <p class="gia">' . number_format($don_gia) . ' VNĐ</p> 
                        </div>';
            }
            ?>
        </div>
    </div>
    <!------------------------------------------------------------------------------------>
    <!-- box bên phải -->
    <div class="boxphai">
        <?php include "boxphai.php"; ?>
    </div>
</div>
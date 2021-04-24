<?php
    $header = <<<EOD
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="/frontend_hotel/main.php">Logo</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/frontend_hotel/main.php">หน้าหลัก</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/frontend_hotel/search.php">ค้นหาโรงแรม</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">ยืนยันการชำระเงิน</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/frontend_hotel/review.php">รีวิวห้องพัก</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">ร้องเรียน</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">ห้องที่จอง</a>
                </li>
            </ul>
            <span class="navbar-text">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item me-2">
                        <h5>
                            <a class="nav-link" href="#">เข้าสู่ระบบ</a>
                        </h5>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="btn btn-secondary">
                            สมัครสมาชิก
                        </button>
                    </li>
                </ul>
            </span>
        </div>
    </div>
</nav>
<div style="height: 3px; background-color: rgb(107, 107, 107);"></div>
EOD;
    echo $header;
?>
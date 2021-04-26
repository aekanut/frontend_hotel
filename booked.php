<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;1,100;1,200;1,300;1,400&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
        integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"
        integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous">
    </script>
    <style>
        body {
            font-family: 'Prompt', sans-serif !important;
        }
    </style>
    <title>ห้องที่จอง</title>
</head>

<body>
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
                        <a class="nav-link" href="/frontend_hotel/complain.php">ร้องเรียน</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/frontend_hotel/booked.php">ห้องที่จอง</a>
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

    

    <div class="container w-50">
        <div class="row">
            <h1 class="my-4">
                ห้องที่จอง
            </h1>
        </div>
        <div class="row border border-3 rounded-3 border-secondary mx-1">
            <div class="d-flex fs-4 m-3">
                <div class=" fw-bold">
                    15 พ.ค. 2021 
                </div>
                <div class="mx-2 fw-bold">
                    -
                </div>
                <div class="fw-bold">
                    17 พ.ค. 2021
                </div>
                <div class="ms-auto me-4 fw-bold">
                    2 คืน
                </div>
            </div>
                
            <div class="d-flex fs-4 m-3">
                <div class="">
                    ชื่อโรงแรม 
                </div>
                <div class="mx-2">
                    /
                </div>
                <div>
                    ชื่อห้องพัก
                </div>
            </div>

            <div class="d-flex fs-4 m-3">
                <div class="">
                    ผู้ใหญ่ 2 เด็ก 1 
                </div>
                <div class="mx-2">
                    +
                </div>
                <div>
                    เตียงเสริม + อาหารเช้า
                </div>
            </div>
        </div>
        
    </div>

    <div class="container w-50 my-3">
        <div class="row border border-3 rounded-3 border-secondary mx-1">
            <div class="d-flex fs-4 m-3">
                <div class=" fw-bold">
                    15 พ.ค. 2021 
                </div>
                <div class="mx-2 fw-bold">
                    -
                </div>
                <div class="fw-bold">
                    17 พ.ค. 2021
                </div>
                <div class="ms-auto me-4 fw-bold">
                    2 คืน
                </div>
            </div>
                
            <div class="d-flex fs-4 m-3">
                <div class="">
                    ชื่อโรงแรม 
                </div>
                <div class="mx-2">
                    /
                </div>
                <div>
                    ชื่อห้องพัก
                </div>
            </div>

            <div class="d-flex fs-4 m-3">
                <div class="">
                    ผู้ใหญ่ 2 เด็ก 1 
                </div>
                <div class="mx-2">
                    +
                </div>
                <div>
                    เตียงเสริม + อาหารเช้า
                </div>
            </div>
        </div>
        
    </div>
</body>

</html>
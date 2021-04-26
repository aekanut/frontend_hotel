<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;1,100;1,200;1,300;1,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous">
    </script>
    <title>รีวิวห้องพัก</title>
    <style>
        body {
            font-family: 'Prompt', sans-serif !important;
        }
    </style>
</head>

<body>
    <header>
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
                    <a class="nav-link active" href="/frontend_hotel/review.php">รีวิวห้องพัก</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/frontend_hotel/complain.php">ร้องเรียน</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/frontend_hotel/booked.php">ห้องที่จอง</a>
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
    </header>

    <main class="p-5">
        <div name="head" class="d-flex flex-row">
            <p style="font-size:calc(1.375rem + 1.5vw); font-weight:bolder;" class="mx-4 mb-2">รีวิวห้องพัก</p>
            <p style="font-size:calc(1.375rem + 1.5vw);" class="mb-2 mx-5">โรงแรม 1</p>
        </div>

        <div name="image" class="d-flex my-2 justify-content-between" style="height: 350px;">
            <img src="https://www.digopaul.com/wp-content/uploads/related_images/2015/09/09/square_1.jpg" width="350px" alt="">
            <img src="https://www.digopaul.com/wp-content/uploads/related_images/2015/09/09/square_1.jpg" width="350px" alt="">
            <div class="border rounded border-secondary p-5 border-2 mx-5" style="width: 45%;">
                <center>
                    ข้อมูลที่พัก
                </center>
            </div>
        </div>

        <div name="name" class="d-flex flex justify-content-between my-4">
            <div class="mx-4" style="font-size:calc(1.00rem + 1.0vw); font-weight:bolder;">
                รีวิวจากผู้พัก
            </div>
            <div class="mx-5">
                <button style="font-size:calc(.9rem + .9vw);" class="btn btn-secondary px-5" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    รีวิว
                </button>
                <form action="">
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <input type="text" class="w-100 mx-4 form-control fs-2 border-secondary" placeholder="เขียนหัวข้อรีวิว" required>
                                </div>
                                <div class="modal-body">
                                    <center>
                                        <div class="container">
                                            <div class="row justify-content-around">
                                                <div class="col-3 border rounded border-secondary">
                                                    <center>
                                                        <p class="fs-4 my-5">ให้คะแนน</p>
                                                        <h2 id="changeText" class="">
                                                            5 คะแนน
                                                        </h2>
                                                        <input type="range" class="form-range w-50 my-4" min="0" max="10" onchange="changeRange()" id="customRange">
                                                    </center>
                                                </div>
                                                <div class="col-8">
                                                    <textarea class="w-100 form-control fs-4 mx-2 border-secondary" rows="8" placeholder="ข้อความรีวิว"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </center>
                                </div>
                                <div class="modal-footer">
                                    <div class="mx-4">
                                        <button type="submit" class="btn btn-primary">บันทึก</button>
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ปิด</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="reviewed">
            <div class="container">
                <div class="row my-3" style="height: 270px;">
                    <div class="col-4 border-top border-start border-bottom rounded-start border-secondary border-3 bg-white">
                        <center>
                            <h1 class="mt-3 mx-3 py-4 fw-bold" style="font-size: 50px;">
                                9 คะแนน
                            </h1>
                        </center>

                        <div class="fs-2 mx-3 fw-bold">
                            จาก
                        </div>
                        <div class="fs-2 mx-3">
                            บอล
                        </div>

                    </div>
                    <div class="col-8 border border-secondary rounded-end border-3 bg-white">
                        <div class="container">
                            <div class="row">
                                <div class="fw-bold p-2 mx-2 my-2" style="font-size: 50px;">
                                    หัวข้อที่รีวิวแล้ว
                                </div>
                            </div>
                            <div class="row">
                                <p style="word-wrap: break-word;" class="fs-5">
                                    ข้อความที่รีวิว
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row my-3" style="height: 270px;">
                    <div class="col-4 border-top border-start border-bottom rounded-start border-secondary border-3 bg-white">
                        <center>
                            <h1 class="mt-3 mx-3 py-4 fw-bold" style="font-size: 50px;">
                                9 คะแนน
                            </h1>
                        </center>

                        <div class="fs-2 mx-3 fw-bold">
                            จาก
                        </div>
                        <div class="fs-2 mx-3">
                            บอล
                        </div>

                    </div>
                    <div class="col-8 border border-secondary rounded-end border-3 bg-white">
                        <div class="container">
                            <div class="row">
                                <div class="fw-bold p-2 mx-2 my-2" style="font-size: 50px;">
                                    หัวข้อที่รีวิวแล้ว
                                </div>
                            </div>
                            <div class="row">
                                <p style="word-wrap: break-word;" class="fs-5">
                                    ข้อความที่รีวิว
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script>
        const changeRange = () => {
            const changeValue = document.getElementById('customRange').value
            document.getElementById('changeText').innerHTML = changeValue + ' คะแนน'
        }
    </script>
</body>

</html>
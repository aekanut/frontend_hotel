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
    <title>ประเภทห้อง</title>
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

    <div class="container">
        <div class="row justify-content-around border border-secondary border-4 rounded m-4 py-3">
            <div class="col-3">
                <div class="d-flex fs-3 fw-bold">
                    <div class="mx-3 my-3">
                        ห้องพัก
                    </div>
                    <div class="text-decoration-underline my-3" id="1">
                        เลขห้อง
                    </div>
                </div>

                <div class="d-flex">
                    <img src="https://www.digopaul.com/wp-content/uploads/related_images/2015/09/09/square_1.jpg" width="150px" height="150px" alt="">
                    <img src="https://www.digopaul.com/wp-content/uploads/related_images/2015/09/09/square_1.jpg" width="150px" height="150px" alt="">
                </div>
                
            </div>
            <div class="col-8">
                <div class="container fs-3 my-3 fw-bold">
                    <div class="row">
                        <div class="col-4">
                            รายละเอียดห้องพัก
                        </div>
                        <div class="col-2">
                            ผู้เข้าพัก
                        </div>
                        <div class="col-4">
                            อาหารเช้า
                        </div>
                        <div class="col2">

                        </div>
                    </div>
                </div>
                <div class="container fs-5 mt-4">
                    <div class="row">
                        <div class="col-4 border border-3 border-end-0 border-secondary">
                            <div>
                                ราคานี้รวม:
                            </div>
                            <div class="mx-3">
                                ฟรี! Wi-Fi
                            </div>
                            <div class="mx-3">
                                ฟรี! สระว่ายน้ำ
                            </div>
                        </div>
                        <div class="col-2 border border-3 border-end-0 border-secondary">
                            <center>
                                <div class="material-icons fs-1 fw-bold my-2">
                                    people
                                </div>
                            </center>
                            <center>
                                <div>
                                    2 คน
                                </div>
                            </center>
                        </div>
                        <div class="col-4 border border-3 border-end-0 border-secondary py-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" id="morningFood">
                                <label class="form-check-label" for="morningFood">
                                  อาหารเช้า
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" id="extraBed">
                                <label class="form-check-label" for="extraBed">
                                  เพิ่มเตียงเสริม
                                </label>
                              </div>
                              
                        </div>
                        <div class="col-2 border border-3 border-secondary">
                            <center>
                                <button type="button" class="btn btn-secondary fs-3 my-4" id="button1">จอง</button>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-around border border-secondary border-4 rounded m-4 py-3">
            <div class="col-3">
                <div class="d-flex fs-3 fw-bold">
                    <div class="mx-3 my-3">
                        ห้องพัก
                    </div>
                    <div class="text-decoration-underline my-3" id="2">
                        เลขห้อง
                    </div>
                </div>

                <div class="d-flex">
                    <img src="https://www.digopaul.com/wp-content/uploads/related_images/2015/09/09/square_1.jpg" width="150px" height="150px" alt="">
                    <img src="https://www.digopaul.com/wp-content/uploads/related_images/2015/09/09/square_1.jpg" width="150px" height="150px" alt="">
                </div>
                
            </div>
            <div class="col-8">
                <div class="container fs-3 my-3 fw-bold">
                    <div class="row">
                        <div class="col-4">
                            รายละเอียดห้องพัก
                        </div>
                        <div class="col-2">
                            ผู้เข้าพัก
                        </div>
                        <div class="col-4">
                            อาหารเช้า
                        </div>
                        <div class="col2">

                        </div>
                    </div>
                </div>
                <div class="container fs-5 mt-4">
                    <div class="row">
                        <div class="col-4 border border-3 border-end-0 border-secondary">
                            <div>
                                ราคานี้รวม:
                            </div>
                            <div class="mx-3">
                                ฟรี! Wi-Fi
                            </div>
                            <div class="mx-3">
                                ฟรี! สระว่ายน้ำ
                            </div>
                        </div>
                        <div class="col-2 border border-3 border-end-0 border-secondary">
                            <center>
                                <div class="material-icons fs-1 fw-bold my-2">
                                    people
                                </div>
                            </center>
                            <center>
                                <div>
                                    2 คน
                                </div>
                            </center>
                        </div>
                        <div class="col-4 border border-3 border-end-0 border-secondary py-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" id="morningFood">
                                <label class="form-check-label" for="morningFood">
                                  อาหารเช้า
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" id="extraBed">
                                <label class="form-check-label" for="extraBed">
                                  เพิ่มเตียงเสริม
                                </label>
                              </div>
                              
                        </div>
                        <div class="col-2 border border-3 border-secondary">
                            <center>
                                <button type="button" class="btn btn-secondary fs-3 my-4" id="button2">จอง</button>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-around border border-secondary border-4 rounded m-4 py-3">
            <div class="col-3">
                <div class="d-flex fs-3 fw-bold">
                    <div class="mx-3 my-3">
                        ห้องพัก
                    </div>
                    <div class="text-decoration-underline my-3" id="3">
                        เลขห้อง
                    </div>
                </div>

                <div class="d-flex">
                    <img src="https://www.digopaul.com/wp-content/uploads/related_images/2015/09/09/square_1.jpg" width="150px" height="150px" alt="">
                    <img src="https://www.digopaul.com/wp-content/uploads/related_images/2015/09/09/square_1.jpg" width="150px" height="150px" alt="">
                </div>
                
            </div>
            <div class="col-8">
                <div class="container fs-3 my-3 fw-bold">
                    <div class="row">
                        <div class="col-4">
                            รายละเอียดห้องพัก
                        </div>
                        <div class="col-2">
                            ผู้เข้าพัก
                        </div>
                        <div class="col-4">
                            อาหารเช้า
                        </div>
                        <div class="col2">

                        </div>
                    </div>
                </div>
                <div class="container fs-5 mt-4">
                    <div class="row">
                        <div class="col-4 border border-3 border-end-0 border-secondary">
                            <div>
                                ราคานี้รวม:
                            </div>
                            <div class="mx-3">
                                ฟรี! Wi-Fi
                            </div>
                            <div class="mx-3">
                                ฟรี! สระว่ายน้ำ
                            </div>
                        </div>
                        <div class="col-2 border border-3 border-end-0 border-secondary">
                            <center>
                                <div class="material-icons fs-1 fw-bold my-2">
                                    people
                                </div>
                            </center>
                            <center>
                                <div>
                                    2 คน
                                </div>
                            </center>
                        </div>
                        <div class="col-4 border border-3 border-end-0 border-secondary py-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" id="morningFood">
                                <label class="form-check-label" for="morningFood">
                                  อาหารเช้า
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" id="extraBed">
                                <label class="form-check-label" for="extraBed">
                                  เพิ่มเตียงเสริม
                                </label>
                              </div>
                              
                        </div>
                        <div class="col-2 border border-3 border-secondary">
                            <center>
                                <button type="button" class="btn btn-secondary fs-3 my-4" id="button3">จอง</button>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
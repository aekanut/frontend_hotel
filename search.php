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
    <title>ค้นหาโรงแรม</title>

    <style>
        body {
            font-family: 'Prompt', sans-serif !important;
        }

        #search_box {
            max-width: 98%;
        }

        .scale {
            transform: scale(1.20);
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
                    <a class="nav-link active" href="/frontend_hotel/search.php">ค้นหาโรงแรม</a>
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

    <main>
        
        <div class="container my-3" id="search_box">
            <div class="row justify-content-around border border-3 p-2 rounded-2 border-secondary">
                <div class="col-3">
                    <div class="container px-0">
                        <div class="row border rounded-5 rounded-3 border-secondary border-2 bg-white justify-content-around">
                            <div class="col-1">
                                <center>
                                    <div class="material-icons fs-2 fw-bold mt-2">
                                        search
                                    </div>
                                </center>
                            </div>
                            <div class="col-10">
                                <input class="form-control form-control-borderless my-1" id="searchText" type="search" placeholder="ใส่ชื่อจังหวัดหรือที่พัก">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <div class="container px-0">
                        <div class="row border rounded-3 border-secondary border-2 bg-white justify-content-between">
                            <div class="col-1">
                                <center>
                                    <div class="material-icons fs-2 fw-bold mt-2">
                                        date_range
                                    </div>
                                </center>
                            </div>
                            <div class="col-10">
                                <center>
                                    <input class="form-control form-control-sm form-control-borderless fs-8 my-2" id="checkIn" min="<?php echo date('Y-m-d'); ?>" value="<?php echo date('Y-m-d'); ?>" onchange="changeCheckOut(value)" type="date">
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <div class="container px-0">
                        <div class="row border rounded-3 border-secondary border-2 bg-white justify-content-between">
                            <div class="col-1">
                                <center>
                                    <div class="material-icons fs-2 fw-bold mt-2">
                                        date_range
                                    </div>
                                </center>
                            </div>
                            <div class="col-10">
                                <center>
                                    <input class="form-control form-control-sm form-control-borderless fs-8 my-2" id="checkOut" min="<?php
                                                                                                                                        $date = date('Y-m-d');
                                                                                                                                        $tomorrow = date('Y-m-d', strtotime($date . "+1 days"));
                                                                                                                                        echo $tomorrow;
                                                                                                                                        ?>" value="<?php
                                                                                                                                                    $date = date('Y-m-d');
                                                                                                                                                    $tomorrow = date('Y-m-d', strtotime($date . "+1 days"));
                                                                                                                                                    echo $tomorrow;
                                                                                                                                                    ?>" type="date">
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-2 border rounded-3 border-secondary border-2 bg-white">
                    <div class="container px-0 my-2">
                        <div class="row justify-content-between">
                            <div class="col-1">
                                <center>
                                    <div class="material-icons fs-2 fw-bold">
                                        people
                                    </div>
                                </center>
                            </div>
                            <div class="col-10">
                                <center>
                                    <select class="form-select form-select-sm form-select-borderless fs-8" id="people" aria-label="Default select example">
                                        <option selected value="2">2 ท่าน</option>
                                        <option value="3">3 ท่าน</option>
                                        <option value="4">4 ท่าน</option>
                                    </select>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-1">
                    <button type="button" class="btn btn-secondary btn-lg my-1 mx-0 scale" onclick="goSearch()">ค้นหา</button>
                </div>
            </div>
        </div>

        <div style="height: 3px; background-color: rgb(107, 107, 107);"></div>

        <div class="container">
            <div class="row my-3">
                <div class="col-3 border-top border-start border-bottom rounded-start border-secondary border-3 bg-white">
                    <div id="carouselExampleControls1" class="carousel slide" data-bs-ride="carousel">
                        <center>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="https://www.digopaul.com/wp-content/uploads/related_images/2015/09/09/square_1.jpg" class="d-block" style="width: 270px; height: 270px" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="https://www.digopaul.com/wp-content/uploads/related_images/2015/09/09/square_1.jpg" class="d-block" style="width: 270px; height: 270px" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="https://www.digopaul.com/wp-content/uploads/related_images/2015/09/09/square_1.jpg" class="d-block" style="width: 270px; height: 270px" alt="...">
                                </div>
                            </div>
                        </center>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls1" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls1" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="col-6 border border-secondary border-3 bg-white">
                    <div class="container">
                        <div class="row">
                            <div class="fw-bold p-2 mx-2" style="font-size: 50px;">
                                โรงแรม 1
                            </div>
                        </div>
                        <div class="row">
                            <p style="word-wrap: break-word;">
                                ใส่เพิ่มได้
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-3 d-flex align-items-start flex-column border-top border-end border-bottom rounded-end border-secondary border-3 bg-white">
                    <div class="mb-auto"></div>
                    <div class="fw-bold">
                        <h2>
                            ราคา
                        </h2>
                    </div>
                    <div class="my-3">
                        <h3>
                            2,500 บาท
                        </h3>
                    </div>
                </div>
            </div>

            <div class="row my-3">
                <div class="col-3 border-top border-start border-bottom rounded-start border-secondary border-3 bg-white">
                    <div id="carouselExampleControls2" class="carousel slide" data-bs-ride="carousel">
                        <center>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="https://www.digopaul.com/wp-content/uploads/related_images/2015/09/09/square_1.jpg" class="d-block" style="width: 270px; height: 270px" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="https://www.digopaul.com/wp-content/uploads/related_images/2015/09/09/square_1.jpg" class="d-block" style="width: 270px; height: 270px" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="https://www.digopaul.com/wp-content/uploads/related_images/2015/09/09/square_1.jpg" class="d-block" style="width: 270px; height: 270px" alt="...">
                                </div>
                            </div>
                        </center>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls2" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls2" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="col-6 border border-secondary border-3 bg-white">
                    <div class="container">
                        <div class="row">
                            <div class="fw-bold p-2 mx-2" style="font-size: 50px;">
                                โรงแรม 1
                            </div>
                        </div>
                        <div class="row">
                            <p style="word-wrap: break-word;">
                                ใส่เพิ่มได้
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-3 d-flex align-items-start flex-column border-top border-end border-bottom rounded-end border-secondary border-3 bg-white">
                    <div class="mb-auto"></div>
                    <div class="fw-bold">
                        <h2>
                            ราคา
                        </h2>
                    </div>
                    <div class="my-3">
                        <h3>
                            2,500 บาท
                        </h3>
                    </div>
                </div>
            </div>

            <div class="row my-3">
                <div class="col-3 border-top border-start border-bottom rounded-start border-secondary border-3 bg-white">
                    <div id="carouselExampleControls3" class="carousel slide" data-bs-ride="carousel">
                        <center>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="https://www.digopaul.com/wp-content/uploads/related_images/2015/09/09/square_1.jpg" class="d-block" style="width: 270px; height: 270px" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="https://www.digopaul.com/wp-content/uploads/related_images/2015/09/09/square_1.jpg" class="d-block" style="width: 270px; height: 270px" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="https://www.digopaul.com/wp-content/uploads/related_images/2015/09/09/square_1.jpg" class="d-block" style="width: 270px; height: 270px" alt="...">
                                </div>
                            </div>
                        </center>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls3" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls3" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="col-6 border border-secondary border-3 bg-white">
                    <div class="container">
                        <div class="row">
                            <div class="fw-bold p-2 mx-2" style="font-size: 50px;">
                                โรงแรม 1
                            </div>
                        </div>
                        <div class="row">
                            <p style="word-wrap: break-word;">
                                ใส่เพิ่มได้
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-3 d-flex align-items-start flex-column border-top border-end border-bottom rounded-end border-secondary border-3 bg-white">
                    <div class="mb-auto"></div>
                    <div class="fw-bold">
                        <h2>
                            ราคา
                        </h2>
                    </div>
                    <div class="my-3">
                        <h3>
                            2,500 บาท
                        </h3>
                    </div>
                </div>
            </div>

            <div class="row my-3">
                <div class="col-3 border-top border-start border-bottom rounded-start border-secondary border-3 bg-white">
                    <div id="carouselExampleControls4" class="carousel slide" data-bs-ride="carousel">
                        <center>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="https://www.digopaul.com/wp-content/uploads/related_images/2015/09/09/square_1.jpg" class="d-block" style="width: 270px; height: 270px" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="https://www.digopaul.com/wp-content/uploads/related_images/2015/09/09/square_1.jpg" class="d-block" style="width: 270px; height: 270px" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="https://www.digopaul.com/wp-content/uploads/related_images/2015/09/09/square_1.jpg" class="d-block" style="width: 270px; height: 270px" alt="...">
                                </div>
                            </div>
                        </center>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls4" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls4" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="col-6 border border-secondary border-3 bg-white">
                    <div class="container">
                        <div class="row">
                            <div class="fw-bold p-2 mx-2" style="font-size: 50px;">
                                โรงแรม 1
                            </div>
                        </div>
                        <div class="row">
                            <p style="word-wrap: break-word;">
                                ใส่เพิ่มได้
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-3 d-flex align-items-start flex-column border-top border-end border-bottom rounded-end border-secondary border-3 bg-white">
                    <div class="mb-auto"></div>
                    <div class="fw-bold">
                        <h2>
                            ราคา
                        </h2>
                    </div>
                    <div class="my-3">
                        <h3>
                            2,500 บาท
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script>
        const changeCheckOut = (date) => {
            let checkOut = document.getElementById('checkOut')
            let newDate = new Date(date)
            newDate.setDate(newDate.getDate() + 1)
            let justDate = newDate.getMonth() + 1
            if (justDate <= 9) {
                justDate = '0' + justDate
            }
            newDate = `${newDate.getFullYear()}-${justDate}-${newDate.getDate()}`
            checkOut.min = newDate
            checkOut.value = newDate
        }

        const goSearch = () => {
            const searchText = document.getElementById('searchText').value
            const checkIn = document.getElementById('checkIn').value
            const checkOut = document.getElementById('checkOut').value
            const people = document.getElementById('people').value
            console.log(searchText, checkIn, checkOut, people)
        }
    </script>
    
</body>

</html>
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
    <style>
        body {
            font-family: 'Prompt', sans-serif !important;
        }

        .rounded-2rem {
            border-radius: 2rem !important;
        }

        .col-5s {
            flex: 0 0 auto;
            width: 49%;
        }

        .fs-8 {
            font-size: .8rem;
        }

        .gotop {
            margin: -24px auto auto;
            transform: scale(1.3);
        }

        .px-8 {
            width: 20%;
        }
    </style>
    <title>หน้าหลัก</title>
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
                    <a class="nav-link active" aria-current="page" href="/frontend_hotel/main.php">หน้าหลัก</a>
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

    <main>
        <h1 class="m-3 text-center">
            ค้นหาที่พัก
        </h1>

        <div class="container border rounded-2rem shadow bg-light" style="width: 75%;">
            <div class="row">
                <div class="col p-0">
                    <div class="p-4">
                        <form action="">
                            <div class="container px-0">
                                <div class="row mx-5 py-3 border rounded-5 bg-white">
                                    <div class="col-1">
                                        <center>
                                            <div class="material-icons fs-1 fw-bold my-1">
                                                search
                                            </div>
                                        </center>
                                    </div>
                                    <div class="col">
                                        <input class="form-control form-control-lg form-control-borderless" id="searchText" type="search" placeholder="ใส่ชื่อจังหวัดหรือที่พัก">
                                    </div>
                                </div>
                                <div class="row justify-content-between mx-5 mt-4">
                                    <div class="col-5s border rounded-5 bg-white">
                                        <div class="container px-0 my-2">
                                            <div class="row py-3">
                                                <div class="col-1">
                                                    <center>
                                                        <div class="material-icons fs-1 fw-bold mx-3">
                                                            date_range
                                                        </div>
                                                    </center>
                                                </div>
                                                <div class="col-1">

                                                </div>
                                                <div class="col-5">
                                                    <center>
                                                        <input class="form-control form-control-lg form-control-borderless fs-8" id="checkIn" min="<?php echo date('Y-m-d'); ?>" value="<?php echo date('Y-m-d'); ?>" onchange="changeCheckOut(value)" type="date">
                                                    </center>
                                                </div>
                                                <div class="col-5">
                                                    <center>
                                                        <input class="form-control form-control-lg form-control-borderless fs-8" id="checkOut" min="<?php
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
                                    <div class="col-5s border rounded-5 bg-white">
                                        <div class="container px-0 my-2">
                                            <div class="row py-3">
                                                <div class="col-1">
                                                    <center>
                                                        <div class="material-icons fs-1 fw-bold mx-3">
                                                            people
                                                        </div>
                                                    </center>
                                                </div>
                                                <div class="col-1">

                                                </div>
                                                <div class="col-10">
                                                    <center>
                                                        <select class="form-select form-select-lg form-select-borderless fs-8" id="people" aria-label="Default select example">
                                                            <option selected value="2">2 ท่าน</option>
                                                            <option value="3">3 ท่าน</option>
                                                            <option value="4">4 ท่าน</option>
                                                        </select>
                                                    </center>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div><br>
        </div>

        <center>
            <button type="button" class="btn btn-secondary btn-lg gotop px-8" onclick="goSearch()">ค้นหา</button>
        </center>

        <h2 class="mt-5 text-center">
            ที่พักแนะนำ
        </h2>

        <div class="mt-3 d-flex justify-content-center">
            <div class="mx-2 fs-5">กรุงเทพ</div>
            <div class="mx-2 fs-5">พัทยา</div>
            <div class="mx-2 fs-5">หัวหิน</div>
            <div class="mx-2 fs-5">ภูเก็ต</div>
            <div class="mx-2 fs-5">เชียงใหม่</div>
        </div>

        <div class="container">
            <div class="row justify-content-evenly m-4">
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <img src="https://www.digopaul.com/wp-content/uploads/related_images/2015/09/09/square_1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <img src="https://www.digopaul.com/wp-content/uploads/related_images/2015/09/09/square_1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <img src="https://www.digopaul.com/wp-content/uploads/related_images/2015/09/09/square_1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-evenly m-4">
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <img src="https://www.digopaul.com/wp-content/uploads/related_images/2015/09/09/square_1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <img src="https://www.digopaul.com/wp-content/uploads/related_images/2015/09/09/square_1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <img src="https://www.digopaul.com/wp-content/uploads/related_images/2015/09/09/square_1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <h2 class="mt-5 text-center">
            รีวิวเว็บไซต์
        </h2>

        <div class="container">
            <div class="row justify-content-evenly m-4">
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <img src="https://www.digopaul.com/wp-content/uploads/related_images/2015/09/09/square_1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <img src="https://www.digopaul.com/wp-content/uploads/related_images/2015/09/09/square_1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <img src="https://www.digopaul.com/wp-content/uploads/related_images/2015/09/09/square_1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-evenly m-4">
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <img src="https://www.digopaul.com/wp-content/uploads/related_images/2015/09/09/square_1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <img src="https://www.digopaul.com/wp-content/uploads/related_images/2015/09/09/square_1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <img src="https://www.digopaul.com/wp-content/uploads/related_images/2015/09/09/square_1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
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
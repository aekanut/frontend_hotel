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

        .center-thing {
            height: 50px;
            width: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            background-color: rgb(223, 223, 223);
        }

        .dot-active {
            background-color: rgb(128, 128, 128);
            color: white;
        }
    </style>
    <title>Document</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light mt-0 pt-0">
        <div class="container-fluid">
            <a class="navbar-brand" href="/frontend_hotel/main.php">Logo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-lg-evenly" id="navbarText">
                <div class="">
                    <div class="center-thing dot-active mx-5 my-2">
                        1
                    </div>
                    <center class="">รายละเอียดหอพัก</center>
                </div>
                <div class="">
                    <div class="center-thing mx-5 my-2">
                        2
                    </div>
                    <center class="">ชำระเงิน</center>
                </div>
                <div class="">
                    <div class="center-thing mx-5 my-2">
                        3
                    </div>
                    <center class="">ยืนยันการชำระเงิน</center>
                </div>
            </div>
        </div>
        <br><br><br><br>
    </nav>
    <div style="height: 3px; background-color: rgb(107, 107, 107);"></div>

    <div class="container border border-3 rounded-3 border-secondary mt-5 w-50">
        <div class="row m-4 fs-4">
            <div class="d-flex">
                <div>
                    15 พ.ค. 2021 -
                </div>
                <div class="mx-2">
                    17 พ.ค. 2021
                </div>
                <div class="ms-auto">
                    2 คืน
                </div>
            </div>
        </div>
        <div class="row m-4">
            <h2>
                ชื่อโรงแรม 1
            </h2>
        </div>
        <div class="row m-4">
            <h4>
                ชื่อห้องพัก
            </h4>
        </div>
        <div class="row" style="height: 3px; background-color: rgb(107, 107, 107);"></div>
        <div class="row m-4">
            <div class="d-flex">
                <div class="material-icons fs-1 fw-bold">
                    people
                </div>
                <div class="mx-4 my-1 fs-4">
                    ห้องพัก 1 ห้อง,
                </div>
                <div class="mx-4 my-1 fs-4">
                    ผู้ใหญ่ 2 คน
                </div>
            </div>
        </div>
        <div class="row" style="height: 3px; background-color: rgb(107, 107, 107);"></div>
        <div class="row">
            <div class="d-flex fs-4">
                <div class="m-4 pb-3">
                    ราคาที่ต้องจ่าย
                </div>
                <div class="ms-auto m-4 pb-3">
                    2,500 บาท
                </div>
            </div>
        </div>
    </div>
    <center><a href="/frontend_hotel/pay.php" type="button" class="btn btn-secondary fs-4 mt-3">ยืนยันการจอง</a></center>
</body>

</html>
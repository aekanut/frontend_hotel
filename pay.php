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
                    <div class="center-thing mx-5 my-2">
                        1
                    </div>
                    <center class="">รายละเอียดหอพัก</center>
                </div>
                <div class="">
                    <div class="center-thing dot-active mx-5 my-2">
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

    <div class="fs-1 m-3">
        <center>
            ช่องทางการชำระเงิน
        </center>
    </div>

    <div class="container border border-3 rounded-3 border-secondary mt-3 w-50">
        <div class="row justify-content-evenly my-3">
            <div class="col-5 border border-3 rounded-3 border-secondary">
                <div class="d-flex">
                    <div class="my-3">
                        <h4>ชื่อบัญชีธนาคาร</h4>
                        <img src="https://www.digopaul.com/wp-content/uploads/related_images/2015/09/09/square_1.jpg" width="150px" height="150px" alt="">
                    </div>
                    <div class="mt-5">
                        <div class="fs-5 fw-bold my-2">เลขบัญชี</div>
                        <div class=" my-2">5665-565-5545</div>
                        <div class="fs-5 fw-bold my-2">ชื่อบัญชี</div>
                        <div class=" my-2">ชื่อ-นามสกุล</div>
                    </div>
                </div>
            </div>
            <div class="col-5 border border-3 rounded-3 border-secondary">
                <div class="d-flex">
                    <div class="my-3">
                        <h4>ชื่อบัญชีธนาคาร</h4>
                        <img src="https://www.digopaul.com/wp-content/uploads/related_images/2015/09/09/square_1.jpg" width="150px" height="150px" alt="">
                    </div>
                    <div class="mt-5">
                        <div class="fs-5 fw-bold my-2">เลขบัญชี</div>
                        <div class=" my-2">5665-565-5545</div>
                        <div class="fs-5 fw-bold my-2">ชื่อบัญชี</div>
                        <div class=" my-2">ชื่อ-นามสกุล</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-evenly my-3">
            <div class="col-5 border border-3 rounded-3 border-secondary">
                <div class="d-flex">
                    <div class="my-3">
                        <h4>ชื่อบัญชีธนาคาร</h4>
                        <img src="https://www.digopaul.com/wp-content/uploads/related_images/2015/09/09/square_1.jpg" width="150px" height="150px" alt="">
                    </div>
                    <div class="mt-5">
                        <div class="fs-5 fw-bold my-2">เลขบัญชี</div>
                        <div class=" my-2">5665-565-5545</div>
                        <div class="fs-5 fw-bold my-2">ชื่อบัญชี</div>
                        <div class=" my-2">ชื่อ-นามสกุล</div>
                    </div>
                </div>
            </div>
            <div class="col-5 border border-3 rounded-3 border-secondary">
                <div class="d-flex">
                    <div class="my-3">
                        <h4>ชื่อบัญชีธนาคาร</h4>
                        <img src="https://www.digopaul.com/wp-content/uploads/related_images/2015/09/09/square_1.jpg" width="150px" height="150px" alt="">
                    </div>
                    <div class="mt-5">
                        <div class="fs-5 fw-bold my-2">เลขบัญชี</div>
                        <div class=" my-2">5665-565-5545</div>
                        <div class="fs-5 fw-bold my-2">ชื่อบัญชี</div>
                        <div class=" my-2">ชื่อ-นามสกุล</div>
                    </div>
                </div>
            </div>

            <div class="mt-4 mx-5 px-5 fs-4">
                หลังจากชำระเงินเรียบร้อยแล้ว
            </div>
            <div class="mt-2 mx-5 px-5 fs-4">
                กรุณาส่งสลิปหรือหลักฐานเพื่อยืนยันการชำระเงิน
            </div>

            <center>
                <a href="/frontend_hotel/confirm.php" type="button" class="btn btn-secondary mt-3 fs-3">ชำระเงิน</a>
            </center>
        </div>
    </div>

</body>

</html>
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
        <?php include 'header.php'; ?>
    </header>

    <main class="p-5">
        <div name="head" class="d-flex flex-row">
            <p style="font-size:calc(1.375rem + 1.5vw); font-weight:bolder;" class="mx-4 mb-2">รีวิวห้องพัก</p>
            <p style="font-size:calc(1.375rem + 1.5vw);" class="mb-2 mx-5">โรงแรม 1</p>
        </div>

        <div name="image" class="d-flex justify-content-between my-2" style="height: 350px;">
            <img src="https://www.digopaul.com/wp-content/uploads/related_images/2015/09/09/square_1.jpg" alt="">
            <img src="https://www.digopaul.com/wp-content/uploads/related_images/2015/09/09/square_1.jpg" alt="">
            <img src="https://www.digopaul.com/wp-content/uploads/related_images/2015/09/09/square_1.jpg" alt="">
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

        <div class="">
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
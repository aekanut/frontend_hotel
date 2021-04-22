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
    <title>หน้าห้องพัก</title>

    <style>
        body {
            font-family: 'Prompt', sans-serif !important;
        }

        #search_box {
            max-width: 98%;
        }
    </style>
</head>

<body>
    <header>
        <?php include 'header.php'; ?>
    </header>

    <body>
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
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
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
                <div class="col-2 border">
                    <div class="container px-0">
                        <div class="row border rounded-5 rounded-3 border-secondary border-2 bg-white justify-content-between">
                            <div class="col-1">
                                <center>
                                    <div class="material-icons fs-2 fw-bold mt-2">
                                        date_range
                                    </div>
                                </center>
                            </div>
                            <div class="col-10">
                                <center>
                                    <input class="form-control form-control-borderless fs-8 mt-1" id="checkIn" min="<?php echo date('Y-m-d'); ?>" value="<?php echo date('Y-m-d'); ?>" onchange="changeCheckOut(value)" type="date">
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-2 border">
                    <div class="container px-0">
                        <div class="row border rounded-5 rounded-3 border-secondary border-2 bg-white justify-content-between">
                            <div class="col-1">
                                <center>
                                    <div class="material-icons fs-2 fw-bold mt-2">
                                        date_range
                                    </div>
                                </center>
                            </div>
                            <div class="col-10">
                                <center>
                                    <input class="form-control form-control-borderless fs-8 mt-1" id="checkOut" min="<?php
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
                <div class="col-2 border">
                    <div class="container px-0 my-2">
                        <div class="row">
                            <div class="col-1">
                                <center>
                                    <div class="material-icons fs-2 fw-bold mx-3">
                                        people
                                    </div>
                                </center>
                            </div>
                            <div class="col-10">
                                <center>
                                    <select class="form-select form-select-borderless fs-8" id="people" aria-label="Default select example">
                                        <option selected value="2">2 ท่าน</option>
                                        <option value="3">3 ท่าน</option>
                                        <option value="4">4 ท่าน</option>
                                    </select>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-1 border">s</div>
            </div>
        </div>

    </body>
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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>

</html>
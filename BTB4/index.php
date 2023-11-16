<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai tap 4: PHP va CSDL</title>
    <style>
        .nav{
            float: right;
            background-color: grey;
        }
        button{
            padding: 5px;
            border: 1px solid black;
            border-radius: 5px;
        }
        .left_content{
            float: left;
        }
        .right_content{
            display: flex;
            justify-content: center;
        }

        .right_content > p {
            display:contents ;
        }
    </style>
</head>
<body>
    <div id="banner_top">
        <img src="./assets/image/hcm.png" width="100%" alt="">
    </div>
    <div class="container">
        <div class="nav">
            <button type="button" onclick="calculate()">Calculate</button>
            <button type="button" onclick="drawTable()" id="drawtable">DrawTable</button>
            <button type="button" onclick="register()">Register</button>
            <button type="button" id="contact">Contact</button>
        </div>
        <br>
        <hr>
        <div class="content">
            <div class="left_content">
                <?php include "./inc/left.php" ?>
            </div>
            <div id="right_content" class="right_content">
                <b>Ket qua dang ky:</b>
            <br>
                <p>Ten: Viet Nguyen</p>
                <br>
                <p>Dia chi: Ha Noi</p>
                <br>
                <p>Nghe: Sinh Vien</p>
                <br>
                <p>Ghi chu: KMA</p>
            </div>
        </div>
        <br>
    </div>
</body>
<script>
    function register(){
        const xhr = new XMLHttpRequest();
        const url = './inc/register.php';
        xhr.open('GET', url, true);
        xhr.onload = function () {
            if (xhr.status === 200) {
                document.getElementById('right_content').innerHTML = xhr.responseText;
            } else {
                console.error('Error loading page.');
            }
        };
        xhr.send();
    }

    function drawTable(){
        const xhr = new XMLHttpRequest();
        const url = './inc/drawTable.php';
        xhr.open('GET', url, true);
        xhr.onload = function () {
            if (xhr.status === 200) {
                document.getElementById('right_content').innerHTML = xhr.responseText;
            } else {
                console.error('Error loading page.');
            }
        };
        xhr.send();
    }

    function calculate(){
        const xhr = new XMLHttpRequest();
        const url = './inc/calculate.php';
        xhr.open('GET', url, true);
        xhr.onload = function () {
            if (xhr.status === 200) {
                document.getElementById('right_content').innerHTML = xhr.responseText;
            } else {
                console.error('Error loading page.');
            }
        };
        xhr.send();
    }
</script>
</html>
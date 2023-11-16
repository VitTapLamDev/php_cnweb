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
    </style>
</head>
<body>
    <div id="banner_top">
        <img src="./assets/image/hcm.png" width="100%" alt="">
    </div>
    <div class="container">
        <div class="nav">
            <button type="button" onclick="">Calculate</button>
            <button type="button" id="drawtable">DrawTable</button>
            <button type="button" onclick="register()">Register</button>
            <button type="button" id="contact">Contact</button>
        </div>
        <br>
        <div class="content">
            <div class="left_content">
                <?php include "left.php" ?>
            </div>
            <div id="right_content" class="right_content">
                <?php session_start();?>
                <b>Ket qua dang ky:</b>
                <p>Ten: <?php echo $_SESSION['name'] ?></p>
                <p>Dia chi: <?php echo $_SESSION['address'] ?></p>
                <p>Nghe: <?php echo $_SESSION['job'] ?></p>
                <p>Ghi chu: <?php echo $_SESSION['notes'] ?></p>
            </div>
        </div>
        <br>
    </div>
</body>
<script>
    function register(){
        const xhr = new XMLHttpRequest();
        const url = 'register.php';
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
<div style="display: flex; justify-content: center;">
    
    <table>
        <form action="" method="POST">
            <th colspan="2"><b>Form Đăng Ký</b></th>
            <tr>
                <td>Ten:</td>
                <td><input type="text" name="" id="name"></td>
            </tr>
            <tr>
                <td>Dia chi:</td>
                <td><input type="text" name="" id="address"></td>
            </tr>
            <tr>
                <td>Nghe:</td>
                <td><input type="text" name="" id="job"></td>
            </tr>
            <tr>
                <td>Ghi chu:</td>
                <td><textarea name="" id="notes" cols="20" rows="3"></textarea></td>
            </tr>
            <tr>
                <td><button type="button" onclick="reset_btn()">Xoa</button></td>
                <td><button type="submit" name="register_btn" window.location.href = " resultRegister.php">Dang Ky</button></td>
            </tr>
        </form>
    </table>
    
    <?php 
        session_start();
        session_unset();
        if(isset($_POST['register_btn'])){
            $_SESSION['name'] = $_POST['name'] ;
            $_SESSION['address'] = $_POST['address'];
            $_SESSION['job'] = $_POST['job'];
            $_SESSION['notes'] = $_POST['notes'];
            
            header('Location: resultRegister.php');
        } 
    ?>
    <script>
        window.onload =function(){
            function reset_btn(){
            const name = document.getElementById('name');
            const address = document.getElementById('address');
            const job = document.getElementById('job');
            const notes = document.getElementById('notes');

            name.value = '';
            address.value = '';
            job.value = '';
            notes.value = '';
            
        };
        }
    </script>
</div>
<div class="auth_login">
    <form method="post">
        <input type="text" name="login" placeholder="Login" required>
        <input type="password" name="pwd" placeholder="Password" required>
        <input type="submit" name="go" value="Login">
        <?php
            if(isset($_POST['go'])){
                $login = $_POST['login'];
                $pwd_unhashed = $_POST['pwd'];
                $pwd = password_hash($pwd_unhashed, PASSWORD_DEFAULT);
                $count_accounts = mysqli_query($connect, "SELECT COUNT(*) FROM users WHERE login = '$login'");
                while($count_accounts_1 = mysqli_fetch_array($count_accounts)){
                    $results_count_accounts_1 = $count_accounts_1[0];
                }

                if($results_count_accounts_1 != 1){
                    if ($user && password_verify($pwd, $user['pwd']))
                    echo "<span class='red_box'>Login or password is incorrect</span>";
                }else{
                    $collect_id = mysqli_query($connect, "SELECT id FROM users WHERE login = '$login' AND pwd = '$pwd'");
                    while($collect_id_1 = mysqli_fetch_array($collect_id)){
                        $_SESSION['id'] = $id = $collect_id_1['id'];
                    }
                    ?>
                        <meta http-equiv="refresh" content="0;url=index.php">   
                    <?php
                }
            }
        ?>
    </form>
</div>
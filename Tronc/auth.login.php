<div class="auth_login">
    <form method="post">
        <input type="text" name="login" placeholder="Login" required>
        <input type="password" name="pwd" placeholder="Password" required>
        <input type="submit" name="go" value="Login">
        <?php
            if(isset($_POST['go'])){
                $login = $_POST['login'];
                $pwd = $_POST['pwd'];
                $count_accounts = mysqli_query($connect, "SELECT COUNT(*) FROM `users` WHERE `login` = '$login'");
                while($count_accounts_1 = mysqli_fetch_array($count_accounts)){
                    $results_count_accounts_1 = $count_accounts_1[0];
                }

                if($results_count_accounts_1 != 1){
                    echo "<span class='red_box'>Login or password is incorrect</span>";
                }else{
                    $result_info_account = mysqli_query($connect, "SELECT `uuid`, `pwd` FROM `users` WHERE `login` = '$login'");
                    while($result_info_account_1 = mysqli_fetch_array($result_info_account)){
                        $uuid_account = $result_info_account_1[0];
                        $pwd_account = $result_info_account_1[1];
                        if (password_verify($pwd, $pwd_account)){
                            $_SESSION['id'] = $uuid_account;
                            ?>
                                <meta http-equiv="refresh" content="0;url=index.php">   
                            <?php
                        }else{
                            echo "<span class='red_box'>Login or password is incorrect</span>";
                        }
                    }
                }
            }
        ?>
    </form>
</div>
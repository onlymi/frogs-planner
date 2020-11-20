<?php
    $conn = mysqli_connect("localhost", "root", "lifeisgame", "userinfo_planner");
    $sql = "
        SELECT * FROM userinfo_tb
    ";

    // Query 실행
    $result = mysqli_query($conn, $sql);

    //Setting
    $inputID = '
        <input type="text" class="userInfo" id="userID" name="userID" placeholder="UserID" size="40" value="' . $_POST['userID'] . '">
    ';

    // ID, Password Check
    $cnt = 0;
    $enteredPassword = md5($_POST['userPassword']);

    while($row = mysqli_fetch_array($result)) {
        // ID Check
        if($_POST['userID'] == $row['userID']) {
            $cnt++;
            $selectedIdValue = $row['No'];
        }
    }

    // Password Check
    $sql = "
        SELECT * FROM userinfo_tb WHERE No = {$selectedIdValue}
    ";

    // -> Query 실행
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    
    $existingUserPassword = crypt($enteredPassword, $row['password']);

    if($existingUserPassword == $row['password']) {
        $cnt++;
    }

    if($cnt == 0 or $cnt == 1) {
        echo "
            <script>
                alert('아이디나 비밀번호가 올바르지 않습니다.');
            </script>
        ";
    } else if($cnt == 2) {
        echo "
            <script>
                alert('로그인 되었습니다.');
                location.href = '../main/main.html';
            </script>
        ";
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="shortcut icon" type="image/x-icon" href="../data/image/project_icon.png">
        <title>깨굴쓰 플래너</title>

        <link rel='stylesheet' href="login.css">

        <script src="login.js"></script>
    </head>
    <body onload="IDfocus()">
        <div class="container">
            <div class="login-screen">
                <div class="login-header">
                    <div class="login-header-image">
                        <a href="login.html">
                            <img src="../data/image/project_icon.jpg">
                        </a>
                    </div>
                </div>
                <div class="login-main">
                    <form action="login.php" method="POST" name="info" style="margin: 0;">
                        <?= $inputID ?>
                        <br>
                        <input type="password" class="userInfo" id="userPassword" name="userPassword" placeholder="Password" size="40" maxlength="16">
                        <br>
                        <br>
                        <input type="button" id="login-btn" value="Sign In" onclick="checkAndSubmit()">
                    </form>
                    <p id="forgotPasswordBtn"><a href="forgotPassword.php">Forgot Password?</a></p>
                    <br>
                    <br>
                    <p id="createAccountBtn"><a href="./createNewAccount/createAccount.php">Create New Account</a></p>
                </div>
            </div>
        </div>
    </body>
</html>
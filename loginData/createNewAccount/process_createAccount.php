<?php
    // DB 연결
    $conn = new mysqli("localhost", "root", "lifeisgame", "userinfo_planner");
    if($conn->connect_error) {
        echo '[연결실패]'.$conn->connect_error.'';
    }
    
    // DB 선택
    mysqli_select_db($conn, 'userinfo_planner') or die('DB 선택 실패');

    // Save Data
    $password = md5($_POST['password']);
    $encryptPassword = crypt($password);
    
    $filtered = array(
        'userID' => mysqli_real_escape_string($conn, $_POST['userID']), 
        'userName' => mysqli_real_escape_string($conn, $_POST['userName']), 
        'userNickname' => mysqli_real_escape_string($conn, $_POST['nickname']), 
        'userBirth' => mysqli_real_escape_string($conn, $_POST['userBirth']), 
        'password' => mysqli_real_escape_string($conn, $encryptPassword)
    );

    $sql = "
        INSERT INTO userinfo_tb (
            userID, 
            userName, 
            userNickname, 
            userBirth, 
            password
        ) VALUES (
            '{$filtered['userID']}', 
            '{$filtered['userName']}', 
            '{$filtered['userNickname']}', 
            '{$filtered['userBirth']}', 
            '{$filtered['password']}'
        )
    ";

    // Query 실행
    $result = mysqli_multi_query($conn, $sql);
    if($result == false) {
        echo "저장하는 과정에서 문제가 생겼습니다. 관리자에게 문의해주세요.";
        error_log(mysqli_error($conn));
    } else {
        echo "
            <script>
                document.write('<p id=\"success\">회원 가입이 완료되었습니다! <br> <a href=\"../login.html\">로그인하러 가기</a></p>');
            </script>    
        ";
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="shortcut icon" type="image/x-icon" href="../../data/image/project_icon.png">
        <title>깨굴쓰 플래너</title>

        <link rel="stylesheet" href="process_createAccount.css">
    </head>
    <body>

    </body>
</html>
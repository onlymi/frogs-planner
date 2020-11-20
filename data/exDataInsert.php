<?php
    // DB 연결
    $conn = new mysqli("localhost", "root", "lifeisgame", "userinfo_planner", "3306");
    if($conn->connect_error) {
        echo '[연결실패]'.$conn->connect_error.'';
    } else {
        echo '[연결성공]';
    }
    // DB 선택
    mysqli_select_db($conn, 'userinfo_planner') or die('DB 선택 실패');

    $password = md5('a1s2d3f4!@#');
    $encryptPassword = crypt($password);
    $filteredPassword = mysqli_real_escape_string($conn, $encryptPassword);

    $sql = "
        INSERT INTO userinfo_tb (
            userID, 
            userName, 
            userNickname, 
            userBirth, 
            password
        ) VALUES (
            'hong_abc', 
            '홍길동', 
            '동에번쩍', 
            '2003-11-15', 
            '{$filteredPassword}'
        )
    ";
    // SQL문 실행
    mysqli_query($conn, $sql);
    echo $sql."<br>";
    // 오류 확인을 위한 출력
    echo mysqli_error($conn);
?>
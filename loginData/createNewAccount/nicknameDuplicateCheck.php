<?php
    $conn = mysqli_connect("localhost", "root", "lifeisgame", "userinfo_planner");
    $sql = "
        SELECT * FROM userinfo_tb
    ";

    // Query 실행
    $result = mysqli_query($conn, $sql);
    
    $cnt = 0;
    while($row = mysqli_fetch_array($result)) {
        if($_GET['nickname'] == $row['userNickname']) {
            $cnt++;
        }
    }

    if($cnt >= 1) {
        echo '
            <script>
                parent.document.getElementById("nickname").value="";
                parent.document.getElementById("nickname_2").value="0";
                parent.alert("이미 사용 중인 닉네임입니다.");
                parent.document.userInfo.nickname.focus();
            </script>
        ';
    } else if($cnt == 0) {
        echo '
            <script>
                parent.document.getElementById("nickname_2").value="1";
                parent.alert("사용 가능한 닉네임입니다.");
                parent.document.userInfo.nickname.focus();
            </script>
        ';
    }
?>
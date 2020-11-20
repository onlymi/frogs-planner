<?php
    $conn = mysqli_connect("localhost", "root", "lifeisgame", "userinfo_planner");
    $sql = "
        SELECT * FROM userinfo_tb
    ";

    // Query 실행
    $result = mysqli_query($conn, $sql);
    
    $cnt = 0;
    while($row = mysqli_fetch_array($result)) {
        if($_GET['userid'] == $row['userID']) {
            $cnt++;
        }
    }

    if($cnt >= 1) {
        echo '
            <script>
                parent.document.getElementById("userID").value="";
                parent.document.getElementById("userID_2").value="0";
                parent.alert("이미 사용 중인 아이디입니다.");
                parent.document.userInfo.userID.focus();
            </script>
        ';
    } else if($cnt == 0) {
        echo '
            <script>
                parent.document.getElementById("userID_2").value="1";
                parent.alert("사용 가능한 아이디입니다.");
                parent.document.userInfo.userID.focus();
            </script>
        ';
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="shortcut icon" type="image/x-icon" href="./data/image/project_icon.png">
        <title>깨굴쓰 플래너</title>

        <link rel="stylesheet" href="createAccount.css">
        <style>
            html {
                height: 100%;
            }

            body {
                height: 100%;
                margin: 0;
            }

            ::-webkit-scrollbar {
                display: none;
            }

            #header {
                position: relative;
                font-size: 30px;
                font-weight: bold;
                text-align: center;
                left: 30%;
            }

            #goBack {
                font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
                color: #000000;
            }

            #submit {
                float: right;
                color: #00a531;
                background-color: #c7f8ff;
                padding: 10px 20px;
                border: none;
                border-radius: 50px;
                cursor: pointer;
            }

            #submit:hover {
                background-color: #59e9ff;
            }
        </style>
    </head>
    <body>
        <div>
            <form action="process_createAccount.php" method="POST" name="userInfo" id="userInfo">
                <a href="login.php" id="goBack">←</a>
                <span id="header">회원가입</span>
                <hr style="border: 1px solid #000000;">
                <br>
                <p>
                    <label for="userID">아이디<br></label>
                    <input type="text" id="userID" class="notDuplicate" size="40" placeholder="ID">
                    <input type="button" class="duplicateCheck" value="중복확인">
                </p>
                <p>
                    <label for="userID">닉네임<br></label>
                    <input type="text" id="nickname" class="notDuplicate" size="40" placeholder="닉네임">
                    <input type="button" class="duplicateCheck" value="중복확인">
                </p>
                <p>
                    <label for="userName">비밀번호<br></label>
                    <input type="password" id="password" class="notDuplicate" name="password" size="55" maxlength="16" placeholder="비밀번호">
                </p>
                <p>
                    <label for="userName">비밀번호 확인<br></label>
                    <input type="password" id="passwordCheck" class="notDuplicate" name="passwordCheck" size="55" maxlength="16" placeholder="비밀번호 확인">
                </p>
                <p>
                    <label for="userName">이름<br></label>
                    <input type="text" id="userName" class="notDuplicate" name="userName" size="55" placeholder="실명을 입력하세요">
                </p>
                <p>
                    <label for="userName">생년월일<br></label>
                    <input type="date" id="userBirth" class="notDuplicate" name="userBirth" size="50" style="width: 546px;">
                </p>
                <p>
                    <input type="button" id="submit" name="submit" value="가입하기">
                </p>
            </form>
        </div>
    </body>
</html>
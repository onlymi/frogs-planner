<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="shortcut icon" type="image/x-icon" href="./data/image/project_icon.png">
        <title>깨굴쓰 플래너</title>

        <link rel='stylesheet' href="login.css">
        <style>
            #forgotPasswordBtn {
                position: relative;
                text-align: 50%;
            }

            #forgotPasswordBtn a {
                text-decoration: none;
            }

            #createAccountBtn {
                position: relative;
                text-align: center;
                font-size: 25px;
            }

            #createAccountBtn a {
                text-decoration: none;
                color: #b38aff;
            }
        </style>

        <script src="login.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="login-screen">
                <div class="login-header">
                    <div class="login-header-image">
                        <a href="login.php">
                            <img src="./data/image/project_icon.jpg">
                        </a>
                    </div>
                    <!-- <h2>Welcome to 깨굴's Planner</h2> -->
                </div>
                <div class="login-main">
                    <form action="Main.html" method="POST" name="info">
                        <input type="text" class="userInfo" id="userID" name="userID" placeholder="Username" size="40">
                        <br>
                        <input type="password" class="userInfo" id="userPassword" name="userPassword" placeholder="Password" size="40" maxlength="16">
                        <br>
                        <br>
                        <input type="button" id="login-btn" value="Sign In" onclick="checkAndSubmit()">
                    </form>
                    <p id="forgotPasswordBtn"><a href="forgotPassword.php">Forgot Password?</a></p>
                    <br>
                    <br>
                    <p id="createAccountBtn"><a href="createAccount.php">Create New Account</a></p>
                </div>
            </div>
        </div>
    </body>
</html>
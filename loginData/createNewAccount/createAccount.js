function joinIn() {
    // Input Check
    if(document.userInfo.userID.value.length == 0) {
        alert("아이디를 입력해주세요");
        document.userInfo.userID.focus();
        return;
    }

    if(document.userInfo.nickname.value.length == 0) {
        alert("닉네임 입력해주세요");
        document.userInfo.nickname.focus();
        return;
    }

    if(document.userInfo.password.value.length == 0) {
        alert("비밀번호를 입력해주세요");
        document.userInfo.password.focus();
        return;
    }

    if(document.userInfo.passwordCheck.value.length == 0) {
        alert("비밀번호 확인을 입력해주세요");
        document.userInfo.passwordCheck.focus();
        return;
    }

    if(document.userInfo.userName.value.length == 0) {
        alert("이름을 입력해주세요");
        document.userInfo.userName.focus();
        return;
    }

    if(document.userInfo.userBirth.value.length == 0) {
        alert("생일을 입력해주세요");
        document.userInfo.userBirth.focus();
        return;
    }

    // Join In Final Check
    if(document.getElementById("userID_2").value == "0") {
        alert("아이디 중복확인을 해주세요.");
        document.userInfo.userID.focus();
        return;
    }

    if(document.getElementById("nickname_2").value == "0") {
        alert("닉네임 중복확인을 해주세요.");
        document.userInfo.nickname.focus();
        return;
    }

    var password = document.getElementById("password").value;
    var passwordCheck = document.getElementById("passwordCheck").value;
    if(password != passwordCheck) {
        alert("비밀번호를 다시 확인해주세요.");
        document.userInfo.passwordCheck.focus();
        return;
    }

    // Submit
    document.userInfo.submit();
}

function idDuplicateCheck() {
    document.getElementById('userID_2').value = 0;
    var id = document.getElementById('userID').value;

    if(document.userInfo.userID.value.length == 0) {
        alert("아이디를 입력해주세요");
        document.userInfo.userID.focus();
        return;
    }

    var i;
    for(i = 0; i < document.userInfo.userID.value.length; i++) {
        if(document.userInfo.userID.value[i] == " ") {
            alert("아이디에 공백은 사용이 불가능합니다.");
            document.userInfo.userID.focus();
            return;
        }
    }

    iframe.location.href="idDuplicateCheck.php?userid=" + id;
}

function nicknameDuplicateCheck() {
    document.getElementById('nickname_2').value = 0;
    var nickname = document.getElementById('nickname').value;

    if(document.userInfo.nickname.value.length == 0) {
        alert("닉네임을 입력해주세요");
        document.userInfo.nickname.focus();
        return;
    }

    iframe.location.href="nicknameDuplicateCheck.php?nickname=" + nickname;
}
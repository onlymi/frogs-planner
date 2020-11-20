function checkAndSubmit() {
    if(document.info.userID.value.length == 0) {
        alert("아이디를 입력해주세요.");
        document.info.userID.focus();
        return;
    }

    if(document.info.userPassword.value.length == 0) {
        alert("비밀번호를 입력해주세요.");
        document.info.userPassword.focus();
        return;
    }

    document.info.submit();
}

function IDfocus() {
    document.info.userID.focus();
}
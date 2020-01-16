$(function () {
    $("#loginBtn").click(function () {
        var id = $("#adminId").val();
        var pw = $("#adminPw").val();
        if(id == "") {
            alert('아이디를 입력해주세요.');
            $("#adminId").focus();
            return false;
        }else if(pw == "") {
            alert('비밀번호를 입력해주세요.');
            $("#adminPw").focus();
            return false;
        }
        $.ajax({
            url: '/adminapi/login?adminId='+id+'&adminPw='+pw,
            type: 'GET',
            dataType: 'JSON',
            success: function (response) {
                console.log(response);
                if(response.result == true) {
                    document.location.href='/admin/dashboard'
                }else {
                    if(response.errorCode == "-1") {
                        alert("비밀번호가 일치하지 않습니다.")
                        return false;
                    }else if(response.errorCode == "-2") {
                        alert("존재하지 않는 관리자 입니다.");
                        return false;
                    }

                }
            }
        });
    });
});
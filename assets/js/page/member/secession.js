$(function () {
    // 이메일 정규표현식
    var regExp = /^[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*@[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*.[a-zA-Z]{2,3}$/i;

    $("#nextBtn").click(function () {
        var userId = $("#userId").val();
        var userPw = $("#userPw").val();
        var userEmail = $("#userEmail").val();
        var reason = $("#reason").val();

        if(userId == "") {
            alert('아이디를 입력해 주십시오.');
            return false;
        }else if(userPw == "") {
            alert('비밀번호를 입력해 주십시오.');
            return false;
        }else if(userEmail == "") {
            alert('이메일을 입력해 주십시오.');
            return false;
        }else if(userEmail.match(regExp) == null) {
            alert('이메일형식을 확인해 주십시오.');
            return false;
        }else if(reason == "") {
            alert('탈퇴사유를 입력해 주십시오.');
            return false;
        }
        var datas = $("#secessionForm").serialize();
        $.ajax({
            url: '/api/dropMember',
            type: 'POST',
            dataType: 'JSON',
            data: datas,
            success: function (response) {
                console.log(response);
                if(response.result == true) {
                    document.location.href='/member/secession_info?userSeq='+response.userSeq;
                }else {
                    if(response.errorCode == "-1") {
                        alert('비밀번호가 옮바르지 않습니다.');
                        return false;
                    }else if(response.errorCode == "-2") {
                        alert('해당 사용자를 찾을 수 없습니다.');
                        return false;
                    }else {
                        alert('알 수 없는 에러가 발생하였습니다.');
                        return false;
                    }
                }
            }
        });
    });
});
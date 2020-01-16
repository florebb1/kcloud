$(function () {
    // 이메일 정규표현식
    var regExp = /^[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*@[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*.[a-zA-Z]{2,3}$/i;

    // 인증번호 발송
    $("#authBtn").click(function () {
        var id = $("input[name=userId]").val();
        var email = $("input[name=email]").val();
        if(id == "") {
            alert('아이디를 입력해주세요.');
            return false;
        }else if(email == "") {
            alert('이메일을 입력해주세요.');
            return false;
        }else if(regExp.test(email) == null) {
            alert('잘못된 이메일 형식입니다.');
            return false;
        }
        $.ajax({
            url: '/api/pwSearch?email='+email+'&id='+id,
            type: 'GET',
            dataType: 'JSON',
            success: function (response) {
                if(response.result == true) {
                    alert("인증번호가 발송되었습니다.");
                }else {
                    alert("사용자정보가 존재하지 않습니다.");
                }
            }
        });
    });

    // 비밀번호 찾기버튼 클릭이벤트
    $("#findBtn").click(function () {
        var id = $("input[name=userId]").val();
        var email = $("input[name=email]").val();
        var authNum = $("input[name=authNum]").val();
        if(id == "") {
            alert('아이디를 입력해주세요.');
            return false;
        }else if(email == "") {
            alert('이메일을 입력해주세요.');
            return false;
        }else if(regExp.test(email) == null) {
            alert('잘못된 이메일 형식입니다.');
            return false;
        }else if(authNum == "") {
            alert('이메일 인증이 필요합니다.')
            return false;
        }
        console.log('a');
        $.ajax({
            url: '/api/checkPwAuth?email='+email+'&authNum='+authNum+'&id='+id,
            type: 'GET',
            dataType: 'JSON',
            success: function (response) {
                console.log('b');
                console.log(response);
                if(response.result == true) {
                    document.location.href = '/member/find_pw_result';
                }else {
                    alert("사용자 정보를 찾을 수 없습니다.");
                }
            },error: function (jqXHR) {
                console.log(jqXHR.responseText);
            }
        });
        console.log('c');
    });
});
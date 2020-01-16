$(function () {
    // 이메일 정규표현식
    var regExp = /^[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*@[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*.[a-zA-Z]{2,3}$/i;

    // 인증번호 발송
    $("#authBtn").click(function () {
        var name = $("input[name=userName]").val();
        var email = $("input[name=email]").val();
        if(name == "") {
            alert('이름을 입력해주세요.');
            return false;
        }else if(email == "") {
            alert('이메일을 입력해주세요.');
            return false;
        }else if(regExp.test(email) == null) {
            alert('잘못된 이메일 형식입니다.');
            return false;
        }
        $.ajax({
            url: '/api/idSearch?email='+email+'&name='+name,
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

    // 아이디 찾기버튼 클릭이벤트
    $("#findBtn").click(function () {
        var name = $("input[name=userName]").val();
        var email = $("input[name=email]").val();
        var authNum = $("input[name=authNum]").val();
        if(name == "") {
            alert('이름을 입력해주세요.');
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
        $.ajax({
            url: '/api/checkIdAuth?email='+email+'&authNum='+authNum+'&name='+name,
            type: 'GET',
            dataType: 'JSON',
            success: function (response) {
                if(response.result == true) {
                    document.location.href='/member/find_id_result?mb_id='+response.mb_id;
                }else {
                    alert("사용자 정보를 찾을 수 없습니다.");
                }
            }
        });
    });
});
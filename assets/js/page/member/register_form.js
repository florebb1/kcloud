$(document).ready(function () {
    // 이메일 정규표현식
    var regExp = /^[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*@[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*.[a-zA-Z]{2,3}$/i;
    // 비밀번호 정규표현식
    var pwReg = /^(?=.*[a-zA-Z])(?=.*[!@#$%^*+=-])(?=.*[0-9]).{8,16}$/;

    // email 수신동의 파리미터값
    var rec = getParameter('email');
    $("input[name=emailYn]").val(rec);

    // 중복확인
    $("#duplicateBtn").click(function () {
        var id = $("input[name=userId]").val()
        if(id == "") {
            alert('아이디를 입력해주세요.');
            $("input[name=userId]").focus();
            return false;
        }else if(regExp.test(id) == null) {
            alert('아이디는 이메일 형식으로 입력해주세요.');
            return false;
        }
        $.ajax({
            url: '/Api/dupleCheck?userId='+id,
            type: 'POST',
            dataType: 'JSON',
            success: function (response) {
                console.log(response)
                if(response.result == true) {
                    alert("사용가능한 아이디 입니다.");
                    $("#idChack").val(id);
                    $("#duplicateBtn").removeClass('btn-secondary');
                    $("#duplicateBtn").addClass('btn-info');
                }else{
                    alert('동일한 아이디가 존재합니다.');
                }
            }
        });
    });

    // sign-up button click event
    $("#signBtn").click(function () {
        var name = $("input[name=userName]").val();
        var id = $("input[name=userId]").val();
        var id2 = $("#idChack").val();
        var pw = $("input[name=userPw]").val();
        var pw2 = $("#pwCheck").val();
        var email = $("input[name=userEmail]").val();

        if(name == "") {
            alert('이름을 입력해주세요.');
            return false;
        }else if(id == "") {
            alert('아이디를 입력해주세요.')
            return false;
        }else if(id != id2) {
            alert('아이디 중복체크를 해주세요.');
            return false;
        }else if(pw == "") {
            alert('비밀번호를 입력해주세요.');
            return false;
        }else if(pwReg.test(pw) == false) {
            alert('비밀번호 형식은 영문+숫자+특수문자를 사용하여 8자리 이상입니다.');
            return false;
        }else if(pw2 == "") {
            alert('비밀번호 확인을 입력해주세요.');
            return false;
        }else if(pw != pw2) {
            alert('비밀번호가 일치하지 않습니다.');
            return false;
        }else if(email == "") {
            alert('email을 입력해주세요.');
            return false;
        }else if (email.match(regExp) == null) {
            alert('잘못된 이메일 형식입니다.');
            return false;
        }

        var datas = $("#registForm").serialize();
        $.ajax({
            url: '/api/join',
            type: 'POST',
            dataType: 'JSON',
            data: datas,
            success: function (response) {
                if(response.result == true) {
                    document.location.href='/member/register_result';
                }else {
                    alert('회원가입중 오류가 발생하였습니다.');
                    return false;
                }
            }
        });
    });
});
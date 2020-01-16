$(function () {
    // 이메일 정규표현식
    var regExp = /^[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*@[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*.[a-zA-Z]{2,3}$/i;
    // 비밀번호 정규표현식
    var pwReg = /^(?=.*[a-zA-Z])(?=.*[!@#$%^*+=-])(?=.*[0-9]).{8,16}$/;

    // input id, name
    $("input[name=userName]").val(name);
    $("input[name=mb_id]").val(id);

    // get infomation of member
    $.ajax({
        url: '/api/selectUser',
        type: 'POST',
        dataType: 'JSON',
        success: function (response) {
            if(response.info.userEmail != "") {
                $("input[name=userEmail]").val(response.info.userEmail);
            }
            if(response.info.organizationName != "") {
                $("input[name=organizationName]").val(response.info.organizationName);
            }
            if(response.info.serviceName != "") {
                $("input[name=serviceName]").val(response.info.serviceName);
            }
            if(response.info.url != "") {
                $("input[name=url]").val(response.info.url);
            }
            if(response.info.chargerPhone != "") {
                $("input[name=chargerPhone]").val(response.info.chargerPhone);
            }
            if(response.info.address != "") {
                $("input[name=address]").val(response.info.address);
            }
            if(response.info.serviceModel != "") {
                $("input:radio[name='serviceModel']:radio[value="+response.info.serviceModel+"]").prop('checked', true);
            }
            if(response.info.counsulting != "") {
                $("input:radio[name='counsulting']:radio[value="+response.info.counsulting+"]").prop('checked', true);
            }
            if(response.info.service_info != "" && response.info.service_info != null) {
                $("#service_info").val(response.info.service_info);
            }
            if(response.info.emailYn != "") {
                $("input:radio[name='emailYn']:radio[value="+response.info.emailYn+"]").prop('checked', true);
            }
            if(response.info.notiMethod != "") {
                $("input:radio[name='notiMethod']:radio[value="+response.info.notiMethod+"]").prop('checked', true);
            }
        }
    });

    $("input[name=notiMethod]").click(function () {
        var chargerPhone = $("input[name=chargerPhone]").val();
        if($(this).val() == "2") {
            if(chargerPhone == "") {
                alert('담당자 연락처를 입력해주세요.');
                $("input:radio[name='notiMethod']:radio[value='1']").prop('checked', true);
            }
        }
    });

    // email change auth button
    $("#authBtn").click(function () {
        var id =  $("input[name=mb_id]").val();
        var email = $("input[name=userEmail]").val();
        if(email == "") {
            alert('이메일을 입력해주세요.');
            return false;
        }else if(regExp.test(email) == null) {
            alert('이메일 형식이 올바르지 않습니다.');
            return false;
        }
        $.ajax({
            url: '/api/beforeUpdateEmail?userEmail='+email+'&mb_id='+id,
            type: 'GET',
            dataType: 'JSON',
            success: function (response) {
                if(response.result == true) {
                    alert('인증메일이 발송되었습니다.');
                }
            }
        });
    });

    // email change
    $("#editBtn").click(function () {
        var email = $("#userEmail").val();
        var auth = $("input[name=authNum]").val();
        if(email == "") {
            alert('이메일을 입력해주세요.');
            return false;
        }else if(regExp.test(email) == null) {
            alert('이메일 형식이 올바르지 않습니다.');
            return false;
        }else if(auth == "") {
            alert('인증번호를 입력해주세요.');
            return false;
        }
        var datas = $("#editForm1").serialize();
        $.ajax({
            url: '/api/updateUserEmail',
            type: 'POST',
            dataType: 'JSON',
            data: datas,
            success: function (response) {
                if(response.result == true) {
                    alert('변경되었습니다.');
                    location.reload();
                }else {
                    alert('이메일 변경중 알 수 없는 오류가 발생하였습니다.');
                }
            }
        });
    });


    // change password event
    $("#editBtn2").click(function () {
        var oldPw = $("#oldPw").val();
        var pw = $("input[name=pw]").val();
        var pw2 = $("#pwCheck").val();
        if(oldPw == "") {
            alert('기존 비밀번호를 입력해주세요.');
            return false;
        }else if(pw == "") {
            alert('새 비밀번호를 입력해주세요.');
            return false;
        }else if(pwReg.test(pw) == false) {
            alert('비밀번호 형식은 영문+숫자+특수문자를 사용하여 8자리 이상입니다.');
            return false;
        }else if(pw2 == "") {
            alert('새 비밀번호 확인을 입력해주세요.');
            return false;
        }else if(pw != pw2) {
            alert('새로운 비밀번호와 비밀번호확인 값이 일치하지 않습니다.');
            return false;
        }
        $.ajax({
            url: '/api/login?userId='+id+'&userPw='+oldPw,
            type: 'POST',
            dataType: 'JSON',
            success: function (response) {
                if(response.result == true) {
                    var datas = {
                        userSeq : seq,
                        pw : pw
                    };
                    $.ajax({
                        url: '/api/pwUpdate',
                        type: 'POST',
                        dataType: 'JSON',
                        data: datas,
                        success: function (data) {
                            if (data.result == true) {
                                alert('저장되었습니다');
                                location.reload();
                            } else {
                                alert('비밀번호 변경중 알 수 없는 오류가 발생하였습니다.');
                            }
                        }
                    });
                }else {
                    alert('비밀번호가 일치하지 않습니다.');
                }
            }
        });
    });

    //change add infomation
    $("#editBtn3").click(function () {
        var orNm = $("input[name=organizationName]").val();
        var seNm = $("input[name=serviceName]").val();
        var url = $("input[name=url]").val();
        var addr = $("input[name=address]").val();
        var chPh = $("input[name=chargerPhone]").val();
        var seMo = $("input:radio[name=serviceModel]").val();
        var consul = $("input:radio[name=counsulting]").val();

        if(orNm == "") {
            alert('단체명을 입력해주세요.');
            return false;
        }else if(seNm == "") {
            alert('서비스명을 입력해주세요.');
            return false;
        }else if(url == "") {
            alert('url 정보를 입력해주세요.');
            return false;
        }else if(addr == "") {
            alert('주소를 입력해주세요.');
            return false;
        }else if(chPh == "") {
            alert('담당자 연락처를 입력해주세요.');
            return false;
        }else if(seMo == "") {
            alert('서비스 모델을 선택해주세요.');
            return false;
        }else if(consul == "") {
            alert('컨설팅 희망 여부를 선택해주세요.');
            return false;
        }
        var datas = $("#editForm3").serialize();
        $.ajax({
            url: '/api/updateUserAddInfo',
            type: 'POST',
            dataType: 'JSON',
            data : datas,
            success: function (response) {
                if(response.result == true) {
                    alert('저장되었습니다.');
                    location.reload();
                }else {
                    alert('추가입력정보 변경중 알 수 없는 오류가 발생하였습니다.');
                }
            }
        });
    });

    // change service infomation
    $("#editBtn4").click(function () {
        var text = $("#service_info").val();
        if(text == "") {
            alert('내용을 입력해주세요.');
            return false;
        }
        var datas = $("#editForm4").serialize();
        $.ajax({
            url: '/api/updateUserService',
            type: 'POST',
            dataType: 'JSON',
            data : datas,
            success: function (response) {
                if(response.result == true) {
                    alert('저장되었습니다.');
                    location.reload();
                }else {
                    alert('알 수 없는 오류가 발생하였습니다.');
                }
            }
        });
    });

    // change notiMethod, emailYN
    $("#editBtn5").click(function () {
        var use = $("input:radio[name=emailYn]").val();
        var kind = $("input:radio[name=notiMethod]").val();
        if(use == "") {
            alert('알림수신 여부를 선택해주세요.');
            return false;
        }else if(kind == "") {
            alert('알림 방법을 선택해주세요.');
            return false;
        }
        var datas = $("#editForm5").serialize();
        $.ajax({
            url: '/api/updateUserNoti',
            type: 'POST',
            dataType: 'JSON',
            data : datas,
            success: function (response) {
                if(response.result == true) {
                    alert('저장되었습니다.');
                    location.reload();
                }else {
                    alert('알 수 없는 오류가 발생하였습니다.');
                }
            }
        });
    });

});
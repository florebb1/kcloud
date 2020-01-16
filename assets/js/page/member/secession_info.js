$(function () {
    var userSeq = getParameter('userSeq');
    if(userSeq == "") {
        alert('존재하지 않은 회원입니다.');
        return false;
    }else {
        $("input[name=userSeq]").val(userSeq);
    }
    $("#secBtn").click(function () {
        if ($("#secCheck").is(':checked')) {
            var datas = $("#secessionForm").serialize();
            $.ajax({
                url: '/api/dropMemberFin',
                type: 'POST',
                dataType: 'JSON',
                data: datas,
                success: function (response) {
                    console.log(response);
                    if (response.result == true) {
                        $.ajax({
                            url: '/api/logout',
                            type: 'GET',
                            dataType: 'JSON',
                            success: function (response) {
                                if(response.result == true) {
                                    document.location.href='/member/secession_result';
                                }else {
                                    alert('로그아웃 중 에러가 발생하였습니다.');
                                    return false;
                                }
                            }
                        });
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
        }else {
            alert('유의사항 확인을 동의해주세요.');
            return false;
        }
    });
});
$(function() {
    $("#staticEmail").change(function () {
        var regExp = /^[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*@[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*.[a-zA-Z]{2,3}$/i;
        var email = $(this).val();
        if(email.match(regExp) == null) {
            alert('이메일 형식이 올바르지 않습니다.');
            $(this).val('');
            $(this).focus();
            return false;
        }
    });

    $("#qnaBtn").click(function () {
        var staticNm = $("#staticNm").val();
        var staticSt = $("#staticSt").val();
        var staticEmail = $("#staticEmail").val();
        var staticTitle = $("#staticTitle").val();
        var staticContent = $("#staticContent").val();

        if(staticNm == "") {
            alert('회원명을 입력해 주십시오.');
            $("#staticNm").focus();
            return false;
        }else if(staticSt == "") {
            alert('단체명을 입력해 주십시오.');
            $("#staticSt").focus();
            return false;
        }else if(staticEmail == "") {
            alert('이메일 입력해 주십시오.');
            $("#staticEmail").focus();
            return false;
        }else if(staticTitle == "") {
            alert('제목을 입력해 주십시오.');
            $("#staticTitle").focus();
            return false;
        }else if(staticContent == "") {
            alert('내용을 입력해 주십시오.');
            $("#staticContent").focus();
            return false;
        }
        var datas = $("#qnaForm").serialize();
        $('#qnaForm').ajaxSubmit({
            url: '/api/insertQna',
            type: 'POST',
            dataType: 'JSON',
            data: datas,
            success: function (response) {
                if(response.result == true) {
                    alert('등록이 완료 되었습니다.');
                    location.reload();
                }
            },error: function (jqXHR) {
                console.log(jqXHR.responseText);
            }
        });
    });

});
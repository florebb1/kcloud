$(function() {
    // 이메일 정규표현식
    var regExp = /^[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*@[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*.[a-zA-Z]{2,3}$/i;
    // url 정규표현식
    var urlExp = /(http(s)?:\/\/)([a-z0-9\w]+\.*)+[a-z0-9]{2,4}/gi;

    // tab1
    // 사업자번호 변경시
    $("#wr_4").change(function () {
        var checkSum = 0;
        var checkID = [1,3,7,1,3,7,1,3,5];
        var bizNum= $(this).val();
        if ((bizNum = (bizNum+'').match(/\d{1}/g)).length != 10) {
            alert('사업자등록번호의 형식을 확인해 주십시오.');
            $(this).val("");
            return false;
        }
        for (var i=0; i<9; i++) {
            checkSum += checkID[i] * Number(bizNum[i]);
        }
        if (10 - ((checkSum + Math.floor(checkID[8] * Number(bizNum[8]) / 10)) % 10) != Number(bizNum[9])) {
            alert('사업자등록번호의 형식을 확인해 주십시오.');
            $(this).val("");
            return false;
        }
    });

    // 대표자 이메일 변경시
    $("#wr_email").change(function () {
        var email = $(this).val();
        if (email.match(regExp) == null) {
            alert('잘못된 이메일 형식입니다.');
            return false;
        }
    });
    // 담당자 이메일 변경시
    $("#wr_15").change(function () {
        var email = $(this).val();
        if (email.match(regExp) == null) {
            alert('잘못된 이메일 형식입니다.');
            return false;
        }
    });

    // 품질성능 검증 신청
    $("#onlineBtn").click(function () {
        var wr_name = $("input[name=wr_name]").val();
        var wr_subject = $("input[name=wr_subject]").val();
        var content = $("#content").val();
        var wr_content_editor = document.getElementById('content');

        if( wr_name == "") {
            alert('대표자를 입력해 주십시오.');
            $("input[name=wr_name]").focus();
            return false;
        }else if (wr_subject == "") {
            alert('서비스 명칭을 입력해 주십시오.');
            $("input[name=wr_subject]").focus();
            return false;
        }else if(content == "") {
            alert('서비스 소개를 입력해 주십시오.');
            wr_content_editor.focus();
            return false;
        }
        $("#form1Res").val("1");
        $("#profile-tab").click();
    });

    // tab2
    //진위여부 자가진단
    $("#onlineBtn2").click(function () {
        var wr_name = $("#wr_name").val();
        var wr_homepage = $("#wr_homepage").val();
        if(wr_name == "") {
            alert('업체명을 입력해 주십시오.');
            $("#wr_name").focus();
            return false;
        }else if(wr_homepage == "") {
            alert('서비스명을 입력해 주십시오.');
            $("#wr_homepage").focus();
            return false;
        }
        // 1.1
        var wr_9 = $("#wr_9").val();
        var bf_file_1 = $("#bf_file_1").val();
        if(wr_9 == "") {
            alert('1.1 항목의 운영현황을 입력해 주십시오.');
            $("#wr_9").focus();
            return false;
        }else if(bf_file_1 == "") {
            alert('1.1 항목의 증적자료를 등록해 주십시오.');
            $("#bf_file_1").focus();
            return false;
        }
        // 1.2
        var wr_subject = $("#wr_subject").val();
        var bf_file_2 = $("#bf_file_2").val();
        if(wr_subject == "") {
            alert('1.2 항목의 운영현황을 입력해 주십시오.');
            $("#wr_subject").focus();
            return false;
        }else if(bf_file_2 == "") {
            alert('1.2 항목의 증적자료를 등록해 주십시오.');
            $("#bf_file_2").focus();
            return false;
        }
        // 1.3
        var wr_content = $("#wr_content").val();
        var bf_file_3 = $("#bf_file_3").val();
        if(wr_content == "") {
            alert('1.3 항목의 운영현황을 입력해 주십시오.');
            $("#wr_content").focus();
            return false;
        }else if(bf_file_3 == "") {
            alert('1.3 항목의 증적자료를 등록해 주십시오.');
            $("#bf_file_3").focus();
            return false;
        }
        // 2.1
        var wr_10 = $("#wr_10").val();
        var bf_file_4 = $("#bf_file_4").val();
        if(wr_10 == "") {
            alert('2.1 항목의 운영현황을 입력해 주십시오.');
            $("#wr_10").focus();
            return false;
        }else if(bf_file_4 == "") {
            alert('2.1 항목의 증적자료를 등록해 주십시오.');
            $("#bf_file_4").focus();
            return false;
        }
        // 2.2
        var wr_11 = $("#wr_11").val();
        var bf_file_5 = $("#bf_file_5").val();
        if(wr_11 == "") {
            alert('2.2 항목의 운영현황을 입력해 주십시오.');
            $("#wr_11").focus();
            return false;
        }else if(bf_file_5 == "") {
            alert('2.2 항목의 증적자료를 등록해 주십시오.');
            $("#bf_file_5").focus();
            return false;
        }
        // 2.3
        var wr_12 = $("#wr_12").val();
        var bf_file_6 = $("#bf_file_6").val();
        if(wr_12 == "") {
            alert('2.3 항목의 운영현황을 입력해 주십시오.');
            $("#wr_12").focus();
            return false;
        }else if(bf_file_6 == "") {
            alert('2.3 항목의 증적자료를 등록해 주십시오.');
            $("#bf_file_6").focus();
            return false;
        }
        // 2.4
        var wr_13 = $("#wr_13").val();
        var bf_file_7 = $("#bf_file_7").val();
        if(wr_13 == "") {
            alert('2.4 항목의 운영현황을 입력해 주십시오.');
            $("#wr_13").focus();
            return false;
        }else if(bf_file_7 == "") {
            alert('2.4 항목의 증적자료를 등록해 주십시오.');
            $("#bf_file_7").focus();
            return false;
        }
        // 2.5
        var wr_14 = $("#wr_14").val();
        var bf_file_8 = $("#bf_file_8").val();
        if(wr_14 == "") {
            alert('2.5 항목의 운영현황을 입력해 주십시오.');
            $("#wr_14").focus();
            return false;
        }else if(bf_file_7 == "") {
            alert('2.5 항목의 증적자료를 등록해 주십시오.');
            $("#bf_file_8").focus();
            return false;
        }
        $("#form2Res").val("1");
        $("#contact-tab").click();
    });

    // tab3
    // 관리체계 자가진단 절차
    $("#onlineBtn3").click(function () {
        var subject = $("#wr_subject_3").val();
        var content = $("#wr_content_3").val();
        var wr_content_editor = document.getElementById('wr_content_3');

        if(subject == "") {
            alert('업체명을 입력해 주십시오.');
            $("#wr_subject_3").focus();
            return false;
        }else if(content == "") {
            alert('서비스 소개를 입력해 주십시오.');
            wr_content_editor.focus();
            return false;
        }
        $("#form3Res").val("1");

        // allform validation
        var form1 = $("#form1Res").val();
        var form2 = $("#form2Res").val();
        var form3 = $("#form3Res").val();

        if(form1 != "1") {
            alert('품질성능 검증 신청 절차를 작성해주세요.');
            $("#home-tab").click();
            return false;
        }else if(form2 != "1") {
            alert('진위여부 자가진단 절차를 작성해주세요.');
            $("#home-tab").click();
            return false;
        }else if(form3 != "1") {
            alert('진위여부 자가진단 절차를 작성해주세요.');
            $("#home-tab").click();
            return false;
        }

        $('#onlineForm').ajaxSubmit({
            url: "/api/apply1",
            dataType: 'json',
            processData: false,
            contentType: false,
            type: 'POST',
            success: function (response) {
                if(response.result == true) {
                    $("#idx1").val(response.idx);
                    $("#idx2").val(response.idx);
                    $('#onlineForm2').ajaxSubmit({
                        url: "/api/apply2",
                        dataType: 'json',
                        processData: false,
                        contentType: false,
                        type: 'POST',
                        success: function (response) {
                            if(response.result == true) {
                                $('#onlineForm3').ajaxSubmit({
                                    url: "/api/apply3",
                                    dataType: 'json',
                                    processData: false,
                                    contentType: false,
                                    type: 'POST',
                                    success: function (response) {
                                        if(response.result == true) {
                                            alert('등록이 완료 되었습니다.');
                                            location.reload();
                                        }
                                    },error: function (jqXHR) {
                                        console.log(jqXHR.responseText);
                                    }
                                });
                            }
                        },error: function (jqXHR) {
                            console.log(jqXHR.responseText);
                        }
                    });
                }
            },error: function (jqXHR) {
                console.log(jqXHR.responseText);
            }
        });
    });

});
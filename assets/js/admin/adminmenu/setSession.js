$(function(){
    $.ajax({
        url: "/adminapi/sessionInfo",
        type: 'GET',
        dataType: 'JSON',
        success: function (response) {
            console.log(response);
            $("#currentUser").html(response.info.user_session+"초");
            $("#currentAdmin").html(response.info.admin_session+"초");
        },error: function (jqXHR) {
                console.log(jqXHR.responseText);
        }
    });
})

function userSession() {
   
    if($("#user_session").val() == "") {
        alert('변경값을 입력하세요.');
        return false;
    }
    // var datas = $("#noticeForm").serialize();
    // $('#noticeForm').ajaxSubmit({
    //     url: "/adminapi/insertFaq",
    //     processData: false,
    //     contentType: false,
    //     type: 'POST',
    //     dataType: 'JSON',
    //     data: datas,
    //     success: function (response) {
    //         if(response.result == true) {
    //             alert('저장되었습니다.');
    //             document.location.href='/admin/aboard/faq';
    //         }
    //     },error: function (jqXHR) {
    //         console.log(jqXHR.responseText);
    //     }
    // });
    
    $.ajax({
        url: "/adminapi/userSession",
        type: 'POST',
        dataType: 'JSON',
        data: "user_session="+$("#user_session").val(),
        success: function (response) {
            console.log(response);
            if(response.result == true) {
                alert('저장되었습니다.');
                document.location.reload();
            }
        },error: function (jqXHR) {
                console.log(jqXHR.responseText);
        }
    });
}

function adminSession() {
   
    if($("#admin_session").val() == "") {
        alert('변경값을 입력하세요.');
        return false;
    }
    // var datas = $("#noticeForm").serialize();
    // $('#noticeForm').ajaxSubmit({
    //     url: "/adminapi/insertFaq",
    //     processData: false,
    //     contentType: false,
    //     type: 'POST',
    //     dataType: 'JSON',
    //     data: datas,
    //     success: function (response) {
    //         if(response.result == true) {
    //             alert('저장되었습니다.');
    //             document.location.href='/admin/aboard/faq';
    //         }
    //     },error: function (jqXHR) {
    //         console.log(jqXHR.responseText);
    //     }
    // });
    
    $.ajax({
        url: "/adminapi/adminSession",
        type: 'POST',
        dataType: 'JSON',
        data: "admin_session="+$("#admin_session").val(),
        success: function (response) {
            console.log(response);
            if(response.result == true) {
                alert('저장되었습니다.');
                document.location.reload();
            }
        },error: function (jqXHR) {
                console.log(jqXHR.responseText);
        }
    });
}
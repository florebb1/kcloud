$(function () {
    // 페이지 변수
    var pageNum = getParameter('pageNum');
    if(pageNum == "" || pageNum == null || pageNum == undefined){
        pageNum = 1;
    }
    var row = getParameter('row');
    if(row == "" || row == null || row == undefined){
        row = 10;
    }else {
        $("#row").val(row);
    }

    //공지리스트
    adminList(pageNum, row);

    $("#row").change(function () {
        row = $(this).val();
        adminList(1, row);
    });
    $("#exampleModalCenter22").on("show.bs.modal",function(){
        userList(1);
    })

    $("body").on("click","input:radio[name=userSeq]",function(){
        // alert(1)
        var userSeq = $('input[name="userSeq"]:checked').data("userseq");
        var userId = $('input[name="userSeq"]:checked').data("userid");
        var userName = $('input[name="userSeq"]:checked').data("username");
        var userEmail = $('input[name="userSeq"]:checked').data("useremail");
        $("#mb_id").val(userId);
        $("#mb_no").val(userSeq);
        $("#mb_name").html(userName);
        $("#mb_email").html(userEmail);
    })
});

function adminList(pageNum, row) {
    var html = "";
    $.ajax({
        url: '/adminapi/fetchAdmin?row='+row+'&page='+pageNum,
        type: 'GET',
        dataType: 'JSON',
        success: function (response) {
            console.log(response);
            $("#total").text(response.total);
            if(response.list.length > 0) {
                for (var i = 0; i < response.list.length; i++) {
                    html += '<tr>'
                        + '<th scope="row">'+response.list[i].mb_id+'</th>'
                        + '<td>'+response.list[i].mb_name+'</td>'
                        + '<td>포털 관리자</td>'
                        + '<td>'+response.list[i].mb_email+'</td>'
                        + '<td>'+response.list[i].mb_admin_datetime+'</td>'
                        + '</tr>';
                }
                $("#content").empty();
                $("#content").append(html);
                if(response.total % row == 0) {
                    totalNum = (response.total / row);
                }else {
                    totalNum = (response.total / row) + 1;
                }
                $('#show_paginator').bootpag({
                    total: totalNum,
                    page: pageNum,
                    maxVisible: 5
                }).on('page', function(event, num) {
                    // logList(num, row);
                    location.href='/admin/adminmenu/rights_management?pageNum='+num+'&row='+row;
                });
            }else {
                html ='<tr><th colspan="11" scope="row"><div class="bbs-none d-flex justify-content-center align-items-center">등록된 관리자가 존재하지않습니다.</div></th></tr>';
                $("#content").empty();
                $("#content").append(html);
            }
        }
    });
}

function userList(pageNum){
    $.ajax({
        url: '/adminapi/fetchUser?searchId='+$("#mb_id").val()+'&row=5&page='+pageNum,
        type: 'GET',
        dataType: 'JSON',
        success: function (response) {
            console.log(response);
            var html = "";
            if(response.list.length > 0) {
                for (var i = 0; i < response.list.length; i++) {
                    if(response.list[i].serviceModel == "1"){
                        var serviceModel = "IaaS";
                    }else if(response.list[i].serviceModel == "2"){
                        var serviceModel = "PaaS";
                    }else{
                        var serviceModel = "SaaS";
                    }
                    html += '<tr>'
                        + '<th><input type="radio" name="userSeq" data-userseq="'+response.list[i].userSeq+'" data-userid="'+response.list[i].userId+'" data-username="'+response.list[i].userName+'" data-useremail="'+response.list[i].userEmail+'"></th>'
                        + '<td>'+response.list[i].userId+'</td>'
                        + '<td>'+response.list[i].userName+'</td>'
                        + '<td>'+response.list[i].userEmail+'</td>'
                        + '<td>'+response.list[i].organizationName+'</td>'
                        + '<td>'+response.list[i].serviceName+'</td>'
                        + '<td>'+serviceModel+'</td>'
                        + '<td>'+(response.list[i].counsulting == "1" ? "희망":"미희망")+'</td>'
                        + '<td>'+response.list[i].mb_5+'</td>'
                        + '<td>'+response.list[i].mb_6+'</td>'
                        + '</tr>';
                }
                $("#modal_content").empty();
                $("#modal_content").append(html);
                if(response.total % 5 == 0) {
                    totalNum = (response.total / 5);
                }else {
                    totalNum = (response.total / 5) + 1;
                }
                $('#show_paginator2').bootpag({
                    total: totalNum,
                    page: pageNum,
                    maxVisible: 5
                }).on('page', function(event, num) {
                    userList(num);
                });
            }else {
                html ='<tr><th colspan="11" scope="row"><div class="bbs-none d-flex justify-content-center align-items-center">등록된 회원이 존재하지않습니다.</div></th></tr>';
                $("#modal_content").empty();
                $("#modal_content").append(html);
            }
        }
    });
}
function addAdmin(){

    var mb_no = $("#mb_no").val();
    
    if(mb_no == "") {
        alert('회원을 선택해주세요.');
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
        url: "/adminapi/insertAdmin",
        type: 'POST',
        dataType: 'JSON',
        data: "mb_no="+mb_no+"&mb_id="+$("#mb_id").val(),
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
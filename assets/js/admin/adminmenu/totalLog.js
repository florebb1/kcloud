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
    logList(pageNum, row);

    $("#row").change(function () {
        row = $(this).val();
        logList(1, row);
    });
});

function logList(pageNum, row) {
    var html = "";
    $.ajax({
        url: '/adminapi/fetchLog?row='+row+'&page='+pageNum,
        type: 'GET',
        dataType: 'JSON',
        success: function (response) {
            console.log(response);
            $("#total").text(response.total);
            if(response.list.length > 0) {
                for (var i = 0; i < response.list.length; i++) {
                    html += '<tr>'
                        + '<th scope="row">'+response.list[i].id+'</th>'
                        + '<td>'+(response.list[i].name === null ? "-":response.list[i].name)+'</td>'
                        + '<td>'+(response.list[i].writer === null ? "-":response.list[i].writer)+'</td>'
                        + '<td>'+(response.list[i].action_id === null ? "-":response.list[i].action_id)+'</td>'
                        + '<td>'+response.list[i].content+'</td>'
                        + '<td>'+(response.list[i].type == "1" ? "관리자":"회원")+'</td>'
                        + '<td>'+response.list[i].regdate+'</td>'
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
                    location.href='/admin/adminmenu/total_log?pageNum='+num+'&row='+row;
                });
            }else {
                html ='<tr><th colspan="11" scope="row"><div class="bbs-none d-flex justify-content-center align-items-center">등록된 로그가 존재하지않습니다.</div></th></tr>';
                $("#content").empty();
                $("#content").append(html);
            }
        }
    });
}
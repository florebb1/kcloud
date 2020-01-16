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
    notice(pageNum, row);

    $("#row").change(function () {
        row = $(this).val();
        notice(1, row);
    });
});
function notice(pageNum, row) {
    var html = "";
    $.ajax({
        url: '/adminapi/fetchReference?row='+row+'&page='+pageNum,
        type: 'GET',
        dataType: 'JSON',
        success: function (response) {
            console.log(response);
            $("#total").text(response.total);
            if(response.list.length > 0) {
                for (var i = 0; i < response.list.length; i++) {
                    html += '<tr>'
                        + '<th scope="row"><input type="checkbox"/></th>'
                        + '<th scope="row">'+response.list[i].wr_id+'</th>'
                        + '<td>'+response.list[i].wr_subject+'</td>'
                        + '<td>'+response.list[i].wr_name+'</td>'
                        + '<td>'+response.list[i].wr_hit+'</td>'
                        + '<td>'+response.list[i].wr_datetime+'</td>'
                        + '<td>'
                        + '<a href="#" class="btn btn-danger btn-sm mx-1" onclick="notice_del('+response.list[i].wr_id+')">삭제</a>'
                        + '<a href="/admin/aboard/pds_write?wr_id='+response.list[i].wr_id+'" class="btn btn-info btn-sm">수정</a>'
                        + '</td>'
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
                    // notice(num, row);
                    location.href='/admin/aboard/pds?pageNum='+num+'&row='+row;
                });
            }else {
                html ='<tr><th colspan="11" scope="row"><div class="bbs-none d-flex justify-content-center align-items-center">등록된 자료가 존재하지않습니다.</div></th></tr>';
                $("#content").empty();
                $("#content").append(html);
            }
        }
    });
}

function notice_del(id) {
    if(confirm("해당 공지를 삭제하시겠습니까?")) {
        $.ajax({
            url: '/adminapi/deleteReference?wr_id='+ id,
            type: 'GET',
            dataType: 'JSON',
            success: function (response) {
                if(response.result == true) {
                    location.reload();
                }
            }
        });
    }
}
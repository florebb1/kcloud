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
    
    // 온라인 신청 리스트 요약
    summary();
    
    // 온라인 신청 리스트
    list(pageNum, row);

    $("#row").change(function () {
        row = $(this).val();
        list(1, row);
    });
});
function list(pageNum, row) {
    var html = "";
    $.ajax({
        url: '/adminapi/fetchApply1?row=' + row + '&page=' + pageNum,
        type: 'GET',
        dataType: 'JSON',
        success: function (response) {
            console.log(response);
            if(response.list.length > 0) {
                for (var i = 0; i < response.list.length; i++) {
                    html += '<tr>'
                        + '<th scope="row"><input type="checkbox"/></th>'
                        + '<th scope="row">'+response.list[i].wr_id+'</th>'
                        + '<td>'+response.list[i].mb_id+'</td>'
                        + '<td>'+response.list[i].wr_1+'</td>'
                        + '<td>'+response.list[i].wr_11+'</td>'
                        + '<td>'+response.list[i].wr_subject+'</td>'
                        + '<td><div>'+response.list[i].wr_9+'</div><div>'+response.list[i].wr_10+'</div></td>'
                        + '<td>'+response.list[i].wr_3+'</td>'
                        + '<td>'+response.list[i].wr_datetime+'</td>'
                        + '<td>';
                    if(response.list[i].status == "0") {
                        html += '<span class="btn btn-outline-secondary font-weight-bolder btn-sm">신청접수</span>';
                    }else if(response.list[i].status == "1") {
                        html += '<span class="btn btn-outline-primary font-weight-bolder btn-sm">신청확인</span>';
                    }else if(response.list[i].status == "2") {
                        html += '<span class="btn btn-outline-warning font-weight-bolder btn-sm">진위여부 진단</span>';
                    }else if(response.list[i].status == "3") {
                        html += '<span class="btn btn-outline-danger font-weight-bolder btn-sm">진위여부 반려</span>';
                    }else if(response.list[i].status == "4") {
                        html += '<span class="btn btn-outline-warning font-weight-bolder btn-sm">관리체계 진단</span>';
                    }else if(response.list[i].status == "5") {
                        html += '<span class="btn btn-outline-danger font-weight-bolder btn-sm">관리체계 반려</span>';
                    }else if(response.list[i].status == "6") {
                        html += '<span class="btn btn-outline-info font-weight-bolder btn-sm">성능시험</span>';
                    }else if(response.list[i].status == "7") {
                        html += '<span class="btn btn-outline-dark font-weight-bolder btn-sm">확인서 발행</span>';
                    }
                        html += '</td>'
                        + '<td><a href="/admin/apply/online_apply_detail?wr_id='+response.list[i].wr_id+'" class="btn btn-info btn-sm">관리</a></td>'
                        + '<tr>';
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
                    // list(num, row);
                    location.href='/admin/apply/online_apply?pageNum='+num+'&row='+row;
                });
            }else {
                html ='<tr><th colspan="11" scope="row"><div class="bbs-none d-flex justify-content-center align-items-center">온라인 신청이 존재하지않습니다.</div></th></tr>';
                $("#content").empty();
                $("#content").append(html);
            }
        }
    });
}
function summary() {
    $.ajax({
        url: '/adminapi/getApplySummary',
        type: 'GET',
        dataType: 'JSON',
        success: function (response) {
            $("#total1").text(response.applyTotal1 + "건");
            $("#total2").text(response.applyTotal2 + "명");
            $("#total3").text(response.applyTotal3 + "명");
        }
    });
}
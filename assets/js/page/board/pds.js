$(function () {
    //pagenation 변수
    var pageNum = getParameter('pageNum');
    if(pageNum == "" || pageNum == null || pageNum == undefined) {
        pageNum = 1;
    }
    notice(pageNum);

    $("#searchWord").keyup(function(event) {
        if (event.keyCode === 13) {
            $("#button-addon2").click();
        }
    });

    $("#button-addon2").click(function () {
        notice(pageNum);
    });
});

function notice(pageNum) {
    var html = "";
    var totalNum = "";
    var searchType = $("#inputGroupSelect02").val();
    var searchWord = $("#searchWord").val();
    $.ajax({
        url: '/api/fetchReference?pageNum='+pageNum+'&searchType='+searchType+'&searchWord='+searchWord,
        type: 'GET',
        dataType: 'JSON',
        success: function (response) {
            console.log(response);
            if(response.totalCount > 0) {
                $("#total").text(response.totalCount);
                for (var i = 0; i < response.list.length; i++) {
                    var ahref = "location.href='/board/pds_view?wr_id="+response.list[i].wr_id+"'";
                    html += '<tr onclick="'+ahref+'">'
                        + '<th scope="row">'+response.list[i].wr_id+'</th>'
                        + '<td>'+response.list[i].wr_subject+'</td>'
                        + '<td>'+response.list[i].wr_name+'</td>'
                        + '<td>'+response.list[i].wr_hit+'</td>'
                        + '<td>'+response.list[i].wr_last+'</td>'
                        + '</tr>';
                }

                if(response.totalCount % 10 == 0) {
                    totalNum = (response.totalCount / 10);
                }else {
                    totalNum = (response.totalCount / 10) + 1;
                }
                $("#content").empty();
                $("#content").append(html);
                $('#show_paginator').bootpag({
                    total: totalNum,
                    page: pageNum,
                    maxVisible: 5
                }).on('page', function(event, num) {
                    location.href='/board/pds?pageNum='+num;
                });
            }else {
                html ='<tr><th colspan="5" scope="row"><div class="bbs-none d-flex justify-content-center align-items-center">게시물이 없습니다.</div></th></tr>';
                $("#content").empty();
                $("#content").append(html);
            }
        }
    });
}
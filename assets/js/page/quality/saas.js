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
        url: '/api/fetchQuality?pageNum='+pageNum+'&searchType='+searchType+'&searchWord='+searchWord+'&type=SaaS',
        type: 'GET',
        dataType: 'JSON',
        success: function (response) {
            console.log(response);
            if(response.totalCount > 0) {
                $("#total").text(response.totalCount);
                for (var i = 0; i < response.list.length; i++) {
                    var ahref = "location.href='/page/details?wr_id=" + response.list[i].wr_id + "'";
                    html += '<tr onclick="' + ahref + '">'
                        + '<td>'
                        + '<div class="row">'
                        + '<div class="col-12 col-md-3"><img src="/assets/images/icon/nipa.jpg" class="w-100"></div>'
                        + '<div class="col-12 col-md-9">'
                        + '<div class="row">'
                        + '<div class="col-12 col-md-6">'
                        + '<p><b>URL</b><span class="text-secondary px-3">|</span><span>' + response.list[i].wr_link1 + '</span></p>'
                        + '<p><b>단체명</b><span class="text-secondary px-3">|</span><span>' + response.list[i].wr_subject + '</span></p>'
                        + '<p><b>서비스명</b><span class="text-secondary px-3">|</span><span>' + response.list[i].wr_1 + '</span></p>'
                        + '</div>'
                        + '<div class="col-12 col-md-6">'
                        + '<p><b>발급일자</b><span class="text-secondary px-3">|</span><span>' + response.list[i].wr_last + '</span></p>'
                        + '<p><b>품질성능 확인</b><span class="text-secondary px-3">|</span><span class="text-danger">' + response.list[i].wr_14 + '</span></p>'
                        + '</div>'
                        + '<div class="col-12 border-top py-2"><div class="ellipsis-multis">' + response.list[i].wr_content.replace(/(\r\n|\n|\r)/gm, "<br />") + '</div></div>'
                        + '</div>'
                        + '</div>'
                        + '</div>'
                        + '</td>'
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
                    location.href='/page/saas?pageNum='+num;
                });
            }else {
                html ='<tr><th colspan="5" scope="row"><div class="bbs-none d-flex justify-content-center align-items-center">게시물이 없습니다.</div></th></tr>';
                $("#content").empty();
                $("#content").append(html);
            }
        }
    });
}
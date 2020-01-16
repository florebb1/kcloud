$(function () {
    // 페이지 변수
    var pageNum1 = getParameter('pageNum1');
    if(pageNum1 == "" || pageNum1 == null || pageNum1 == undefined){
        pageNum1 = 1;
    }
    var pageNum2 = getParameter('pageNum2');
    if(pageNum2 == "" || pageNum2 == null || pageNum2 == undefined){
        pageNum2 = 1;
    }
    var pageNum3 = getParameter('pageNum3');
    if(pageNum3 == "" || pageNum3 == null || pageNum3 == undefined){
        pageNum3 = 1;
    }
    var pageNum4 = getParameter('pageNum4');
    if(pageNum4 == "" || pageNum4 == null || pageNum4 == undefined){
        pageNum4 = 1;
    }
    var pageNum5 = getParameter('pageNum5');
    if(pageNum5 == "" || pageNum5 == null || pageNum5 == undefined){
        pageNum5 = 1;
    }
    var row = getParameter('row');
    if(row == "" || row == null || row == undefined){
        row = 10;
    }else {
        $("#row").val(row);
    }
    // 가용성 목록
    availability(pageNum1, row);
    // 응답시간 목록
    ping(pageNum2, row);
    // 탄력성 목록
    elasticity(pageNum3, row);
    //이벤트 알림 지연 목록
    delay(pageNum4, row);
    // Interrupt 목록
    interrupt(pageNum5, row);

    $("#row").change(function () {
        availability(1, row);
        ping(1, row);
        elasticity(1, row);
        delay(1, row);
        interrupt(1, row);
    });

    // 회원검색
    // 검색버튼 클릭이벤트
    $("#memberSearchBtn").click(function () {
        var html = "";
        var searchType = $("#searchType").val();
        var searchWord = $("#searchWord").val();
        $.ajax({
            url: '/adminapi/fetchUser?page=1&searchWord=' + searchWord +'&searchType='+searchType,
            type: 'GET',
            dataType: 'JSON',
            success: function (response) {
                if(response.list.length > 0) {
                    for (var i = 0; i < response.list.length; i++) {
                        html += '<tr>'
                            + '<th scope="row">'
                            + '<div class="form-check"><input class="form-check-input" type="radio" name="memberSearchNum" organizationName="'+response.list[i].organizationName+'" serviceName="'+response.list[i].serviceName+'" value="'+response.list[i].userSeq+'"></div>'
                            + '</th>'
                            + '<td>'+response.list[i].userId+'</td>'
                            + '<td>'+response.list[i].organizationName+'</td>'
                            + '<td>'+response.list[i].serviceName+'</td>';
                        if(response.list[i].serviceModel == "1") {
                            html += '<td>IaaS</td>';
                        }else if(response.list[i].serviceModel == "2") {
                            html += '<td>PaaS</td>';
                        }else if(response.list[i].serviceModel == "3") {
                            html += '<td>SaaS</td>';
                        }else {
                            html += '<td>기타</td>';
                        }
                        if(response.list[i].counsulting == "1") {
                            html += '<td>희망</td>';
                        }else {
                            html += '<td>비희망</td>';
                        }
                            // + '<td>완료</td>'
                        html += '<td>미연결</td>'
                            + '</tr>';
                    }
                    $("#memContent").empty();
                    $("#memContent").append(html);
                }else {
                    html ='<tr><th colspan="8" scope="row"><div class="bbs-none d-flex justify-content-center align-items-center">검색된 회원이 없습니다.</div></th></tr>';
                    $("#memContent").empty();
                    $("#memContent").append(html);
                }
            }
        });
    });
    $("#searchWord").keyup(function(event) {
        if (event.keyCode === 13) {
            $("#memberSearchBtn").click();
        }
    });
    // 검색 확인
    $(document).on("click", "#memberCheckBtn", function () {
        var seq = $("input:radio[name='memberSearchNum']:checked").val();
        var orName = $("input:radio[name='memberSearchNum']:checked").attr("organizationName");
        var seName = $("input:radio[name='memberSearchNum']:checked").attr("serviceName");
        $('#member-search').modal('hide');
        $("#orgName").val(orName);
        $("#serName").val(seName);
        $("#mb_no").val(seq);
    });

    $(document).on("click", "#monitorAddBtn", function () {
        var datas = $("#moniterInsertForm").serialize();
        $.ajax({
            url: '/adminapi/insertPerformance',
            type: 'POST',
            dataType: 'JSON',
            data: datas,
            success: function (response) {
                if(response.result == true) {
                    alert('등록되었습니다.');
                    $('#moniter-input').modal('hide');
                    document.location.reload();
                }
            }
        });
    });
});
// 가용성
function availability(pageNum, row) {
    var html = "";
    $.ajax({
        url: '/adminapi/fetchPerformance1?row=' + row + '&page=' + pageNum,
        type: 'GET',
        dataType: 'JSON',
        success: function (response) {
            if(response.total > 0) {
                for (var i = 0; i < response.list.length; i++) {
                    html += '<tr>'
                        + '<th scope="row"><input type="checkbox"/></th>'
                        + '<th scope="row">'+response.list[i].seq+'</th>'
                        + '<td>'+response.list[i].mb_1+'/'+response.list[i].mb_2+'</td>'
                        + '<td>'+response.list[i].host_name+'</td>';
                        if(response.list[i].data1 == "" || response.list[i].data1 == null || response.list[i].data1 == undefined) {
                            html += '<td>0%</td>';
                        }else {
                            html += '<td>'+response.list[i].data1+'%</td>';
                        }
                        if(response.list[i].data2 == "" || response.list[i].data2 == null || response.list[i].data2 == undefined) {
                            html += '<td>0%</td>';
                        }else {
                            html += '<td>'+response.list[i].data2+'%</td>';
                        }
                        if(response.list[i].data3 == "" || response.list[i].data3 == null || response.list[i].data3 == undefined) {
                            html += '<td>0%</td>';
                        }else {
                            html += '<td>'+response.list[i].data3+'%</td>';
                        }
                        if(response.list[i].data4 == "" || response.list[i].data4 == null || response.list[i].data4 == undefined) {
                            html += '<td>-</td>';
                        }else {
                            html += '<td>+'+response.list[i].data4+'</td>';
                        }
                        html += '</tr>';
                }
                $("#content1").empty();
                $("#content1").append(html);
                if(response.total % row == 0) {
                    totalNum = (response.total / row);
                }else {
                    totalNum = (response.total / row) + 1;
                }
                $('#show_paginator1').bootpag({
                    total: totalNum,
                    page: pageNum,
                    maxVisible: 5
                }).on('page', function(event, num) {
                    availability(num, row);
                });
            }else {
                html ='<tr><th colspan="8" scope="row"><div class="bbs-none d-flex justify-content-center align-items-center">게시물이 없습니다.</div></th></tr>';
                $("#content1").empty();
                $("#content1").append(html);
            }
        }
    });
}
// 응답시간
function ping(pageNum, row) {
    var html = "";
    $.ajax({
        url: '/adminapi/fetchPerformance2?row=' + row + '&page=' + pageNum,
        type: 'GET',
        dataType: 'JSON',
        success: function (response) {
            if(response.total > 0) {
                for (var i = 0; i < response.list.length; i++) {
                    html += '<tr>'
                        + '<th scope="row"><input type="checkbox"/></th>'
                        + '<th scope="row">'+response.list[i].seq+'</th>'
                        + '<td>'+response.list[i].mb_1+'/'+response.list[i].mb_2+'</td>'
                        + '<td>'+response.list[i].host_name+'</td>'
                        if(response.list[i].data1 == "" || response.list[i].data1 == null || response.list[i].data1 == undefined) {
                            html += '<td>0.00 sec</td>';
                        }else {
                            html += '<td>'+response.list[i].data1+' sec</td>';
                        }
                        if(response.list[i].data2 == "" || response.list[i].data2 == null || response.list[i].data2 == undefined) {
                            html += '<td>0.00 sec</td>';
                        }else {
                            html += '<td>'+response.list[i].data2+' sec</td>';
                        }
                        if(response.list[i].data3 == "" || response.list[i].data3 == null || response.list[i].data3 == undefined) {
                            html += '<td>0.00 sec</td>';
                        }else {
                            html += '<td>'+response.list[i].data3+' sec</td>';
                        }
                        if(response.list[i].data4 == "" || response.list[i].data4 == null || response.list[i].data4 == undefined) {
                            html += '<td>0.00 sec</td>';
                        }else {
                            html += '<td>+'+response.list[i].data4+' sec</td>';
                        }
                        html += '</tr>';
                }
                $("#content2").empty();
                $("#content2").append(html);
                if(response.total % row == 0) {
                    totalNum = (response.total / row);
                }else {
                    totalNum = (response.total / row) + 1;
                }
                $('#show_paginator2').bootpag({
                    total: totalNum,
                    page: pageNum,
                    maxVisible: 5
                }).on('page', function(event, num) {
                    ping(num, row);
                });
            }else {
                html ='<tr><th colspan="8" scope="row"><div class="bbs-none d-flex justify-content-center align-items-center">게시물이 없습니다.</div></th></tr>';
                $("#content2").empty();
                $("#content2").append(html);
            }
        }
    });
}
// 탄련성
function elasticity(pageNum, row) {
    var html = "";
    $.ajax({
        url: '/adminapi/fetchPerformance3?row=' + row + '&page=' + pageNum,
        type: 'GET',
        dataType: 'JSON',
        success: function (response) {
            if(response.total > 0) {
                for (var i = 0; i < response.list.length; i++) {
                    html += '<tr>'
                        + '<th scope="row"><input type="checkbox"/></th>'
                        + '<th scope="row">'+response.list[i].seq+'</th>'
                        + '<td>'+response.list[i].mb_1+'/'+response.list[i].mb_2+'</td>'
                        + '<td>'+response.list[i].host_name+'</td>'
                        if(response.list[i].data1 == "" || response.list[i].data1 == null || response.list[i].data1 == undefined) {
                            html += '<td>0.00 sec<br>0000-00-00</td>';
                        }else {
                            html += '<td>'+response.list[i].data1+'<br>'+response.list[i].data1_date+' sec</td>';
                        }
                        if(response.list[i].data2 == "" || response.list[i].data2 == null || response.list[i].data2 == undefined) {
                            html += '<td>0.00 sec</td>';
                        }else {
                            html += '<td>'+response.list[i].data2+' sec</td>';
                        }
                        if(response.list[i].data3 == "" || response.list[i].data3 == null || response.list[i].data3 == undefined) {
                            html += '<td>0.00 sec<br>0000-00-00</td>';
                        }else {
                            html += '<td>'+response.list[i].data3+'<br>'+response.list[i].data3_date+' sec</td>';
                        }
                        if(response.list[i].data4 == "" || response.list[i].data4 == null || response.list[i].data4 == undefined) {
                            html += '<td>0.00 sec<br>0000-00-00</td>';
                        }else {
                            html += '<td>'+response.list[i].data4+'<br>'+response.list[i].data4_date+' sec</td>';
                        }
                        html += '</tr>';
                }
                $("#content3").empty();
                $("#content3").append(html);
                if(response.total % row == 0) {
                    totalNum = (response.total / row);
                }else {
                    totalNum = (response.total / row) + 1;
                }
                $('#show_paginator3').bootpag({
                    total: totalNum,
                    page: pageNum,
                    maxVisible: 5
                }).on('page', function(event, num) {
                    elasticity(num, row);
                });
            }else {
                html ='<tr><th colspan="8" scope="row"><div class="bbs-none d-flex justify-content-center align-items-center">게시물이 없습니다.</div></th></tr>';
                $("#content3").empty();
                $("#content3").append(html);
            }
        }
    });
}
// 이벤트 알림 지연
function delay(pageNum, row) {
    var html = "";
    $.ajax({
        url: '/adminapi/fetchPerformance4?row=' + row + '&page=' + pageNum,
        type: 'GET',
        dataType: 'JSON',
        success: function (response) {
            if(response.total > 0) {
                for (var i = 0; i < response.list.length; i++) {
                    html += '<tr>'
                        + '<th scope="row"><input type="checkbox"/></th>'
                        + '<th scope="row">'+response.list[i].seq+'</th>'
                        + '<td>'+response.list[i].mb_1+'/'+response.list[i].mb_2+'</td>'
                        + '<td>'+response.list[i].host_name+'</td>'
                        if(response.list[i].data1 == "" || response.list[i].data1 == null || response.list[i].data1 == undefined) {
                            html += '<td>0.00 sec<br>0000-00-00</td>';
                        }else {
                            html += '<td>'+response.list[i].data1+'<br>'+response.list[i].data1_date+' sec</td>';
                        }
                        if(response.list[i].data2 == "" || response.list[i].data2 == null || response.list[i].data2 == undefined) {
                            html += '<td>0.00 sec</td>';
                        }else {
                            html += '<td>'+response.list[i].data2+' sec</td>';
                        }
                        if(response.list[i].data3 == "" || response.list[i].data3 == null || response.list[i].data3 == undefined) {
                            html += '<td>0.00 sec<br>0000-00-00</td>';
                        }else {
                            html += '<td>'+response.list[i].data3+'<br>'+response.list[i].data3_date+' sec</td>';
                        }
                        if(response.list[i].data4 == "" || response.list[i].data4 == null || response.list[i].data4 == undefined) {
                            html += '<td>0.00 sec<br>0000-00-00</td>';
                        }else {
                            html += '<td>'+response.list[i].data4+'<br>'+response.list[i].data4_date+' sec</td>';
                        }
                        html += '</tr>';
                }
                $("#content4").empty();
                $("#content4").append(html);
                if(response.total % row == 0) {
                    totalNum = (response.total / row);
                }else {
                    totalNum = (response.total / row) + 1;
                }
                $('#show_paginator4').bootpag({
                    total: totalNum,
                    page: pageNum,
                    maxVisible: 5
                }).on('page', function(event, num) {
                    delay(num, row);
                });
            }else {
                html ='<tr><th colspan="8" scope="row"><div class="bbs-none d-flex justify-content-center align-items-center">게시물이 없습니다.</div></th></tr>';
                $("#content4").empty();
                $("#content4").append(html);
            }
        }
    });
}
// Interrupt 발생
function interrupt(pageNum, row) {
    var html = "";
    $.ajax({
        url: '/adminapi/fetchPerformance5?row=' + row + '&page=' + pageNum,
        type: 'GET',
        dataType: 'JSON',
        success: function (response) {
            if(response.total > 0) {
                for (var i = 0; i < response.list.length; i++) {
                    html += '<tr>'
                        + '<th scope="row"><input type="checkbox"/></th>'
                        + '<th scope="row">'+response.list[i].seq+'</th>'
                        + '<td>'+response.list[i].mb_1+'/'+response.list[i].mb_2+'</td>'
                        + '<td>'+response.list[i].host_name+'</td>'
                        if(response.list[i].data1 == "" || response.list[i].data1 == null || response.list[i].data1 == undefined) {
                            html += '<td>0건</td>';
                        }else {
                            html += '<td>'+response.list[i].data1+'건</td>';
                        }
                        if(response.list[i].data2 == "" || response.list[i].data2 == null || response.list[i].data2 == undefined) {
                            html += '<td>0건</td>';
                        }else {
                            html += '<td>'+response.list[i].data2+'건</td>';
                        }
                        if(response.list[i].data3 == "" || response.list[i].data3 == null || response.list[i].data3 == undefined) {
                            html += '<td>0</td>';
                        }else {
                            html += '<td>'+response.list[i].data3+'%</td>';
                        }
                        if(response.list[i].data4 == "" || response.list[i].data4 == null || response.list[i].data4 == undefined) {
                            html += '<td>0</td>';
                        }else {
                            html += '<td>+'+response.list[i].data4+'</td>';
                        }
                        html += '</tr>';
                }
                $("#content5").empty();
                $("#content5").append(html);
                if(response.total % row == 0) {
                    totalNum = (response.total / row);
                }else {
                    totalNum = (response.total / row) + 1;
                }
                $('#show_paginator5').bootpag({
                    total: totalNum,
                    page: pageNum,
                    maxVisible: 5
                }).on('page', function(event, num) {
                    interrupt(num, row);
                });
            }else {
                html ='<tr><th colspan="8" scope="row"><div class="bbs-none d-flex justify-content-center align-items-center">게시물이 없습니다.</div></th></tr>';
                $("#content5").empty();
                $("#content5").append(html);
            }
        }
    });
}




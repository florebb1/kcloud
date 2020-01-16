$(function () {
    // 페이지 변수
    var pageNum = getParameter('pageNum');
    if(pageNum == "" || pageNum == null || pageNum == undefined){
        pageNum = 1;
    }
    // 요약
    summary();
    // 리스트 검색
    list(pageNum, 10);

    // 저장버튼 클릭시 이벤트
    $(document).on("click", ".saveBtn", function (e) {
        var datas = new Object();
        var tr = $(this).parent().parent();
        $("td input", tr).each(function () {
            var input = $(this);
            if(input.attr("type") == "hidden" || input.attr("type") == "text") {
                if(input.val() == "") {
                    alert('발급일자, 품질성능 또는 노출유무를 확인해주세요.');
                    return false;
                }else {
                    datas[input.attr("name")] = input.val();
                }
            }
        });
        $.ajax({
            url: '/adminapi/updateQuality',
            type: 'POST',
            dataType: 'JSON',
            data: datas,
            success: function (response) {
                if(response.result == true) {
                    alert('저장되었습니다.');
                    location.reload();
                }else {
                    alert('변경중 오류가 발생하였습니다.\n잠시후 다시 시도해주세요.');
                    return false;
                }
            }
        });
    });

    // 품질성능 라디오 변경 이벤트
    $(document).on("change", ".confRadio", function (e) {
        var value = $(this).val();
        $(this).parent().parent().find('input[type=hidden]').val(value);
    });

    // 노출유무 변경 이벤트
    $(document).on("change", ".staRadio", function (e) {
        var value = $(this).val();
        $(this).parent().parent().find('input[type=hidden]').val(value);
    });

    // 보고서 등록 모달
    $(document).on("click", ".open-AddReport", function () {
        var id = $(this).data('id');
        $(".modal-body #wr_id").val(id);

        $('#reportForm').ajaxSubmit({
            url: "/adminapi/insertQualityFile",
            dataType: 'json',
            processData: false,
            contentType: false,
            type: 'POST',
            success: function (response) {
                console.log(response);
                if(response.result == true) {
                    alert('저장되었습니다.');
                    location.reload();
                }else {
                    alert('보고서 등록중 알 수 없는 오류가 발생하였습니다.\n잠시후 다시 시도해주세요.');
                    return false;
                }
            },error: function (jqXHR) {
                console.log(jqXHR.responseText);
            }
        });
    });


});
function summary() {
    $.ajax({
        url: '/api/getQualitySummary',
        type: 'GET',
        dataType: 'JSON',
        success: function (response) {
            $("#iaasTotal").text(response.IaaS);
            $("#paasTotal").text(response.PaaS);
            $("#saasTotal").text(response.SaaS);
            $("#etcTotal").text(response.etc);
        }
    });
}

function list(pageNum, row) {
    var html = "";
    $.ajax({
        url: '/adminapi/fetchQuality?row=' + row + '&page=' + pageNum + '&type=PaaS',
        type: 'GET',
        dataType: 'JSON',
        success: function (response) {
            var size = response.list.length;
            if(size > 0) {
                for (var i = 0; i < size; i++) {
                    html += '<tr>'
                        + '<td>'
                        + '<a href="/admin/confirm/write?wr_id='+response.list[i].wr_id+'">'
                        + '<img src="/assets/images/icon/nipa.jpg" class="w-100">'
                        + '</a>'
                        + '</td>'
                        + '<td class="border-left p-3">'
                        + '<div class="row">'
                        + '<input type="hidden" name="wr_id" value="'+response.list[i].wr_id+'">'
                        + '<div class="col-6 mb-3"><b>URL</b><span class="text-secondary px-3">|</span><span>'+response.list[i].wr_link1+'</span></div>'
                        + '<div class="col-6 mb-3">'
                        + '<b>발급일자</b><span class="text-secondary px-3">|</span>'
                        + '<input type="text" class="form-control form-control-sm" style="max-width:160px;display:inline-block;" name="doDate" value="'+response.list[i].wr_9+'">'
                        + '</div>'
                        + '<div class="col-6 mb-3"><b>단체명</b><span class="text-secondary px-3">|</span><span>'+response.list[i].wr_subject+'</span></div>'
                        + '<div class="col-6 mb-3">'
                        + '<b>품질성능 확인</b><span class="text-secondary px-3">|</span>'
                        + '<div class="btn-group btn-group-sm btn-group-toggle" data-toggle="buttons">'
                        + '<input type="hidden" name="confirmData" value="'+response.list[i].wr_14+'">';
                    if(response.list[i].wr_14 == "유효") {
                        html += '<label class="btn btn-secondary active">'
                            + '<input type="radio" name="confirmData'+i+'" class="confRadio" value="유효" checked> 유효'
                            + '</label>'
                            + '<label class="btn btn-secondary">'
                            + '<input type="radio" name="confirmData'+i+'" class="confRadio" value="무효"> 무효'
                            + '</label>';
                    }else {
                        html += '<label class="btn btn-secondary">'
                            + '<input type="radio" name="confirmData'+i+'" class="confRadio" value="유효"> 유효'
                            + '</label>'
                            + '<label class="btn btn-secondary active">'
                            + '<input type="radio" name="confirmData'+i+'" class="confRadio" value="무효" checked> 무효'
                            + '</label>';
                    }
                    html += '</div>'
                        + '</div>'
                        + '<div class="col-6 mb-3"><b>서비스명</b><span class="text-secondary px-3">|</span><span>'+response.list[i].wr_1+'</span></div>'
                        + '<div class="col-6 mb-3"><b>서비스모델</b><span class="text-secondary px-3">|</span><span>'+response.list[i].wr_2+'</span></div>'
                        + '<div class="w-100"></div>'
                        + '<div class="col-12 border-top py-2">'
                        + '<div class="ellipsis-multi2 mt-3">'+response.list[i].wr_content.replace(/(\r\n|\n|\r)/gm, "<br />")+'</div>'
                        + '</div>'
                        + '</div>'
                        + '</td>'
                        + '<td class="border-left border-right" style="vertical-align:middle;">'
                        + '<div class="h-100">'
                        +' <div class="p-3">'
                        + '<div class="form-check">'
                        + '<input type="hidden" name="status" value="'+response.list[i].status+'">';
                    if(response.list[i].status == "1") {
                        html += '<input class="form-check-input staRadio" type="radio" name="status'+i+'" value="1" checked>'
                            + '<label class="form-check-label">노출</label>'
                            + '</div>'
                            + '<div class="form-check">'
                            + '<input class="form-check-input staRadio" type="radio" name="status'+i+'" value="2">'
                            + '<label class="form-check-label">비노출</label>';
                    }else {
                        html += '<input class="form-check-input staRadio" type="radio" name="status'+i+'" value="1">'
                            + '<label class="form-check-label">노출</label>'
                            + '</div>'
                            + '<div class="form-check">'
                            + '<input class="form-check-input staRadio" type="radio" name="status'+i+'" value="2" checked>'
                            + '<label class="form-check-label">비노출</label>';
                    }
                    html += '</div>'
                        + '</div>'
                        + '<div class="p-3 border-top text-center">'
                        + '<a href="#" class="btn btn-info open-AddReport" data-toggle="modal" data-id="'+response.list[i].wr_id+'" data-target="#report-upload">보고서 등록</a>'
                        + '</div>'
                        + '</div>'
                        + '</td>'
                        + '<td style="text-align:center;vertical-align:middle;">'
                        + '<a href="/admin/confirm/write?wr_id='+response.list[i].wr_id+'" class="btn btn-info my-1">수정</a>'
                        + '<a href="#" class="btn btn-primary my-1 saveBtn">저장</a>'
                        + '<a href="#" class="btn btn-danger my-1" onclick="del('+response.list[i].wr_id+')">삭제</a>'
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
                    // list(num, row);
                    location.href='/admin/confirm/paas?pageNum='+num+'&row='+row;
                });

            }else {
                html ='<tr><th colspan="4" scope="row"><div class="bbs-none d-flex justify-content-center align-items-center">게시물이 없습니다.</div></th></tr>';
                $("#content").empty();
                $("#content").append(html);
            }
        }
    });
}

function del(id) {
    if(confirm("해당 업체를 삭제하시겠습니까?")) {
        $.ajax({
            url: '/adminapi/deleteQuality?wr_id='+id,
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
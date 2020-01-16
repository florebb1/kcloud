$(function () {
    var wr_id = getParameter('wr_id');

    if(wr_id == "" || wr_id == "undefined") {
        alert('해당 게시글이 존재하지 않습니다.');
        history.back();
    }else {
        $.ajax({
            url: '/api/selectNotice?wr_id=' + wr_id,
            type: 'GET',
            dataType: 'JSON',
            success: function (response) {
                console.log(response.info);
                if(response.info.wr_id  == wr_id) {
                    // 제목
                    $("#title").text(response.info.wr_subject);
                    // 내용
                    $("#content").html(response.info.wr_content);
                    // 링크
                    $("#link").text(response.info.wr_link1);
                    $("#link2").text(response.info.wr_link2);
                    // 첨부파일
                    if(response.fileInfo != ""){
                        var fileHtml = "";
                        for(var i =0; i < response.fileInfo.length;i++){
                            fileHtml += '<div class="form-group row">\
                                            <label for="" class="col-1 text-right">첨부파일</label>\
                                            <div class="col-11">\
                                                <div class="custom-file">\
                                                    <span id="file"><a href="'+response.fileInfo[i].bf_source+'">'+response.fileInfo[i].bf_source+'</a></span><span id="file2" class="pl-3"></span>\
                                                </div>\
                                            </div>\
                                        </div>';
                        }
                        $("#boardFile").html(fileHtml);
                    }
                }else {
                    alert('페이지 로딩중 알 수 없는 오류가 발생하였습니다.');
                    history.back();
                }
            }
        });
    }
});
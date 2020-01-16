$(function () {
    var wr_id = getParameter('wr_id');

    if(wr_id == "" || wr_id == "undefined") {
        alert('해당 서비스가 존재하지 않습니다.');
        history.back();
    }else {
        $.ajax({
            url: '/api/selectQuality?wr_id=' + wr_id,
            type: 'GET',
            dataType: 'JSON',
            success: function (response) {
                console.log(response.info);
                if(response.info.wr_id  == wr_id) {
                    $("#wr_subject").text(response.info.wr_subject);
                    $("#wr_1").text(response.info.wr_1);
                    $("#wr_2").text(response.info.wr_2);
                    $("#wr_3").text(response.info.wr_3);
                    $("#wr_link1").text(response.info.wr_link1);
                    $("#wr_link2").text(response.info.wr_link2);
                    $("#wr_4").text(response.info.wr_4);
                    $("#wr_13").text(response.info.wr_13);
                    $("#wr_15").text(response.info.wr_15);
                    $("#wr_6").html(response.info.wr_6.replace(/(\r\n|\n|\r)/gm, "<br />"));
                    $("#wr_7").text(response.info.wr_7);
                    $("#wr_8").text(response.info.wr_8);
                    $("#wr_9").text(response.info.wr_9);
                    $("#wr_5").html(response.info.wr_5.replace(/(\r\n|\n|\r)/gm, "<br />"));
                    $("#wr_content").html(response.info.wr_content.replace(/(\r\n|\n|\r)/gm, "<br />"));

                }else {
                    alert('페이지 로딩중 알 수 없는 오류가 발생하였습니다.');
                    history.back();
                }
            }
        });
    }
});
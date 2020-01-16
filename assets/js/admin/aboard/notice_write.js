$(function (){
    var id = getParameter('wr_id');
    if(id == "" || id == null || id == undefined) {
        $("#regBtn").removeClass('d-none');
        $("#regBtn").addClass('d-inline');
    }else {
        list(id);
        $("#wr_id").val(id);
        $("#editBtn").removeClass('d-none');
        $("#editBtn").addClass('d-inline');
    }
    $('#summernote').summernote({
        height: 300,                 // set editor height
    });
});

function list(id) {
    $.ajax({
        url: '/adminapi/selectNotice?wr_id='+ id,
        type: 'GET',
        dataType: 'JSON',
        success: function (response) {
            $("#wr_subject").val(response.info.wr_subject);
            $("#wr_name").val(response.info.wr_name);
            $('#summernote').summernote('code', response.info.wr_content);
            $("#wr_link1").val(response.info.wr_link1);
            $("#wr_link2").val(response.info.wr_link2);
            if(response.fileInfo.length > 0){
                $("#ifile1").html("<a href='"+response.fileInfo[0].bf_source+"'>"+response.fileInfo[0].bf_source+"</a>");
                if(response.fileInfo.length == 2){
                    $("#ifile2").html("<a href='"+response.fileInfo[1].bf_source+"'>"+response.fileInfo[1].bf_source+"</a>");
                }
            }
        }
    });
}

function register() {
    var wr_subject = $("#wr_subject").val();
    var wr_name = $("#wr_name").val();
    var wr_content = $("#summernote").val();
    if(wr_subject == "") {
        alert('제목을 입력해주세요.');
        return false;
    }else if(wr_name == "") {
        alert('작성자를 입력해주세요.');
        return false;
    }else if(wr_content == "") {
        alert('내용을 입력해주세요.');
        return false;
    }
    // var form = $('#noticeForm')[0];
    // var formData = new FormData(form);
    // formData.append("fileObj", $("#bf_file1")[0].files[0]);
    // formData.append("fileObj2", $("#bf_file2")[0].files[0]);
    // $.ajax({
    //     url: "/adminapi/insertNotice",
    //     type: 'POST',
    //     dataType: 'JSON',
    //     data: formData,
    //     processData : false,
    //     contentType : false,
    //     success: function (response) {
    //         console.log(response);
    //         if(response.result == true) {
    //             alert('저장되었습니다.');
    //             document.location.href='/admin/aboard/notice';
    //         }
    //     },error: function (jqXHR) {
    //             console.log(jqXHR.responseText);
    //     }
    // });

    var datas = $("#noticeForm").serialize();
    $('#noticeForm').ajaxSubmit({
        url: "/adminapi/insertNotice",
        processData: false,
        contentType: false,
        type: 'POST',
        dataType: 'JSON',
        data: datas,
        success: function (response) {
            if(response.result == true) {
                alert('저장되었습니다.');
                document.location.href='/admin/aboard/notice';
            }
        },error: function (jqXHR) {
            console.log(jqXHR.responseText);
        }
    });
    // var formData = new FormData($("#noticeForm")[0]);
    // $.ajax({
    //     url: "/adminapi/insertNotice",
    //     type: 'POST',
    //     dataType: 'JSON',
    //     data: formData,
    //     processData : false,
    //     contentType : false,
    //     success: function (response) {
    //         console.log(response);
    //         if(response.result == true) {
    //             alert('저장되었습니다.');
    //             document.location.href='/admin/aboard/notice';
    //         }
    //     },error: function (jqXHR) {
    //             console.log(jqXHR.responseText);
    //     }
    // });

}

function edit() {
    var wr_subject = $("#wr_subject").val();
    var wr_name = $("#wr_name").val();
    var wr_content = $("#summernote").val();
    if(wr_subject == "") {
        alert('제목을 입력해주세요.');
        return false;
    }else if(wr_content == "") {
        alert('작성자를 입력해주세요.');
        return false;
    }else if(wr_content == "") {
        alert('내용을 입력해주세요.');
        return false;
    }
    var formData = new FormData($("#noticeForm")[0]);
    $.ajax({
        url: "/adminapi/updateNotice",
        type: 'POST',
        dataType: 'JSON',
        data: formData,
        processData : false,
        contentType : false,
        success: function (response) {
            console.log(response);
            if(response.result == true) {
                alert('저장되었습니다.');
                document.location.href='/admin/aboard/notice';
            }
        },error: function (jqXHR) {
                console.log(jqXHR.responseText);
        }
    });
}

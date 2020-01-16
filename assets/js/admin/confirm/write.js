$(function () {
   var seq = getParameter('wr_id');
   $("#wr_id").val(seq);
   detail(seq);

   $("#edtBtn").click(function () {
      edit(seq);
   });

   $("#delBtn").click(function () {
      del(seq);
   });
});
function detail(seq) {
   $.ajax({
      url: '/adminapi/selectQuality?wr_id=' + seq,
      type: 'GET',
      dataType: 'JSON',
      success: function (response) {
         console.log(response);
         $("#wr_subject").val(response.info.wr_subject);
         $("#wr_1").val(response.info.wr_1);
         $("#wr_2").val(response.info.wr_2);
         $("#wr_3").val(response.info.wr_3);
         $("#wr_link1").val(response.info.wr_link1);
         $("#wr_link2").val(response.info.wr_link2);
         $("#wr_4").val(response.info.wr_4);
         $("#wr_13").val(response.info.wr_13);
         $("#wr_15").val(response.info.wr_15);
         $("#wr_6").val(response.info.wr_6);
         $("#wr_7").val(response.info.wr_7);
         $("#wr_8").val(response.info.wr_8);
         $("#wr_9").val(response.info.wr_9);
         $("#wr_11").val(response.info.wr_11);
         $("#wr_5").val(response.info.wr_5);
         $("#wr_content").val(response.info.wr_content);
         $("#wr_12").val(response.info.wr_12);
         $("#wr_14").val(response.info.wr_14);
      }
   })
}

function edit(seq) {
   if(confirm("해당 업체를 수정하시겠습니까?")) {
      var datas = $("#editForm").serialize();
      $.ajax({
         url: '/adminapi/updateQuality?wr_id='+seq,
         type: 'POST',
         dataType: 'JSON',
         data: datas,
         success: function (response) {
            if(response.result == true) {
               location.reload();
            }
         }
      });
   }
}

function del(seq) {
   if(confirm("해당 업체를 삭제하시겠습니까?")) {
      $.ajax({
         url: '/adminapi/deleteQuality?wr_id='+seq,
         type: 'GET',
         dataType: 'JSON',
         success: function (response) {
            if(response.result == true) {
               history.back();
            }
         }
      });
   }
}
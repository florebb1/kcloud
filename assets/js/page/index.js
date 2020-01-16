$(function () {
   var html = "";
   var html2 = "";

   // notice load
   $.ajax({
      url: '/api/fetchNotice?pageNum=1',
      type: 'GET',
      dataType: 'JSON',
      success: function (response) {
         console.log(response);
         if(response.totalCount > 0) {
            for (var i = 0; i < 5; i++) {
               var formattedDate = new Date(response.list[i].wr_last);
               var yyyy = formattedDate.getFullYear().toString();
               var mm = (formattedDate.getMonth() + 1).toString();
               var dd = formattedDate.getDate().toString();
               var date = yyyy + "-" + (mm[1] ? mm : "0" + mm[0]) + "-" + (dd[1] ? dd : "0" + dd[0]);
               html += '<a href="/board/notice_view?wr_id='+response.list[i].wr_id+'" class="list-group-item d-flex justify-content-between align-items-center"><div class="latest_content">'+response.list[i].wr_subject+'</div><span>'+date+'</span></a>'
            }
            $("#noticeContent").empty();
            $("#noticeContent").append(html);
         }
      }
   });

   // pds load
   $.ajax({
      url: '/api/fetchReference?pageNum=1',
      type: 'GET',
      dataType: 'JSON',
      success: function (response) {
         console.log(response);
         if(response.totalCount > 0) {
            for (var i = 0; i < 5; i++) {
               var formattedDate = new Date(response.list[i].wr_last);
               var yyyy = formattedDate.getFullYear().toString();
               var mm = (formattedDate.getMonth() + 1).toString();
               var dd = formattedDate.getDate().toString();
               var date = yyyy + "-" + (mm[1] ? mm : "0" + mm[0]) + "-" + (dd[1] ? dd : "0" + dd[0]);
               html2 += '<a href="/board/pds_view?wr_id='+response.list[i].wr_id+'" class="list-group-item d-flex justify-content-between align-items-center"><div class="latest_content">'+response.list[i].wr_subject+'</div><span>'+date+'</span></a>'
            }
            $("#pdsContent").empty();
            $("#pdsContent").append(html2);
         }
      }
   });
});
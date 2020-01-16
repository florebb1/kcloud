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

   // 회원리스트 상단
   $.ajax({
      url: '/adminapi/getUserSummary',
      type: 'GET',
      dataType: 'JSON',
      success: function (response) {
         if(response.userTotal != "" && response.applyTotal != "") {
            $("#memberCount").text(response.userTotal + "명");
            $("#checkCount").text(response.applyTotal + "명");
         }
      }
   });

   // 회원리스트
   list(pageNum, row);

   $("#row").change(function () {
      row = $(this).val();
      list(1, row);
   });
});
function list(pageNum, row) {
   var html = "";
   $.ajax({
      url: '/adminapi/fetchUser?row='+row+'&page='+pageNum,
      type: 'GET',
      dataType: 'JSON',
      success: function (response) {
         $("#total").text(response.total);
         if(response.list.length > 0) {
            for (var i = 0; i < response.list.length; i++) {
               html += '<tr>'
                  +'<th scope="row"><input type="checkbox"/></th>'
                  + '<th scope="row">'+response.list[i].userSeq+'</th>'
                  + '<td>'+response.list[i].userId+'</td>'
                  + '<td>'+response.list[i].userName+'</td>'
                  + '<td>'+response.list[i].userEmail+'</td>'
                  + '<td>'+response.list[i].organizationName+'</td>'
                  + '<td>'+response.list[i].serviceName+'</td>';
               if(response.list[i].serviceModel == "1") {
                  html += '<td>Iaas</td>';
               }else if(response.list[i].serviceModel == "2"){
                  html += '<td>PaaS</td>';
               }else if(response.list[i].serviceModel == "3"){
                  html += '<td>SaaS</td>';
               }else {
                  html += '<td>기타</td>';
               }
               if(response.list[i].counsulting == "1") {
                  html += '<td>희망</td>';
               }else {
                  html += '<td>비희망</td>';
               }
                  // html += '<td>'
                  // + '<a href="#" class="badge badge-primary">신청</a>'
                  // + '<a href="#" class="badge badge-secondary">진행</a>'
                  // + '<a href="#" class="badge badge-success">완료</a>'
                  // + '</td>'
                  html += '<td>이용/미연결</td>'
                  + '<td>'
                  + '<a href="/admin/member/member_detail?userSeq='+response.list[i].userSeq+'" class="btn btn-info btn-sm">관리</a>'
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
               location.href='/admin/member/menagement?pageNum='+num+'&row='+row;
            });
         }else {
            html ='<tr><th colspan="11" scope="row"><div class="bbs-none d-flex justify-content-center align-items-center">등록된 회원이 존재하지않습니다.</div></th></tr>';
            $("#content").empty();
            $("#content").append(html);
         }
      }
   });
}
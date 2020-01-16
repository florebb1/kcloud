$(function () {
   var seq = getParameter('userSeq');
   if(seq == "") {
      alert('해당 회원이 존재하지 않습니다.');
      history.back();
   }else {
      $("#userSeq").val(seq);
      $("#userSeq2").val(seq);


      // 회원정보 검색
      $.ajax({
         url: '/adminapi/selectUser?userSeq='+seq,
         type: 'GET',
         dataType: 'JSON',
         success: function (response) {
            $("#userName").val(response.info.userName);
            $("#userId").val(response.info.userId);
            $("#userEmail").val(response.info.userEmail);
            $("#organizationName").val(response.info.organizationName);
            $("#organizationName2").text(response.info.organizationName);
            $("#serviceName").val(response.info.serviceName);
            $("#serviceName2").text(response.info.serviceName);
            $("#url").val(response.info.url);
            $("#chargerPhone").val(response.info.chargerPhone);
            $("#address").val(response.info.address);
            $("#address2").text(response.info.address);
            $("input:radio[name='serviceModel'][value='"+response.info.serviceModel+"']").attr("checked", "checked");
            $("input:radio[name='serviceModel']:checked").parent().addClass('active');
            $("input:radio[name='counsulting'][value='"+response.info.counsulting+"']").attr("checked", "checked");
            $("input:radio[name='counsulting']:checked").parent().addClass('active');
            $("#service_info").val(response.info.service_info);
         }
      });
   }

   // checkbox 변경시
   $(".modelLable").click(function () {
      var id = $(this).parent().attr("id");
      if(id == "serviceModelDiv") {
         $("input:radio[name=serviceModel]").removeAttr("checked");
      }else if(id == "counsultingDiv"){
         $("input:radio[name=counsulting]").removeAttr("checked");
      }
      $(this).find("input").attr("checked", "checked");
   });

   // 추가 입력 정보 수정
   $("#editBtn").click(function () {
      var datas = $("#addInfoForm").serialize()+"&userId="+$("#userId").val();
      $.ajax({
         url: '/adminapi/updateUserAddInfo',
         type: 'POST',
         dataType: 'JSON',
         data: datas,
         success: function (response) {
            if(response.result == true) {
               alert('해당 회원님의 정보가 변경되었습니다.');
               location.reload();
            }else {
               alert('회원정보 변경중 오류가 발생하였습니다.');
               return false;
            }
         }
      });
   });


   // 임시비밀번호 발송
   $("#pwBtn").click(function () {
      var datas = $("#detailForm").serialize()+"&userId="+$("#userId").val();
      console.log(datas);
      $.ajax({
         url: '/adminapi/updatePwUpdate',
         type: 'POST',
         dataType: 'JSON',
         data: datas,
         success: function (response) {
            console.log(response);
            if(response.result == true) {
               alert('해당 회원님의 이메일로 임시 비밀번호가 발송되었습니다.');
            }else {
               alert('임시비밀번호 발송중 오류가 발생하였습니다.');
               return false;
            }
         }
      });
   });









});
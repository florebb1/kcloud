$(function () {
   var id = getParameter('wr_id');
   list1(id);

   // tab1 클릭
   $("#home-tab").click(function () {
      list1(id);
   });

   // tab1 신청확인
   $("#onlineBtn").click(function () {
      var status = $("#t1_status").val();
      if(status != "0") {
         alert('이미 신청 확인된 신청서입니다.');
         return false;
      }else {
         $("#t1_status").val("1");
         var datas = $("#onlineForm").serialize();
         $.ajax({
            url: '/adminapi/updateApply1',
            type: 'POST',
            dataType: 'JSON',
            data: datas,
            success: function (response) {
               if(response.result == true) {
                  alert('신청되었습니다.');
                  $("#profile-tab").click();
               }else {
                  alert('알 수 없는 오류가 발생하였습니다.\n잠시후 다시 시도해주세요.');
                  return false;
               }
            }
         });
      }
   });

   // tab2 클릭
   $("#profile-tab").click(function () {
      list2(id);
   });

   // tab2 저장
   $("#saveBtn1").click(function () {
      var datas = $("#onlineForm2").serialize();
      $.ajax({
         url: '/adminapi/updateApply2',
         type: 'POST',
         dataType: 'JSON',
         data: datas,
         success: function (response) {
            console.log(response);
            if(response.result == true) {
               alert('저장되었습니다.');
            }else {
               alert('알 수 없는 오류가 발생하였습니다.\n잠시후 다시 시도해주세요.');
               return false;
            }
         }
      });
   });

   // tab2 신청확인
   $("#onlineBtn2").click(function () {
      var wr_id = $("#t2_wr_id").val();
      var idx = $("#t2_idx").val();
      var status = $("#t2_status").val();
      var status1 = $("input:radio[name=status1]").val();
      var status2 = $("input:radio[name=status2]").val();
      var status3 = $("input:radio[name=status3]").val();
      var status4 = $("input:radio[name=status4]").val();
      var status5 = $("input:radio[name=status5]").val();
      var status6 = $("input:radio[name=status6]").val();
      var status7 = $("input:radio[name=status7]").val();
      var status8 = $("input:radio[name=status8]").val();

      if(wr_id == "" || idx == "") {
         alert('해당 신청서를 찾을 수 없습니다.');
         document.location.href = '/admin/apply/online_apply';
         return false;
      }else if(status == 0) {
         alert('품질성능 검증신청을 먼저 해주세요.');
         $("#home-tab").click();
      }else {
         if(status1 == "" || status2 == "" || status3 == "" || status4 == "" || status5 == "" || status6 == "" || status7 == "" || status8 == ""){
            alert('점검 항목이 누락되었습니다.');
            return false;
         }
         $("#t2_actionType").val("2");
         var datas = $("#onlineForm2").serialize();
         $.ajax({
            url: '/adminapi/updateApply2',
            type: 'POST',
            dataType: 'JSON',
            data: datas,
            success: function (response) {
               if(response.result == true) {
                  alert('신청되었습니다.');
                  $("#contact-tab").click();
               }else {
                  alert('알 수 없는 오류가 발생하였습니다.\n잠시후 다시 시도해주세요.');
                  return false;
               }
            }
         });
      }
   });


   // tab3 클릭
   $("#contact-tab").click(function () {
      list3(id);
   });

   // 점검 상태 변경
   $(".t3-radio").change(function () {
      var status = $(this).val();
      var reason = $(this).parent().parent().find('input[type=text]');
      if(status == "1") {
         reason.val("");
         reason.attr("readonly", true);
      }else {
         reason.attr("readonly", false);
      }
   });

   // tab3 저장
   $("#saveBtn2").click(function () {
      var datas = $("#onlineForm3").serialize();
      $.ajax({
         url: '/adminapi/updateApply3',
         type: 'POST',
         dataType: 'JSON',
         data: datas,
         success: function (response) {
            if (response.result == true) {
               alert('저장되었습니다.');
            } else {
               alert('알 수 없는 오류가 발생하였습니다.\n잠시후 다시 시도해주세요.');
               return false;
            }
         }
      });
   });

   // tab3 신청확인
   $("#onlineBtn3").click(function () {
      var wr_id = $("#t3_wr_id").val();
      var idx = $("#t3_idx").val();
      var status = $("#t3_status").val();
      var status1 = $("input:radio[name=status1]").val();
      var status2 = $("input:radio[name=status2]").val();
      var status3 = $("input:radio[name=status3]").val();
      var status4 = $("input:radio[name=status4]").val();
      var status5 = $("input:radio[name=status5]").val();
      var status6 = $("input:radio[name=status6]").val();
      var status7 = $("input:radio[name=status7]").val();
      var status8 = $("input:radio[name=status8]").val();
      var status9 = $("input:radio[name=status9]").val();
      var status10 = $("input:radio[name=status10]").val();
      var status11 = $("input:radio[name=status11]").val();
      var status12 = $("input:radio[name=status12]").val();
      var status13 = $("input:radio[name=status13]").val();
      var status14 = $("input:radio[name=status14]").val();
      var status15 = $("input:radio[name=status15]").val();
      var status16 = $("input:radio[name=status16]").val();
      var status17 = $("input:radio[name=status17]").val();
      var status18 = $("input:radio[name=status18]").val();
      var status19 = $("input:radio[name=status19]").val();
      var status20 = $("input:radio[name=status20]").val();
      var status21 = $("input:radio[name=status21]").val();
      var reason1 = $("#t3_reason1").val();
      var reason2 = $("#t3_reason2").val();
      var reason3 = $("#t3_reason3").val();
      var reason4 = $("#t3_reason4").val();
      var reason5 = $("#t3_reason5").val();
      var reason6 = $("#t3_reason6").val();
      var reason7 = $("#t3_reason7").val();
      var reason8 = $("#t3_reason8").val();
      var reason9 = $("#t3_reason9").val();
      var reason10 = $("#t3_reason10").val();
      var reason11 = $("#t3_reason11").val();
      var reason12 = $("#t3_reason12").val();
      var reason13 = $("#t3_reason13").val();
      var reason14 = $("#t3_reason14").val();
      var reason15 = $("#t3_reason15").val();
      var reason16 = $("#t3_reason16").val();
      var reason17 = $("#t3_reason17").val();
      var reason18 = $("#t3_reason18").val();
      var reason19 = $("#t3_reason19").val();
      var reason20 = $("#t3_reason20").val();
      var reason21 = $("#t3_reason21").val();

      if(wr_id == "" || idx == "") {
         alert('해당 신청서를 찾을 수 없습니다.');
         document.location.href='/admin/apply/online_apply';
         return false;
      }else if(status < 2) {
         alert('이전 단계 신청을 먼저 확인 해주세요.');
         return false;
      }
      for (var i = 0; i < 22; i++) {
         if("status"+i == "") {
            alert('점검 항목이 누락되었습니다.');
            return false;
         }
      }
      for (var i = 0; i < 22; i++) {
         if("status"+i == "0") {
            if("reason"+i == "") {
               alert('반려사유가 누락되었습니다.');
               return false;
            }
         }
      }
      $("#t3_actionType").val("2");
      var datas = $("#onlineForm3").serialize();
      $.ajax({
         url: '/adminapi/updateApply3',
         type: 'POST',
         dataType: 'JSON',
         data: datas,
         success: function (response) {
            if (response.result == true) {
               alert('신청되었습니다.');
               document.location.href = '/admin/apply/online_apply';
            } else {
               alert('알 수 없는 오류가 발생하였습니다.\n잠시후 다시 시도해주세요.');
               return false;
            }
         },error: function (jqXHR) {
            console.log(jqXHR.responseText);
         }
      });
   });
});

function list1(id) {
   $.ajax({
      url: '/adminapi/selectApply1?wr_id='+id,
      type: 'GET',
      dataType: 'JSON',
      success: function (response) {
         console.log(response);
         $("#t1_wr_1").text(response.info.wr_1);
         $("#t1_wr_10").html('<div>'+response.info.wr_9+'</div><div>'+response.info.wr_10+'</div>');
         $("#t1_wr_2").text(response.info.wr_2);
         $("#t1_wr_4").text(response.info.wr_4);
         $("#t1_wr_name").text(response.info.wr_name);
         $("#t1_wr_email").text(response.info.wr_email);
         $("#t1_wr_6").text(response.info.wr_6);
         $("#t1_wr_6").text(response.info.wr_7);
         $("#t1_wr_11").text(response.info.wr_11);
         $("#t1_wr_12").text(response.info.wr_12);
         $("#t1_wr_13").text(response.info.wr_13);
         $("#t1_wr_14").text(response.info.wr_14);
         $("#t1_wr_15").text(response.info.wr_15);
         $("#t1_wr_16").text(response.info.wr_16);
         $("#t1_wr_subject").text(response.info.wr_subject);
         $("#t1_wr_8").text(response.info.wr_8);
         $("#t1_wr_9").text(response.info.wr_9);
         $("#t1_wr_3").text(response.info.wr_3);
         $("#t1_wr_content").html(response.info.wr_content);
         $("#t1_wr_5").text(response.info.wr_5);
         $("#t1_wr_id").val(response.info.wr_id);
         $("#t1_status").val(response.info.status);
      }
   });
}

function list2(id) {
   $.ajax({
      url: '/adminapi/selectApply2?idx=' + id,
      type: 'GET',
      dataType: 'JSON',
      success: function (response) {
         console.log(response);
         $("#t2_wr_9").text(response.info.wr_9);
         $("#t2_wr_1").text(response.info.wr_1);
         $("input:radio[name=status1]:input[value="+response.info.status1+"]").attr("checked", true);

         $("#t2_wr_subject").text(response.info.wr_subject);
         $("#t2_wr_2").text(response.info.wr_2);
         $("input:radio[name=status2]:input[value="+response.info.status2+"]").attr("checked", true);

         $("#t2_wr_content").text(response.info.wr_content);
         $("#t2_wr_3").text(response.info.wr_3);
         $("input:radio[name=status3]:input[value="+response.info.status3+"]").attr("checked", true);

         $("#t2_wr_10").text(response.info.wr_10);
         $("#t2_wr_4").text(response.info.wr_4);
         $("input:radio[name=status4]:input[value="+response.info.status4+"]").attr("checked", true);

         $("#t2_wr_11").text(response.info.wr_11);
         $("#t2_wr_5").text(response.info.wr_5);
         $("input:radio[name=status5]:input[value="+response.info.status5+"]").attr("checked", true);

         $("#t2_wr_12").text(response.info.wr_12);
         $("#t2_wr_6").text(response.info.wr_6);
         $("input:radio[name=status6]:input[value="+response.info.status6+"]").attr("checked", true);

         $("#t2_wr_13").text(response.info.wr_13);
         $("#t2_wr_7").text(response.info.wr_7);
         $("input:radio[name=status7]:input[value="+response.info.status7+"]").attr("checked", true);

         $("#t2_wr_14").text(response.info.wr_14);
         $("#t2_wr_8").text(response.info.wr_8);
         $("input:radio[name=status8]:input[value="+response.info.status8+"]").attr("checked", true);

         $("#t2_idx").val(response.info.idx);
         $("#t2_wr_id").val(response.info.wr_id);
         $("#t2_status").val(response.info.status);
      }
   });
}

function list3(id) {
   $.ajax({
      url: '/adminapi/selectApply3?idx=' + id,
      type: 'GET',
      dataType: 'JSON',
      success: function (response) {
         console.log(response);
         $("#t3_wr_subject").text(response.info.wr_subject);
         $("#t3_wr_2").text(response.info.wr_2);
         $("#t3_wr_3").text(response.info.wr_3);
         $("#t3_wr_4").text(response.info.wr_4);
         $("#t3_wr_5").text(response.info.wr_5);
         $("#t3_wr_content").text(response.info.wr_content);
         $("#t3_wr_24").text(response.info.wr_24);
         $("#t3_wr_25").text(response.info.wr_25);
         $("#t3_wr_7").text(response.info.wr_7);
         $("input:radio[name=status1]:input[value="+response.info.status1+"]").attr("checked", true);
         if(response.info.status1 == "0") {
            $("#t3_reason1").attr("readonly", false);
            $("#t3_reason1").val(response.info.reason1);
         }
         $("#t3_wr_8").text(response.info.wr_8);
         $("input:radio[name=status2]:input[value="+response.info.status2+"]").attr("checked", true);
         if(response.info.status2 == "0") {
            $("#t3_reason2").attr("readonly", false);
            $("#t3_reason2").val(response.info.reason2);
         }
         $("#t3_wr_9").text(response.info.wr_9);
         $("input:radio[name=status3]:input[value="+response.info.status3+"]").attr("checked", true);
         if(response.info.status3 == "0") {
            $("#t3_reason3").attr("readonly", false);
            $("#t3_reason3").val(response.info.reason3);
         }
         $("#t3_wr_10").text(response.info.wr_10);
         $("input:radio[name=status4]:input[value="+response.info.status4+"]").attr("checked", true);
         if(response.info.status4 == "0") {
            $("#t3_reason4").attr("readonly", false);
            $("#t3_reason4").val(response.info.reason4);
         }
         $("#t3_wr_11").text(response.info.wr_11);
         $("input:radio[name=status5]:input[value="+response.info.status5+"]").attr("checked", true);
         if(response.info.status5 == "0") {
            $("#t3_reason5").attr("readonly", false);
            $("#t3_reason5").val(response.info.reason5);
         }

         $("#t3_wr_26").text(response.info.wr_26);
         $("#t3_wr_12").text(response.info.wr_12);
         $("input:radio[name=status6]:input[value="+response.info.status6+"]").attr("checked", true);
         if(response.info.status6 == "0") {
            $("#t3_reason6").attr("readonly", false);
            $("#t3_reason6").val(response.info.reason6);
         }
         $("#t3_wr_13").text(response.info.wr_13);
         $("input:radio[name=status7]:input[value="+response.info.status7+"]").attr("checked", true);
         if(response.info.status7 == "0") {
            $("#t3_reason7").attr("readonly", false);
            $("#t3_reason7").val(response.info.reason7);
         }
         $("#t3_wr_14").text(response.info.wr_14);
         $("input:radio[name=status8]:input[value="+response.info.status8+"]").attr("checked", true);
         if(response.info.status8 == "0") {
            $("#t3_reason8").attr("readonly", false);
            $("#t3_reason8").val(response.info.reason8);
         }
         $("#t3_wr_15").text(response.info.wr_15);
         $("input:radio[name=status9]:input[value="+response.info.status9+"]").attr("checked", true);
         if(response.info.status9 == "0") {
            $("#t3_reason9").attr("readonly", false);
            $("#t3_reason9").val(response.info.reason9);
         }

         $("#t3_wr_27").text(response.info.wr_27);
         $("#t3_wr_16").text(response.info.wr_16);
         $("input:radio[name=status10]:input[value="+response.info.status10+"]").attr("checked", true);
         if(response.info.status10 == "0") {
            $("#t3_reason10").attr("readonly", false);
            $("#t3_reason10").val(response.info.reason10);
         }
         $("#t3_wr_17").text(response.info.wr_17);
         $("input:radio[name=status11]:input[value="+response.info.status11+"]").attr("checked", true);
         if(response.info.status11 == "0") {
            $("#t3_reason11").attr("readonly", false);
            $("#t3_reason11").val(response.info.reason11);
         }
         $("#t3_wr_18").text(response.info.wr_18);
         $("input:radio[name=status12]:input[value="+response.info.status12+"]").attr("checked", true);
         if(response.info.status12 == "0") {
            $("#t3_reason12").attr("readonly", false);
            $("#t3_reason12").val(response.info.reason12);
         }

         $("#t3_wr_28").text(response.info.wr_28);
         $("input:radio[name=status13]:input[value="+response.info.status13+"]").attr("checked", true);
         if(response.info.status13 == "0") {
            $("#t3_reason13").attr("readonly", false);
            $("#t3_reason13").val(response.info.reason13);
         }
         $("#t3_wr_20").text(response.info.wr_20);
         $("input:radio[name=status14]:input[value="+response.info.status14+"]").attr("checked", true);
         if(response.info.status14 == "0") {
            $("#t3_reason14").attr("readonly", false);
            $("#t3_reason14").val(response.info.reason14);
         }
         $("#t3_wr_21").text(response.info.wr_21);
         $("input:radio[name=status15]:input[value="+response.info.status15+"]").attr("checked", true);
         if(response.info.status15 == "0") {
            $("#t3_reason15").attr("readonly", false);
            $("#t3_reason15").val(response.info.reason15);
         }

         $("#t3_wr_29").text(response.info.wr_29);
         $("#t3_wr_22").text(response.info.wr_22);
         $("input:radio[name=status16]:input[value="+response.info.status16+"]").attr("checked", true);
         if(response.info.status16 == "0") {
            $("#t3_reason16").attr("readonly", false);
            $("#t3_reason16").val(response.info.reason16);
         }
         $("#t3_wr_23").text(response.info.wr_23);
         $("input:radio[name=status17]:input[value="+response.info.status17+"]").attr("checked", true);
         if(response.info.status17 == "0") {
            $("#t3_reason17").attr("readonly", false);
            $("#t3_reason17").val(response.info.reason17);
         }

         $("#t3_wr_30").text(response.info.wr_30);
         $("input:radio[name=status18]:input[value="+response.info.status18+"]").attr("checked", true);
         if(response.info.status18 == "0") {
            $("#t3_reason18").attr("readonly", false);
            $("#t3_reason18").val(response.info.reason18);
         }

         $("#t3_wr_31").text(response.info.wr_31);
         $("input:radio[name=status19]:input[value="+response.info.status19+"]").attr("checked", true);
         if(response.info.status19 == "0") {
            $("#t3_reason19").attr("readonly", false);
            $("#t3_reason19").val(response.info.reason19);
         }
         $("#t3_wr_19").text(response.info.wr_19);
         $("input:radio[name=status20]:input[value="+response.info.status20+"]").attr("checked", true);
         if(response.info.status20 == "0") {
            $("#t3_reason20").attr("readonly", false);
            $("#t3_reason20").val(response.info.reason20);
         }

         $("#t3_wr_32").text(response.info.wr_32);
         $("#t3_wr_33").text(response.info.wr_33);
         $("input:radio[name=status21]:input[value="+response.info.status21+"]").attr("checked", true);
         if(response.info.status21 == "0") {
            $("#t3_reason21").attr("readonly", false);
            $("#t3_reason21").val(response.info.reason21);
         }

         $("#t3_idx").val(response.info.idx);
         $("#t3_wr_id").val(response.info.wr_id);
         $("#t3_status").val(response.info.status);
      }
   });
}
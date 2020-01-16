$(document).ready(function () {
   // email 정규표현식
   var emailRule = /^[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*@[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*.[a-zA-Z]{2,3}$/i;

   // get parameter
   var url = getParameter("url");
   $("#exampleInputUrl1").val(url);

   $(".loginInput").keyup(function(event) {
      if (event.keyCode === 13) {
         $("#loginBtn").click();
      }
   });

   // login event
   $("#loginBtn").click(function () {
      var id = $("input[name=userId]").val();
      var pw = $("input[name=userPw]").val();
      var check = $()
      if(id == "") {
         alert('아이디를 입력해 주세요.');
         return false;
      }
      if(pw == "") {
         alert('비밀번호를 입력해 주세요.');
         return false;
      }
      $.ajax({
         url: '/api/login?userId='+id+'&userPw='+pw,
         type: 'POST',
         dataType: 'JSON',
         success: function (response) {
            console.log(response);
            if(response.result == true) {
               if (url == "" || url == undefined || url == null) {
                  url = "/";
               }
               if(response.pwChange !== undefined){
                  url = "/mypage/modify";
               }

               if($('input:checkbox[id="maintain"]').is(":checked") == true) {
                  if (url == "" || url == undefined || url == null) {
                     setCookie('userId', response.userId, 999);
                     setCookie('userName', response.userName, 999);
                     setCookie('userSeq', response.userSeq, 999);
                     document.location.href = url;
                  } else {
                     setCookie('userId', response.userId, 999);
                     setCookie('userName', response.userName, 999);
                     setCookie('userSeq', response.userSeq, 999);
                     document.location.href = url;
                  }
               }else {
                  if (url == "" || url == undefined || url == null) {
                     document.location.href = '/';
                  } else {
                     document.location.href = url;
                  }
               }
            }else {
               if(response.errorCode == '-1') {
                  alert('비밀번호가 틀렸습니다.');
                  return false;
               }else if(response.errorCode == '-2') {
                  alert('아이디가 존재하지 않습니다.');
                  return false;
               }else if(response.errorCode == '-3') {
                  alert('인증되지 않은 회원입니다.');
                  return false;
               }else {
                  alert('로그인 진해중 알 수 없는 오류가 발생하였습니다.');
                  return false;
               }
            }
         }
      });
   });

});
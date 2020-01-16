$(document).ready(function () {
    // 전체체크 클릭시
    $("#allCheck").click(function () {
        if($("#allCheck").is(":checked")) {
            $(".form-check-input").prop("checked", true);
        }else {
            $(".form-check-input").prop("checked", false);
        }
    });
    // 체크박스 선택시
    $(".form-check-input").click(function () {
        if($("input[name=check]:checked").length == 3) {
            $("#allCheck").prop("checked", true);
        }else {
            $("#allCheck").prop("checked", false);
        }
    });

    // 다음버튼 클릭시
    $("#nextBtn").click(function () {
        if(!$("#check1").is(":checked") || !$("#check2").is(":checked")) {
            alert('회원가입을 위해선 필수 약관을 모두 동의해주세요.');
            return false;
        }
        if($("#check3").is(":checked")) {
            document.location.href='/member/register_form?email=Y'
        }else {
            document.location.href='/member/register_form?email=N'
        }
    });
});
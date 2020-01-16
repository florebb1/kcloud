$(function () {
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
});
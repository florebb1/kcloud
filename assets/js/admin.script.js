// 첨부파일 라벨링 적용
$(document).on('change', '.custom-file-input', function (event) {
    $(this).next('.custom-file-label').html(event.target.files[0].name);
});

// get url parameter
var getParameter = function (param) { var returnValue; var url = location.href; var parameters = (url.slice(url.indexOf('?') + 1, url.length)).split('&'); for (var i = 0; i < parameters.length; i++) { var varName = parameters[i].split('=')[0]; if (varName.toUpperCase() == param.toUpperCase()) { returnValue = parameters[i].split('=')[1]; return decodeURIComponent(returnValue); } } };


// moniter
/*
jQuery('.mgtbtn').click(function () {  
	var id = $(this).attr("id");
	if(id == "mgt-btn-a") {
		if($("#mgt-wrap-a").css("display") == "none"){   
	        jQuery('#mgt-wrap-a').css("display", "block");   
	    } else {  
	        jQuery('#mgt-wrap-a').css("display", "none");   
	    } 	
	}else if(id == "mgt-btn-b") {
		if($("#mgt-wrap-b").css("display") == "none"){   
	        jQuery('#mgt-wrap-b').css("display", "block");   
	    } else {  
	        jQuery('#mgt-wrap-b').css("display", "none");   
	    } 		
	}else if(id == "mgt-btn-c") {
		if($("#mgt-wrap-c").css("display") == "none"){   
	        jQuery('#mgt-wrap-c').css("display", "block");   
	    } else {  
	        jQuery('#mgt-wrap-c').css("display", "none");   
	    } 	
	}else if(id == "mgt-btn-d") {
		if($("#mgt-wrap-d").css("display") == "none"){   
    	    jQuery('#mgt-wrap-d').css("display", "block");   
	    } else {  
	        jQuery('#mgt-wrap-d').css("display", "none");   
	    } 		
	}else if(id == "mgt-btn-e") {
		if($("#mgt-wrap-e").css("display") == "none"){   
	    	jQuery('#mgt-wrap-e').css("display", "block");   
		} else {  
    	    jQuery('#mgt-wrap-e').css("display", "none");   
		} 	
	}
});
*/



$("#logoutBtn").click(function () {
    $.ajax({
        url: '/adminapi/logout',
        type: 'POST',
        dataType: 'JSON',
        success: function (response) {
            if(response.result == true) {
                document.location.href='/admin';
            }
        }
    });
});
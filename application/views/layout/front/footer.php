<div class="footer-nav">
	<div class="container-fluid">
		    <div class="row">
		        <div class="col-12 footer-link">
		            <a href="/page/privacy">개인정보처리방침</a>
		            <span>ㅣ</span>
		            <a href="/page/terms">서비스이용약관</a>
		            <span>ㅣ</span>
		            <a href="/page/sitemap">사이트맵</a>
		            <span>ㅣ</span>
		            <a href="/member/secession">회원탈퇴</a>
		        </div>
		    </div>
		</div>
	</div>
</div>

<div class="copyright">
	<div class="container-fluid">
		<div class="row mt-3">
	        <div class="col-12 footer-brand">
	            <span>K-Cloud</span>품질·성능 검증 지원 Portal
	        </div>
	    </div>
	    <div class="row">
	        <div class="col-12">
	            주소 : 서울시 동작구 남부순환로 2075 용훈빌딩 6층<br class="m-br"><span class="mobile-span-line">ㅣ</span>TEL : 070-8730-2343<span>ㅣ</span>MAIL : jckim@kcloud.or.kr
	        </div>
	        <div class="col-12">
	            Copyright(C) K-Cloud. All right reserved.
	        </div>
	    </div>
	</div>
</div>
<script>
<?php
    $userSeq = $this->session->userdata('userSeq');
    $request_uri = $_SERVER['REQUEST_URI'];
    $login = "member/login";
    $Tmp = "동해물과 백두산이 마르고...";
    $CKTmp = "백두산";
    if(!strpos($request_uri, $login) && empty($userSeq)){
?>
    sessionSearch();
<?php } ?>
function sessionSearch() {
    var userSeq = getCookie('userSeq');
    var userName = getCookie('userName');
    var userId =  getCookie('userId');
    if(userSeq == "" || userName == "" || userId == "") {
        $.ajax({
            url: '/main/loginCheck?userSeq=' + userSeq + '&userName=' + userName + '&userId=' + userId,
            type: 'GET',
            dataType: 'JSON',
            success: function (response) {
                document.location.reload();
            }
        });
    }
}
//Cookie
function getCookie(c_name) {
    var i,x,y,ARRcookies=document.cookie.split(";");
    for (i=0;i<ARRcookies.length;i++) {
        x=ARRcookies[i].substr(0,ARRcookies[i].indexOf("="));
        y=ARRcookies[i].substr(ARRcookies[i].indexOf("=")+1);
        x=x.replace(/^\s+|\s+$/g,"");
        if (x==c_name) {
            return unescape(y);
        }
    }
}
</script>


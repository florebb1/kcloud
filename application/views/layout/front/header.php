<?php
$userSeq = $this->session->userdata('userSeq');
?>
<div class="header">
    <div class="header-in">
        <div class="d-flex d-flex justify-content-center">
            <div class="logo d-flex justify-content-start align-items-center">
                <a href="/"><img src="/assets/images/logo.png"/></a>
            </div>
            <div class="menu d-flex justify-content-center">
                <div>
                    <a href="/page/purpose">사업소개</a>
                    <a href="/page/purpose">목적 및 법적 근거</a>
                    <a href="/page/verification">품질/성능 검증 사업</a>
                </div>
                <div>
                    <a href="/page/availability">검증기준</a>
                    <a href="/page/availability">가용성</a>
                    <a href="/page/responsiveness">응답성</a>
                    <a href="/page/scalability">확장성</a>
                    <a href="/page/responsibility">신뢰성</a>
                    <a href="/page/persistence">서비스 지속성</a>
                    <a href="/page/support">서비스 지원</a>
                    <a href="/page/customer">고객 대응</a>
                </div>
                <div>
                    <a href="/page/guide">온라인 신청</a>
                    <a href="/page/guide">온라인 신청 안내</a>
                    <a href="/page/application">온라인 신청</a>
                </div>
                <div>
                    <a href="/page/iaas">확인 현황</a>
                    <a href="/page/iaas">IaaS</a>
                    <a href="/page/paas">PaaS</a>
                    <a href="/page/saas">SaaS</a>
                    <a href="/page/etc">기타</a>
                </div>
                <div>
                    <a href="/board/notice">정보마당</a>
                    <a href="/board/notice">공지사항</a>
                    <a href="/board/pds">자료실</a>
                    <a href="/board/faq">FAQ</a>
                </div>
            </div>
            <div class="user d-flex justify-content-end align-items-center">
                <?php if(empty($userSeq)) { ?>
                    <!-- 로그인 전 -->
                    <a id="logIn" href="/member/login">로그인</a><span>ㅣ</span><a id="signUp" href="/member/register">회원가입</a>
                <?php }else { ?>
                    <!-- 로그인 후 -->
                    <a href="/mypage">마이페이지</a>
                    <span>ㅣ</span>
                    <div class="btn-group">
                        <a href="#" class="dropdown-toggle profile-img-arrow" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span id="profileImg" class="user-img" style="background-image:url('/assets/images/icon/user.png');"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="/mypage/modify" class="dropdown-item"><i class="pe-7s-config mr-2"></i>정보수정</a>
                            <div class="dropdown-divider"></div>
                            <a id="logoutBtn" href="#" class="dropdown-item"><i class="pe-7s-power mr-2"></i>로그아웃</a>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>

<div class="mobile-header">
	<div class="header-mobile-wrap" role="banner">
		<nav id="mobile-nav" class="mobile-nav" role="navigation">
			<a href="/" class="mo-logo"><img src="/assets/images/logo.png"/></a>
			
            <div style="display: inline-block;position: absolute;right:75px; top:22px;">
                <?php if(empty($userSeq)) { ?>
                    <!-- 로그인 전 -->
                    <a id="logIn" href="/member/login">로그인</a><span>ㅣ</span><a id="signUp" href="/member/register">회원가입</a>
                <?php }else { ?>
                    <!-- 로그인 후 -->
                    <a href="/mypage">마이페이지</a>
                    <span>ㅣ</span>
                    <div class="btn-group">
                        <a href="#" class="dropdown-toggle profile-img-arrow" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span id="profileImg" class="user-img" style="background-image:url('/assets/images/icon/user.png');"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="/mypage/modify" class="dropdown-item"><i class="pe-7s-config mr-2"></i>정보수정</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item"><i class="pe-7s-power mr-2"></i>로그아웃</a>
                        </div>
                    </div>
                <?php } ?>
            </div>
			
			<div class="nav__menu" id="mobile-menu" tabindex="-1" aria-label="main navigation" hidden>
				
				
				<div class="nav__menu__in">
					<div>
						<a class="btn btn-link btn-lg btn-block" data-toggle="collapse" href="#multiCollapseMenu1" role="button" aria-expanded="false" aria-controls="multiCollapseMenu1">사업소개</a>
						<div class="collapse multi-collapse" id="multiCollapseMenu1">
							<ul>
								<li><a href="/page/purpose">목적 및 법적 근거</a></li>
								<li><a href="/page/verification">품질/성능 검증 사업</a></li>
							</ul>
						</div>
					</div>
					<div>
						<a class="btn btn-link btn-lg btn-block" data-toggle="collapse" href="#multiCollapseMenu2" role="button" aria-expanded="false" aria-controls="multiCollapseMenu2">검증기준</a>
						<div class="collapse multi-collapse" id="multiCollapseMenu2">
							<ul>
						        <li><a href="/page/availability">가용성</a></li>
						        <li><a href="/page/responsiveness">응답성</a></li>
						        <li><a href="/page/scalability">확장성</a></li>
						        <li><a href="/page/responsibility">신뢰성</a></li>
						        <li><a href="/page/persistence">서비스 지속성</a></li>
						        <li><a href="/page/support">서비스 지원</a></li>
						        <li><a href="/page/customer">고객 대응</a></li>
							</ul>
						</div>
					</div>
					<div>
						<a class="btn btn-link btn-lg btn-block" data-toggle="collapse" href="#multiCollapseMenu3" role="button" aria-expanded="false" aria-controls="multiCollapseMenu3">온라인 신청</a>
						<div class="collapse multi-collapse" id="multiCollapseMenu3">
							<ul>
						        <li><a href="/page/guide">온라인 신청 안내</a></li>
						        <li><a href="/page/application">온라인 신청</a></li>
							</ul>
						</div>
					</div>
					<div>
						<a class="btn btn-link btn-lg btn-block" data-toggle="collapse" href="#multiCollapseMenu4" role="button" aria-expanded="false" aria-controls="multiCollapseMenu4">확인 현황</a>
						<div class="collapse multi-collapse" id="multiCollapseMenu4">
							<ul>
						        <li><a href="/page/iaas">IaaS</a></li>
						        <li><a href="/page/paas">PaaS</a></li>
						        <li><a href="/page/saas">SaaS</a></li>
						        <li><a href="/page/etc">기타</a></li>
							</ul>
						</div>
					</div>
					<div>
						<a class="btn btn-link btn-lg btn-block" data-toggle="collapse" href="#multiCollapseMenu5" role="button" aria-expanded="false" aria-controls="multiCollapseMenu5">정보마당</a>
						<div class="collapse multi-collapse" id="multiCollapseMenu5">
							<ul>
						        <li><a href="/board/notice">공지사항</a></li>
						        <li><a href="/board/pds">자료실</a></li>
						        <li><a href="/board/faq">FAQ</a></li>
							</ul>
						</div>
					</div>
				</div>


				
				
<!--
				<li class="nav__item">
					<a href="#" class="nav__link">사업소개</a>

				</li>
				<li class="nav__item">
					<a href="#" class="nav__link">검증기준</a>
					<ul>
	                    <li><a href="/page/availability">가용성</a></li>
	                    <li><a href="/page/responsiveness">응답성</a></li>
	                    <li><a href="/page/scalability">확장성</a></li>
	                    <li><a href="/page/responsibility">신뢰성</a></li>
	                    <li><a href="/page/persistence">서비스 지속성</a></li>
	                    <li><a href="/page/support">서비스 지원</a></li>
	                    <li><a href="/page/customer">고객 대응</a></li>
					</ul>
				</li>
				<li class="nav__item">
					<a href="#" class="nav__link">온라인 신청</a>
					<ul>
	                    <li><a href="/page/guide">온라인 신청 안내</a></li>
	                    <li><a href="/page/application">온라인 신청</a></li>
					</ul>
				</li>
				<li class="nav__item">
					<a href="#" class="nav__link">확인 현황</a>
					<ul>
	                    <li><a href="/page/iaas">IaaS</a></li>
	                    <li><a href="/page/paas">PaaS</a></li>
	                    <li><a href="/page/saas">SaaS</a></li>
	                    <li><a href="/page/etc">기타</a></li>
					</ul>
				</li>
				<li class="nav__item">
					<a href="#" class="nav__link">정보마당</a>
					<ul>
	                    <li><a href="/board/notice">공지사항</a></li>
	                    <li><a href="/board/pds">자료실</a></li>
	                    <li><a href="/board/faq">FAQ</a></li>
					</ul>
				</li>
-->
			</div>
			<a href="#nav" class="nav__toggle" role="button" aria-expanded="false" aria-controls="menu">
				<svg class="menuicon" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50">
					<title>Toggle Menu</title>
					<g>
						<line class="menuicon__bar" x1="13" y1="16.5" x2="37" y2="16.5"/>
						<line class="menuicon__bar" x1="13" y1="24.5" x2="37" y2="24.5"/>
						<line class="menuicon__bar" x1="13" y1="24.5" x2="37" y2="24.5"/>
						<line class="menuicon__bar" x1="13" y1="32.5" x2="37" y2="32.5"/>
					</g>
				</svg>
			</a>
		</nav>
	</div>
</div>
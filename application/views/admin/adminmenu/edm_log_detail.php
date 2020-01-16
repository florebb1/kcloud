<!doctype html>
<html lang="ko">
	<head>
		<?php $this->load->view('/layout/admin/meta'); ?>
		<title><?php echo $title; ?></title>
	</head>
	<body>
		<div class="main-wrapper">
            <div class="topbar sky-blue">
                <?php $this->load->view('/layout/admin/header'); ?>
            </div>
            <div class="left-side">
                <?php $this->load->view('/layout/admin/nav'); ?>
            </div>
            <div class="page-wrapper">
                <div class="main-content">

					<!-- ##### 관리자 막스 및 컨텐츠 내용 시작 -->
						
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><i class="pe-7s-home"></i> Home</li>
								<li class="breadcrumb-item">관리자 메뉴</li>
								<li class="breadcrumb-item active" aria-current="page">eDM 발송 로그 상세</li>
							</ol>
						</nav>
						
						<hr>
						
						<div class="row">

							<!-- 글쓰기 폼 -->
							<form class="col-12 mt-4">
								<div class="form-group row">
									<label for="" class="col-2 text-right">메일링</label>
									<div class="col-10">
										수신 동의한 전체회원
									</div>
								</div>
								<div class="form-group row">
									<label for="" class="col-2 text-right">받는사람</label>
									<div class="col-10">
										abc@kcloud.or.kr; def@kcloud.or.kr;
									</div>
								</div>
								<div class="form-group row">
									<label for="" class="col-2 text-right">발송일시</label>
									<div class="col-10">
										2019-08-11 10:29:55
									</div>
								</div>
								<div class="form-group row">
									<label for="" class="col-2 text-right">발송 성공여부</label>
									<div class="col-10">
										<span class="badge badge-success">발신성공</span>
										<span class="badge badge-danger">발신실패</span>
									</div>
								</div>
								<hr>
								<div class="form-group row">
									<label for="" class="col-2 text-right">제목</label>
									<div class="col-10">
										개인정보보호정책 변경사항 알림
									</div>
								</div>
								<div class="form-group row">
									<label for="" class="col-2 text-right">내용</label>
									<div class="col-10">
										<textarea class="form-control" id="" rows="11">
Kcloud회원에게 개인정보보호정책 변경사항을 안내해 드립니다. 
2019년 08월 01일부로 개인정보보호정책 14조 12항 제3자 정보제공에 의한 개인정보 방침이 다음과 같이 변경되었습니다. 
14조 12항 제3자 정보제공에 의한 개인정보 방침 : 개인정보 보관 기간에따른 정보
										</textarea>
									</div>
								</div>
								

								<div class="text-right">
									<button type="button" class="btn btn-secondary">돌아가기</button><!-- 취소는 이전페이지(리스트)로 돌아가는 버튼 -->
								</div>
	
							</form>
							<!-- 글쓰기 폼 끝 -->

						</div>
					<!-- ##### 관리자 막스 및 컨텐츠 내용 끝 -->

                </div>
                <div class="footer white border-top">
                    <?php $this->load->view('/layout/admin/footer'); ?>
                </div>
            </div>
		</div>
        <?php $this->load->view('/layout/admin/base_script'); ?>
	</body>
</html>

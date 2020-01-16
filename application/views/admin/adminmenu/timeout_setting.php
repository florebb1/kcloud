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
								<li class="breadcrumb-item active" aria-current="page">로그인 세션 타임 아웃 설정</li>
							</ol>
						</nav>
						
						<hr>
						
						<div class="row">
							<!-- 글쓰기 폼 -->
							<form class="col-12 mt-4">
								<div class="alert alert-danger" role="alert">다음의 시간 동안 이용자가 응답이 없는 경우, 로그인 세션을 종료합니다.</div>
								<table class="table">
									<thead>
										<tr>
											<th scope="col">구분</th>
											<th scope="col">현재 설정</th>
											<th scope="col">설정 변경</th>
											<th scope="col"></th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>회원</td>
											<td id="currentUser"></td>
											<td><input type="number" class="form-control form-control-sm"name="user_session" id="user_session" value=""></td>
											<td>
												<a href="javascript:void(0)" class="btn btn-primary btn-sm" id="userEdit" onclick="userSession()">변경</a>
											</td>
										</tr>
										<tr>
											<td>관리자</td>
											<td id="currentAdmin"></td>
											<td><input type="number" class="form-control form-control-sm"name="admin_session" id="admin_session" value=""></td>
											<td>
												<a href="javascript:void(0)" class="btn btn-primary btn-sm" id="adminEdit" onclick="adminSession()">변경</a>
											</td>
										</tr>
									</tbody>
								</table>
	
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
        <script src="/assets/js/admin/adminmenu/setSession.js"></script>
	</body>
</html>

<!doctype html>
<html lang="ko">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="Googlebot" content="noindex, nofollow">
		<link rel="stylesheet" href="/assets/css/style.css">
		<link rel="stylesheet" href="/assets/css/login.css">
		<title><?php echo $title; ?></title>
	</head>
	<body>

		<div class="d-flex justify-content-center align-items-center h-100 w-100">
			<div class="container">

				<div class="row d-flex justify-content-center border p-5 shadow" style="background-color:rgba(255,255,255,0.7);border-radius:5px;">
					<div class="col-6 d-flex justify-content-center align-items-center ">
						<div class="form-group row py-3">
							<div class="col-12">
								<div class="pb-3">Administrator</div>
								<img src="/assets/images/logo.png" class="w-100">
							</div>
						</div>
					</div>
					<div class="border-left col-6">
						<form method="get" class="w-100 d-flex flex-column justify-content-center align-items-center" novalidate="">
							<div class="form-group w-75">
								<label for="">ID</label>
								<input type="text" id="adminId" name="adminId" class="form-control" required>
							</div>
							<div class="form-group w-75">
								<label for="">PASSWORD</label>
								<input type="password" id="adminPw" name="adminPw" class="form-control" required>
							</div>
							<div class="form-group w-75">
								<button type="button" id="loginBtn" class="btn btn-primary">로그인</button>
							</div>
						</form>
						<!--<div class="form-group w-100 d-flex flex-column justify-content-center align-items-center pt-1 mb-0">
							<div class="w-75">
								<a href="#" class="">비밀번호 찾기</a> / <a href="#" class="signup">회원가입</a>
							</div>
						</div>-->
					</div>
				</div>

				
			</div>
		</div>
		
		<script src="/assets/js/jquery-3.4.1.min.js"></script>
		<script src="/assets/js/popper.min.js"></script>
		<script src="/assets/js/bootstrap.min.js"></script>
        <script src="/assets/js/admin/login.js"></script>
	</body>
</html>

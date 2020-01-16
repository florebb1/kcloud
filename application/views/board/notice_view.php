<!doctype html>
<html lang="ko">
<head>
    <?php $this->load->view('layout/front/meta'); ?>
    <title><?php echo $title; ?></title>
</head>
<body>

    <div class="header-wrapper">
        <?php $this->load->view('layout/front/header'); ?>
    </div>
    <div class="sub-content">
	    
		<div class="sub-hero">
			<div class="p-5">공지사항</div>
		</div>

		<div class="container">

            <div class="row mt-5">
                <div class="col">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">HOME</a></li>
                            <li class="breadcrumb-item"><a href="#">정보마당</a></li>
                            <li class="breadcrumb-item"><a href="#">공지사항</a></li>
                            <li class="breadcrumb-item active" aria-current="page">상세</li>
                        </ol>
                    </nav>
                </div>
            </div>
			
			<div class="row mt-3 pt-5 bg-light">
				<div class="col">
                    <div class="form-group row">
                        <label for="" class="col-1 text-right">제목</label>
                        <div class="col-11" id="title"></div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-1 text-right">내용</label>
                        <div class="col-11" id="content" style="min-height: 150px;"></div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-1 text-right">링크1</label>
                        <div class="col-11" id="link"></div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-1 text-right">링크2</label>
                        <div class="col-11" id="link2"></div>
                    </div>

                    <div id="boardFile">
                    </div>
				</div>
			</div>
            <div class="text-center my-4">
                <button type="button" class="btn btn-info" onclick="history.back();">목록보기</button>
            </div>
		</div>

    </div>
    
    <div class="footer white border-top">
        <?php $this->load->view('layout/front/footer'); ?>
    </div>

<?php $this->load->view('layout/front/base_script'); ?>
<script src="/assets/js/page/board/notice-detail.js"></script>
</body>
</html>
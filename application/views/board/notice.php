<!doctype html>
<html lang="ko">
<head>
    <?php $this->load->view('layout/front/meta'); ?>
    <title><?php echo $title; ?></title>
    <style>
        .pagination > li {
            color:#000000;
            font-size:14px;
            padding:0 !important;
            width:36px;
            height:36px;
            line-height:32px;
            text-align:center;
            margin:0 2px;
            border: 1px solid #ddd;
        }
        .pagination > li.active{
            color:#fff !important;
            font-size:14px;
            padding:0 !important;
            width:36px;
            height:36px;
            line-height:32px;
            text-align:center;
            margin:0 2px;
            background-color: #0098c9;
        }

    </style>
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
							<li class="breadcrumb-item active" aria-current="page">공지사항</li>
						</ol>
					</nav>
				</div>
			</div>
			
			<div class="row mb-5">
				<div class="col">

					<div class="text-right mb-2">Total <span id="total">0</span>건</div>
					<table class="table table-hover border-bottom">
						<colgroup>
							<col style="width:5%;">
							<col>
							<col style="width:18%;">
							<col style="width:5%;">
							<col style="width:18%;">
						</colgroup>
						<thead>
							<tr class="table-active">
								<th scope="col">No.</th>
								<th scope="col">제목</th>
								<th scope="col">글쓴이</th>
								<th scope="col">조회</th>
								<th scope="col">날짜</th>
							</tr>
						</thead>
						<tbody id="content"></tbody>
					</table>


					<nav class="d-flex justify-content-between mt-4">
						<div class="input-group mb-3">
							<select class="custom-select" id="inputGroupSelect02" style="flex:0.1 !important; ">
                                <option value="wr_subject">제목</option>
                                <option value="wr_content">내용</option>
                                <option value="wr_subject||wr_content">제목+내용</option>
                                <option value="mb_id,1">회원아이디</option>
                                <option value="mb_id,0">회원아이디(코)</option>
                                <option value="wr_name,1">글쓴이</option>
                                <option value="wr_name,0">글쓴이(코)</option>
							</select>
							<div class="input-group-prepend mb-3">
								<input type="text" class="form-control" id="searchWord" placeholder="검색어를 입력해주세요." aria-label="Recipient's username" aria-describedby="button-addon2">
								<div class="input-group-append">
									<button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="pe-7s-search"></i></button>
								</div>
							</div>
						</div>
						<div>
							<ul id="show_paginator" class="pagination"></ul>
						</div>
					</nav>


				</div>
			</div>
		</div>

    </div>
    
    <div class="footer white border-top">
        <?php $this->load->view('layout/front/footer'); ?>
    </div>

<?php $this->load->view('layout/front/base_script'); ?>
<script src="/assets/js/page/board/notice.js"></script>
</body>
</html>
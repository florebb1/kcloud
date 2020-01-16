<!doctype html>
<html lang="ko">
<head>
    <?php $this->load->view('/layout/admin/meta'); ?>
    <title><?php echo $title; ?></title>
    <style>
        .note-popover {
            display: none;
        }
    </style>
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
                    <li class="breadcrumb-item">정보 마당</li>
                <li class="breadcrumb-item active" aria-current="page">FAQ - 글쓰기 / 수정하기</li>
                </ol>
            </nav>

            <hr>

            <div class="row">
                <form id="noticeForm" class="col-12 mt-4" enctype="multipart/form-data">
                    <input type="hidden" id="wr_id" name="wr_id">
                    <div class="form-group row">
                        <label for="" class="col-1 text-right">제목</label>
                        <div class="col-11">
                            <input type="text" class="form-control" id="wr_subject" name="wr_subject" placeholder="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-1 text-right">작성자</label>
                        <div class="col-11">
                            <input type="text" class="form-control" id="wr_name" name="wr_name" placeholder="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-1 text-right">내용</label>
                        <div class="col-11">
                            <textarea id="summernote" name="wr_content"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-1 text-right">Link 1</label>
                        <div class="col-11">
                            <input type="text" class="form-control" id="wr_link1" name="wr_link1" placeholder="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-1 text-right">Link 2</label>
                        <div class="col-11">
                            <input type="text" class="form-control" id="wr_link2" name="wr_link2" placeholder="">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-1 text-right">File 1</label>
                        <div class="col-6">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="bf_file1" name="bf_file[]" required>
                                <label class="custom-file-label" for="">Choose file...</label>
                                <div class="invalid-feedback">Example invalid custom file feedback</div>
                            </div>
                        </div>
                        <div class="col-5">
                            <div id="ifile1"></div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-1 text-right">File 2</label>
                        <div class="col-6">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="bf_file2" name="bf_file[]" required>
                                <label class="custom-file-label" for="">Choose file...</label>
                                <div class="invalid-feedback">Example invalid custom file feedback</div>
                            </div>
                        </div>
                        <div class="col-5">
                            <div id="ifile2"></div>
                        </div>
                    </div>
                    <div class="text-right">
                        <button type="button" class="btn btn-secondary" onclick="history.back();">취소하기</button><!-- 취소는 이전페이지(리스트)로 돌아가는 버튼 -->
                        <button id="regBtn" type="button" class="btn btn-primary d-none" onclick="register();">등록하기</button>
                        <button id="editBtn" type="button" class="btn btn-primary d-none" onclick="edit();">수정하기</button>
                    </div>
                </form>
            </div>
            <!-- ##### 관리자 막스 및 컨텐츠 내용 끝 -->
        </div>
        <div class="footer white border-top">
            <?php $this->load->view('/layout/admin/footer'); ?>
        </div>
    </div>
</div>
<?php $this->load->view('/layout/admin/base_script'); ?>
<!-- include summernote css/js -->
<link href="/assets/editor/summernote.css" rel="stylesheet">
<script src="/assets/editor/summernote.js"></script>
<script src="/assets/js/admin/aboard/faq_write.js"></script>
</body>
</html>

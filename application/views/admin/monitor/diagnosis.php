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



                    <hr>

                    <div class="row">
                        <div class="col d-flex justify-content-between">
                            <div class="d-flex flex-row">
                                <div class="mb-2 mr-3">
                                    <span id="total">Total <?=$total_cnt?>건</span>
                                </div>
                                <form name="search_frm" id="search_frm" onsubmit="return getList('1');">
                                    <input type="hidden" name="gp_type" id="gp_type" value="1">
                                    <div class="form-group min-width120">
                                        <select class="form-control form-control-sm"  id="per_page" name="per_page" onchange="getList();">
                                            <option value="5">5개씩 보기</option>
                                            <option value="10">10개씩 보기</option>
                                            <option value="20">20개씩 보기</option>
                                            <option value="30">30개씩 보기</option>
                                            <option value="40">40개씩 보기</option>
                                            <option value="50">50개씩 보기</option>
                                        </select>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <hr>

                    <div class="row" id="mgt-wrap-a">
                        <div class="col">
                            <div id="list_html"></div>
                            <nav class="d-flex justify-content-center mt-4 mb-5">
                                <div id="pagination_html"></div>
                            </nav>
                        </div>
                    </div>



					<!-- 자세히보기 Modal
					<div class="modal fade" id="diagnosis-detail" tabindex="-1" role="dialog" aria-labelledby="diagnosis-detailLabel" aria-hidden="true">
						<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLabel">이벤트 진단</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<table class="table">
										<colgroup>
											<col width="140px">
											<col>
										</colgroup>
										<tbody>
											<tr>
												<th scope="row">이벤트 발생 시간</th>
												<td>2019.06.10 13:10 21</td>
											</tr>
											<tr>
												<th scope="row">이벤트 알림 시간</th>
												<td>2019.06.10 13:10 21</td>
											</tr>
											<tr>
												<th scope="row">이벤트 알림 수신</th>
												<td>kcloud@cloudqos.or.kr</td>
											</tr>
											<tr>
												<th scope="row">이벤트 진단 내용</th>
												<td>Lack of free swap on WEB01 PROBLEM Warning for 6시간 it probably means that more physical memory</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">닫기</button>
									<button type="button" class="btn btn-info">성능 모니터 바로가기</button>
								</div>
							</div>
						</div>
					</div>
                    -->




                </div>
                <div class="footer white border-top">
                    <?php $this->load->view('/layout/admin/footer'); ?>
                </div>
            </div>
		</div>
        <?php $this->load->view('/layout/admin/base_script'); ?>
        <script type="text/javascript">
        <!--
        function getList(page){
            var url = "/graph/list_ajax02/"+page;
            var search_frm = $("#search_frm").serialize();
            $.ajax({
                url : url,
                type : 'POST',
                dataType : 'JSON',
                data : search_frm,
                success:function(response){
                    console.log(response);
                    $('#list_html').html(response.list_html);
                    $('#pagination_html').html(response.pagination_html);
                }
            });
        }

        $(document).ready(function(){

            getList('1');

            $(document).on("click", ".pagination a", function(event){
                event.preventDefault();
                var page = $(this).data("ci-pagination-page");
                getList(page);
            });
        });


        //-->
        </script>
	</body>
</html>

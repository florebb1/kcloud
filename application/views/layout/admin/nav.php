<div class="sidebar-nav">
	
    <a href="<?php echo site_url('admin/dashboard'); ?>" class="btn btn-link btn-block first-link">
        <img src="/assets/images/dashboard.png"/>Dashboard
    </a>

    <a class="btn btn-link btn-block collapsed" data-toggle="collapse" href="#multiCollapseMenu1" role="button" aria-expanded="false" aria-controls="multiCollapseMenu1">
        <img src="/assets/images/users.png"/>회원 관리
    </a>
    <div class="collapse multi-collapse <?php if(preg_match('/admin\/member/', $this->uri->uri_string())){echo 'show';} ?>" id="multiCollapseMenu1">
        <a href="<?php echo site_url('admin/member/menagement'); ?>" class="btn btn-link btn-block <?php if($this->uri->uri_string() == 'admin/member/menagement') { echo 'active'; } ?>">회원 관리</a>
        <!--<a href="<?php echo site_url('admin/member/human'); ?>" class="btn btn-link btn-block <?php if($this->uri->uri_string() == 'admin/member/human') { echo 'active'; } ?>">휴먼 계정 관리</a>
        <a href="<?php echo site_url('admin/member/ip'); ?>" class="btn btn-link btn-block <?php if($this->uri->uri_string() == 'admin/member/ip') { echo 'active'; } ?>">회원 로그인 IP 제한</a>
        <a href="<?php echo site_url('admin/member/secession'); ?>" class="btn btn-link btn-block <?php if($this->uri->uri_string() == 'admin/member/secession') { echo 'active'; } ?>">탈퇴 회원</a>
        <a href="<?php echo site_url('admin/member/log'); ?>" class="btn btn-link btn-block <?php if($this->uri->uri_string() == 'admin/member/log') { echo 'active'; } ?>">회원 로그</a>-->
    </div>

    <a class="btn btn-link btn-block collapsed" data-toggle="collapse" href="#multiCollapseMenu2" role="button" aria-expanded="false" aria-controls="multiCollapseMenu2">
        <img src="/assets/images/contract.png"/>신청 관리
    </a>
    <div class="collapse multi-collapse <?php if(preg_match('/admin\/apply/', $this->uri->uri_string())){echo 'show';} ?>" id="multiCollapseMenu2">
        <a href="<?php echo site_url('admin/apply/online_apply'); ?>" class="btn btn-link btn-block <?php if($this->uri->uri_string() == 'admin/apply/online_apply') { echo 'active'; } ?>">온라인 신청 관리</a>
        <!--<a href="<?php echo site_url('admin/apply/apply_log'); ?>" class="btn btn-link btn-block <?php if($this->uri->uri_string() == 'admin/apply/apply_log') { echo 'active'; } ?>">신청 처리 로그</a>-->
    </div>

    <a class="btn btn-link btn-block collapsed" data-toggle="collapse" href="#multiCollapseMenu3" role="button" aria-expanded="false" aria-controls="multiCollapseMenu3">
        <img src="/assets/images/file.png"/>확인 현황
    </a>
    <div class="collapse multi-collapse <?php if(preg_match('/admin\/confirm/', $this->uri->uri_string())){echo 'show';} ?>" id="multiCollapseMenu3">
        <a href="<?php echo site_url('admin/confirm/iaas'); ?>" class="btn btn-link btn-block <?php if($this->uri->uri_string() == 'admin/confirm/iaas') { echo 'active'; } ?>">IaaS</a>
        <a href="<?php echo site_url('admin/confirm/paas'); ?>" class="btn btn-link btn-block <?php if($this->uri->uri_string() == 'admin/confirm/paas') { echo 'active'; } ?>">PaaS</a>
        <a href="<?php echo site_url('admin/confirm/saas'); ?>" class="btn btn-link btn-block <?php if($this->uri->uri_string() == 'admin/confirm/saas') { echo 'active'; } ?>">SaaS</a>
        <a href="<?php echo site_url('admin/confirm/etc'); ?>" class="btn btn-link btn-block <?php if($this->uri->uri_string() == 'admin/confirm/etc') { echo 'active'; } ?>">기타</a>
    </div>

    <a class="btn btn-link btn-block collapsed" data-toggle="collapse" href="#multiCollapseMenu4" role="button" aria-expanded="false" aria-controls="multiCollapseMenu4">
        <img src="/assets/images/analytics.png"/>성능 모니터
    </a>
    <div class="collapse multi-collapse <?php if(preg_match('/admin\/monitor/', $this->uri->uri_string())){echo 'show';} ?>" id="multiCollapseMenu4">
        <a href="<?php echo site_url('admin/monitor/event_management'); ?>" class="btn btn-link btn-block <?php if($this->uri->uri_string() == 'admin/monitor/event_management') { echo 'active'; } ?>">성능 모니터 현황</a>
        <a href="<?php echo site_url('admin/monitor/diagnosis'); ?>" class="btn btn-link btn-block <?php if($this->uri->uri_string() == 'admin/monitor/diagnosis') { echo 'active'; } ?>">이벤트 진단</a>
    </div>

    <a class="btn btn-link btn-block collapsed" data-toggle="collapse" href="#multiCollapseMenu5" role="button" aria-expanded="false" aria-controls="multiCollapseMenu5">
        <img src="/assets/images/question.png"/>정보 마당
    </a>
    <div class="collapse multi-collapse <?php if(preg_match('/admin\/aboard/', $this->uri->uri_string())){echo 'show';} ?>" id="multiCollapseMenu5">
        <a href="<?php echo site_url('admin/aboard/notice'); ?>" class="btn btn-link btn-block <?php if($this->uri->uri_string() == 'admin/aboard/notice') { echo 'active'; } ?>">공지사항</a>
        <a href="<?php echo site_url('admin/aboard/pds'); ?>" class="btn btn-link btn-block <?php if($this->uri->uri_string() == 'admin/aboard/pds') { echo 'active'; } ?>">자료실</a>
        <a href="<?php echo site_url('admin/aboard/faq'); ?>" class="btn btn-link btn-block <?php if($this->uri->uri_string() == 'admin/aboard/faq') { echo 'active'; } ?>">FAQ</a>
    </div>

    <a class="btn btn-link btn-block collapsed" data-toggle="collapse" href="#multiCollapseMenu6" role="button" aria-expanded="false" aria-controls="multiCollapseMenu6">
        <img src="/assets/images/customer-support.png"/>관리자 메뉴
    </a>
    <div class="collapse multi-collapse <?php if(preg_match('/admin\/adminmenu/', $this->uri->uri_string())){echo 'show';} ?>" id="multiCollapseMenu6">
        <a href="<?php echo site_url('admin/adminmenu/rights_management'); ?>" class="btn btn-link btn-block <?php if($this->uri->uri_string() == 'admin/adminmenu/rights_management') { echo 'active'; } ?>">관리자 계정 관리</a>
        <!--<a href="<?php echo site_url('admin/adminmenu/ip_management'); ?>" class="btn btn-link btn-block <?php if($this->uri->uri_string() == 'admin/adminmenu/ip_management') { echo 'active'; } ?>">관리자 접근 IP 설정</a>-->
        <a href="<?php echo site_url('admin/adminmenu/total_log'); ?>" class="btn btn-link btn-block <?php if($this->uri->uri_string() == 'admin/adminmenu/total_log') { echo 'active'; } ?>">관리자 통합 로그</a>
        <a href="<?php echo site_url('admin/adminmenu/timeout_setting'); ?>" class="btn btn-link btn-block <?php if($this->uri->uri_string() == 'admin/adminmenu/timeout_setting') { echo 'active'; } ?>">로그인 세션 타임 아웃 설정</a>
        <a href="<?php echo site_url('admin/adminmenu/edm_send'); ?>" class="btn btn-link btn-block <?php if($this->uri->uri_string() == 'admin/adminmenu/edm_send') { echo 'active'; } ?>">eDM 발송</a>
		<!--<a href="<?php echo site_url('admin/adminmenu/edm_management'); ?>" class="btn btn-link btn-block <?php if($this->uri->uri_string() == 'admin/adminmenu/edm_management') { echo 'active'; } ?>">eDM 양식 관리</a>
        <a href="<?php echo site_url('admin/adminmenu/edm_log'); ?>" class="btn btn-link btn-block <?php if($this->uri->uri_string() == 'admin/adminmenu/edm_log') { echo 'active'; } ?>">eDM 발송 로그</a>-->
        <a href="<?php echo site_url('admin/adminmenu/banner_management'); ?>" class="btn btn-link btn-block <?php if($this->uri->uri_string() == 'admin/adminmenu/banner_management') { echo 'active'; } ?>">배너 관리</a>
    </div>
    
</div>
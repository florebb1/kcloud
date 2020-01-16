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
			<div class="p-5">응답성</div>
		</div>

		<div class="container">
			
			<div class="row my-5">
				<div class="col">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">HOME</a></li>
							<li class="breadcrumb-item"><a href="#">검증기준</a></li>
							<li class="breadcrumb-item active" aria-current="page">응답성</li>
						</ol>
					</nav>
				</div>
			</div>
			
			<div class="row">
				<div class="col">



<div class="contentview">

				

<h1 class="t_center">응답성</h1>
<ul class="basic">
	<li>클라우드서비스의 응답성(Responsiveness)은 어떠한 이벤트에 대하여 즉각적으로 반응할 수 있는 능력을 말한다.
		<ul class="basic2">
			<li>즉각적으로 반응할 수 있는 능력은 서비스 이용자의 요청에 대해 서비스 또는 시스템이 최적의 성능으로 빠른 시간 내에 해당 업무를 처리함을 말한다.</li>
		</ul>
	</li>
	<li>클라우드서비스 제공자는 응답성을 측정하여 수준과 목표를 제시함으로써, 서비스 이용자에게 최적의 성능을 보장하여 서비스 만족도를 높이고 업무 효율성을 보장할 수 있다.<br>※ 응답성의 경우 시스템의 성능이 영향을 크게 미치므로, 시스템 전체에 대한 성능 측정이 필요하다. 시스템의 성능은 처리량(Throughput)을 기준으로 측정이 가능하므로, 국제적으로 통용되고 있는 TPC 또는 SPEC 표준 및 도구를 활용함을 권고한다. 위 성능 측정에 대한 설명은 ’[참고] IaaS 및 PaaS에 대한 성능 측정’ 을 참조한다.</li>
</ul>
<hr>
<h2 class="red">응답시간</h2>
<ul class="basic">
	<li>응답시간은 이용자가 조회 또는 기능 수행 시, 해당 요청 시점부터 처리가 완료될 때까지 소요된 시간을 말한다.</li>
	<li>응답시간은 객관적인 범위 내에서 측정되어야하며, 응답시간 성능의 기반이 되는 시스템, 서비스 등의 사양이 필수적으로 명시되어야 한다. 또한, 응답시간 내 모든 요청을 성공적으로 처리함을 전제로 한다.</li>
	<li>응답시간은 다음과 같은 점검항목을 통해 확인할 수 있다.</li>
</ul>
<h3 class="t_center">&lt;표 2-1. 「응답시간」 점검항목&gt;</h3>
<table cellpadding="0" cellspacing="0" border="0" class="table1">
	<tbody><tr>
		<th rowspan="2" class="border_none">품질·성능 기준</th>
		<th rowspan="2"> 점검항목</th>
		<th rowspan="2">주요 내용</th>
		<th colspan="2">점검방법</th>
		<th rowspan="2" colspan="2">참고</th>
	</tr>
	<tr>
		<th>관리체계</th>
		<th>품질<br>성능</th>
	</tr>
	<tr>
		<td rowspan="2" class="border_none">응답성</td>
		<td rowspan="2">응답 시간</td>
		<td>응답시간 유지능력</td>
		<td>응답시간 보장을 위한 관리체계 및 운영정책</td>
		<td width="7%">●</td>
		<td width="7%"></td>
		<td>1.1</td>
	</tr>
	<tr>
		<td>응답시간 측정</td>
		<td>응답시간 확인 </td>
		<td></td>
		<td>●</td>
		<td>1.2</td>
	</tr>
</tbody></table>
<hr>

<!--1.1응답시간 유지능력-->
<h3>1.1.  응답시간 유지능력</h3>
<ul class="basic">
	<li>가용률 유지능력은 갑작스런 클라우드서비스의 장애로 인해 서비스가 중단되는 우려를 최소화하기 위해 가용률 기준을 제시하고, 이를 보장하기 위한 관리 정책·기술을 보유하고 있는 것을 말한다. </li>
	<li>클라우드서비스 제공자는 서비스 가용률을 약정된 내용에 따라 상시적으로 제공하기 위해 제반 조치를 관리할 수 있다 </li>
</ul>
<hr>
<h3 class="t_center">&lt; 「응답시간 유지능력」 점검방법&gt;</h3>
<table cellpadding="0" cellspacing="0" border="0" class="table1">
	<tbody><tr>
		<th class="border_none">유형</th>
		<td colspan="2"><input type="checkbox" name="check" checked="" disabled=""> 관리체계 검증</td>
		<td colspan="2"><input type="checkbox" name="nocheck" disabled=""> 품질·성능 시험</td>
	</tr>	
	<tr>
		<th class="border_none">적용 대상 서비스</th>
		<td width="23%"><input type="checkbox" name="check" checked="" disabled=""> IaaS</td>
		<td width="23%" colspan="2"><input type="checkbox" name="check" checked="" disabled=""> PaaS</td>
		<td width="23%"><input type="checkbox" name="check" checked="" disabled=""> SaaS</td>
	</tr>
</tbody></table>
<hr>
<ul class="basic">
	<li>응답시간 유지능력을 확인하기 위한 세부 점검항목은 다음과 같다. </li>
</ul>
<hr>
<h3 class="t_center">&lt;표 2-2. 「응답시간 유지능력」 점검항목&gt;</h3>
<table cellpadding="0" cellspacing="0" border="0" class="table1">
	<tbody><tr>
		<th class="border_none" width="80px">점검 항목</th>
		<th width="150px">세부 점검항목</th>
		<th>설명</th>
	</tr>	
	<tr>
		<th rowspan="4" class="border_none">응답시간<br>유지능력</th>
		<td>(1) 응답시간 수준제시</td>
		<td class="t_left">클라우드서비스 제공자는 서비스의 응답시간 수준을 보장하기 위해 서비스 지원범위, 네트워크 확보현황, 시스템 구성, 예방 활동 등을 포함한 응답시간 정책을 수립하고 있는지 확인한다. </td>
	</tr>
	<tr>
		<td>(2) 조직 및 책임 설정</td>
		<td class="t_left">클라우드서비스 제공자는 이용자에게 제시한 응답시간 수준을 보장하기 위해 조직 및 인력을 배치·수행되는지 확인한다. </td>
	</tr>
	<tr>
		<td>(3) 자원확보 및 유지·관리</td>
		<td class="t_left">클라우드서비스 제공자는 클라우드 시스템의 주기적인 업그레이드를 통해 서비스의 응답시간을 유지하고 있는지 확인한다. </td>
	</tr>
	<tr>
		<td>(4) 응답시간 분석 예측,<br>개선 프로세스</td>
		<td class="t_left">클라우드서비스 제공자는 서비스의 응답시간을 보장/개선하기 위해 이를 예측/분석/개선하고, 필요한 기술 자료를 보유/관리하는지 확인한다. 
</td>
	</tr>
</tbody></table>
<hr>
<h3>① 응답시간 수준제시</h3>
<ul class="basic">
	<li>클라우드서비스에서 제시하는 응답시간 수준은 사전에 기본 계약, 이용 약관 또는 서비스 수준 협약(SLA), 가이드라인 등을 통해 제시할 수 있다. 서비스 응답시간에 대한 가이드라인 또는 서비스 응답시간 등을 적용하여 정의할 수 있다. </li>
	<li>클라우드서비스 제공자는 클라우드 서비스의 응답시간 수준을 주기적으로 이용자에게 알리기 위해 응답시간 지표 현황, 통지 인력/프로세스, 보고 이력의 관리 등의 내용과 절차를 포함하여 제시 할 수 있다.  </li>
</ul>
<hr>
<h3>② 조직 및 책임설정</h3>
<ul class="basic">
	<li>클라우드서비스 제공자는 목표한 클라우드서비스의 응답시간 수준을 보장하기 위해 보증할 수 있는 조직 또는 담당인력을 배치·운영한다. 응답시간 담당 조직 또는 담당인력은 해당 직무 활동을 수행하고 검증하는 인력들로서 직무 역할, 책임, 권한, 상호 연관관계 및 타 업무와의 관계 등을 포함하여 정의할 수 있다. </li>
</ul>
<hr>
<h3>③ 자원확보 및 유지·관리</h3>
<ul class="basic">
	<li>클라우드서비스 제공자는 서비스의 응답속도를 우수하게 제공하기 위해 구성된 하드웨어 설비와 네트워크 설비를 최신으로 유지하기 위한 하드웨어·네트워크의 설비 유지 및 변경 계획, 방법과 절차 등을 정의한다. </li>
	<li>클라우드서비스 제공자는 서비스의 응답속도를 보장하기 위해 회선 용량·대역폭, 제공 기간, 각 설비의 내용연수 등의 내용을 포함한 회선 계약 등을 통해 적절한 네트워크 용량을 확보하기 위한 방법과 절차 등을 정의한다. </li>
</ul>
<hr>
<h3>④ 응답시간 분석 예측, 개선 프로세스</h3>
<ul class="basic">
	<li>클라우드서비스의 응답시간을 분석하고 예측하기 위한 방법과 절차 등을 포함한 분석·예측 검토사항을 정의하고 이를 실행하기 위한 방법, 절차 및 보고체계 등을 구축·운영한다
	<hr><div class="box2 t_center"><h3 class="ex">[참고ㆍ예시]</h3><img src="/assets/images/img/s22_img1.jpg" class="img-fluid"></div>
	</li>
</ul>

<!--1.2응답시간 측정-->
<hr>
<h3>1.2. 응답시간 측정</h3>
<ul class="basic">
	<li>응답시간은 이용자가 요청하는 시점부터 요청된 업무의 처리가 완료될 때까지 장애발생 없이 소요된 시간을 말한다. </li>
	<li>클라우드서비스 모델에 따라 응답시간 측정 방법은 달라질 수 있다. </li>
	<li>응답성 성능에 대한 신뢰도 확보를 위해, 응답시간 측정은 실시간으로 확인되는 로그 정보를 기반으로 객관적이고 정량적으로 산정되어야 한다.</li>
</ul>
<hr>
<h3 class="t_center">&lt; 「응답시간 측정」 점검방법 &gt;</h3>
<table cellpadding="0" cellspacing="0" border="0" class="table1">
	<tbody><tr>
		<th class="border_none">유형</th>
		<td colspan="2"><input type="checkbox" name="nocheck" disabled=""> 관리체계 검증</td>
		<td colspan="2"><input type="checkbox" name="check" checked="" disabled=""> 품질·성능 시험</td>
	</tr>	
	<tr>
		<th class="border_none">적용 대상 서비스</th>
		<td width="23%"><input type="checkbox" name="check" checked="" disabled=""> IaaS</td>
		<td width="23%" colspan="2"><input type="checkbox" name="check" checked="" disabled=""> PaaS</td>
		<td width="23%"><input type="checkbox" name="check" checked="" disabled=""> SaaS</td>
	</tr>
</tbody></table>
<hr>
<ul class="basic">
	<li>응답시간 측정을 위한 절차별 세부 점검항목은 다음과 같다. </li>
</ul>
<hr>
<h3 class="t_center">&lt;표 2-3. 「응답시간 측정」 점검항목&gt;</h3>
<table cellpadding="0" cellspacing="0" border="0" class="table1">
	<tbody><tr>
		<th class="border_none" width="80px">점검 항목</th>
		<th width="150px">세부 점검항목</th>
		<th>설명</th>
	</tr>	
	<tr>
		<th rowspan="4" class="border_none">응답시간<br>측정</th>
		<td>(1) 측정 절차</td>
		<td class="t_left">응답시간 측정을 위한 절차를 확인한다. </td>
	</tr>
	<tr>
		<td>(2) 측정 대상 및 구간</td>
		<td class="t_left">응답시간 측정 대상과 구간을 확인한다.</td>
	</tr>
	<tr>
		<td>(3) 측정 방법 및 도구</td>
		<td class="t_left">응답시간 측정 방법을 확인한다.</td>
	</tr>
	<tr>
		<td>(4) 측정 수행 및 결과 확인</td>
		<td class="t_left">응답시간 측정절차, 방법 등 사전 설정에 따라 응답시간을 측정하고, 응답시간 측정 결과를 확인한다.</td>
	</tr>
</tbody></table>
<hr>
<h3>① 측정 절차</h3>
<ul class="basic">
	<li>클라우드서비스의 응답시간 측정을 위한 절차는 다음과 같다.</li>
</ul>

<hr>
<h3 class="t_center">&lt;표 2-4. 응답시간 측정 절차&gt;</h3>
<table cellpadding="0" cellspacing="0" border="0" class="table1">
	<tbody><tr>
		<th class="border_none">단계</th>
		<th>주요 내용 </th>
	</tr>	
	<tr>
		<td class="border_none">요구사항 분석</td>
		<td class="t_left">- 측정 대상 서비스 혹은 시스템 선정<br>- 측정 구간 결정</td>
	</tr>
	<tr>
		<td class="border_none">계획 수립</td>
		<td class="t_left">- 측정 방법 및 측정도구 결정</td>
	</tr>
	<tr>
		<td class="border_none">측정환경 준비</td>
		<td class="t_left">- 측정을 위한 서비스 환경 준비(필요시, 시험 환경 구축 필요)<br>- 측정 도구 설치 및 정상 동작 확인</td>
	</tr>
	<tr>
		<td class="border_none">측정 수행 및 결과 분석</td>
		<td class="t_left">- 측정을 시작하여 예정된 종료시점까지 지속<br>- 측정 데이터를 취합하여 결과 분석</td>
	</tr>
	<tr>
		<td class="border_none">응답시간 측정 결과 확인</td>
		<td class="t_left">- 측정된 응답시간의 결과 확인</td>
	</tr>
</tbody></table>
<hr>
<h3>② 측정 대상 및 구간</h3>
<ul class="basic">
	<li>서비스 이용자에게 제공하는 서비스 및 시스템을 대상으로, 서비스 제공자와 이용자 간에 협의하여 정한 서비스 대상과 측정을 시도하는 시스템을 측정 구간으로 한다. </li>
	<li>네트워크상의 장애 등이 응답시간에 미치는 영향을 최소화하고, 시험대상의 응답시간 측정 범위를 객관적이고 명확하게 결정해야 하며, 측정 중 장애가 발생하는 경우 해당 결함 수정 후 재측정을 통해 응답시간을 측정할 수 있다.</li>
</ul>
<hr>
<div class="box2 t_center">
<h3 class="ex">[참고ㆍ예시]</h3>
<ul class="basic t_left">
	<li>서비스 모델별 측정대상 예시
		<table cellpadding="0" cellspacing="0" border="0" class="table1">
			<tbody><tr>
				<th class="border_none">서비스</th>
				<th>측정 대상</th>
			</tr>	
			<tr>
				<td class="border_none">IaaS</td>
				<td class="t_left">- 가상머신 인스턴스 서비스<br>- IaaS 서비스 운영지원 웹페이지</td>
			</tr>
			<tr>
				<td class="border_none">PaaS</td>
				<td class="t_left">- 서비스 플랫폼<br>- PaaS 서비스 운영지원 웹페이지</td>
			</tr>
			<tr>
				<td class="border_none">SaaS</td>
				<td class="t_left">- 서비스 애플리케이션<br>- SaaS 서비스 운영지원 웹페이지</td>
			</tr>
		</tbody></table>
		※ 운영지원 웹페이지는 서비스 이용자가 웹UI를 통해 서비스 상태 확인, 서비스 추가/삭제 등의 기능을 지원하는 대시보드 형태로 제공되는 웹페이지를 말한다.
	</li>
</ul>
</div>
<hr>
<h3>③ 측정 방법 및 도구</h3>
<ul class="basic">
	<li>클라우드서비스 이용자가 서비스 애플리케이션 및 모니터링 서비스(운영상태 모니터링 웹페이지)등에 대한 응답시간을 측정하기 위해서는 이용자의 웹브라우저에서 제공하는 개발자 도구 기능을 통해 측정할 수 있다. </li>
	<li>클라우드서비스 모니터링를 통해 응답시간을 제공하는 경우에는 이를 통해 응답시간을 확인할 수 있다. </li>
	<li>응답성 측정도구는 클라우드서비스로 제공되는 측정용 SW를 이용하거나 공개 SW를 설치하여 이용할 수 있다. </li>
	<li>본 안내서는 응답시간 측정을 위해 가장 단순하며 기본적인 방법을 기술하고 있으며, 이를 참고하여 다중의 클라우드서비스에 적용하여 측정하거나 측정 방법을 응용한 모니터링 도구 등을 이용할 수 있다.</li>
	<hr>
	<div class="box2 t_center">
	<h3 class="ex">[참고ㆍ예시]</h3>
	<ul class="basic t_left">
		<li>공개 SW를 활용한 응답시간 확인 방법
			<table cellpadding="0" cellspacing="0" border="0" class="table1">
				<tbody><tr>
					<th class="border_none">도구</th>
					<th>주요 내용</th>
				</tr>	
				<tr>
					<td class="border_none">Apache JMeter </td>
					<td class="t_left">- Apache 재단에서 무료로 배포하는 도구이며, WEB, FTP, SOAP 등 여러 종류의 서버 및 프로토콜에 대해 응답시간을 측정</td>
				</tr>
				<tr>
					<td class="border_none">HPE LoadRunner</td>
					<td class="t_left">- HPE에서 배포하는 도구이며, WEB, FTP, SOAP 뿐만 아니라, SAP, Oracle ERP 등 사설 프로토콜에 대한 응답시간을 측정</td>
				</tr>
			</tbody></table>
		</li>
		<li>응답시간 측정을 위한 주요 설정 항목
			<ul class="basic2">
				<li>응답시간 측정 대상 : 응답시간을 측정하고자 하는 클라우드서비스 URI </li>
				<li>동시이용자 수 : 동시에 접속하는 가상이용자의 수</li>
				<li>부하량 증가 구간 : 동시 사용자수가 증가하는 구간 </li>
				<li>반복 횟수 : 응답시간 측정을 위해 구현된 부하구간 시나리오의 반복 횟수</li>
			</ul>
		</li>	
	</ul>
	</div>
	<hr>
		<h4 class="red">애플리케이션 및 운영상태 모니터링 서비스에 대한 응답시간 측정</h4>
		<ul class="none">
			<li>ⓐ 측정 대상 웹페이지에 접속 후 웹브라우저에서 제공하는 개발자 도구 기능을 통해 응답시간을 확인할 수 있다<br>- Internet Explorer, Chrome 등 사용 방법은 모두 유사하며, 본 안내서에서는 Internet Explorer를 기준으로 작성하였다.</li>
			<li>ⓑ [개발자도구&gt;네트워크] 항목에서 네트워크 트래픽 캡처 기능을 활성화한 후 측정 대상 웹페이지에 접속하면 웹페이지에서 제공하는 모든 리소스에 대한 응답시간이 제공된다.<br>- 캐쉬, 유효성 등 다양한 옵션을 추가 또는 삭제하여 사용이 가능하다.</li>
			<li>ⓒ [개발자도구&gt;스크립트] 항목에서 해당 웹페이지에서 발생한 오류 확인이 가능하므로 이를 참고하여 정상적인 응답시간 측정 여부를 확인할 수 있다.</li>
			<hr><div class="box2 t_center"><h3 class="ex">[참고ㆍ예시]</h3><br><img src="/assets/images/img/s22_img2.jpg" class="img-fluid"></div>
		</ul>
	<hr>
		<h4 class="red">가상머신 및 플랫폼 서비스에 대한 응답시간 측정</h4>
		<ul class="none">
			<li>ⓐ IaaS 또는 PaaS 이용자는 관리콘솔에서 주요 기능들에 대한 응답시간을 확인할 수 있다. 예를 들어, 주요 기능 중 하나인 Provision의 경우, IaaS 플랫폼 매니저에서 Provisioning 관련 모니터링 화면을 통해 응답시간을 확인할 수 있다.</li>
			<hr><div class="box2 t_center"><h3 class="ex">[참고ㆍ예시]</h3><br><img src="/assets/images/img/s22_img3.jpg" class="img-fluid"></div>
		</ul>
</ul>

<hr>
<h3>④ 측정 수행</h3>
<ul class="basic">
	<li>응답시간 측정 방법 및 절차 등에 따라 실제 응답시간을 측정한다. </li>
	<li>사전에 의도한 응답시간 측정이 끝나면, 측정 결과가 올바른지 확인 절차를 거친 후에 측정결과를 분석하여 응답시간을 산정하며, 응답시간 측정 중 장애가 발생하지 않음이 전제되어야 한다. </li>
	<li>동시접속자가 다수인 경우, 최대부하 시작/종료 시간을 확인하고, 이 구간을 응답시간으로 하여 측정한다.</li>
</ul>
<div class="box2 t_center"><img src="/assets/images/img/s22_img4.jpg" class="img-fluid"></div></div>



				</div>
			</div>
		</div>



    </div>
    
    <div class="footer white border-top">
        <?php $this->load->view('layout/front/footer'); ?>
    </div>

<?php $this->load->view('layout/front/base_script'); ?>
</body>
</html>
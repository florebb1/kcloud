<!-- Modal -->
<div class="modal fade" id="notificationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">이벤트 알림 로그</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body px-4">
                <p>이벤트 발생 시간 : <span>2019-06-10 09:59 40</span></p>
                <p>이벤트 알림 시간 : <span>2019-06-10 10:00 05</span></p>
                <P>이벤트 알림 수신 : <span>kcloud@cloudqos.or.kr</span></P>
                <P>이벤트 내용 : <span>WEB01 CPU Interruption 임계치 초과</span></P>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">닫기</button>
                <button type="button" class="btn btn-info" onclick="location.href='/mypage/monitor'">성능 모니터 바로 가기</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="warningModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">경고 로그</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body px-4">
                <p>경고 발생 시간 : <span>2019-06-10 09:59 40</span></p>
                <p>경고 알림 시간 : <span>2019-06-10 10:00 05</span></p>
                <p>경고 알림 수신 : <span>kcloud@cloudqos.or.kr</span></p>
                <p>경고 내용 : <span>Lack of free swap on WEB01 PROBLEM Warning for 6시간 it probably means that more physical memory</span></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">닫기</button>
                <button type="button" class="btn btn-info" onclick="location.href='/mypage/monitor'">성능 모니터 바로 가기</button>
            </div>
        </div>
    </div>
</div>
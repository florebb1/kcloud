<script>
<?php
    $userSeq = $this->session->userdata('userSeq');
    $request_uri = $_SERVER['REQUEST_URI'];
    $login = "member/login";
    $Tmp = "동해물과 백두산이 마르고...";
    $CKTmp = "백두산";
    if(!strpos($request_uri, $login) && empty($userSeq)){
?>
    sessionSearch();
<?php } ?>
</script>
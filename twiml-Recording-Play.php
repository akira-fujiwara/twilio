<?php
    header("content-type: text/xml");
    // 録音ファイルのURLを取得します。
    $recording_url = $_POST['RecordingUrl'];
?>
<Response>
<?php if (isset($recording_url)) { ?>
    <Say language="ja-jp">録音ファイルを再生いたします。</Say>
    <Play><?PHP echo $recording_url; PHP?></Play>
    <Hangup />
<?php } else { ?>
    <Say language="ja-jp">録音の後、シャープを押してください。</Say>
    <Record />
<?php } ?>
</Response>

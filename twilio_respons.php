<?php
if($_POST['Digits'] == 1):
  echo "<?xml version=\"1.0\" encode=\"UTF-8\"?>\n";
  echo '<Response>';
  echo '<Say voice="woman" language="ja-jp">';
   echo 'いちばんが入力されました';
  echo '</Say>';
  echo '</Responce>';
endif;
?>

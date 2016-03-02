&lt;?php
if($_POST[&#39;Digits&#39;] == 1):
  echo &quot;&lt;?xml version=\&quot;1.0\&quot; encoding=\&quot;UTF-8\&quot;?&gt;\n&quot;;
  echo &#39;&lt;Response&gt;&#39;;
  echo &#39;&lt;Say voice=&quot;woman&quot; language=&quot;ja-jp&quot;&gt;&#39;;
   echo &#39;いちばんが入力されました&#39;;
  echo &#39;&lt;/Say&gt;&#39;;
  echo &#39;&lt;/Response&gt;&#39;;
endif;

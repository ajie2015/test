<?php
$url = "http://hq.sinajs.cn/list=$_GET[name]";
header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');
$text = file_get_contents($url);
echo "data:$text";
echo "\n\n"; ?>
<?php
header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');
$array_name = explode(',',$_GET['name']);
$text='';
foreach ($array_name as $key=>$value){
	$matches = array();
	$url[$key] = "http://hq.sinajs.cn/list=$value";
	$content[$key] = file_get_contents( $url[$key] );
	$content[$key] = preg_match("/(.*);/", $content[$key], $matches);
	$text .= $matches[1].',';
}
echo "data:{$text}";
echo "\n\n";
?>
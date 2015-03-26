<?php
header("Content-Type: text/html; charset=UTF-8");
function print_stack_trace(){
	$array =debug_backtrace();
	unset($array[0]);
	$html = '';
	foreach($array as $row){
		$html .=$row['file'].':'.$row['line'].'行,调用方法:'.$row['function']."<p>";
	}
	return $html;
}
function one(){
	two();
}
function two(){
	print_r(print_stack_trace());
}
one();
?>
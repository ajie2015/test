<?php
set_time_limit(0);
include('function.php');
print_stack_trace();
//$connect = mysql_connect('localhost','root',321714,'v2');
$connect_niuwa = mysql_connect('192.168.1.10','root_kaifa',KNs3rYVKAQWV,'v2');
//SELECT * FROM `v2_product_categories` where `gt_v2_id`>0 order by `gt_v2_id` 
mysql_select_db('v2',$connect);
//$test = mysql_query("set names gbk",$connect);
$select_sql = 'select * from v2_products_test where 1 limit 10';
$result = mysql_query($select_sql,$connect);
$data = mysql_fetch_row($result);
test();
function test2(){
	print_r(print_stack_trace());
}
exit;
list($usec, $sec) = explode(" ", microtime());
$begin_time =  ((float)$usec + (float)$sec);
echo $begin_time;
for ($i=0;$i<10000;$i++){
	$values = "('".microtime()."','fasfsdfsdfdsfsdfdsfsdfsdfsf','16.34','16.00','','C99A','1370835200','1691','46','16','2','0.000','0.142','Wallet','','2.290','0','0','1','')";
	$insert_sql = "insert table2 (`product_sku`,`product_name`, `product_cost`, `product_price`, `product_category`, `product_location`, `product_addtime`, `product_supplier`, `product_sale_id`, `product_cg_id`, `product_status`, `product_netweight`, `product_grossweight`, `product_ywsbmc`, `product_zwsbmc`, `product_sbjz`, `product_store`, `product_is_combine`, `product_is_valid`, `product_image`) values $values";
	$insert_result[] = mysql_query($insert_sql,$connect);
	//10000条记录 1.3s
	//90000条记录 12s
}

list($usec, $sec) = explode(" ", microtime());
$begin_time =  ((float)$usec + (float)$sec);
echo $begin_time;
?>
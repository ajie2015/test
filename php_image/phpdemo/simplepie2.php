<?php
require_once("../lib/phpchartdir.php");
setLicenseCode("ME7YWN3DBFQU2C7MB3971677");

# The data for the pie chart
$data = array(25, 18, 15, 12, 8, 30, 35);

# The labels for the pie chart
$labels = array("Labor", "序列号", "测试", "中文", "Insurance", "Facilities",
    "Production");

# Create a PieChart object of size 360 x 300 pixels
$c = new PieChart(360, 300);

$c->setLabelStyle("simhei.ttf", 12);

# Set the center of the pie at (180, 140) and the radius to 100 pixels
$c->setPieSize(180, 140, 100);

# Set the pie data and the pie labels
$c->setData($data, $labels);

# Output the chart
header("Content-type: image/png");
print($c->makeChart2(PNG));
?>

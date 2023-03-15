<?php
include "MyCalrenda.php";

$nday = $_POST["nday"];
$nmonth = $_POST["nmonth"];

$cl = new myCalrenda();
echo "Day Name is ".$cl->checkDayNameOfDate($nday,$nmonth);
<?php
/**
 * @Description: this is an example of how to use the formula.
 */
require('phpDateDifference.php');
$phpDateDifference = new phpDateDifference();

$dateFrom         = date("Y-m-d");
$dateTo           = "2014-01-01";
$interval         = 'day';

echo "From: $dateFrom <br /> To: $dateTo <br /> Interval: $interval <hr>";
echo "The amount of ".$interval."s is ".$phpDateDifference->getDifference($dateFrom,$dateTo,$interval);

<?
// open-records-generator
require_once('open-records-generator/config/config.php');
require_once('open-records-generator/config/url.php');

$db = db_connect("guest");
$oo = new Objects();
$mm = new Media();
$ww = new Wires();
$uu = new URL();

$isHome = empty($uri[1]);

if($isHome){
	$temp = $oo->urls_to_ids(array('home'));
	$id = end($temp);
	$item = $oo->get($id);
}
else if($uu->id)
	$item = $oo->get($uu->id);
else
	$item = $oo->get(0);

$site = '小擠集';

$bodyClasses = '';

$now = date('Y-m-d H:i:s');
$temp = explode(' ',$now);

$now_date =  explode('-',$temp[0]);
$now_year = $now_date[0];
$now_month = $now_date[1];
$now_day = $now_date[2];
$now_time =  explode(':',$temp[1]);
$now_hour = $now_time[0];
$now_minute = $now_time[1];
$now_second = $now_time[2];

?><!DOCTYPE html>
<html>
	<head>
		<title><? echo $site; ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link rel="stylesheet" href="/static/css/main.css">
		<link rel="apple-touch-icon" href="/media/png/touchicon.png" />
		<script src = "/static/js/timer.js"></script>
	</head>
	<body class="<?= $bodyClasses; ?>">
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
var_dump($isHome);
if($isHome){
	$temp = $oo->urls_to_ids(array('home'));
	$id = end($temp);
	$item = $oo->get($id);
}
else if($uu->id)
	$item = $oo->get($uu->id);
else
	$item = $oo->get(0);

$site = 'weiwangasheenused';

$bodyClasses = '';

?><!DOCTYPE html>
<html lang="en">
	<head>
		<title><? echo $site; ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link rel="stylesheet" href="/static/css/main.css">
		<link rel="apple-touch-icon" href="/media/png/touchicon.png" />
	</head>
	<body class="<?= $bodyClasses; ?>">
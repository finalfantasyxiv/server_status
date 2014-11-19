<!DOCTYPE html>
<html>
<head>
<meta http-equiv="refresh" content="120" charset="UTF-8" >
<title>FFXIV Server Status</title>
<link href="http://fonts.googleapis.com/css?family=PT+Sans:400,700|Linden+Hill" rel="stylesheet" type="text/css">
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<link href="css/common.css" rel="stylesheet" type="text/css">

<!-- Include All list and Request raw data-->
<?php

$files = glob( $dir . 'server_list/*.php' );
foreach ( $files as $file )
    require( $file );

$url = "http://frontier.ffxiv.com/worldStatus/current_status.json";
$url1 = "http://frontier.ffxiv.com/worldStatus/gate_status.json";
        
$data = file_get_contents($url); // 取得json字串
$data = json_decode($data,true);
$data1 = file_get_contents($url1); // 取得json字串
$data1 = json_decode($data1,true);

?>
</head>
<body>
<header id="main-header">
	<div class="md-container">
		<h1 class="site-title md-title">Eorzea Status</h1>
		<h2 class="site-intro md-title">To see which FFXIV servers are online or offline.</h2>
<?php
date_default_timezone_set("Asia/Tokyo");
$tempDate = date("D, M jS Y H:i:s T");
?>
		<p class="watch-time"><?php echo $tempDate; ?> / Page will auto renew every 120 secs</p>
		<A HREF="javascript:history.go(0)"><button class="btn-reload"><i class="fa fa-refresh"></i></button></A>
	</div>
</header>
<main id="main-content">
	<div class="md-container">
		<dl>
			<dd class="data-center lobby">
				<h3 class="data-center-title md-title">Lobby</h3>
<?php
        if ($data1['status']=="1") {
                  echo "<span class=\"status is-active\"></span>";
        }
        if ($data1['status']=="2") {
                  echo "<span class=\"status\"></span>";
        }
        if ($data1['status']=="3") {
                  echo "<span class=\"status is-disable\"></span>";
        }

?>
			</dd>
			<dd class="data-center jp">
				<h3 class="data-center-title md-title">Elemental</h3>
				<div class="region md-title">JP</div>
				<dl>
<?php
foreach ($elemental_list as $value){
        if ($data[$value]=="1") {
                  echo "<dd class=\"server\">".$value."<span class=\"status is-active\"></span></dd>";
        }
        if ($data[$value]=="2") {
                  echo "<dd class=\"server\">".$value."<span class=\"status\"></span></dd>";
        }
        if ($data[$value]=="3") {
                  echo "<dd class=\"server\">".$value."<span class=\"status is-disable\"></span></dd>";
        }
}
?>

				</dl>
			</dd>
			<dd class="data-center jp">
				<h3 class="data-center-title md-title">Gaia</h3>
				<div class="region md-title">JP</div>
				<dl>
<?php
foreach ($gaia_list as $value){
        if ($data[$value]=="1") {
                  echo "<dd class=\"server\">".$value."<span class=\"status is-active\"></span></dd>";
        }
        if ($data[$value]=="2") {
                  echo "<dd class=\"server\">".$value."<span class=\"status\"></span></dd>";
        }
        if ($data[$value]=="3") {
                  echo "<dd class=\"server\">".$value."<span class=\"status is-disable\"></span></dd>";
        }
}
?>
				</dl>
			</dd>
			<dd class="data-center jp">
				<h3 class="data-center-title md-title">Mana</h3>
				<div class="region md-title">JP</div>
				<dl>
<?php
foreach ($mana_list as $value){
        if ($data[$value]=="1") {
                  echo "<dd class=\"server\">".$value."<span class=\"status is-active\"></span></dd>";
        }
        if ($data[$value]=="2") {
                  echo "<dd class=\"server\">".$value."<span class=\"status\"></span></dd>";
        }
        if ($data[$value]=="3") {
                  echo "<dd class=\"server\">".$value."<span class=\"status is-disable\"></span></dd>";
        }
}
?>
				</dl>
			</dd>
			<dd class="data-center na">
				<h3 class="data-center-title md-title">Aether</h3>
				<div class="region md-title">NA</div>
				<dl>
<?php
foreach ($aether_list as $value){
        if ($data[$value]=="1") {
                  echo "<dd class=\"server\">".$value."<span class=\"status is-active\"></span></dd>";
        }
        if ($data[$value]=="2") {
                  echo "<dd class=\"server\">".$value."<span class=\"status\"></span></dd>";
        }
        if ($data[$value]=="3") {
                  echo "<dd class=\"server\">".$value."<span class=\"status is-disable\"></span></dd>";
        }
}

?>
				</dl>
			</dd>
			<dd class="data-center na">
				<h3 class="data-center-title md-title">Primal</h3>
				<div class="region md-title">NA</div>
				<dl>
<?php
foreach ($primal_list as $value){
        if ($data[$value]=="1") {
                  echo "<dd class=\"server\">".$value."<span class=\"status is-active\"></span></dd>";
        }
        if ($data[$value]=="2") {
                  echo "<dd class=\"server\">".$value."<span class=\"status\"></span></dd>";
        }
        if ($data[$value]=="3") {
                  echo "<dd class=\"server\">".$value."<span class=\"status is-disable\"></span></dd>";
        }
}

?>
				</dl>
			</dd>
			<dd class="data-center eu">
				<h3 class="data-center-title md-title">Chaos</h3>
				<div class="region md-title">EU</div>
				<dl>
<?php
foreach ($chaos_list as $value){
        if ($data[$value]=="1") {
                  echo "<dd class=\"server\">".$value."<span class=\"status is-active\"></span></dd>";
        }
        if ($data[$value]=="2") {
                  echo "<dd class=\"server\">".$value."<span class=\"status\"></span></dd>";
        }
        if ($data[$value]=="3") {
                  echo "<dd class=\"server\">".$value."<span class=\"status is-disable\"></span></dd>";
        }
}

?>
				</dl>
			</dd>
		</dl>
	</div>
</main>
<footer id="main-footer">2014 &copy; Kouryuu.net</footer>
</body>
</html>
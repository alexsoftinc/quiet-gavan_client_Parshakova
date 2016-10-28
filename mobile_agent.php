<?php
# This script down is mobile devices an Redirected to is mobile site version
$iphone  = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
$palmpre = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
$berry   = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
$ipod    = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");

if ($iphone || $android || $palmpre || $ipod || $berry == true) 
{ 
header('Location: http://mobile.xn--------3vebabrj6a1ak3a9aidtywmeiqz2b2df6lil5e.xn--p1ai/');
//OR
echo "<script>window.location='http://mobile.xn--------3vebabrj6a1ak3a9aidtywmeiqz2b2df6lil5e.xn--p1ai/'</script>";
}

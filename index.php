<?php
// Request parameters

$layer = $_GET["layer"];
$x = $_GET["x"];
$y = $_GET["y"];
$z = $_GET["z"];

require("config.php");

if($_GET["layer"] != $layer) {
	// TODO Should return error image
	die("That layer isn't available");
}

// Storage directories.. Had some issues with PHPs mkdir function on Dreamhost, so just used command line utilities
$storageDirZ = $PATH."$layer/$z";
$storageDir = $storageDirZ."/$x/";
$storagePath = $storageDir."$y.png";
if(!file_exists($PATH.$layer)) {
	`mkdir -m 777 $PATH$layer`;
}
if(!file_exists($storageDirZ)) {
	`mkdir -m 777 $storageDirZ`;
}
if(!file_exists($storageDir)) {
	`mkdir -m 777 $storageDir`;
}

// Copy the request result to the local path, and return the tile
copy($requestUrl, $storagePath);
header('Content-type: image/png');
echo file_get_contents($storagePath);
?>
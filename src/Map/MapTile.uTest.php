<?php
	include_once('Map/MapTile.class.php');
	
	$mapTile = new MapTile();
	assert($mapTile instanceof MapTile);
	var_dump($mapTile);
?>
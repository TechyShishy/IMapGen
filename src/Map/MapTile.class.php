<?php
	include_once('IO/Logger.class.php');
	include_once('Map/Tile.class.php');

	class MapTile extends Tile
	{
		private $positionX = 0;
		private $positionY = 0;
		private $log;
		
		function __constructor()
		{
			$log =  = new Logger('MapTile');
		}
		
		function getCoordinates()
		{
			return array($positionX, $positionY);
		}
		
		function setX($x)
		{
			if (is_int($x))
				$positionX = $x;
			else
				$log->debug("Expected int, got ".$x);
		}
	}
?>
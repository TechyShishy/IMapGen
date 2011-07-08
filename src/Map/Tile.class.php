<?php
	include_once('Map/TileType.class.php');
	
	class Tile
	{
		private $type;
		
		public function __constructor();
		{
			
		}
		
		public function getType()
		{
			return $this-type;
		}
		
		public function setType($type)
		{
			if ($type instanceof TileType)
				$this->type = $type;
		}
	}
?>
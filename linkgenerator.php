<?php

	class linkReturner{
		private $link;
		
		function getLink(){
			return $this->link;
		}
	}
	class linkGenerator extends linkReturner{
		function returnLink($url, $name){
			$this->link = '<a href="' . $url . '">' . $name . '</a>';
			return $this->link;
		}
	}

?>
<?php
class Slide{
	public $content;
	
	public function __set($name, $value){
		$this->$name=$value;
	}
	
	public function __toString(){
		return "<div class='slide'>".$this->content."</div>";
	}
}
?>
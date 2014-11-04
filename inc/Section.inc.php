<?php
class Section {
	// class section attributes
	public $content;
	public $hrzNavigation='';
	public $isActive=false;
	public $id='';
	public $hasSidebar=false;
	public $subClass='section-right-content-wrapper';
	
	public function __set($name, $value){
		$this->$name=$value;
	}
	
	public function __toString(){
		return "<div ".$this->DisplayClassName()." "
			.( ($this->id != '') ? $this->DisplayId() : '')
			.">\n".$this->DisplayHrzNavigation()
			."<div class='".$this->subClass."'>"
			.$this->content // the slides
			."</div>"
			.$this->DisplaySidebar()
			//.$this->DisplayFooter()."\n"
			."</div>\n";
	}
	
	public function DisplayHrzNavigation(){
		return $this->hrzNavigation;
	}
	
	public function DisplayId(){
		return "id='".$this->id."' ";
		
	}
	
	public function DisplayClassName(){
		$class = "class='section ";
		if ($this->isActive){ $class .=" active'"; }else{ $class.="'"; }
		return $class;
	}
	
	public function DisplayFooter(){
		return "<footer>".date("Y")." &copy; kaiforwater.name</footer>";
	}
	
	public function DisplaySidebar(){
		$sidebar='';
		if ($this->hasSidebar){ $sidebar=new Sidebar(); }
		return $sidebar;
	}
}
?>
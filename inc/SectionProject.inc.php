<?php
class SectionProject extends Section {
	public $hasSidebar=false;
	
	public function __toString(){
		return "<div ".$this->DisplayClassName()." "
			.( ($this->id != '') ? $this->DisplayId() : '')
			.">\n".$this->DisplayHrzNavigation()
			."<div class='project-main'>"
			.$this->content // the slides
			."</div>"
			.$this->DisplaySidebar()
			.$this->DisplayFooter()."\n"
			."</div>\n";
	}
	
	
}
?>
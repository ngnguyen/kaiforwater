<?php
class ProjectSlide extends Slide{
	public $title;
	public $img;
	public $detail;
	public $subtitle;
	public $anchor;
	//public $sidebar;
	
	public function __toString(){
		return "<div class='slide' data-anchor='".$this->anchor."'>"
				.$this->DisplayTitle()
				.$this->DisplaySubtitle()
				.$this->DisplayImg()
				.$this->DisplayDetail()
			."</div>";
	}
	
	public function DisplayTitle(){
		return "<h2 class='project-title'>".$this->title."</h2>";
	}
	
	public function DisplaySubtitle(){
		return "<p class='text-warning'><small>".$this->subtitle."</small></p>";
	}
	
	public function DisplayImg(){
		return "<div class='project-img'>".$this->img."</div>";
	}
	
	public function DisplayDetail(){
		$s = "<ul class='project-detail fa-ul'>";
		
		foreach ($this->detail as $value){
			$s .= "<li><i class='fa-li fa fa-pencil-square-o'></i>".$value."</li>";
		}
		$s .= "</ul>";
		
		return $s;
	}
	
}
?>
<?php
class HrzNav {
	public $content;
	
	public function __construct(){
		$this->content = "<nav id='hrz-nav' class='horizontal-menu compact'>
				<ul class='nav navbar-nav'>
					<li><a href='#home'>Home</a></li>
					<li><a href='#project'>Projects</a></li>
					<li><a href='#skills'>Skills</a></li>
					<li><a href='#contact'>Contact</a></li>
				</ul>
			</nav>";
	}
	
	public function __toString(){
		return $this->content;
	}
}
?>
<?php
class Breadcrumbs{
	public $content;
	
	public function __construct(){
		$this->content="<nav class='breadcrumbs'>
				<ul>
					<li>
						<a href='#home'>
							<i class='fa fa-home fa-lg'></i>
							&nbsp;&nbsp;&nbsp;&nbsp;Home
						</a>
					</li>
					<li><a href='#project'>Project</a></li>
					<li><a href='#qualification'>Qualification</a></li>
					<li><a href='#resume'>Resume</a></li>
					<li><a href='#contact'>Contact</a></li>
				</ul>
			</nav>";
	}
	
	public function __toString(){
		return $this->content;
	}
}
?>
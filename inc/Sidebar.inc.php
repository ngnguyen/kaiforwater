<?php
class Sidebar{
	public $content;	
	
	public function __construct(){
		$this->content="<div class='sidebar-wrapper'>
			<nav class='sidebar light'>
				<ul>
					<li class='stick bg-red'><a href='#home'><i class='fa fa-home fa-lg'></i>Home</a></li>
					<li class='stick bg-yellow' id='project-name'> 
						<a class='dropdown-toggle' href='#'><i class='fa fa-cog fa-lg'></i>Project</a>
						<ul class='dropdown-menu' data-role='dropdown'>
							<li id='sesamecommunications' class='dropdown-menu-item'>
								<a href='#project/sesame'>
									<i class='fa fa-user-md'></i>
									Sesame Communications
								</a>
							</li>
							<li id='insulin' class='dropdown-menu-item'>
								<a href='#project/insulin'>
									<i class='fa fa-medkit'></i>
									Insulin.me
								</a>
							</li>
							<li id='uwmedicine' class='dropdown-menu-item'>
								<a href='#project/uwmedicine'>
									<i class='fa fa-bar-chart-o'></i>
									UW Medicine (SORCE)
								</a>
							</li>
							<li id='allrecipes' class='dropdown-menu-item'>
								<a href='#project/allrecipes'>
									<i class='fa fa-cutlery'></i>
									Allrecipes.com
								</a>
							</li>
							<li id='pasharestaurant' class='dropdown-menu-item'>
								<a href='#project/pasharestaurant'>
									<i class='fa icon-coffee'></i>
									Pasha Restaurant
								</a>
							</li>
							<li id='capparestaurant' class='dropdown-menu-item'>
								<a href='#project/capparestaurant'>
									<i class='fa icon-coffee'></i>
									Cappadocia Restaurant
								</a>
							</li>
							<li id='linhantu' class='dropdown-menu-item'>
								<a href='#project/linhantu'>
									<i class='fa fa-film'></i>
									linhantu.com
								</a>
							</li>
							<li id='huskynavigator' class='dropdown-menu-item'>
								<a href='#project/huskynavigator'>	
									<i class='fa fa-mobile fa-lg'></i>
									Husky Navigator
								</a>
							</li>
						</ul>
					</li>
					<li class='stick bg-green'>
						<a href='#skills'><i class='fa fa-usd fa-lg'></i>Skills</a>
					</li>
					<li class='stick bg-gray'>
						<a href='#contact'><i class='fa fa-link fa-lg'></i>Contact</a>
					</li>
				</ul>
			</nav>
		</div>";
	}
	
	public function __toString(){
		return $this->content;
	}

}
?>
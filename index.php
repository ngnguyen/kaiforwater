<?php
require("inc/Page.inc.php");
require("inc/Section.inc.php");
require("inc/Sidebar.inc.php");
require("inc/Breadcrumbs.inc.php");
require("inc/Slide.inc.php");
require("inc/ProjectSlide.inc.php");
require("inc/SectionProject.inc.php");
require("inc/HrzNav.inc.php");
$homepage = new Page();

$homeSection=new Section();
$homeSection->id='pg-home';

//  use boometro Tile for images on default page http://metroui.org.ua/tiles.html
$homeSection->content=
	"<div class='home-img-wrapper'>
		<a href='#project'>
			<img class='img-lg' src='img/tree.jpg' alt='home page' />
			<img class='img-sm' src='img/tree-sm.jpg' alt='home page' />
		</a>
	</div>";

$projects=new Section();
$projects->subClass ='project-main';
//$projects->isActive=true;
$projects->id="section-project";
//$projects->hrzNavigation=new Breadcrumbs();
//$projects->hasSidebar=true;
	
	
$insulinPr = new ProjectSlide();
$insulinPr->anchor='insulin';
$insulinPr->title="Insulin.me";
$insulinPr->subtitle="( in progress )";
$insulinPr->img="<img src='img/health_keeper.png' alt='allrecipes' >";
$insulinPr->detail= array(
	"an app that collects various data (weight, blood level, blood glucose, etc) 
	from users, and convert data into meaningful graphs"
);


$allrecipesPr = new ProjectSlide();
$allrecipesPr->anchor='allrecipes';
$allrecipesPr->title="Allrecipes Internal App Project";
$allrecipesPr->subtitle="( prototype and documentation are not available "
	."for view because this is an internal app project )";
$allrecipesPr->img="<img src='img/allrecipes.png' alt='allrecipes' >";
$allrecipesPr->detail= array(
	"Document all Allrecipe internal window apps",
	"Come up with a plan to migrate all applications under a web based 
		application suite",
	"Create a prototype of a web-based app that could support the migration 
		plan (the prototype is built using ASP.NET MVC, Javascript/Jquery, 
		Entity Framework, ASP.NET CRUD, SQL Server, HTML,CSS",
	"Build Web API that output data in XML/Json format from the database"
);

$pashaPr =new ProjectSlide();
$pashaPr->anchor='pasharestaurant';
$pashaPr->title="Pasha Turkish Restaurant";
$pashaPr->img="<img src='img/pasha.png' alt='Pasha Turkish Restaurant' >";
$pashaPr->detail=array(
	"Create a shopping cart application from scratch using HTML, CSS, 
		MySQL, Javascript and PHP",
	"Build user authorization (log-in/log-out system) using PHP and MySQL",
	"Build PHP web services to handle requests and manipulate data in 
		the database",
	"Design database to store product information, customer information, and 
		their orders",
	"Sensitive information is encrypted with SHA1"
);

$cappaPr =new ProjectSlide();
$cappaPr->anchor='capparestaurant';
$cappaPr->title="Cappadocia Turkish Restaurant";
$cappaPr->img="<img src='img/cappa.png' alt='Cappadocia Turkish Restaurant' >";
$cappaPr->detail=array(
	"Build a photo gallery using JQuery plug in and PHP",
	"Design the menu using PHP, XML, and Javascript",
	"Use Facebook plug in to create a comment section where customers 
		can leave comments about their experience at the restaurant"
);

$tananPr =new ProjectSlide();
$tananPr->anchor='tanan';
$tananPr->title="Tan An Glasses Store";
$tananPr->img="<img src='img/tanan.png' alt='mat kinh tan an' >";
$tananPr->detail=array(
	"Creat random photo slideshow using Javascript",
	"Build PHP web services to get and display all product information 
		in the database",
	"Design database to store product information, customer information, 
		and their orders",
	"Sensitive information is encrypted with SHA1",
	"Build a basic CMS where employees can add/edit/delete product 
		information in the database"
);

$sesamePr = new ProjectSlide();

$sesamePr->anchor='sesame';
$sesamePr->title='Sesame Communications';
$sesamePr->subtitle="Not available for view. This is a member's product";
$sesamePr->img="<img src='img/sesame.png' alt='sesame communications' />";
$sesamePr->detail=array(
	"Create the ADA Dashboard UI that uses highchart.js and javascript to create dynamic charts",
	"Fix bugs in Sesame's main products: Member Dashboard and Patient Portal"
);

$projects->content=$sesamePr.$insulinPr.$allrecipesPr.$pashaPr.$cappaPr.$tananPr;

$skills = new Section();
$skills->id='pg-skills';
$skills->content="<div class='skill-visualization'>
	<div id='skill-bars'></div>
	<div id='skill-spiderweb'></div>
	<div class='skill-scale'>Both charts are based on a scale 1-10</div>
</div>";

$contact = new Section();
$contact->id = "pg-contact";
$contact->content="<div class='contact-methods'>
	<div class='contact-col' id='frm-contact'>
		<div id='frm-contact-email-sent'></div>
		
		<div id='frm-contact-content'>
			<div class='input-control email'>
				<input id='frm-contact-email' type='email' placeholder='Email' name='email' val='' required />
				<button class='btn-clear'></button>	
			</div>
			
			<div class='input-control text'>
				<input id='frm-contact-name' type='text' name='name' placeholder='Name' required pattern='.{3,70}'/>
				<button class='btn-clear'></button>
			</div>

			<div class='input-control textarea'>
				<textarea id='frm-contact-msg' required name='msg'></textarea>
			</div>
			
			<div class='input-control btn-submit'>
				<button id='btn-send-msg'>Submit</button>
			</div>
		</div>
	</div>
	
	<div class='contact-col'>	
		<div class='contact-method'>
			<i class='fa fa-phone fa-lg'></i>
			&nbsp;<img src='img/phone-no.png' alt ='' />
		</div>
		<div class='contact-method'>
			<i class='fa fa-google-plus fa-lg'></i>
			&nbsp;<img src='img/email.png' alt ='' />
		</div>
	</div>
	
	<hr>
	
</div>";

$homepage->content=$homeSection."\n".$projects.$skills.$contact;
$homepage->Display();
?>
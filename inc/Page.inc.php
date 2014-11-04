<?php
class Page{
	// class page attributes
	public $content;
	public $title = "Ngan Nguyen - Home Page";
	public $keywords = "ngan nguyen, hanh ngan huu nguyen, web developer,seattle, washington, university of washington, information school,php developer, vietnamese bilingual";
	public $description ="Ngan Nguyen";
	public $author ="Ngan Nguyen";
	
	public $buttons = array(
		"Home"=>"index.php",
		"Work"=>"work.php",
		"Project"=>"project.php",
		"Skill"=>"skill.php"
	);
	
	//class page operations
	public function __set($name, $value){
		$this->$name=$value;
	}
	
	public function Display(){
		echo "<!DOCTYPE html>\n"
			."<html lang='en'>\n"
				."<head>\n";
					
		$this->DisplayTitle();
		$this->DisplayKeywords();
		$this->DisplayCss();
		$this->DisplayJs();
		echo "</head>\n"
			."<body class='metro wrapper'>\n"
				."<div id='fullpage'>\n";
//		$this->DisplayMenu($this->buttons);
		echo $this->content;
		echo "</div>\n";
		$this->DisplayFooter();
		$this->DisplaySidebar();
		$this->DisplayHrzNav();
		echo "</body>\n</html>";
		
	}
	
	public function DisplayTitle(){
		echo "<title>".$this->title."</title>\n";
	}
	
	public function DisplayKeywords(){
		echo "<meta name='keywords' content='".$this->keywords."' >";
	}
	
	public function DisplayCss(){ 
?>		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- prevent browser from z00ming -->
		<!-- enable HTML5 structure elements for IE -->
		<!-- Latest compiled and minified CSS -->
		
		<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css"> -->
		
		<link rel="stylesheet" href="css/shared.css" media="screen" >
		<!--Metro UI -->
		<link rel='stylesheet' href='metro-ui/css/metro-bootstrap.css'>
		<link rel='stylesheet' href='metro-ui/css/metro-bootstrap-responsive.css'>
		<link rel='stylesheet' href='metro-ui/css/iconFont.css'>
		<link rel='stylesheet' href='metro-ui/css/prettify.css'>
		<!-- fullpage.js -->
		<link rel='stylesheet' href='fullpage/jquery.fullPage.css' />
		<!-- font awesome -->
		<link rel='stylesheet' href='font-awesome/css/font-awesome.min.css' />

<?php	
	}
	
	public function DisplayJs(){ 
?>
		<script src="metro-ui/js/jquery.min.js"></script>
        <script src="metro-ui/js/jquery.widget.min.js"></script>
        
		<!-- twitter bootstrap -->
		<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> -->
		
		<script src="metro-ui/js/metro.min.js"></script>
		<script src="metro-ui/js/jquery.mousewheel.js"></script>
		<script src="metro-ui/js/prettify.js"></script>
		<script src="metro-ui/js/metro.min.js"></script>
		
		
		<!-- This following line is needed in case of using the default easing option or when using another
		 one rather than "linear" or "swing". You can also add the full jQuery UI instead of this file if you prefer -->
		<script src="fullpage/vendors/jquery.easings.min.js"></script>   
		<!-- This following line needed in the case of setting the plugin option 'scrollOverflow' to 'true' -->
		<script src="fullpage/vendors/jquery.slimscroll.min.js"></script>
		<script src="fullpage/jquery.fullPage.js"></script>
		<script src="js/home.js"></script>
		
		<!-- highcharts -->
		<script src="http://code.highcharts.com/highcharts.js"></script>
		<script src="http://code.highcharts.com/highcharts-more.js"></script>
		<script src="http://code.highcharts.com/modules/exporting.js"></script>
		
		
<?php		
	}
	
	public function isCurrentPage($url){
		if (strpos($_SERVER["PHP_SELF"],$url)){
			return true;
		}else{
			return false;
		}
	}
	
	public function DisplayButton($name,$url,$active=false){
		if ($active){
			
		}else{
		
		}
	}
	
	public function DisplayFooter(){
		echo "<footer>".date("Y")." &copy; kaiforwater.name</footer>";
	}
	
	public function DisplaySidebar(){
		echo new Sidebar();
	}
	
	public function DisplayHrzNav(){
		echo new HrzNav();
	}
}
?>
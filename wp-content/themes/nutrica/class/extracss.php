<?php 
class extraCss{
	protected $url = array("urlSite"=>"","styleTag"=>"");
	protected $lastUri;
	protected $lastUriCss;
	public function __construct(){
		$this->url['urlSite'] = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
		//echo"--".$this->url['urlSite'];
	}
	public function splitUri(){		
		$ex  = explode('/',$this->url['urlSite']);
		//print_r($container); 
		$size1 = sizeof($ex);
		$lastString  = "css/".$ex[$size1-2].".css"; 		
		return $lastString;
	}
}
/*way to use*/

/* require_once('class/extracss.php');
$ec = new extraCss();
$css = $ec->splitUri();
if(is_file(get_template_directory_uri().$css)){
	echo "<link rel='stylesheet' href='get_template_directory_uri().$css' />";	
}
else{
	echo "<!-- no custom css -->";
} */


?>
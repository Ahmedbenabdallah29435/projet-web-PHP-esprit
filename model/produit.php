<?PHP
class Access{
	private $ida;
	private $noma;
	private $prixa;
	private $idc;
	private $image ;
	

	function __construct($ida,$noma,$prixa,$idc,$image){
		$this->ida=$ida;
		$this->noma=$noma;
		$this->prixa=$prixa;
		$this->idc=$idc;
		$this->image=$image;

	
	}
	 function getimage()
  {
    return $this->image;
  }
	
	function getida(){
		return $this->ida;
	}
	function getnoma(){
		return $this->noma;
	}

	function getprixa(){
		return $this->prixa;
	}
	function getidc(){
		return $this->idc;
	}
	
	function setida($ida){
		$this->ida=$ida;
	}
	function setnoma($noma){
		$this->noma=$noma;
	}
	function setprixa($prixa){
		$this->prixa=$prixa;
	}
	function setidc($idc){
		$this->idc=$idc;
	}
	function setimage($image)
  {
    $this->image=$image;
  }
	
}

?>
<?PHP
class Animal{
	private $idA;
	private $nomA;
	private $ageA;
	private $couleurA;
	private $image ;
	

	function __construct($idA,$nomA,$ageA,$couleurA,$image){
		$this->idA=$idA;
		$this->nomA=$nomA;
		$this->ageA=$ageA;
		$this->couleurA=$couleurA;
		$this->image=$image;

	
	}
	
	function getidA(){
		return $this->idA;
	}
	function getNom(){
		return $this->nomA;
	}
    function getimage()
  {
    return $this->image;
  }
	function getage(){
		return $this->ageA;
	}
	function getcouleur(){
		return $this->couleurA;
	}
	
	function setidA($idA){
		$this->idA=$idA;
	}
	function setNom($nomA){
		$this->nomA=$nomA;
	}
	function setage($ageA){
		$this->ageA=$ageA;
	}
	function setimage($image)
  {
    $this->image=$image;
  }
	function setcouleur($couleurA){
		$this->couleurA=$couleurA;
	}
	
	
}

?>